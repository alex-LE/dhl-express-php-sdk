<?php
namespace alexLE\DHLExpress;

class CustomerLogo extends DataClass {

    const IMAGE_FORMAT_GIF = 'GIF';
    const IMAGE_FORMAT_JPG = 'JPG';
    const IMAGE_FORMAT_JPEG = 'JPEG';
    const IMAGE_FORMAT_PNG = 'PNG';

    /**
     * @var string
     */
    protected $logoImage;

    /**
     * @var string
     */
    protected $logoImageFormat;

    /**
     * @return string
     */
    public function getLogoImage() {
        return $this->logoImage;
    }

    /**
     * @param string $logoImage
     * @return CustomerLogo
     */
    public function setLogoImage($logoImage) {
        $this->logoImage = $logoImage;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogoImageFormat() {
        return $this->logoImageFormat;
    }

    /**
     * @param string $logoImageFormat
     * @return CustomerLogo
     */
    public function setLogoImageFormat($logoImageFormat) {
        $this->logoImageFormat = $logoImageFormat;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'LogoImage' => $this->logoImage,
            'LogoImageFormat' => $this->logoImageFormat
        ];
    }
}