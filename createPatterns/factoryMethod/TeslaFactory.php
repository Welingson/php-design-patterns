<?php


namespace FactoryMethod;

use FactoryMethod\Product\{
    CarProduct,
    TeslaModelS,
    TeslaModelX
};

class TeslaFactory implements CarFactory
{

   /**
    * @param string $carModel
    * @return CarProduct
    * @throws Exception
    */
    public function createCar(string $carModel): CarProduct
    {
        if ($carModel === 'modelo_x') {
            return new TeslaModelX();
        } elseif ($carModel === 'modelo_s') {
            return new TeslaModelS();
        }else{
            throw new \Exception("Modelo de carro ".$carModel." não existe no sistema");
            
        }
    }
}
