<?php

namespace App\Certificates\Main;

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
    public function __construct($data)
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

        // Insert fonts
        $this->pdf->AddFont('Montserrat-ExtraBold');
        $this->pdf->AddFont('Montserrat-Bold');
        $this->pdf->AddFont('Montserrat-Regular');
//        $this->pdf->AddFont('Montserrat-MediumItalic');
//        $this->pdf->AddFont('Montserrat-Light');
//        $this->pdf->AddFont('Montserrat-Medium');

        // Set font color
        $this->pdf->SetTextColor(26,54,56);

        // CERTIFICATE title
        $this->pdf->SetFont('Montserrat-ExtraBold', '',56);
        $this->pdf->Cell(0, 130, 'CERTIFICATE', 0, true, 'C');

        // This is to certify that
        $this->pdf->SetFont('Montserrat-Regular', '',18.5);
        $this->pdf->Cell(0, -98, 'This is to certify that', 0, true, 'C');

        // Student name
        $this->pdf->SetFont('Montserrat-Bold', '',40);
        $this->pdf->Cell(0, 162, $data['student'], 0, true, 'C');

        $this->pdf->SetFont('Montserrat-Regular', '',18.5);

        // company area
        if (!is_null($data['company'])) {
            $this->pdf->Cell(0, -134, "Is the employee of {$data['company']}", 0, true, 'C');
        }

        $this->pdf->Cell(0, 155, "has attended and successfully completed", 0, true, 'C');

        // Course title
        $this->pdf->SetFont('Montserrat-Bold', '',30);
        $this->pdf->Cell(0, -120, '"'.$data['title'].'"', 0, true, 'C');

        // Text static
        $this->pdf->SetFont('Montserrat-Regular', '',18.5);
        $this->pdf->Cell(0, 144, 'the training course based on International Standards', 0, true, 'C');
        $this->pdf->Cell(0, -123, 'provided with theoretical and practical sessions by', 0, true, 'C');

        // Company name
        $this->pdf->SetFont('Montserrat-ExtraBold', '',25);
        $this->pdf->Cell(0, 148, '"DCS Group"', 0, true, 'C');

        // Date section
        $this->pdf->SetFont('Montserrat-Bold', '',11.5);
        $this->pdf->Text(19.5, 280, "Date of issue: {$data['date']}");
        $this->pdf->Text(19.5, 285,"Expiry date: {$data['expiredAt']}");
        $this->pdf->Text(19.5, 290,"Duration of Traning: {$data['duration']}");

        $this->pdf->Text(19.5, 300,"Registration Certifacate N: {$data['serial_number']}");
        $this->pdf->Text(19.5, 305,"Instruktors/Examiner s Name: {$data['teacher']}");

        // QR code
        $this->pdf->Image($data['qrcode'],20, 315, 30, 30);

        // author by
        $this->pdf->SetFont('Montserrat-ExtraBold', '',14);
        $this->pdf->SetLineWidth(1);
        $this->pdf->Line(185, 339, 260,339);
        $this->pdf->Text(185, 345, "AUTHORISED BY: S.NABIYEV");

        // Socials
//        $this->pdf->SetFont('Montserrat-Bold', '',10);
//        $this->pdf->Text(33, 362, setting('site.phone'));
//        $this->pdf->Text(128, 362, setting('site.email'));
//        $this->pdf->Text(223, 362, setting('site.adress'));

        // Brands
        // TODO brand are here

        return $this->pdf->Output();
    }

}
