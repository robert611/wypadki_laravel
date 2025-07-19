<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;

class PdfController extends Controller
{
    public function generateAccidentCardPdf(): Response
    {
        $data = [
            'maker_name_and_address' => 'Jan Murak',
            'payer_name' => 'Jan',
            'payer_residence_address' => 'Warsaw 45/2',
            'payer_nip' => '12345678901',
            'payer_regon' => '4583',
            'payer_pesel' => '1234567890',
            'p_doc' => 'Dowód osobisty',
            'p_doc_s' => 'CCV',
            'p_doc_nr' => '38092',
            'injured_full_name' => 'Michał Poręba',
            'injured_pesel' => '1234567890',
            'i_doc' => 'Dowód osobisty',
            'i_doc_s' => 'RTT',
            'i_doc_n' => '64900',
            'injured_birth_date_and_place' => '1990-01-01 Warsaw',
            'injured_address' => 'Warsaw 45/2',
            'injured_insurance_information' => 'Ubezpieczenie społeczne',
            'accident_report_date_and_full_name' => '2025-05-05 Michał Poręba',
            'accident_details' => 'Poszkodowany odniósł obrażenia ręki',
            'witness_1' => 'Weronika Lewandowska',
            'witness_2' => 'Mariusz Wicher',
            'not_work_accident_argumentation' => '',
            'bhp_rules_breached_argumentation' => '',
            'injured_was_intoxicated_argumentation' => '',
            'other_full_name' => 'Jan Kowalski',
            'other_acc_date' => '2026-02-05',
            'entity_responsible' => 'Firma bhp',
            'preparation_not_in_time' => 'In time',
            'attachments' => [
                'Załącznik 1',
                'Załącznik 2',
            ],
        ];

        $pdf = Pdf::loadView('accident_card_draft', $data);

        return $pdf->download('accident_card.pdf');
    }

    public function generateAfterAccidentProtocolPdf(): Response
    {
        $data = [
        ];

        $pdf = Pdf::loadView('after_accident_protocol', $data);

        return $pdf->download('after_accident_protocol.pdf');
    }

    public function generateAccidentsRegisterPdf(): Response
    {
        $data = [
            'register_date' => '01.01.2021',
            'company_name' => 'Firma BhpSoft',
            'accidents' => [
                [
                    'full_name' => 'Jan Kowalski',
                    'date_and_place' => '25.01.2022 Gniezno',
                    'effect' => 'Pęknięcie żebra',
                    'protocol_date' => '29.08.2022',
                    'is_work_accident' => 'Tak',
                    'zus_date' => '---',
                    'incapable_for_work' => '74 dni',
                    'other_information' => 'Pozostałe informacje',
                ],
            ],
        ];

        $pdf = Pdf::loadView('accidents_register', $data);

        return $pdf->download('accidents_register.pdf');
    }

    public function displayAccidentCard(): View
    {
        $data = [

        ];

        return view('accident_card_draft', $data);
    }

    public function displayAfterAccidentProtocol(): View
    {
        $data = [

        ];

        return view('after_accident_protocol', $data);
    }

    public function displayAccidentsRegister(): View
    {
        $data = [

        ];

        return view('accidents_register', $data);
    }
}
