<?php 

/**
 * Concrete product (produto concreto)
 */

namespace FactoryMethod\Product;


class TeslaModelX implements CarProduct
{
    public function changeGears(): void
    {
        echo "Trocar marcha Tesla Modelo X\n";
    }

    public function brake(): void
    {
        echo "Frear Tesla Modelo X\n";
        
    }

    public function speedUp(): void
    {
        echo "Acelerar Tesla Modelo X\n";
        
    }
    
}
