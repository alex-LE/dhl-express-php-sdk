<?php
namespace alexLE\DHLExpress;

use DateTime;

class RequestedShipment extends DataClass {

    const PAYMENT_INFO_COST_AND_FREIGHT = 'CFR';
    const PAYMENT_INFO_COST_INSURANCE_AND_FREIGHT = 'CIF';
    const PAYMENT_INFO_CARRIAGE_AND_INSURANCE_PAID_TO = 'CIP';
    const PAYMENT_INFO_CARRIAGE_PAID_TO = 'CPT';
    const PAYMENT_INFO_DELIVERED_AT_FRONTIER = 'DAF';
    const PAYMENT_INFO_DELIVERY_DUTY_PAID = 'DDP';
    const PAYMENT_INFO_DELIVERY_DUTY_UNPAID = 'DDU';
    const PAYMENT_INFO_DELIVERED_AT_PLACE = 'DAP';
    const PAYMENT_INFO_DELIVERED_EX_QUAY_DUTY_PAID = 'DEQ';
    const PAYMENT_INFO_DELIVERED_EX_SHIP = 'DES';
    const PAYMENT_INFO_EX_WORKS = 'EXW';
    const PAYMENT_INFO_FREE_ALONGSIDE_SHIP = 'FAS';
    const PAYMENT_INFO_FREE_CARRIER = 'FCA';
    const PAYMENT_INFO_FREE_ON_BOARD = 'FOB';

    /**
     * @var ShipmentInfo
     */
    protected $shipmentInfo;

    /**
     * @var DateTime
     */
    protected $shipTimestamp;

    /**
     * @var InternationalDetail
     */
    protected $internationalDetail;

    /**
     * @var string
     */
    protected $paymentInfo;

    /**
     * @var Ship
     */
    protected $ship;

    /**
     * @var Packages
     */
    protected $packages;

    /**
     * @return ShipmentInfo
     */
    public function getShipmentInfo() {
        return $this->shipmentInfo;
    }

    /**
     * @param ShipmentInfo $shipmentInfo
     * @return RequestedShipment
     */
    public function setShipmentInfo(ShipmentInfo $shipmentInfo) {
        $this->shipmentInfo = $shipmentInfo;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getShipTimestamp() {
        return $this->shipTimestamp;
    }

    /**
     * @param DateTime $shipTimestamp
     * @return RequestedShipment
     */
    public function setShipTimestamp(DateTime $shipTimestamp) {
        $this->shipTimestamp = $shipTimestamp;
        return $this;
    }

    /**
     * @return InternationalDetail
     */
    public function getInternationalDetail() {
        return $this->internationalDetail;
    }

    /**
     * @param InternationalDetail $internationalDetail
     * @return RequestedShipment
     */
    public function setInternationalDetail(InternationalDetail $internationalDetail) {
        $this->internationalDetail = $internationalDetail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentInfo() {
        return $this->paymentInfo;
    }

    /**
     * @param string $paymentInfo
     * @return RequestedShipment
     */
    public function setPaymentInfo($paymentInfo) {
        $this->paymentInfo = $paymentInfo;
        return $this;
    }

    /**
     * @return Ship
     */
    public function getShip() {
        return $this->ship;
    }

    /**
     * @param Ship $ship
     * @return RequestedShipment
     */
    public function setShip(Ship $ship) {
        $this->ship = $ship;
        return $this;
    }

    /**
     * @return Packages
     */
    public function getPackages() {
        return $this->packages;
    }

    /**
     * @param Packages $packages
     * @return RequestedShipment
     */
    public function setPackages(Packages $packages) {
        $this->packages = $packages;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'ShipmentInfo' => $this->shipmentInfo->buildData(),
            'ShipTimestamp' => $this->shipTimestamp->format('Y-m-d\TH:i:s\G\M\TP'),
            'PaymentInfo' => $this->paymentInfo,
            'Ship' => $this->ship->buildData(),
            'Packages' => $this->packages->buildData()
        ];

        if ($this->internationalDetail instanceof InternationalDetail) {
            $result['InternationalDetail'] = $this->internationalDetail->buildData();
        }

        return $result;
    }
}