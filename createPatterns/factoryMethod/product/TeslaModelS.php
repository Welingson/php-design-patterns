<?php

/**
 * Concrete product (produto concreto)
 */

namespace FactoryMethod\Product;


/**
 * classe exemplo do objeto que representa um carro/produto de modelo específico
 */
class TeslaModelS implements CarProduct
{
    public function speedUp(): void
    {
        echo "Acelerar Tesla Modelo S\n";
    }

    public function changeGears(): void
    {
        echo "Trocar marcha Tesla Modelo S\n";
    }

    public function brake(): void
    {
        echo "Frear Tesla Modelo S\n";
    }
}
