<?php

namespace factoryMethod;

use factoryMethod\product\{
    DodgeCharger,
    DodgeDart,
    CarProduct
};

class DodgeFactory implements CarFactory
{
    /**
     * @param string $carModel
     * @return CarProduct
     * @throws Exception
     */
    public function createCar(string $carModel): CarProduct
    {
        if ($carModel === 'dart') {
            return new DodgeDart();
        }elseif($carModel === 'charger'){
            return new DodgeCharger();
        }else{
            throw new \Exception("O carro de modelo".$carModel."não existe no sistema");
            
        }
    }

}
