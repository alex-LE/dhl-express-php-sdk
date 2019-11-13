<?php


namespace alexLE\DHLExpress;


class DocumentImage extends DataClass {

    const DOCUMENT_IMAGE_TYPE_INVOICE = 'INV';
    const DOCUMENT_IMAGE_TYPE_PROFORMA = 'PNV';
    const DOCUMENT_IMAGE_TYPE_CERTIFICATE_OF_ORIGIN = 'COO';
    const DOCUMENT_IMAGE_TYPE_NAFTA_CERTIFICATE_OF_ORIGIN = 'NAF';
    const DOCUMENT_IMAGE_TYPE_COMMERCIAL_INVOICE = 'CIN';
    const DOCUMENT_IMAGE_TYPE_CUSTOMS_DECLARATION = 'DCL';
    const DOCUMENT_IMAGE_TYPE_WAYBILL = 'AWB';

    const DOCUMENT_IMAGE_FORMAT_PDF = 'PDF';
    const DOCUMENT_IMAGE_FORMAT_PNG = 'PNG';
    const DOCUMENT_IMAGE_FORMAT_TIFF = 'TIFF';
    const DOCUMENT_IMAGE_FORMAT_GIF = 'GIF';
    const DOCUMENT_IMAGE_FORMAT_JPEG = 'JPEG';

    /**
     * @var string
     */
    protected $documentImageType;

    /**
     * @var string
     */
    protected $documentImage;

    /**
     * @var string
     */
    protected $documentImageFormat;

    /**
     * @return string
     */
    public function getDocumentImageType() {
        return $this->documentImageType;
    }

    /**
     * @param string $documentImageType
     * @return DocumentImage
     */
    public function setDocumentImageType($documentImageType) {
        $this->documentImageType = $documentImageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentImage() {
        return $this->documentImage;
    }

    /**
     * @param string $documentImage
     * @return DocumentImage
     */
    public function setDocumentImage($documentImage) {
        $this->documentImage = $documentImage;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocumentImageFormat() {
        return $this->documentImageFormat;
    }

    /**
     * @param string $documentImageFormat
     * @return DocumentImage
     */
    public function setDocumentImageFormat($documentImageFormat) {
        $this->documentImageFormat = $documentImageFormat;

        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        return [
            'DocumentImageType' => $this->documentImageType,
            'DocumentImage' => $this->documentImage,
            'DocumentImageFormat' => $this->documentImageFormat,
        ];
    }
}