<?php 

namespace Prototype;

class BookPythonPrototype extends BookPrototype
{

    public function __construct()
    {
        $this->setSubject('Python');
        
    }

    public function __clone()
    {
        echo "Livro de Python clonado\n";
    }

}