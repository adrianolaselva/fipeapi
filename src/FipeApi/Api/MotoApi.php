<?php

namespace FipeApi\Api;

use FipeApi\ApiAbstract;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class MotoApi
 *
 * @package FipeApi\Api
 */
class MotoApi extends ApiAbstract
{

    /**
     * MotoApi constructor.
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        $this->logger = \Logger::getLogger(__CLASS__);
        parent::__construct(Tipo::MOTOS, $client);
    }
}