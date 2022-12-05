<?php 

/**
 * CREATOR 
 */


namespace FactoryMethod;

use factoryMethod\product\CarProduct;


interface CarFactory
{
    /**
     * @param string $carModel
     * @return CarProduct
     */
    public function createCar(string $carModel):CarProduct;
}

