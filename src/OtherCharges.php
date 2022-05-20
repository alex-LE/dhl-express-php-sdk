<?php
namespace alexLE\DHLExpress;


class OtherCharges extends DataClass {

    /**
     * @var OtherCharge
     */
    protected $otherCharge;


    /**
     * @return OtherCharge
     */
    public function getOtherCharge() {
        return $this->otherCharge;
    }

    /**
     * @param OtherCharge $otherCharge
     * @return OtherCharges
     */
    public function setOtherCharge(OtherCharge $otherCharge) {
        $this->otherCharge = $otherCharge;
        return $this;
    }



    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'OtherCharge' => $this->otherCharge->buildData(),
        ];

        return $result;
    }
}