<?php

namespace FipeApi;
use FipeApi\Constants\FipeApiParameter;

/**
 * Class Client
 *
 * @package FipeApi
 */
class Client
{

    /**
     * URL padrão
     */
    const DEFAULT_URL = "http://fipeapi.appspot.com/api/1/";

    /**
     * Timeout padrão
     */
    const DEFAULT_TIMEOUT = 10;

    /**
     * Client constructor.
     *
     * @param array|null $params
     * @throws \Exception
     */
    public function __construct(array $params = null)
    {

        if(!is_null($params))
        {
            foreach ($params as $key => $param)
            {
                if(!in_array($key, array_keys($params)))
                    throw new \Exception(sprintf("Parâmetro %s inválido", $key));
            }
        }

        putenv(sprintf("%s=%s", FipeApiParameter::FIPE_API_HOST, Client::DEFAULT_URL));
        putenv(sprintf("%s=%s", FipeApiParameter::FIPE_API_TIMEOUT, Client::DEFAULT_TIMEOUT));

        if(!is_null($params) && is_array($params))
        {
            foreach ($params as $key => $value)
                putenv(sprintf("%s=%s",$key,$value));
        }
    }

    /**
     * @param FipeApiParameter $key
     * @param string $value
     */
    public function setParameter($key, $value)
    {
        putenv(sprintf("%s=%s",$key,$value));
    }

    /**
     * @param FipeApiParameter $key
     * @return string
     */
    public function getParameter($key)
    {
        return getenv($key);
    }

}