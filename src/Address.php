<?php
namespace alexLE\DHLExpress;


class Address extends DataClass {

    /**
     * @var string
     */
    protected $streetLines;

    /**
     * @var string
     */
    protected $streetLines2;

    /**
     * @var string
     */
    protected $streetLines3;

    /**
     * @var string
     */
    protected $buildingName;

    /**
     * @var string
     */
    protected $streetName;

    /**
     * @var string
     */
    protected $streetNumber;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $stateOrProvince;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $suburb;

    /**
     * @return string
     */
    public function getStreetLines() {
        return $this->streetLines;
    }

    /**
     * @param string $streetLines
     * @return Address
     */
    public function setStreetLines($streetLines) {
        $this->streetLines = $streetLines;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines2() {
        return $this->streetLines2;
    }

    /**
     * @param string $streetLines2
     * @return Address
     */
    public function setStreetLines2($streetLines2) {
        $this->streetLines2 = $streetLines2;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetLines3() {
        return $this->streetLines3;
    }

    /**
     * @param string $streetLines3
     * @return Address
     */
    public function setStreetLines3($streetLines3) {
        $this->streetLines3 = $streetLines3;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingName() {
        return $this->buildingName;
    }

    /**
     * @param string $buildingName
     * @return Address
     */
    public function setBuildingName($buildingName) {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetName() {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return Address
     */
    public function setStreetName($streetName) {
        $this->streetName = $streetName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetNumber() {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return Address
     */
    public function setStreetNumber($streetNumber) {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Address
     */
    public function setCity($city) {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getStateOrProvince() {
        return $this->stateOrProvince;
    }

    /**
     * @param string $stateOrProvince
     * @return Address
     */
    public function setStateOrProvince($stateOrProvince) {
        $this->stateOrProvince = $stateOrProvince;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode() {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return Address
     */
    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode() {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return Address
     */
    public function setCountryCode($countryCode) {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSuburb() {
        return $this->suburb;
    }

    /**
     * @param string $suburb
     * @return Address
     */
    public function setSuburb($suburb) {
        $this->suburb = $suburb;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'City' => $this->city,
            'PostalCode' => $this->postalCode,
            'CountryCode' => $this->countryCode,
        ];

        if (!empty($this->buildingName)) $result['BuildingName'] = $this->buildingName;
        if (!empty($this->streetLines)) $result['StreetLines'] = $this->streetLines;
        if (!empty($this->streetName)) $result['StreetName'] = $this->streetName;
        if (!empty($this->streetNumber)) $result['StreetNumber'] = $this->streetNumber;
        if (!empty($this->stateOrProvince)) $result['StateOrProvinceCode'] = $this->stateOrProvince;
        if (!empty($this->suburb)) $result['Suburb'] = $this->suburb;

        return $result;
    }
}