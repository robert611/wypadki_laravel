<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class ExplanationPdfController extends Controller
{
    public function generateExplanationUopPdf(): Response
    {
        $data = [

        ];

        $pdf = Pdf::loadView('injured_explanation_uop', $data);

        return $pdf->download('injured_explanation_uop.pdf');
    }

    public function generateExplanationZleceniePdf(): Response
    {
        $data = [

        ];

        $pdf = Pdf::loadView('injured_explanation_zlecenie', $data);

        return $pdf->download('injured_explanation_zlecenie.pdf');
    }

    public function displayExplanationUop(): View
    {
        $data = [

        ];

        return view('injured_explanation_uop', $data);
    }

    public function displayExplanationZlecenie(): View
    {
        $data = [

        ];

        return view('injured_explanation_zlecenie', $data);
    }
}
