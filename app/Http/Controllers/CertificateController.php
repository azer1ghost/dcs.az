<?php

namespace App\Http\Controllers;

use App\Models\Certificate;

class CertificateController extends Controller
{
    public function index(Certificate $certificate)
    {
        return view('website.pages.check-certificate', compact('certificate'));
    }
}
