<?php
namespace alexLE\DHLExpress;


class OtherCharge extends DataClass {

    /**
     * @var string
     */
    protected $chargeValue;

    /**
     * @var string
     */
    protected $chargeType;


    /**
     * @return string
     */
    public function getChargeValue() {
        return $this->chargeValue;
    }

    /**
     * @param string $chargeValue
     * @return OtherCharge
     */
    public function setChargeValue($chargeValue) {
        $this->chargeValue = $chargeValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getChargeType() {
        return $this->chargeType;
    }

    /**
     * @param string $chargeType
     * @return OtherCharge
     */
    public function setChargeType($chargeType) {
        $this->chargeType = $chargeType;
        return $this;
    }



    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'ChargeValue' => $this->chargeValue,
            'ChargeType' => $this->chargeType,
        ];

        return $result;
    }
}