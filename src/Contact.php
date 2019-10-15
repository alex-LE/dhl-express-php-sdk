<?php
namespace alexLE\DHLExpress;


class Contact extends DataClass {

    /**
     * @var string
     */
    protected $personName;

    /**
     * @var string
     */
    protected $companyName;

    /**
     * @var string
     */
    protected $phoneNumber;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var string
     */
    protected $mobilePhoneNumber;

    /**
     * @return string
     */
    public function getPersonName() {
        return $this->personName;
    }

    /**
     * @param string $personName
     * @return Contact
     */
    public function setPersonName($personName) {
        $this->personName = $personName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName() {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return Contact
     */
    public function setCompanyName($companyName) {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return Contact
     */
    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress() {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return Contact
     */
    public function setEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber() {
        return $this->mobilePhoneNumber;
    }

    /**
     * @param string $mobilePhoneNumber
     * @return Contact
     */
    public function setMobilePhoneNumber($mobilePhoneNumber) {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'PersonName' => $this->personName,
            'CompanyName' => $this->companyName,
            'PhoneNumber' => $this->phoneNumber,
        ];

        if (!empty($this->emailAddress)) $result['EmailAddress'] = $this->emailAddress;
        if (!empty($this->mobilePhoneNumber)) $result['MobilePhoneNumber'] = $this->mobilePhoneNumber;

        return $result;
    }
}