<?php namespace predictionio;

/**
 * Client for connecting to an Engine Instance
 */
class EngineClient extends BaseClient
{

    /**
     * @param string $baseUrl Base URL to the Engine Instance. Default is localhost:8000.
     * @param float|int $timeout Timeout of the request in seconds. Use 0 to wait indefinitely
     *              Default is 0.
     * @param float|int $timeout Number of seconds to wait while trying to connect to a server.
     *              Default is 5.
     * @param float|int $connectTimeout Number of seconds to wait while trying to connect to a server
     */
    public function __construct($baseUrl = "http://localhost:8000",
                                $timeout = 0, $connectTimeout = 5)
    {
        parent::__construct($baseUrl, $timeout, $connectTimeout);
    }

    /**
     * Send prediction query to an Engine Instance
     *
     * @param array $query Query
     *
     * @return array JSON response
     *
     * @throws PredictionIOAPIError Request error
     */
    public function sendQuery(array $query)
    {
        return $this->sendRequest("POST", "/queries.json", json_encode($query));
    }
}
