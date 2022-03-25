<?php

namespace App\Certificates\Main;

use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader\PageBoundaries;

class Certificate
{
    protected FPDI $pdf;

    protected string $type = 'clean';
//    protected string $type = 'normal';

    protected string $orientation = 'portrait'; // landscape or portrait

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
        $this->pdf->Text(75, 120, $text);

        return $this;
    }

    public function title($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-MediumItalic');
        $this->pdf->SetFont("Montserrat-MediumItalic", "", 25);
        $this->pdf->SetTextColor(26,54,56);
        $this->pdf->Text(100, 156.5, $text);

        return $this;
    }

    public function date($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-Medium');
        $this->pdf->SetFont("Montserrat-Medium", "", 13);
        $this->pdf->SetTextColor(26,54,56);
        $this->pdf->Text(77, 273.5, $text);

        return $this;
    }

    public function duration($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-Medium');
        $this->pdf->SetFont("Montserrat-Medium", "", 13);
        $this->pdf->SetTextColor(26,54,56);
        $this->pdf->Text(72.5, 279, $text);

        return $this;
    }

    public function teacher($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-Medium');
        $this->pdf->SetFont("Montserrat-Medium", "", 13);
        $this->pdf->SetTextColor(26,54,56);
        $this->pdf->Text(93.5, 284.5, $text);

        return $this;
    }

    public function regNumber($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-Medium');
        $this->pdf->SetFont("Montserrat-Medium", "", 13);
        $this->pdf->SetTextColor(26,54,56);
        $this->pdf->Text(87, 290, $text);

        return $this;
    }

    public function expiredAt($text): Certificate
    {
        $this->pdf->AddFont('Montserrat-Medium');
        $this->pdf->SetFont("Montserrat-Medium", "", 13);
        $this->pdf->SetTextColor(26,54,56);
        $this->pdf->Text(53, 295.5, $text);

        return $this;
    }

    public function export()
    {
        return $this->pdf->Output();
    }

}
