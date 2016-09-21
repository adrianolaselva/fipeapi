<?php

namespace FipeApi\Factories;

use FipeApi\Api\ConsultaMotoApi;
use FipeApi\Constants\Tipo;

/**
 * Class ConsultaApiFactory
 *
 * @package FipeApi
 */
class ConsultaApiFactory
{
    /**
     * @param $tipo
     * @return ConsultaMotoApi
     * @throws \Exception
     */
    public static function getInstance($tipo)
    {

        switch($tipo)
        {
            case Tipo::MOTOS: return new ConsultaMotoApi();
            case Tipo::CAMINHOES: return new ConsultaMotoApi();
            case Tipo::CARROS: return new ConsultaMotoApi();
        }

        throw new \Exception("Tipo {$tipo} não definido");
    }
}