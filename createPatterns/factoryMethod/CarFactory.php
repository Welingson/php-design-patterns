<?php 

/**
 * CREATOR 
 */


namespace factoryMethod;

use factoryMethod\product\CarProduct;


interface CarFactory
{
    /**
     * @param string $carModel
     * @return CarProduct
     */
    public function createCar(string $carModel):CarProduct;
}

