<?php
namespace alexLE\DHLExpress;


class ExportLineItem extends DataClass {

    /**
     * @var string
     */
    protected $itemNumber;

    /**
     * @var string
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $quantityUnitOfMeasurement;

    /**
     * @var string
     */
    protected $itemDescription;

    /**
     * @var string
     */
    protected $unitPrice;

    /**
     * @var number
     */
    protected $netWeight;

    /**
     * @var number
     */
    protected $grossWeight;

    /**
     * @var string
     */
    protected $manufacturingCountryCode;

    /**
     * @return string
     */
    public function getItemNumber() {
        return $this->itemNumber;
    }

    /**
     * @param string $itemNumber
     * @return ExportLineItem
     */
    public function setItemNumber($itemNumber) {
        $this->itemNumber = $itemNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantity() {
        return $this->companyName;
    }

    /**
     * @param string $quantity
     * @return ExportLineItem
     */
    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuantityUnitOfMeasurement() {
        return $this->quantityUnitOfMeasurement;
    }

    /**
     * @param string $quantityUnitOfMeasurement
     * @return ExportLineItem
     */
    public function setQuantityUnitOfMeasurement($quantityUnitOfMeasurement) {
        $this->quantityUnitOfMeasurement = $quantityUnitOfMeasurement;
        return $this;
    }

    /**
     * @return string
     */
    public function getItemDescription() {
        return $this->itemDescription;
    }

    /**
     * @param string $itemDescription
     * @return ExportLineItem
     */
    public function setItemDescription($itemDescription) {
        $this->itemDescription = $itemDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitPrice() {
        return $this->unitPrice;
    }

    /**
     * @param string $unitPrice
     * @return ExportLineItem
     */
    public function setUnitPrice($unitPrice) {
        $this->unitPrice = $unitPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getNetWeight() {
        return $this->netWeight;
    }

    /**
     * @param string $netWeight
     * @return ExportLineItem
     */
    public function setNetWeight($netWeight) {
        $this->netWeight = $netWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getGrossWeight() {
        return $this->grossWeight;
    }

    /**
     * @param string $grossWeight
     * @return ExportLineItem
     */
    public function setGrossWeight($grossWeight) {
        $this->grossWeight = $grossWeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getManufacturingCountryCode() {
        return $this->manufacturingCountryCode;
    }

    /**
     * @param string $manufacturingCountryCode
     * @return ExportLineItem
     */
    public function setManufacturingCountryCode($manufacturingCountryCode) {
        $this->manufacturingCountryCode = $manufacturingCountryCode;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'ItemNumber' => $this->itemNumber,
            'Quantity' => $this->quantity,
            'QuantityUnitOfMeasurement' => $this->quantityUnitOfMeasurement,

            'ItemDescription' => $this->itemDescription,
            'UnitPrice' => $this->unitPrice,
            'NetWeight' => $this->netWeight,

            'GrossWeight' => $this->grossWeight,
            'ManufacturingCountryCode' => $this->manufacturingCountryCode,
        ];

        return $result;
    }
}