<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index(Certificate $certificate)
    {
        //TODO sertifikatin vaxtini yoxlmaq kodlari

        return $certificate->getPDF();
    }
}
