<?php
namespace alexLE\DHLExpress;

use Psr\Http\Message\ResponseInterface;

class ShipmentDeleteResponse {

    /**
     * @var ResponseInterface
     */
    protected $rawResponse;

    /**
     * @var array
     */
    protected $sentData;

    /**
     * @var integer[]
     */
    protected $statusCodes;

    /**
     * @var array
     */
    protected $errors;

    /**
     * DeleteResponse constructor.
     * @param ResponseInterface $rawResponse
     * @param array $sentData
     */
    function __construct($rawResponse, $sentData) {
        $this->rawResponse = $rawResponse;
        $this->sentData = $sentData;
        $this->statusCodes = [];
        $this->errors = [];

        $this->parseRawResponse();
    }

    /**
     * @return int[]
     */
    public function getStatusCodes() {
        return $this->statusCodes;
    }

    /**
     * @return array
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * @return array
     */
    public function getSentData() {
        return $this->sentData;
    }

    /**
     * @return bool
     */
    public function isSuccessful() {
        return (count($this->statusCodes) == 1 && $this->statusCodes[0] == 0);
    }

    protected function parseRawResponse() {
        $response = \GuzzleHttp\json_decode($this->rawResponse->getBody()->getContents(), true);

        if (count($response['DeleteResponse']['Notification']) == 1 && $response['DeleteResponse']['Notification'][0]['@code'] == 0) {
            $this->statusCodes[0] = $response['DeleteResponse']['Notification'][0]['@code'];
            return true;
        }

        foreach($response['DeleteResponse']['Notification'] as $notification) {
            $this->statusCodes[] = $notification['@code'];
            $this->errors[] = $notification['Message'];
        }

        return true;
    }
}