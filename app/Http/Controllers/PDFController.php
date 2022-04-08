<?php

namespace App\Http\Controllers;

use App\Models\Insect;
use App\Models\Language;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function generateCharacteristicsWeb(Request $request, Insect $insect) {
        $data = [
            'insect' => $insect
        ];

        return view('characteristics', $data);
    }

    public function generateCharacteristics(Request $request, Insect $insect)
    {
        $data = [
            'insect' => $insect
        ];

        $pdf = Pdf::loadView('characteristics', $data);

        return $pdf->download();
    }
}
