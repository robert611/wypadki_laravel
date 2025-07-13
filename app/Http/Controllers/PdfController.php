<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PdfController extends Controller
{
    public function generateFromHtml(): Response
    {
        $data = [

        ];

        // Generowanie PDF
        $pdf = Pdf::loadView('karta_wypadku', $data);

        // Możesz zapisać lokalnie, jeśli chcesz
        // Storage::put('public/generated.pdf', $pdf->output());

        // Zwróć PDF jako odpowiedź
        return $pdf->download('generated.pdf');
    }

    public function displayHTML(): View
    {
        $data = [];

        return view('karta_wypadku', $data);
    }
}
