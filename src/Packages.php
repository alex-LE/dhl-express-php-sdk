<?php
namespace alexLE\DHLExpress;


class Packages extends DataClass {

    /**
     * @var RequestedPackage[]
     */
    protected $requestedPackages;

    function __construct() {
        $this->requestedPackages = [];
    }

    /**
     * @return RequestedPackage[]
     */
    public function getRequestedPackages() {
        return $this->requestedPackages;
    }

    /**
     * @param RequestedPackage $package
     * @return Packages
     */
    public function addRequestedPackage(RequestedPackage $package) {
        $this->requestedPackages[] = $package;

        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = ['RequestedPackages' => []];

        foreach($this->requestedPackages as $index => $package) {
            // @number has to be the first entry, otherwise the API returns a error 500
            $packageData = [
                '@number' => $index + 1
            ];
            $packageData = array_merge($packageData, $package->buildData());

            $result['RequestedPackages'][] = $packageData;
        }

        return $result;
    }
}