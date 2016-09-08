<?php

namespace FipeApi;

use Curl\Curl;
use FipeApi\Constants\FipeApiParameter;

/**
 * Class AbstractApi
 * @package FipeApi
 */
abstract class AbstractApi
{

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Curl
     */
    protected $_curl;

    /**
     * @var string
     */
    protected $tipo;

    /**
     * AbstractApi constructor.
     * @param string $tipo
     * @param Client|null $client
     */
    public function __construct($tipo, Client $client = null)
    {

        $this->_curl = new Curl();
        $this->tipo = $tipo;

        if(is_null($client))
        {
            $this->client = new Client();
        }else{
            $this->client = $client;
        }

    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getMarcas()
    {
        try{
            $this->_curl->get(sprintf("%s/%s/marcas.json",
                $this->client->getParameter(FipeApiParameter::FIPE_API_HOST),
                $this->tipo)
            );
            return $this->getResponse();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * @param integer $fabricante
     *
     * @return array
     * @throws \Exception
     */
    public function getVeiculos($fabricante)
    {
        try{
            $this->_curl->get(sprintf("%s/%s/veiculos/%s.json",
                    $this->client->getParameter(FipeApiParameter::FIPE_API_HOST),
                    $this->tipo,
                    $fabricante)
            );
            return $this->getResponse();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * @param integer $fabricante
     * @param integer $veiculo
     *
     * @return array
     * @throws \Exception
     */
    public function getModelos($fabricante, $veiculo)
    {
        try{
            $this->_curl->get(sprintf("%s/%s/veiculo/%s/%s.json",
                    $this->client->getParameter(FipeApiParameter::FIPE_API_HOST),
                    $this->tipo,
                    $fabricante,
                    $veiculo)
            );
            return $this->getResponse();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    public function getDetalhes($fabricante, $veiculo, $fipeCodigo)
    {
        try{
            $this->_curl->get(sprintf("%s/%s/veiculo/%s/%s/%s.json",
                    $this->client->getParameter(FipeApiParameter::FIPE_API_HOST),
                    $this->tipo,
                    $fabricante,
                    $veiculo,
                    $fipeCodigo)
            );
            return $this->getResponse();
        }catch(\Exception $ex){
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * @return array
     */
    protected function getResponse()
    {
        return [
            'http' => [
                'httpStatusCode' => $this->_curl->httpStatusCode,
                'httpErrorMessage' => $this->_curl->httpErrorMessage
            ],
            'data' => json_decode($this->_curl->rawResponse, true)
        ];
    }

}