<?php

namespace FipeApi\Api;

use FipeApi\ApiAbstract;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

class CaminhaoApi extends ApiAbstract
{
    /**
     * @var \Logger
     */
    private $logger;

    /**
     * Caminhao constructor.
     */
    public function __construct(Client $client = null)
    {
        $this->logger = \Logger::getLogger(__CLASS__);
        parent::__construct(Tipo::CAMINHOES, $client);
    }

}