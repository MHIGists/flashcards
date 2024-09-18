<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maize\LegalConsent\Models\LegalConsent;

class LegalDocument extends Controller
{
    public function show()
    {
        $privacy_policy = LegalConsent::where('1', '1')->get();
        return view('privacy-policy', compact($privacy_policy));
    }
}
