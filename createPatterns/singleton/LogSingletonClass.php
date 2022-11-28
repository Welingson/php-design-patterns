<?php


/**
 * Padrão singleton, 
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
     * control LogsSingleton instance
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
