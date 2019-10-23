<?php
namespace alexLE\DHLExpress;

class SpecialService extends DataClass {

    const NATIONAL_EARLY_DELIVERY_BEFORE_0800 = 'TB';
    const NATIONAL_LATE_DELIVERY_BETWEEN_1700_AND_2200 = 'TD';
    const NATIONAL_SATURDAY_DELIVERY = 'AG';
    const NATIONAL_LATE_PICKUP = 'QD';
    const NATIONAL_SATURDAY_PICKUP = 'AB';
    const NATIONAL_INSURANCE = 'II';
    const NATIONAL_LIMITED_QUANTITIES = 'HL';                       // dangerous goods

    const INTERNATIONAL_SATURDAY_DELIVERY = 'AA';
    const INTERNATIONAL_INSURANCE = 'II';
    const INTERNATIONAL_PICKUP_BY_CUSTOMER = 'LX';
    const INTERNATIONAL_DRY_ICE = 'HC';                             // dangerous goods
    const INTERNATIONAL_BIOLOGICAL_SUBSTANCES = 'HY';               // dangerous goods
    const INTERNATIONAL_EXCEPTED_QUANTITIES = 'HH';                 // dangerous goods
    const INTERNATIONAL_LITHIUM_ION_PI_965 = 'HB';                  // dangerous goods
    const INTERNATIONAL_LITHIUM_ION_PI_966 = 'HD';                  // dangerous goods
    const INTERNATIONAL_LITHIUM_ION_PI_967 = 'HV';                  // dangerous goods
    const INTERNATIONAL_LITHIUM_METAL_PI_969 = 'HM';                // dangerous goods
    const INTERNATIONAL_LITHIUM_METAL_PI_970 = 'HW';                // dangerous goods

    const INTERNATIONAL_DUTY_NEUTRAL_DELIVERY_SERVICE = 'NN';
    const INTERNATIONAL_DUTY_DUTIES_AND_TAXES_PAID = 'DD';

    const ECONOMY_SELECT_IMPORT_BILLING = 'DT';
    const ECONOMY_SELECT_DELIVERY_ON_APPOINTMENT = 'TE';
    const ECONOMY_SELECT_HOLD_FOR_COLLECTION = 'LX';
    const ECONOMY_SELECT_LIMITED_QUANTITIES = 'HL';                 // dangerous goods

    /**
     * @var string
     */
    protected $serviceType;

    /**
     * @var float
     */
    protected $serviceValue;

    /**
     * @var string
     */
    protected $currencyCode;

    /**
     * @var string
     */
    protected $paymentCode;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @var string
     */
    protected $textInstruction;

    /**
     * @return string
     */
    public function getServiceType() {
        return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return SpecialService
     */
    public function setServiceType($serviceType) {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * @return float
     */
    public function getServiceValue() {
        return $this->serviceValue;
    }

    /**
     * @param float $serviceValue
     * @return SpecialService
     */
    public function setServiceValue($serviceValue) {
        $this->serviceValue = $serviceValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode() {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return SpecialService
     */
    public function setCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentCode() {
        return $this->paymentCode;
    }

    /**
     * @param string $paymentCode
     * @return SpecialService
     */
    public function setPaymentCode($paymentCode) {
        $this->paymentCode = $paymentCode;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate() {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     * @return SpecialService
     */
    public function setStartDate($startDate) {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate() {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     * @return SpecialService
     */
    public function setEndDate($endDate) {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getTextInstruction() {
        return $this->textInstruction;
    }

    /**
     * @param string $textInstruction
     * @return SpecialService
     */
    public function setTextInstruction($textInstruction) {
        $this->textInstruction = $textInstruction;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'ServiceType' => $this->serviceType
        ];

        if (!empty($this->serviceValue)) $result['ServiceValue'] = $this->serviceValue;
        if (!empty($this->currencyCode)) $result['CurrencyCode'] = $this->currencyCode;
        if (!empty($this->paymentCode)) $result['PaymentCode'] = $this->paymentCode;
        if (!empty($this->startDate) && $this->startDate instanceof \DateTime) $result['StartDate'] = $this->startDate->format('Y-m-d\TH:i:s\G\M\TP');
        if (!empty($this->endDate) && $this->endDate instanceof \DateTime) $result['EndDate'] = $this->endDate->format('Y-m-d\TH:i:s\G\M\TP');
        if (!empty($this->textInstruction)) $result['TextInstruction'] = $this->textInstruction;

        return $result;
    }
}