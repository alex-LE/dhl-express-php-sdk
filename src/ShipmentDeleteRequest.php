<?php
namespace alexLE\DHLExpress;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

class ShipmentDeleteRequest {

    const ENDPOINT = 'https://wsbexpress.dhl.com/rest/sndpt/ShipmentRequest';

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @var DeleteRequest
     */
    protected $deleteRequest;

    /**
     * @var array
     */
    protected $errors;

    public function __construct(Credentials $credentials) {
        $this->credentials = $credentials;
        $this->errors = [];
    }

    public function setDeleteRequest(DeleteRequest $deleteRequest) {
        $this->deleteRequest = $deleteRequest;
    }

    /**
     * @return array
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * sends the request to DHL
     * @return ShipmentDeleteResponse|false
     */
    public function send() {
        $client = new Client();

        $data = $this->buildData();
        $options = [
            'json' => $data,
            'auth' => [
                $this->credentials->getUsername(),
                $this->credentials->getPassword()
            ]
        ];

        try {
            $apiResponse = $client->post(self::ENDPOINT, $options);
        } catch (TransferException $e) {
            $this->errors[] = $e->getMessage();
            return false;
        }

        $response = new ShipmentDeleteResponse($apiResponse, $data);
        if (!$response->isSuccessful()) {
            $this->errors = array_merge($this->errors, $response->getErrors());
        }

        return $response;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'DeleteRequest' => $this->deleteRequest->buildData()
        ];
    }
}