<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Milon\Barcode\DNS2D;

class CertificateController extends Controller
{
    public function index(Certificate $certificate)
    {
        //TODO sertifikatin vaxtini yoxlmaq kodlari

        return $certificate->getPDF();
    }
}
