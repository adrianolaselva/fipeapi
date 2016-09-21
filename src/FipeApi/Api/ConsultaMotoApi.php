<?php

namespace FipeApi\Api;

use FipeApi\AbstractConsultaApi;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class ConsultaMotoApi
 * @package FipeApi\Api
 */
class ConsultaMotoApi extends AbstractConsultaApi
{

    /**
     * ConsultaMotoApi constructor.
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        parent::__construct(Tipo::MOTOS, $client);
    }
}