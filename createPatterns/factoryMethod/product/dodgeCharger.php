<?php

/**
 * Concrete product (produto concreto)
 */

namespace FactoryMethod\Product;


class DodgeCharger implements CarProduct
{
    public function changeGears(): void
    {
        echo "Trocar marcha Dodge Charger\n";
    }

    public function brake(): void
    {
        echo "Frear Dodge Charger\n";
    }

    public function speedUp(): void
    {
        echo "Acelerar Dodge Charger\n";
    }
}
