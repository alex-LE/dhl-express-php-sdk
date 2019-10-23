<?php
namespace alexLE\DHLExpress;

class Billing extends DataClass {

    /**
     * @var string
     */
    protected $shipperAccountNumber;

    /**
     * @var string
     */
    protected $shippingPaymentType;

    /**
     * @var string
     */
    protected $billingAccountNumber;

    /**
     * @var string
     */
    protected $dutyAndTaxPayerAccountNumber;

    /**
     * @var string
     */
    protected $neverOverrideBillingService;

    /**
     * @return string
     */
    public function getShipperAccountNumber() {
        return $this->shipperAccountNumber;
    }

    /**
     * @param string $shipperAccountNumber
     * @return Billing
     */
    public function setShipperAccountNumber($shipperAccountNumber) {
        $this->shipperAccountNumber = $shipperAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getShippingPaymentType() {
        return $this->shippingPaymentType;
    }

    /**
     * @param string $shippingPaymentType
     * @return Billing
     */
    public function setShippingPaymentType($shippingPaymentType) {
        $this->shippingPaymentType = $shippingPaymentType;
        return $this;
    }

    /**
     * @return string
     */
    public function getBillingAccountNumber() {
        return $this->billingAccountNumber;
    }

    /**
     * @param string $billingAccountNumber
     * @return Billing
     */
    public function setBillingAccountNumber($billingAccountNumber) {
        $this->billingAccountNumber = $billingAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getDutyAndTaxPayerAccountNumber() {
        return $this->dutyAndTaxPayerAccountNumber;
    }

    /**
     * @param string $dutyAndTaxPayerAccountNumber
     * @return Billing
     */
    public function setDutyAndTaxPayerAccountNumber($dutyAndTaxPayerAccountNumber) {
        $this->dutyAndTaxPayerAccountNumber = $dutyAndTaxPayerAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getNeverOverrideBillingService() {
        return $this->neverOverrideBillingService;
    }

    /**
     * @param string $neverOverrideBillingService
     * @return Billing
     */
    public function setNeverOverrideBillingService($neverOverrideBillingService) {
        $this->neverOverrideBillingService = $neverOverrideBillingService;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'ShipperAccountNumber' => $this->shipperAccountNumber
        ];

        if (!empty($this->shippingPaymentType)) $result['ShippingPaymentType'] = $this->shippingPaymentType;
        if (!empty($this->billingAccountNumber)) $result['BillingAccountNumber'] = $this->billingAccountNumber;
        if (!empty($this->dutyAndTaxPayerAccountNumber)) $result['DutyAndTaxPayerAccountNumber'] = $this->dutyAndTaxPayerAccountNumber;
        if (!empty($this->neverOverrideBillingService)) $result['NeverOverrideBillingService'] = $this->neverOverrideBillingService;

        return $result;
    }
}