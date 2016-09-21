<?php

namespace FipeApi\Interfaces;

/**
 * Interface IConsultaApi
 * @package FipeApi\Interfaces
 */
interface IConsultaApi
{
    /**
     * @param $fabricante
     * @return mixed
     */
    public function getVeiculos($fabricante);

    /**
     * @param $fabricante
     * @param $veiculo
     * @return mixed
     */
    public function getModelos($fabricante, $veiculo);

    /**
     * @param $fabricante
     * @param $veiculo
     * @param $fipeCodigo
     * @return mixed
     */
    public function getDetalhes($fabricante, $veiculo, $fipeCodigo);

}