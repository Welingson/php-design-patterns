<?php


/**
 * Padrão singleton, exemplo de classe de geração de logs
 */

namespace createPatterns\singleton;

class LogsSingleton
{
    /**
     * instancia da classe de logs
     *
     * @var LogsSingleton
     */
    protected static LogsSingleton $instance;


    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }



    /**
     * write logs 
     * @param array $data
     * @return void
     */
    public function writeLog(array $data): void
    {
        $archiveName = 'logs.txt';

        $previousLogs = [];

        if (filesize($archiveName) > 0) {

            $archiveContent = file_get_contents($archiveName);
            $previousLogs = json_decode($archiveContent, true);
        }

        $previousLogs[] = $data;
        $archive = fopen($archiveName, 'w');
        fwrite($archive, json_encode($previousLogs));
        fclose($archive);
    }

    /**
     * controle do objeto LogsSingleton
     * @return LogsSingleton instance
     */
    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

/**
 * Verifica se as duas instancias são as mesmas
 */

$firstInstance = LogsSingleton::getInstance();
$secondInstance = LogsSingleton::getInstance();

var_dump($firstInstance === $secondInstance);
