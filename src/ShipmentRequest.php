<?php
namespace alexLE\DHLExpress;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

class ShipmentRequest {

    const ENDPOINT = 'https://wsbexpress.dhl.com/rest/sndpt/ShipmentRequest';

    /**
     * @var Credentials
     */
    protected $credentials;

    /**
     * @var RequestedShipment
     */
    protected $requestedShipment;

    /**
     * @var array
     */
    protected $errors;

    public function __construct(Credentials $credentials) {
        $this->credentials = $credentials;
        $this->errors = [];
    }

    /**
     * @return RequestedShipment
     */
    public function getRequestedShipment() {
        return $this->requestedShipment;
    }

    /**
     * @param RequestedShipment $requestedShipment
     * @return ShipmentRequest
     */
    public function setRequestedShipment(RequestedShipment $requestedShipment) {
        $this->requestedShipment = $requestedShipment;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * sends the request to DHL
     * @return ShipmentResponse|false
     */
    public function send() {
        $client = new Client();

        $options = [
            'json' => $this->buildData(),
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

        $response = new ShipmentResponse($apiResponse);
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
            'ShipmentRequest' => [
                'RequestedShipment' => $this->requestedShipment->buildData()
            ]
        ];
    }
}