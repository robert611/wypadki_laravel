<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wyjaśnienia Poszkodowanego</title>
    <style>
        @page {
            margin: 2cm;
            size: A4;
        }

        body {
            font-family: "DejaVu Sans", sans-serif;
            font-size: 12px;
            margin: 0;
            padding: 0;
            line-height: 1.4;
            color: #000;
        }

        .header-space {
            text-align: left;
            margin-bottom: 50px;
            font-size: 10px;
        }

        .header-placeholder {
            border: none;
            border-bottom: 1px dotted #000;
            width: 300px;
            display: inline-block;
            text-align: center;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .header-subtitle {
            margin-top: 0;
            padding-top: 0;
            display: block;
        }

        .title {
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin: 60px 0;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .date-location {
            margin-bottom: 15px;
        }

        .team-composition {
            margin-bottom: 20px;
        }

        .team-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .team-table td {
            padding-top: 8px;
            vertical-align: top;
        }

        .team-number {
            width: 30px;
            text-align: left;
        }

        .team-name {
            width: 45%;
            border-bottom: 1px dotted #000;
        }

        .team-function {
            width: 45%;
            text-align: left;
            padding-left: 15px;
        }

        .team-label {
            font-size: 10pt;
            text-align: center;
            padding-top: 5px;
        }

        .injured-section {
            margin: 45px 0;
        }

        .section-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 35px;
            font-size: 13px;
        }

        .form-field {
            margin-bottom: 12px;
            display: table;
            width: 100%;
            line-height: 1.5;
        }

        .field-number {
            display: table-cell;
            width: 20px;
            vertical-align: baseline;
        }

        .field-label {
            display: table-cell;
            width: 200px;
            vertical-align: baseline;
        }

        .field-line {
            border: none;
            border-bottom: 1px dotted #000;
            display: table-cell;
            width: auto;
            vertical-align: baseline;
        }

        .dotted-line {
            flex: 1;
            border-bottom: 1px dotted #000;
            height: 1px;
            margin-bottom: 3px;
        }

        .statement-section {
            margin: 30px 0;
        }

        .statement-title {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .statement-lines {
            margin-bottom: 10px;
        }

        .statement-line {
            border-bottom: 1px dotted #000;
            height: 20px;
            margin-bottom: 8px;
        }

        .statement-lines {
            margin-bottom: 10px;
        }

        .statement-line {
            border-bottom: 1px dotted #000;
            min-height: 20px;
            margin-bottom: 8px;
            padding-bottom: 3px;
            line-height: 1.8;
            display: inline;
        }

        .signature-section {
            margin-top: 40px;
            text-align: right;
            page-break-inside: avoid;
        }

        .signature-line {
            border-bottom: 1px dotted #000;
            width: 250px;
            height: 20px;
            margin: 20px 0 5px auto;
        }

        .signature-label {
            font-size: 10px;
            text-align: center;
            margin-right: 50px;
        }
    </style>
</head>
<body>
<div class="header-space">
    <p class="header-placeholder"></p>
    <small class="header-subtitle">(pieczęć adresowa pracodawcy)</small>
</div>

<div class="title">WYJAŚNIENIA POSZKODOWANEGO</div>

<div class="form-section">
    <div class="date-location">
        Złożone dnia
        <span class="dotted-line" style="display: inline-block; width: 150px; margin: 0 5px;"></span>
        r. w
        <span class="dotted-line" style="display: inline-block; width: 200px; margin: 0 5px;"></span>
        <span style="display: inline-block">w obecności zespołu powypadkowego w składzie:</span>
    </div>

    <div class="team-composition">
        <table class="team-table">
            <tr>
                <td class="team-number">1)</td>
                <td class="team-name"></td>
                <td class="team-function" style="padding-left: 40px;">specjalista ds. BHP</td>
            </tr>
            <tr>
                <td class="team-number">2)</td>
                <td class="team-name"></td>
                <td class="team-function" style="padding-left: 40px;">przedstawiciel pracowników</td>
            </tr>
            <tr>
                <td></td>
                <td class="team-label">(imię i nazwisko)</td>
                <td class="team-label">(funkcja)</td>
            </tr>
        </table>
    </div>
</div>

<div class="injured-section">
    <div class="section-title">Poszkodowany</div>

    <div class="form-field">
        <span class="field-number">1.</span>
        <span class="field-label">Imię i nazwisko:</span>
        <span class="field-line"></span>
    </div>

    <div class="form-field">
        <span class="field-number">2.</span>
        <span class="field-label">Data i miejsce urodzenia:</span>
        <span class="field-line"></span>
    </div>

    <div class="form-field">
        <span class="field-number">3.</span>
        <span class="field-label">Dowód osobisty (seria i nr):</span>
        <span class="field-line"></span>
    </div>

    <div class="form-field">
        <span class="field-number">4.</span>
        <span class="field-label">PESEL:</span>
        <span class="field-line"></span>
    </div>

    <div class="form-field">
        <span class="field-number">5.</span>
        <span class="field-label">Miejsce zatrudnienia:</span>
        <span class="field-line"></span>
    </div>

    <div class="form-field">
        <span class="field-number">6.</span>
        <span class="field-label">Stanowisko służbowe:</span>
        <span class="field-line"></span>
    </div>

    <div class="form-field">
        <span class="field-number">7.</span>
        <span class="field-label">Adres zamieszkania:</span>
        <span class="field-line"></span>
    </div>
</div>

<div class="statement-section">
    <div class="statement-title">Poszkodowany oświadczył co następuje:</div>

    <div class="statement-lines">
        <p class="statement-line">
            Jest dostępnych wiele różnych wersji Lorem Ipsum, ale większość zmieniła się
            pod wpływem dodanego humoru czy przypadkowych słów, które nawet w najmniejszym
            stopniu nie przypominają istniejących. Jeśli masz zamiar użyć fragmentu Lorem
            Ipsum, lepiej mieć pewność, że nie ma niczego „dziwnego” w środku tekstu.
            Wszystkie Internetowe generatory Lorem Ipsum mają tendencje do kopiowania już
            istniejących bloków, co czyni nasz pierwszym prawdziwym generatorem w
            Internecie. Używamy zawierającego ponad 200 łacińskich słów słownika, w
            kontekście wielu znanych sentencji, by wygenerować tekst wyglądający
            odpowiednio. To wszystko czyni „nasz” Lorem Ipsum wolnym od powtórzeń,
            humorystycznych wstawek czy niecharakterystycznych słów.
        </p>
    </div>
</div>

<div class="signature-section">
    <p class="signature-line"></p>
    <small class="signature-label">(podpis poszkodowanego)</small>
</div>

<div class="injured-section">
    <div style="margin-bottom: 10px;">Podpisy członków zespołu powypadkowego:</div>

    <div class="form-field">
        <span class="field-number" style="display: inline; width: 3%">1)</span>
        <span class="field-line field-line-shorter" style="display: inline-block; width: 50%; margin-left: 5px"></span>
    </div>

    <div class="form-field">
        <span class="field-number" style="display: inline; width: 3%">2)</span>
        <span class="field-line field-line-shorter" style="display: inline-block; width: 50%; margin-left: 5px"></span>
    </div>
</div>
</body>
</html>
