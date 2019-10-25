<?php
namespace alexLE\DHLExpress;

class ShipmentInfo extends DataClass {

    const DROP_OFF_TYPE_REGULAR_PICKUP = 'REGULAR_PICKUP';
    const DROP_OFF_TYPE_REQUEST_COURIER = 'REQUEST_COURIER';

    /**
     * national shipping
     */
    const SERVICE_TYPE_DOMESTIC_EXPRESS = 'N';
    const SERVICE_TYPE_DOMESTIC_EXPRESS_BEFORE_0900 = 'I';
    const SERVICE_TYPE_DOMESTIC_EXPRESS_BEFORE_1000 = 'O';
    const SERVICE_TYPE_DOMESTIC_EXPRESS_BEFORE_1200 = '1';

    /**
     * international shipping - not dutiable
     */
    const SERVICE_TYPE_EXPRESS_WORLDWIDE_EU = 'U';
    const SERVICE_TYPE_EXPRESS_WORLDWIDE_DOC = 'D';
    const SERVICE_TYPE_EXPRESS_BEFORE_0900_DOC = 'K';
    const SERVICE_TYPE_EXPRESS_BEFORE_1030_DOC = 'L';
    const SERVICE_TYPE_EXPRESS_BEFORE_1200_DOC = 'T';
    const SERVICE_TYPE_EXPRESS_EVNELOPE = 'X';

    /**
     * international shipping - dutiable
     */
    const SERVICE_TYPE_EXPRESS_WORLDWIDE_NON_DOC = 'P';
    const SERVICE_TYPE_EXPRESS_BEFORE_0900_NON_DOC = 'E';
    const SERVICE_TYPE_EXPRESS_BEFORE_1030_NON_DOC = 'M';
    const SERVICE_TYPE_EXPRESS_BEFORE_1200_NON_DOC = 'Y';

    /**
     * economy select
     */
    const SERVICE_TYPE_ECONOMY_SELECT_EU = 'W';
    const SERVICE_TYPE_ECONOMY_SELECT_NON_DOC = 'H';

    const UNIT_OF_MEASRUREMENTS_KG_CM = 'SI';
    const UNIT_OF_MEASRUREMENTS_LB_IN = 'SU';

    const LABEL_TYPE_PDF = 'PDF';
    const LABEL_TYPE_ZPL = 'ZPL';
    const LABEL_TYPE_EPL = 'EPL';
    const LABEL_TYPE_LP2 = 'LP2';

    const LABEL_TEMPLATE_ECOM26_84_001 = 'ECOM26_84_001';
    const LABEL_TEMPLATE_ECOM26_84_A4_001 = 'ECOM26_84_A4_001';
    const LABEL_TEMPLATE_ECOM_TC_A4 = 'ECOM_TC_A4';
    const LABEL_TEMPLATE_ECOM26_A6_002 = 'ECOM26_A6_002';
    const LABEL_TEMPLATE_ECOM26_84CI_001 = 'ECOM26_84CI_001';
    const LABEL_TEMPLATE_ECOM_A4_RU_002 = 'ECOM_A4_RU_002';
    const LABEL_TEMPLATE_ECOM26_84CI_002 = 'ECOM26_84CI_002';
    const LABEL_TEMPLATE_ECOM26_84CI_003 = 'ECOM26_84CI_003';

    /**
     * @var string
     */
    protected $dropOffType;

    /**
     * @var string
     */
    protected $serviceType;

    /**
     * @var integer
     */
    protected $account;

    /**
     * @var Billing
     */
    protected $billing;

    /**
     * @var SpecialService[]
     */
    protected $specialServices = [];

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $unitOfMeasurement;

//    protected $shipmentIdentificationNumber;
//    protected $useOwnShipmentIdentificationNumber;
//    protected $archiveLabelTemplate;
//    protected $customsInvoiceTemplate;
//    protected $shipmentReceiptTemplate;
//    protected $paperlessTradeEnabled;

    /**
     * @var string
     */
    protected $labelType;

    /**
     * @var string
     */
    protected $labelTemplate;

    /**
     * @var LabelOptions
     */
    protected $labelOptions;

    /**
     * @return string
     */
    public function getDropOffType() {
        return $this->dropOffType;
    }

    /**
     * see constants
     * @param string $dropOffType
     * @return ShipmentInfo
     */
    public function setDropOffType($dropOffType) {
        $this->dropOffType = $dropOffType;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceType() {
        return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return ShipmentInfo
     */
    public function setServiceType($serviceType) {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * @return int
     */
    public function getAccount() {
        return $this->account;
    }

    /**
     * @param int $account
     * @return ShipmentInfo
     */
    public function setAccount($account) {
        $this->account = $account;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return ShipmentInfo
     */
    public function setCurrency($currency) {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasurement() {
        return $this->unitOfMeasurement;
    }

    /**
     * @param string $unitOfMeasurement
     * @return ShipmentInfo
     */
    public function setUnitOfMeasurement($unitOfMeasurement) {
        $this->unitOfMeasurement = $unitOfMeasurement;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelType() {
        return $this->labelType;
    }

    /**
     * @param string $labelType
     * @return ShipmentInfo
     */
    public function setLabelType($labelType) {
        $this->labelType = $labelType;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelTemplate() {
        return $this->labelTemplate;
    }

    /**
     * @param string $labelTemplate
     * @return ShipmentInfo
     */
    public function setLabelTemplate($labelTemplate) {
        $this->labelTemplate = $labelTemplate;
        return $this;
    }

    /**
     * @param SpecialService $specialService
     * @return ShipmentInfo
     */
    public function addSpecialService(SpecialService $specialService) {
        $this->specialServices[] = $specialService;
        return $this;
    }

    /**
     * @return SpecialService[]
     */
    public function getSpecialServices() {
        return $this->specialServices;
    }

    /**
     * @return Billing
     */
    public function getBilling() {
        return $this->billing;
    }

    /**
     * @param Billing $billing
     * @return ShipmentInfo
     */
    public function setBilling($billing) {
        $this->billing = $billing;
        return $this;
    }

    /**
     * @return LabelOptions
     */
    public function getLabelOptions() {
        return $this->labelOptions;
    }

    /**
     * @param LabelOptions $labelOptions
     * @return ShipmentInfo
     */
    public function setLabelOptions($labelOptions) {
        $this->labelOptions = $labelOptions;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'DropOffType' => $this->dropOffType,
            'ServiceType' => $this->serviceType,
            'Account' => $this->account,
            'Currency' => $this->currency,
            'UnitOfMeasurement' => $this->unitOfMeasurement,
            'LabelType' => $this->labelType,
            'LabelTemplate' => $this->labelTemplate,
        ];

        if (is_array($this->specialServices) && count($this->specialServices) > 0) {
            $specialServices = [];
            foreach($this->specialServices as $specialService) {
                $specialServices[] = ['Service' => $specialService->buildData()];
            }

            $result['SpecialServices'] = $specialServices;
        }

        if ($this->billing instanceof Billing) {
            $result['Billing'] = $this->billing->buildData();
        }

        if ($this->labelOptions instanceof LabelOptions) {
            $result['LabelOptions'] = $this->labelOptions->buildData();
        }

        return $result;
    }
}