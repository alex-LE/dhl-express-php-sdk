<?php
namespace alexLE\DHLExpress;

class LabelOptions extends DataClass {

    /**
     * @var CustomerLogo
     */
    protected $customerLogo;

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
     * @return array
     */
    public function buildData() {
        return [
            'CustomerLogo' => $this->customerLogo->buildData()
        ];
    }
}