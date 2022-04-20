<?php

namespace App\Certificates\Old;

use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfParser\CrossReference\CrossReferenceException;
use setasign\Fpdi\PdfParser\Filter\FilterException;
use setasign\Fpdi\PdfParser\PdfParserException;
use setasign\Fpdi\PdfParser\Type\PdfTypeException;
use setasign\Fpdi\PdfReader\PageBoundaries;
use setasign\Fpdi\PdfReader\PdfReaderException;

class Certificate
{
    protected FPDI $pdf;

    protected string $type = 'clean';
//    protected string $type = 'normal';

    protected string $orientation = 'portrait'; // landscape or portrait

    /**
     * @throws CrossReferenceException
     * @throws PdfReaderException
     * @throws PdfParserException
     * @throws FilterException
     * @throws PdfTypeException
     */
    public function __construct()
    {
        define('FPDF_FONTPATH', app_path('Certificates/Main/assets/fonts'));

        $file = app_path("Certificates/Main/assets/{$this->type}/certificate-{$this->orientation}.pdf");

        $orientation = strtoupper($this->orientation[0]);

        $this->pdf = new FPDI($orientation, 'mm', 'A4');

        $this->pdf->setSourceFile($file);

        $pageId = $this->pdf->importPage(1, PageBoundaries::MEDIA_BOX);
        $size = $this->pdf->getTemplatesize($pageId);

        $this->pdf->addPage($orientation, $size);
        $this->pdf->useImportedPage($pageId, 0, 0, $size['width'], $size['height']);

        return $this;
    }

    public function student($text): Certificate
    {
        $this->pdf->AddFont('Parisian');
        $this->pdf->SetFont("Parisian", "", 60);
        $this->pdf->SetTextColor(26,54,56);
        $this->pdf->Cell(0, 190, $text, 0, true, 'C');

        return $this;
    }

    public function title($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-MediumItalic');
        $this->pdf->SetFont("Montserrat-MediumItalic", "", 25);
        $this->pdf->Cell(0, -90, $text, 0, true, 'C');

        return $this;
    }

    public function date($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-Medium');
        $this->pdf->SetFont("Montserrat-Medium", "", 13);
        $this->pdf->Text(77, 273.5, $text);

        return $this;
    }

    public function duration($text): Certificate
    {
        $this->pdf->Text(72.5, 279, $text);

        return $this;
    }

    public function teacher($text): Certificate
    {
        $this->pdf->Text(93.5, 284.5, $text);

        return $this;
    }

    public function regNumber($text): Certificate
    {
        $this->pdf->Text(87, 290, $text);

        return $this;
    }

    public function expiredAt($text): Certificate
    {
        $this->pdf->Text(53, 295.5, $text);

        return $this;
    }

    public function qrCode($img): Certificate
    {
        $this->pdf->Image($img,'240', '265', '30', '30');

        return $this;
    }

    public function export()
    {
        $this->pdf->Text(35, 306, setting('site.phone'));
        $this->pdf->Text(35, 315, setting('site.email'));
        $this->pdf->Text(35, 324, setting('site.adress'));

        return $this->pdf->Output();
    }

}
