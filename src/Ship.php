<?php
namespace alexLE\DHLExpress;


class Ship extends DataClass {

    /**
     * @var Shipper
     */
    protected $shipper;

    /**
     * @var Recipient
     */
    protected $recipient;

    /**
     * @return Shipper
     */
    public function getShipper() {
        return $this->shipper;
    }

    /**
     * @param Shipper $shipper
     * @return Ship
     */
    public function setShipper(Shipper $shipper) {
        $this->shipper = $shipper;
        return $this;
    }

    /**
     * @return Recipient
     */
    public function getRecipient() {
        return $this->recipient;
    }

    /**
     * @param Recipient $recipient
     * @return Ship
     */
    public function setRecipient(Recipient $recipient) {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'Shipper' => $this->shipper->buildData(),
            'Recipient' => $this->recipient->buildData(),
        ];
    }
}