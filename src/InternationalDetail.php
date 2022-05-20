<?php
namespace alexLE\DHLExpress;


class InternationalDetail extends DataClass {

    const CONTENT_DOCUMENTS = 'DOCUMENTS';
    const CONTENT_NON_DOCUMENTS = 'NON_DOCUMENTS';

    /**
     * @var string
     */
    protected $content;

    /**
     * @var Commodities;
     */
    protected $commodities;

    /**
     * @var ExportDeclaration;
     */
    protected $exportDeclaration;

    /**
     * @return string
     */
    public function getContent(): string {
        return $this->content;
    }

    /**
     * @param string $content
     * @return InternationalDetail
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Commodities
     */
    public function getCommodities() {
        return $this->commodities;
    }

    /**
     * @param Commodities $commodities
     * @return InternationalDetail
     */
    public function setCommodities(Commodities $commodities) {
        $this->commodities = $commodities;
        return $this;
    }

    /**
     * @return ExportDeclaration
     */
    public function getExportDeclaration() {
        return $this->exportDeclaration;
    }

    /**
     * @param ExportDeclaration $exportDeclaration
     * @return InternationalDetail
     */
    public function setExportDeclaration(ExportDeclaration $exportDeclaration) {
        $this->exportDeclaration = $exportDeclaration;
        return $this;
    }

    /**
     * @return array
     */
    public function buildData() {
        $result = [
            'Content' => $this->content,
        ];

        if ($this->commodities instanceof Commodities) $result['Commodities'] = $this->commodities->buildData();

        if ($this->exportDeclaration instanceof ExportDeclaration) $result['ExportDeclaration'] = $this->exportDeclaration->buildData();

        return $result;
    }
}