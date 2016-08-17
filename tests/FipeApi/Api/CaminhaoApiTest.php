<?php

namespace FipeApi\Api;

/**
 * Class CaminhaoApiTest
 */
class CaminhaoApiTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \FipeApi\Api\CaminhaoApi
     */
    private $_caminhaoApi;

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
        $this->_caminhaoApi = new \FipeApi\Api\CaminhaoApi();
    }

    public function test_getMarcas()
    {
        $marcas = $this->_caminhaoApi->getMarcas();

        $this->assertEquals(200, $marcas['http']['httpStatusCode']);
        $this->assertNotNull($marcas['data']);
        $this->assertNotNull($marcas['data'][0]);
        $this->assertNotNull($marcas['data'][0]['id']);

        CaminhaoApiTest::$fabricanteAux = $marcas['data'][0]['id'];
    }

    public function test_getVeiculos()
    {
        $veiculos = $this->_caminhaoApi->getVeiculos(CaminhaoApiTest::$fabricanteAux);

        $this->assertEquals(200, $veiculos['http']['httpStatusCode']);
        $this->assertNotNull($veiculos['data'][0]['fipe_marca']);
        $this->assertNotNull($veiculos['data'][0]['name']);
        $this->assertNotNull($veiculos['data'][0]['marca']);
        $this->assertNotNull($veiculos['data'][0]['key']);
        $this->assertNotNull($veiculos['data'][0]['id']);
        $this->assertNotNull($veiculos['data'][0]['fipe_name']);

        CaminhaoApiTest::$veiculoAux = $veiculos['data'][0]['id'];
    }

    public function test_getModelos()
    {
        $modelos = $this->_caminhaoApi->getModelos(CaminhaoApiTest::$fabricanteAux, CaminhaoApiTest::$veiculoAux);

        $this->assertEquals(200, $modelos['http']['httpStatusCode']);
        $this->assertNotNull($modelos['data'][0]['fipe_marca']);
        $this->assertNotNull($modelos['data'][0]['fipe_codigo']);
        $this->assertNotNull($modelos['data'][0]['name']);
        $this->assertNotNull($modelos['data'][0]['marca']);
        $this->assertNotNull($modelos['data'][0]['key']);
        $this->assertNotNull($modelos['data'][0]['veiculo']);
        $this->assertNotNull($modelos['data'][0]['id']);

        CaminhaoApiTest::$modeloAux = $modelos['data'][0]['id'];
    }

    public function test_getDetalhes()
    {
        $modelos = $this->_caminhaoApi->getDetalhes(CaminhaoApiTest::$fabricanteAux, CaminhaoApiTest::$veiculoAux, CaminhaoApiTest::$modeloAux);

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