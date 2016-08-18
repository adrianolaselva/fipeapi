<?php

namespace FipeApi\Api;

use FipeApi\ApiAbstract;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class CarroApi
 *
 * @package FipeApi\Api
 */
class CarroApi extends ApiAbstract
{

    /**
     * CarroApi constructor.
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        $this->logger = \Logger::getLogger(__CLASS__);
        parent::__construct(Tipo::CARROS, $client);
    }

}