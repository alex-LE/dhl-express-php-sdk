<?php
namespace alexLE\DHLExpress;


class ExportLineItems extends DataClass {

    /**
     * @var ExportLineItem[]
     */
    protected $exportLineItems;

    function __construct() {
        $this->exportLineItems = [];
    }

    /**
     * @return ExportLineItem[]
     */
    public function getRequestedPackages() {
        return $this->exportLineItems;
    }

    /**
     * @param ExportLineItem $exportLineItem
     * @return ExportLineItems
     */
    public function addexportLineItem(ExportLineItem $exportLineItem) {
        $this->exportLineItems[] = $exportLineItem;

        return $this;
    }


    /**
     * @return array
     */
    public function buildData() {
        /*
        $result = [
            'ExportLineItem' => $this->exportLineItem->buildData(),
        ];

        return $result;
        */

        $result = ['ExportLineItem' => []];

        foreach($this->exportLineItems as $index => $exportLineItem) {
            // @number has to be the first entry, otherwise the API returns a error 500
            $packageData = [
                'ItemNumber' => $index + 1
            ];
            $packageData = array_merge($packageData, $exportLineItem->buildData());

            $result['ExportLineItem'][] = $packageData;
        }

        return $result;
    }
}