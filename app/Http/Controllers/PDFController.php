<?php

namespace App\Http\Controllers;

use App\Models\Insect;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SimpleSoftwareIO\QrCode\Generator;

class PDFController extends Controller
{
    public function generateCharacteristics(Request $request, Insect $insect): Response
    {
        $qrg = new Generator();

        $data = [
            'insect' => $insect,
            'info' => $insect->infos()->firstOrFail(),
            'qr' => base64_encode($qrg->format('png')->generate($insect->id)),
        ];

        $pdf = Pdf::loadView('characteristics', $data);

        return $pdf->download();
    }

    public function generateCharacteristicsLang(Request $request, Insect $insect, string $lang): Response
    {
        $data = [
            'insect' => $insect,
            'info' => $insect->getInfosByLang($lang)->firstOrFail()
        ];

        $pdf = Pdf::loadView('characteristics', $data);

        return $pdf->download();
    }
}
