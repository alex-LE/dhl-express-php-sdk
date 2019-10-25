<?php
namespace alexLE\DHLExpress;

class DeleteRequest extends DataClass {
    /**
     * @var \DateTime
     */
    protected $pickupDate;

    /**
     * @var string
     */
    protected $pickupCountry;

    /**
     * @var string
     */
    protected $dispatchConfirmationNumber;

    /**
     * @var string
     */
    protected $requestorName;

    /**
     * @var string
     */
    protected $reason;

    /**
     * @return \DateTime
     */
    public function getPickupDate() {
        return $this->pickupDate;
    }

    /**
     * @param \DateTime $pickupDate
     * @return DeleteRequest
     */
    public function setPickupDate($pickupDate) {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupCountry() {
        return $this->pickupCountry;
    }

    /**
     * @param string $pickupCountry
     * @return DeleteRequest
     */
    public function setPickupCountry($pickupCountry) {
        $this->pickupCountry = $pickupCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getDispatchConfirmationNumber() {
        return $this->dispatchConfirmationNumber;
    }

    /**
     * @param string $dispatchConfirmationNumber
     * @return DeleteRequest
     */
    public function setDispatchConfirmationNumber($dispatchConfirmationNumber) {
        $this->dispatchConfirmationNumber = $dispatchConfirmationNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestorName() {
        return $this->requestorName;
    }

    /**
     * @param string $requestorName
     * @return DeleteRequest
     */
    public function setRequestorName($requestorName) {
        $this->requestorName = $requestorName;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason() {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return DeleteRequest
     */
    public function setReason($reason) {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'PickupDate' => $this->pickupDate->format('Y-m-d'),
            'PickupCountry' => $this->pickupCountry,
            'DispatchConfirmationNumber' => $this->dispatchConfirmationNumber,
            'RequestorName' => $this->requestorName
        ];

        if (!empty($this->reason)) $result['Reason'] = $this->reason;

        return $result;
    }
}