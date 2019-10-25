<?php
namespace alexLE\DHLExpress;

use Psr\Http\Message\ResponseInterface;

class ShipmentResponse {

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
     * @var string|array
     */
    protected $trackingNumber;

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
     * if shipping contains multiple packages, the array will be index by the number of the package starting at 1
     *
     * @return string|array
     */
    public function getTrackingNumber() {
        return $this->trackingNumber;
    }

    /**
     * alias for getTrackingNumbers() - for compatibility reasons with Petschko/dhl-php-sdk
     *
     * @return array|string
     */
    public function getShipmentNumber() {
        return $this->getTrackingNumber();
    }

    /**
     * base64 binary image content
     *
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

        $this->label = $response['ShipmentResponse']['LabelImage'][0]['GraphicImage'];

        if (count($response['ShipmentResponse']['Notification']) == 1 && $response['ShipmentResponse']['Notification'][0]['@code'] == 0) {
            $this->statusCodes[0] = $response['ShipmentResponse']['Notification'][0]['@code'];

            if (count($response['ShipmentResponse']['PackagesResult']['PackageResult']) == 1) {
                $this->trackingNumber = $response['ShipmentResponse']['PackagesResult']['PackageResult'][0]['TrackingNumber'];
            } else {
                foreach($response['ShipmentResponse']['PackagesResult']['PackageResult'] as $package) {
                    $this->trackingNumber[$package['@number']] = $package['TrackingNumber'];
                }
            }

            return true;
        }

        foreach($response['ShipmentResponse']['Notification'] as $notification) {
            $this->statusCodes[] = $notification['@code'];
            $this->errors[] = $notification['Message'];
        }

        return true;
    }
}