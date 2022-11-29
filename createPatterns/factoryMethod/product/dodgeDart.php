<?php 

namespace createPatterns\factoryMethod\product;


class DodgeDart implements CarProduct
{
    public function changeGears(): void
    {
        echo "Trocar marcha Dodge Dart\n";
    }

    public function brake(): void
    {
        echo "Frear Dodge Dart\n";
        
    }

    public function speedUp(): void
    {
        echo "Acelerar Dodge Dart\n";
        
    }
}