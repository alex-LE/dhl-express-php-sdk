<?php
namespace alexLE\DHLExpress;


class Dimensions {

    /**
     * @var float
     */
    protected $length;

    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    /**
     * @return float
     */
    public function getLength() {
        return $this->length;
    }

    /**
     * @param float $length
     * @return Dimensions
     */
    public function setLength($length) {
        $this->length = $length;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * @param float $width
     * @return Dimensions
     */
    public function setWidth($width) {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * @param float $height
     * @return Dimensions
     */
    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }
}