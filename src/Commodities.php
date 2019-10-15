<?php
namespace alexLE\DHLExpress;


class Commodities extends DataClass {

    /**
     * @var string
     */
    protected $description;

    /**
     * @var float
     */
    protected $customsValue;

    /**
     * @var integer
     */
    protected $numberOfPieces;

    /**
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Commodities
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getCustomsValue() {
        return $this->customsValue;
    }

    /**
     * @param float $customsValue
     * @return Commodities
     */
    public function setCustomsValue($customsValue) {
        $this->customsValue = $customsValue;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces() {
        return $this->numberOfPieces;
    }

    /**
     * @param int $numberOfPieces
     * @return Commodities
     */
    public function setNumberOfPieces($numberOfPieces) {
        $this->numberOfPieces = $numberOfPieces;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'Description' => $this->description,
        ];

        if (!empty($this->numberOfPieces)) $result['NumberOfPieces'] = $this->numberOfPieces;
        if (!empty($this->customsValue)) $result['CustomsValue'] = $this->customsValue;

        return $result;
    }
}