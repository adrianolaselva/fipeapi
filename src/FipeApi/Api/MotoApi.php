<?php

namespace FipeApi\Api;

use FipeApi\ApiAbstract;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class Moto
 * @package FipeApi\Api
 */
class MotoApi extends ApiAbstract
{
    /**
     * @var \Logger
     */
    private $logger;

    /**
     * Moto constructor.
     */
    public function __construct(Client $client = null)
    {
        $this->logger = \Logger::getLogger(__CLASS__);
        parent::__construct(Tipo::MOTOS, $client);
    }
}