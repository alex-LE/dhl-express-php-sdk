<?php
namespace alexLE\DHLExpress;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\TransferException;

class ShipmentRequest {

    const ENDPOINT_TEST = 'https://wsbexpress.dhl.com/rest/sndpt/ShipmentRequest';
    const ENDPOINT_LIVE = 'https://wsbexpress.dhl.com:443/rest/gbl/ShipmentRequest';

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

        $data = $this->buildData();

        $options = [
            'json' => $data,
            'auth' => [
                $this->credentials->getUsername(),
                $this->credentials->getPassword()
            ]
        ];

        $endpoint = ($this->credentials->isTestMode()) ? self::ENDPOINT_TEST : self::ENDPOINT_LIVE;

        try {
            $apiResponse = $client->post($endpoint, $options);
        } catch (TransferException $e) {
            $this->errors[] = $e->getMessage();
            return false;
        }

        $response = new ShipmentResponse($apiResponse, $data);
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