<?php

namespace FipeApi\Api;

use FipeApi\ApiAbstract;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class Carro
 * @package FipeApi\Api
 */
class CarroApi extends ApiAbstract
{
    /**
     * @var \Logger
     */
    private $logger;

    /**
     * Carro constructor.
     */
    public function __construct(Client $client = null)
    {
        $this->logger = \Logger::getLogger(__CLASS__);
        parent::__construct(Tipo::CARROS, $client);
    }

}