<?php
namespace alexLE\DHLExpress;

class LabelOptions extends DataClass {

    /**
     * @var CustomerLogo
     */
    protected $customerLogo;

    /**
     * @var HideAccountInWaybillDocument
     */
    protected $hideAccountInWaybillDocument;

    /**
     * @var RequestDHLCustomsInvoice
     */
    protected $requestDHLCustomsInvoice;

    /**
     * @var AllInOnePDF
     */
    protected $allInOnePDF;

    /**
     * @return CustomerLogo
     */
    public function getCustomerLogo() {
        return $this->customerLogo;
    }

    /**
     * @param CustomerLogo $customerLogo
     * @return LabelOptions
     */
    public function setCustomerLogo($customerLogo) {
        $this->customerLogo = $customerLogo;
        return $this;
    }

    /**
     * @return hideAccountInWaybillDocument
     */
    public function getHideAccountInWaybillDocument() {
        return $this->hideAccountInWaybillDocument;
    }

    /**
     * @param $hideAccountInWaybillDocument
     * @return LabelOptions
     */
    public function setHideAccountInWaybillDocument($hideAccountInWaybillDocument) {
        $this->hideAccountInWaybillDocument = $hideAccountInWaybillDocument;
        return $this;
    }

    /**
     * @return requestDHLCustomsInvoice
     */
    public function getRequestDHLCustomsInvoice() {
        return $this->requestDHLCustomsInvoice;
    }

    /**
     * @param requestDHLCustomsInvoice
     * @return LabelOptions
     */
    public function setRequestDHLCustomsInvoice($requestDHLCustomsInvoice) {
        $this->requestDHLCustomsInvoice = $requestDHLCustomsInvoice;
        return $this;
    }

    /**
     * @return AllInOnePDF
     */
    public function getAllInOnePDF() {
        return $this->allInOnePDF;
    }

    /**
     * @param allInOnePDF
     * @return LabelOptions
     */
    public function setAllInOnePDF($allInOnePDF) {
        $this->allInOnePDF = $allInOnePDF;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'CustomerLogo' => $this->customerLogo->buildData(),
            'HideAccountInWaybillDocument' => $this->hideAccountInWaybillDocument,
            'RequestDHLCustomsInvoice' => $this->requestDHLCustomsInvoice,
            'DetachOptions' => [
                'AllInOnePDF' => $this->allInOnePDF,
            ],
        ];
    }
}