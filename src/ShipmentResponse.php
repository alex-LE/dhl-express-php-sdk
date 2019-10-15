<?php
namespace alexLE\DHLExpress;

use Psr\Http\Message\ResponseInterface;

class ShipmentResponse {

    protected $rawResponse;

    /**
     * @var integer[]
     */
    protected $statusCodes;

    /**
     * @var array
     */
    protected $trackingNumbers;

    /**
     * @var string base64 encoded image
     */
    protected $label;

    /**
     * @var string
     */
    protected $statusMessage;

    /**
     * @var array
     */
    protected $errors;

    /**
     * ShipmentResponse constructor.
     * @param ResponseInterface $rawResponse
     */
    function __construct($rawResponse) {
        $this->rawResponse = $rawResponse;
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
    public function getTrackingNumbers() {
        return $this->trackingNumbers;
    }

    /**
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

    /**
     * @return array
     */
    public function getErrors() {
        return $this->errors;
    }

    /**
     * @return bool
     */
    public function isSuccessful() {
        return (count($this->statusCodes) == 1 && $this->statusCodes[0] == 0);
    }

    protected function parseRawResponse() {
        $response = \GuzzleHttp\json_decode($this->rawResponse->getBody()->getContents(), true);

        if (count($response['ShipmentResponse']['Notification']) == 1 && $response['ShipmentResponse']['Notification'][0]['@code'] == 0) {
            $this->statusCodes[0] = $response['ShipmentResponse']['Notification'][0]['@code'];
            $this->trackingNumbers = $response['ShipmentResponse']['PackagesResult']['PackageResult'];
            $this->label = $response['ShipmentResponse']['LabelImage'][0]['GraphicImage'];

            return true;
        }

        foreach($response['ShipmentResponse']['Notification'] as $notification) {
            $this->statusCodes[] = $notification['@code'];
            $this->errors[] = $notification['Message'];
        }

        return true;
    }
}