<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protokół Powypadkowy</title>
    <style>
        /* CSS kompatybilny z DomPDF */
        body {
            font-family: "DejaVu Sans", sans-serif;
            font-size: 10px;
            line-height: 1.2;
            margin: 10px;
            color: #000000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 5px;
        }

        td, th {
            padding: 2px;
            vertical-align: top;
            text-align: left;
        }

        .center {
            text-align: center;
        }

        .small {
            font-size: 8px;
        }

        .protocol-header {
            text-align: center;
            font-weight: bold;
            font-size: 12px;
            padding: 5px;
        }

        .section-header {
            font-weight: bold;
            padding: 3px;
        }

        .field-line {
            border-bottom: 1px dotted #000000;
            min-height: 15px;
            display: inline-block;
            width: 150px;
        }

        .field-line-wide {
            border-bottom: 1px dotted #000000;
            min-height: 15px;
            display: inline-block;
            width: 250px;
        }

        .checkbox {
            display: inline-block;
            width: 10px;
            height: 10px;
            border: 1px solid #000000;
            margin-right: 3px;
        }

        .text-area {
            width: 100%;
            height: 60px;
            border: 1px solid #000000;
            padding: 2px;
        }

        .signature-area {
            height: 40px;
            border-bottom: 1px dotted #000000;
        }

        .strike {
            text-decoration: line-through;
        }

        .italic {
            font-style: italic;
        }

        sup {
            font-size: 7px;
        }

        .protocol-header {
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .protocol-header .divider {
            font-size: 14px;
            display: inline-block;
            line-height: 14px;
            margin-left: 5px;
            margin-right: 5px;
        }

        .number-box {
            display: inline-block;
            width: 14px;
            height: 18px;
            line-height: 18px;
            text-align: center;
            font-size: 12px;
            font-family: DejaVu Sans, sans-serif;
            border: 1px solid #000;
            background-color: #00ccff;
            vertical-align: middle;
            padding: 0;
            margin: 0;
        }

        .green-box {
            background-color: #ccffcc;
        }

        .number-box + .number-box {
            margin-left: -1px;
        }

        .no-gap-boxes {
            font-size: 0;
            display: inline-block;
        }

        .no-gap-boxes > * {
            font-size: 12px;
        }

        .field-container {
            display: inline-block;
            text-align: center;
        }

        .field-label {
            font-size: 10pt;
        }

        .text-center {
            text-align: center;
        }

        .d-block {
            display: block;
        }

        .pt-10 {
            padding-top: 10px;
        }

        .pr-25 {
            padding-right: 25px;
        }

        .pr-10 {
            padding-right: 10px;
        }

        .pr-5 {
            padding-right: 5px;
        }

        .pb-10 {
            padding-bottom: 10px;
        }

        .mr-10 {
            margin-right: 10px;
        }

        .mr-5 {
            margin-right: 5px;
        }

        .ml-10 {
            margin-left: 10px;
        }

        .ml-5 {
            margin-left: 5px;
        }
    </style>
</head>
<body>

<div class="protocol-header">
    <span class="no-gap-boxes">
        <span style="margin-right: 5px">Protokół Nr</span>
        <span class="number-box">&nbsp;</span>
        <span class="number-box">&nbsp;</span>
        <span class="number-box">&nbsp;</span>
        <span class="divider">/</span>
        <span class="number-box">2</span>
        <span class="number-box">0</span>
        <span class="number-box">2</span>
        <span class="number-box">4</span>
        <span style="margin-left: 5px">r.</span>
    </span>
    <div>
        <strong>ustalenia okoliczności i przyczyn wypadku przy pracy</strong>
    </div>
</div>

<table style="width: 100%; border-collapse: collapse; font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 10px;">
    <tr>
        <td colspan="4" class="section-header">1. Dane pracodawcy:</td>
    </tr>
    <tr>
        <td style="border-bottom: 1px dotted #000; padding-top: 12px; width: 70%;"></td>
    </tr>
    <tr style="font-size: 8pt;">
        <td>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 50%; text-align: left;">
                        nazwa lub imię i nazwisko pracodawcy
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="border-bottom: 1px dotted #000; padding-top: 12px; width: 70%;"></td>
    </tr>
    <tr style="font-size: 8pt;">
        <td>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 50%; text-align: left;">
                        adres siedziby pracodawcy
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table style="width: 100%; border-collapse: collapse; font-size: 10pt; margin-top: 10px;">
    <tr>
        <td style="width: 50%; text-align: left;">
            <div class="field-container">
                <span class="no-gap-boxes">
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                </span>
                <div class="field-label">
                    NIP <sup>1)</sup>
                </div>
            </div>
        </td>
        <td colspan="2" style="width: 50%; text-align: right;">
            <div class="field-container">
                <span class="no-gap-boxes">
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                    <span class="number-box"></span>
                </span>
                <div class="field-label">PESEL</div>
            </div>
        </td>
    </tr>
</table>

<table style="width: 100%; border-collapse: collapse; font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 10px;">
    <tr>
        <td style="border-bottom: 1px dotted #000; padding-top: 12px; width: 70%;"></td>
    </tr>
    <tr style="font-size: 8pt;">
        <td>
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 50%; text-align: left;">
                        numer dowodu osobistego lub inny dokument potwierdzający tożsamość pracodawcy
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<div class="field-container">
    <span class="no-gap-boxes">
        <span class="number-box"></span>
        <span class="number-box"></span>
        <span class="number-box"></span>
        <span class="number-box"></span>
        <span class="number-box"></span>
    </span>
    <div class="field-label">
        Kod PKD
    </div>
</div>

<table style="margin-top: 10px;">
    <tr>
        <td colspan="4" class="section-header">2. Zespół powypadkowy w składzie:</td>
    </tr>
    <tr>
        <td style="width: 3%;">1)</td>
        <td style="width: 48.5%;" class="pr-25">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">imię i nazwisko</span>
        </td>
        <td style="width: 48.5%;">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">funkcja</span>
        </td>
    </tr>
    <tr>
        <td>2)</td>
        <td class="pr-25">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">imię i nazwisko</span>
        </td>
        <td>
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">funkcja</span>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td class="pb-10" colspan="6">
            dokonał w dniach od
            <span class="field-line ml-5 mr-10"></span>
            do
            <span class="field-line ml-10 mr-5"></span>
            ustaleń dotyczących okoliczności i przyczyn<br>
        </td>
    </tr>
    <tr>
        <td class="pb-10" colspan="6">
            wypadku przy pracy, jakiemu w dniu
            <span class="field-line ml-10 mr-10" style="width: 180px"></span>
            o godz.
            <span class="field-line ml-10 mr-10" style="width: 180px"></span>
            uległ(a)
        </td>
    </tr>
    <tr>
        <td colspan="6">
            Pan(i)
            <span class="field-line-wide ml-10 mr-10" style="width: 268px"></span>
            urodzony(a)
            <span class="field-line-wide ml-10 mr-10" style="width: 268px"></span><br>
            <span style="margin-left: 520px;">dnia</span>
        </td>
    </tr>
    <tr>
        <td style="width: 5%;">zamieszkały(a)</td>
        <td style="width: 15%;" class="pr-10">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">kod pocztowy</span>
        </td>
        <td style="width: 19%;" class="pr-10">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">miejscowość</span>
        </td>
        <td style="width: 24%;" class="pr-10">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">ulica</span>
        </td>
        <td style="width: 10%;" class="pr-10">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">numer domu</span>
        </td>
        <td style="width: 16%;" class="pr-10">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">numer lokum</span>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td style="width: 50%;" class="pt-10">
            <div class="field-container">
                <span class="no-gap-boxes">
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                </span>
                <div class="field-label">
                    PESEL
                </div>
            </div>
        </td>
        <td colspan="1" style="width: 15%;"></td>
        <td style="width: 40%;">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">
                numer dowodu osobistego lub innego dokumentu<br>
                potwierdzającego tożsamość<br>
            </span>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td style="width: 14%;"> zatrudniony(a) w</td>
        <td style="width: 33%;" class="pr-10">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">komórka organizacyjna</span>
        </td>
        <td style="width: 13%;">na stanowisku</td>
        <td style="width: 25%;" class="pr-5">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small text-center d-block">nazwa stanowiska</span>
        </td>
        <td style="width: 15%;" class="pr-5">
            <div class="field-container">
                <span class="no-gap-boxes">
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                    <span class="number-box green-box"></span>
                </span>
                <div class="field-label">
                    kod zawodu <sup>3)</sup>
                </div>
            </div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4">
            <strong>3.</strong> Wypadek zgłosił(a) <span class="field-line-wide"></span> w dniu <span class="field-line"></span>
        </td>
    </tr>
</table>

<table style="width: 100%; border-collapse: collapse; border: 1px solid black; background-color: #ffffcc;">
    <tr>
        <td style="width: 3%; vertical-align: top;">4.</td>
        <td colspan="3" style="padding-bottom: 4px; border-bottom: 1px dotted #000;">
            Ustalono następujące okoliczności wypadku: <sup>4)</sup>
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">
            <table style="width: 100%; border-collapse: collapse;">
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
            </table>
        </td>
    </tr>
    <tr style="border-top: 1px solid #000;">
        <td style="width: 3%; vertical-align: top;">5.</td>
        <td colspan="3" style="padding-bottom: 4px; border-bottom: 1px dotted #000;">
            Ustalono następujące przyczyny wypadku: <sup>4)</sup>
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">
            <table style="width: 100%; border-collapse: collapse;">
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr>
                    <td style="border-bottom: 1px dotted #000;">
                        stwierdzono nieprzestrzeganie przez pracodawcę następujących przepisów prawa pracy,
                        w szczególności przepisów i zasad bezpieczeństwa i higieny pracy lub innych przepisów
                        dotyczących ochrony życia i zdrowia <span class="italic">(wskazać dowody)</span>: <sup>4)</sup>,<sup>5)</sup>
                    </td>
                </tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">Nie stwierdzono</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr>
                    <td style="border-bottom: 1px dotted #000;">
                        stwierdzono, że wyłączną przyczyną wypadku było naruszenie przez poszkodowanego pracownika
                        przepisów dotyczących ochrony życia i zdrowia, spowodowane przez niego umyślnie lub w skutek
                        rażącego niedbalstwa <span class="italic">(wskazać dowody)</span>: <sup>4)</sup>, <sup>5)</sup>
                    </td>
                </tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">Nie stwierdzono</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr>
                    <td style="border-bottom: 1px dotted #000;">
                        stwierdzono stan nietrzeźwości albo użycie przez poszkodowanego pracownika środków odurzających
                        lub substancji psychotropowych przyczyniające się w znacznym stopniu do powstania wypadku przy
                        pracy <span class="italic">(wskazać dowody, a w przypadku odmowy przez poszkodowanego poddania
                            się badaniom na zawartość tych substancji w organizmie – zamieścić informację o tym fakcie)
                        </span>: <sup>4)</sup><br>
                    </td>
                </tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">Nie badano</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
                <tr><td style="border-bottom: 1px dotted #000;">&nbsp;</td></tr>
            </table>
        </td>
    </tr>
</table>

<p style="margin-top: 25px;">
    6. Skutki wypadku dla poszkodowanego <span class="italic">(rodzaj i umiejscowienie urazu)</span>
</p>
<p>
    <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum,
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum,
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum,
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum
    </span>
</p>

<table style="margin-top: 25px;">
    <tr>
        <td style="width: 50%;">7. Stwierdza się, że wypadek:</td>
        <td style="width: 15%; border: 1px solid black; background-color: #ffffcc;" class="center">
            JEST <sup>6)</sup>
        </td>
        <td style="width: 10%;"></td>
        <td style="width: 15%; border: 1px solid black; background-color: #ffffcc;" class="center">
            <span class="strike">NIE JEST </span><sup>6)</sup>
        </td>
        <td style="width: 10%;"></td>
    </tr>
    <tr>
        <td colspan="4">
            <span class="ml-10">
                - wypadkiem przy pracy <sup>6)</sup>
            </span>
            <br>
            <span class="ml-10">
                - <span class="strike">traktowany na równi z wypadkiem przy pracy</span> <sup>6)</sup>
            </span>
            <br>
            co uzasadnia się następująco: <sup>4)</sup><br>
        </td>
    </tr>
</table>

<p>
    <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum,
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum,
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum,
        Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum, Lorem ipsum, lorem ipsum
    </span>
</p>

<table style="width: 100%; background-color: transparent; margin-top: 15px;">
    <tr>
        <td colspan="6" style="padding-bottom: 5px;">
            <strong>8.</strong> Rodzaj wypadku: <sup>6)</sup>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid #000; padding: 2px 6px; width: 15%">
            indywidualny
        </td>
        <td style="width: 2%"></td>
        <td style="border: 1px solid #000; padding: 2px 6px; width: 13%">
            <span style="text-decoration: line-through;">zbiorowy</span>
        </td>
        <td style="width: 2%"></td>
        <td style="border: 1px solid #000; padding: 2px 6px; width: 13%">
            <span style="text-decoration: line-through;">śmiertelny</span>
        </td>
        <td style="width: 2%"></td>
        <td style="border: 1px solid #000; padding: 2px 6px; width: 12%">
            <span style="text-decoration: line-through;">ciężki</span>
        </td>
        <td style="width: 2%"></td>
        <td colspan="3" style="border: 1px solid #000; padding: 2px 6px; width: 39%">
            powodujący czasową niezdolność do pracy
        </td>
    </tr>
</table>

<table>
    <tr>
        <td style="width: 3%;"><strong>9.</strong></td>
        <td colspan="3"><strong>Wnioski i zalecane środki profilaktyczne:</strong> <sup>4)</sup></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">
            <div class="text-area" style="height: 150px;"></div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header"><strong>10.</strong> Podpisy członków zespołu powypadkowego uczestniczących w ustalaniu okoliczności i przyczyn wypadku:</td>
    </tr>
    <tr>
        <td style="width: 3%;">1)</td>
        <td style="width: 47%;">
            <div class="signature-area"></div>
            <span class="small">czytelny podpis</span>
        </td>
        <td style="width: 3%;">2)</td>
        <td style="width: 47%;">
            <div class="signature-area"></div>
            <span class="small">czytelny podpis</span>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4"><strong>11.</strong> Protokół sporządzono dnia: <span class="field-line-wide"></span></td>
    </tr>
    <tr>
        <td colspan="4" class="center small">data</td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header"><strong>12.</strong> Przeszkody lub trudności, które uniemożliwiły sporządzenie protokołu w wymaganym terminie 14 dni:</td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="text-area" style="height: 80px;"></div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header">
            <strong>13.</strong> Poszkodowany / <span class="strike">członek rodziny</span> <sup>6)</sup><br>
            - zapoznany został z niniejszym protokołem oraz pouczony o prawie zgłoszenia do protokołu uwag i zastrzeżeń<br>
            - zgłasza uwagi i zastrzeżenia do protokołu <span class="strike">TAK</span>/NIE <sup>6)</sup><br>
            <span class="italic">(zgłoszone uwagi i zastrzeżenia należy dołączyć do protokołu)</span>.
        </td>
    </tr>
    <tr>
        <td style="width: 40%;">
            <div class="signature-area"></div>
            <span class="small">imię i nazwisko poszkodowanego pracownika lub uprawnionego członka rodziny</span>
        </td>
        <td style="width: 20%;">
            <div class="signature-area"></div>
            <span class="small">dnia</span>
        </td>
        <td style="width: 20%;">
            <div class="signature-area"></div>
            <span class="small">podpis</span>
        </td>
        <td style="width: 20%;"></td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4"><strong>14.</strong> Protokół zatwierdzono dnia: <span class="field-line-wide"></span></td>
    </tr>
    <tr>
        <td style="width: 50%;" class="center small">data</td>
        <td style="width: 50%;" class="center small">podpis pracodawcy</td>
        <td colspan="2"></td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header"><strong>15.</strong> Potwierdzenie odbioru protokołu</td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small">imię i nazwisko poszkodowanego pracownika lub uprawnionego członka rodziny</span>
        </td>
    </tr>
    <tr>
        <td style="width: 50%;">
            Data: doręczenia / <span class="strike">przesłania protokołu:</span> <sup>6)</sup><br>
            <div class="field-line-wide" style="width: 100%;"></div>
        </td>
        <td style="width: 50%;">
            <div class="signature-area"></div>
            <span class="small">podpis / nr przesyłki poleconej</span>
        </td>
        <td colspan="2"></td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header"><strong>16.</strong> Wykaz załączników do protokołu:</td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="text-area" style="height: 100px;"></div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header">
            <strong>POUCZENIE</strong><br><br>
            <strong>I.</strong> Przed zatwierdzeniem protokołu zespół powypadkowy jest obowiązany zapoznać z treścią protokołu poszkodowanego pracownika, a w razie wypadku śmiertelnego, uprawnionego członka rodziny pracownika, który ma prawo zgłoszenia uwag i zastrzeżeń do ustaleń zawartych w protokole.<br><br>
            <strong>II.</strong> Poszkodowany pracownik, a w razie wypadku śmiertelnego – uprawniony członek rodziny zmarłego pracownika może wystąpić do sądu rejonowego – sądu pracy w <span class="field-line-wide"></span> z powództwem o ustalenie i sprostowanie protokołu na podstawie art. 189 Kodeksu postępowania cywilnego. Z powództwem takim, w interesie poszkodowanego pracownika, może wystąpić również organizacja związkowa, działająca u pracodawcy zatrudniającego poszkodowanego pracownika.
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="small">
            <sup>1)</sup> Jeżeli nie został nadany NIP, podać PESEL lub numer dowodu osobistego albo innego dokumentu potwierdzającego tożsamość.<br>
            <sup>2)</sup> Jeżeli nie został nadany numer PESEL, podać numer dowodu osobistego albo innego dokumentu potwierdzającego tożsamość.<br>
            <sup>3)</sup> Podać pełny kod zawodu (specjalności), tj. sześciocyfrowy symbol zgodny z obowiązującą klasyfikacją zawodów i specjalności.<br>
            <sup>4)</sup> Jeżeli zabraknie miejsca na druku, należy go uzupełnić kolejną stroną podpisaną przez członków zespołu powypadkowego.<br>
            <sup>5)</sup> Przez inne przepisy dotyczące ochrony życia i zdrowia rozumie się np. przepisy o ochronie przeciwpożarowej, o dozorze technicznym, przepisy prawa geologicznego i górniczego, budowlanego, o ruchu drogowym.<br>
            <sup>6)</sup> Niepotrzebne skreślić.
        </td>
    </tr>
</table>
</body>
</html>
