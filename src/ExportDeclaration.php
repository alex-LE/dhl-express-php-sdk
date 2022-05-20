<?php
namespace alexLE\DHLExpress;


class ExportDeclaration extends DataClass {

    /**
     * @var ExportLineItems
     */
    protected $exportLineItems;

    /**
     * @var OtherCharges
     */
    protected $otherCharges;

    /**
     * @var string
     */
    protected $invoiceDate;

    /**
     * @var string
     */
    protected $invoiceNumber;

    /**
     * @return ExportLineItems
     */
    public function getExportLineItems() {
        return $this->exportLineItems;
    }

    /**
     * @param ExportLineItems $contact
     * @return ExportDeclaration
     */
    public function setExportLineItems(ExportLineItems $exportLineItems) {
        $this->exportLineItems = $exportLineItems;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber() {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return ExportLineItems
     */
    public function setInvoiceNumber($invoiceNumber) {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDate() {
        return $this->invoiceDate;
    }

    /**
     * @param string $invoiceDate
     * @return ExportLineItems
     */
    public function setInvoiceDate($invoiceDate) {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getOtherCharges() {
        return $this->otherCharges;
    }

    /**
     * @param string $invoiceDate
     * @return ExportLineItems
     */
    public function setOtherCharges(OtherCharges $otherCharges) {
        $this->otherCharges = $otherCharges;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'ExportLineItems' => $this->exportLineItems->buildData(),
            'InvoiceDate' => $this->invoiceDate,
            'InvoiceNumber' => $this->invoiceNumber,
            'OtherCharges' => $this->otherCharges->buildData(),
        ];
    }
}