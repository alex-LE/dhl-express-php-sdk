<?php
namespace alexLE\DHLExpress;


class RequestedPackage extends DataClass {

    /**
     * @var string
     */
    protected $insuredValue;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var string
     */
    protected $customerReferences;

    /**
     * @var Dimensions
     */
    protected $dimensions;

    /**
     * @return string
     */
    public function getInsuredValue() {
        return $this->insuredValue;
    }

    /**
     * @param string $insuredValue
     * @return RequestedPackage
     */
    public function setInsuredValue($insuredValue) {
        $this->insuredValue = $insuredValue;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return RequestedPackage
     */
    public function setWeight($weight) {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferences() {
        return $this->customerReferences;
    }

    /**
     * @param string $customerReferences
     * @return RequestedPackage
     */
    public function setCustomerReferences($customerReferences) {
        $this->customerReferences = $customerReferences;
        return $this;
    }

    /**
     * @return Dimensions
     */
    public function getDimensions() {
        return $this->dimensions;
    }

    /**
     * @param float $length
     * @param float $width
     * @param float $height
     * @return RequestedPackage
     */
    public function setDimensions($length, $width, $height) {
        $this->dimensions = new Dimensions();
        $this->dimensions->setLength($length);
        $this->dimensions->setWidth($width);
        $this->dimensions->setHeight($height);

        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'Weight' => $this->weight,
            'Dimensions' => [
                'Length' => $this->dimensions->getLength(),
                'Width' => $this->dimensions->getWidth(),
                'Height' => $this->dimensions->getHeight()
            ],
            'CustomerReferences' => $this->customerReferences
        ];
    }
}