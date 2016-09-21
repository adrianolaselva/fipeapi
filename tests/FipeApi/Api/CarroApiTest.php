<?php

namespace FipeApi\Api;

use FipeApi\Constants\Tipo;
use FipeApi\Factories\ConsultaApiFactory;
use FipeApi\Interfaces\IConsultaApi;

/**
 * Class CarroApiTest
 */
class CarroApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var IConsultaApi
     */
    private $_consultaApi;

    /**
     * @var integer
     */
    protected static $fabricanteAux;

    /**
     * @var integer
     */
    protected static $veiculoAux;

    /**
     * @var integer
     */
    protected static $modeloAux;

    /**
     * CaminhaoTest constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_consultaApi = ConsultaApiFactory::getInstance(Tipo::CARROS);
    }

    public function test_getMarcas()
    {
        $marcas = $this->_consultaApi->getMarcas();

        $this->assertEquals(200, $marcas['http']['httpStatusCode']);
        $this->assertNotNull($marcas['data']);
        $this->assertNotNull($marcas['data'][0]);
        $this->assertNotNull($marcas['data'][0]['id']);

        CarroApiTest::$fabricanteAux = $marcas['data'][0]['id'];
    }

    public function test_getVeiculos()
    {
        $veiculos = $this->_consultaApi->getVeiculos(CarroApiTest::$fabricanteAux);

        $this->assertEquals(200, $veiculos['http']['httpStatusCode']);
        $this->assertNotNull($veiculos['data'][0]['fipe_marca']);
        $this->assertNotNull($veiculos['data'][0]['name']);
        $this->assertNotNull($veiculos['data'][0]['marca']);
        $this->assertNotNull($veiculos['data'][0]['key']);
        $this->assertNotNull($veiculos['data'][0]['id']);
        $this->assertNotNull($veiculos['data'][0]['fipe_name']);

        CarroApiTest::$veiculoAux = $veiculos['data'][0]['id'];
    }

    public function test_getModelos()
    {
        $modelos = $this->_consultaApi->getModelos(CarroApiTest::$fabricanteAux, CarroApiTest::$veiculoAux);

        $this->assertEquals(200, $modelos['http']['httpStatusCode']);
        $this->assertNotNull($modelos['data'][0]['fipe_marca']);
        $this->assertNotNull($modelos['data'][0]['fipe_codigo']);
        $this->assertNotNull($modelos['data'][0]['name']);
        $this->assertNotNull($modelos['data'][0]['marca']);
        $this->assertNotNull($modelos['data'][0]['key']);
        $this->assertNotNull($modelos['data'][0]['veiculo']);
        $this->assertNotNull($modelos['data'][0]['id']);

        CarroApiTest::$modeloAux = $modelos['data'][0]['id'];
    }

    public function test_getDetalhes()
    {
        $modelos = $this->_consultaApi->getDetalhes(CarroApiTest::$fabricanteAux, CarroApiTest::$veiculoAux, CarroApiTest::$modeloAux);

        $this->assertEquals(200, $modelos['http']['httpStatusCode']);
        $this->assertNotNull($modelos['data']['referencia']);
        $this->assertNotNull($modelos['data']['fipe_codigo']);
        $this->assertNotNull($modelos['data']['name']);
        $this->assertNotNull($modelos['data']['combustivel']);
        $this->assertNotNull($modelos['data']['marca']);
        $this->assertNotNull($modelos['data']['ano_modelo']);
        $this->assertNotNull($modelos['data']['preco']);
        $this->assertNotNull($modelos['data']['key']);
        $this->assertNotNull($modelos['data']['time']);
        $this->assertNotNull($modelos['data']['veiculo']);
        $this->assertNotNull($modelos['data']['id']);
    }

}