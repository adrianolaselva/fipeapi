<?php

namespace FipeApi\Api;

use FipeApi\ApiAbstract;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class CaminhaoApi
 *
 * @package FipeApi\Api
 */
class CaminhaoApi extends ApiAbstract
{

    /**
     * CaminhaoApi constructor.
     *
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        $this->logger = \Logger::getLogger(__CLASS__);
        parent::__construct(Tipo::CAMINHOES, $client);
    }

}