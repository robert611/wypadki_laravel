<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestr wypadków przy pracy</title>
    <style>
        @page {
            margin: 15mm;
            size: A4 landscape;
        }

        body {
            font-family: "DejaVu Sans", sans-serif;
            font-size: 10px;
            margin: 0;
            padding: 0;
            line-height: 1.2;
        }

        .header {
            text-align: left;
            margin-bottom: 15px;
        }

        .registry-date {
            font-size: 10px;
            margin-bottom: 20px;
        }

        .title {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin: 20px 0;
        }

        .company {
            text-align: center;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .table-container {
            width: 100%;
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 9px;
            table-layout: fixed;
        }

        th, td {
            border: 1px solid #000;
            padding: 4px 2px;
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
        }

        th {
            background-color: #f0f0f0;
            font-weight: bold;
            font-size: 8px;
            line-height: 1.1;
        }

        .col-lp { width: 3%; }
        .col-name { width: 12%; }
        .col-place-date { width: 12%; }
        .col-effects { width: 13%; }
        .col-protocol-date { width: 11%; }
        .col-confirmation { width: 11%; }
        .col-zus-date { width: 10%; }
        .col-days { width: 8%; }
        .col-other { width: 20%; }

        .row-number {
            font-weight: bold;
        }

        tr {
            height: 25px;
        }

        .header-row th {
            height: auto;
            min-height: 40px;
        }

        @media print {
            body {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <div class="registry-date">Data założenia rejestru: {{ $register_date }}</div>
</div>

<div class="title">Rejestr wypadków przy pracy</div>
<div class="company">{{ $company_name }}</div>

<div class="table-container">
    <table>
        <thead>
            <tr class="header-row">
                <th class="col-lp">lp</th>
                <th class="col-name">Imię i nazwisko poszkodowanego</th>
                <th class="col-place-date">Miejsce i data wypadku</th>
                <th class="col-effects">Skutki wypadku dla poszkodowanego</th>
                <th class="col-protocol-date">Data sporządzenia protokołu powypadkowego</th>
                <th class="col-confirmation">Stwierdzenie czy wypadek jest wypadkiem przy pracy</th>
                <th class="col-zus-date">Data przekazania wniosku do ZUS</th>
                <th class="col-days">Liczba dni niezdolności do pracy</th>
                <th class="col-other">Inne informacje, których zamieszczenie w rejestrze jest celowe oraz wnioski i zalecenie profilaktyczne zespołu powypadkowego</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($accidents as $accident)
                <tr>
                    <td class="row-number">{{ $loop->iteration }}</td>
                    <td>{{ $accident['full_name'] }}</td>
                    <td>{{ $accident['date_and_place'] }}</td>
                    <td>{{ $accident['effect'] }}</td>
                    <td>{{ $accident['protocol_date'] }}</td>
                    <td>{{ $accident['is_work_accident'] }}</td>
                    <td>{{ $accident['zus_date'] }}</td>
                    <td>{{ $accident['incapable_for_work'] }}</td>
                    <td>{{ $accident['other_information'] }}</td>
                </tr>
            @endforeach
            <tr>
                <td class="row-number">2</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">3</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">4</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">5</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">6</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">7</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">8</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">9</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="row-number">10</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>
