<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protokół Powypadkowy</title>
    <style>
        /* CSS kompatybilny z DomPDF */
        body {
            font-family: Arial, sans-serif;
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
            border: 1px solid #000000;
            padding: 2px;
            vertical-align: top;
            text-align: left;
        }

        .no-border {
            border: none;
        }

        .center {
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        .underline {
            text-decoration: underline;
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
            border-bottom: 1px solid #000000;
            min-height: 15px;
            display: inline-block;
            width: 150px;
        }

        .field-line-wide {
            border-bottom: 1px solid #000000;
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
            border-bottom: 1px solid #000000;
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

        .page-break {
            page-break-before: always;
        }

        .number-boxes {
            display: inline-block;
        }

        .number-box {
            display: inline-block;
            width: 12px;
            height: 15px;
            border: 1px solid #000000;
            margin-right: 1px;
            text-align: center;
        }

        .spacer {
            height: 10px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <td colspan="4" class="protocol-header">
            <strong>Protokół Nr</strong>
            <span class="field-line" style="width: 80px;"></span>
            <strong>/</strong>
            <span class="number-box">2</span>
            <span class="number-box">0</span>
            <span class="number-box">2</span>
            <span class="number-box">4</span>
            <strong>r.</strong>
        </td>
    </tr>
    <tr>
        <td colspan="4" class="protocol-header">
            <strong>ustalenia okoliczności i przyczyn wypadku przy pracy</strong>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header">1. Dane pracodawcy:</td>
    </tr>
    <tr>
        <td colspan="3" style="width: 70%;">
            nazwa lub imię i nazwisko pracodawcy<br>
            <div class="field-line-wide" style="width: 100%; margin-top: 5px;"></div>
            <br><br>
            adres siedziby pracodawcy<br>
            <div class="field-line-wide" style="width: 100%; margin-top: 5px;"></div>
        </td>
        <td rowspan="3" style="width: 30%; height: 80px;">
            <!-- Miejsce na pieczęć -->
        </td>
    </tr>
    <tr>
        <td style="width: 35%;">
            NIP <sup>1)</sup><br>
            <div class="number-boxes" style="margin-top: 5px;">
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
            </div>
        </td>
        <td colspan="2" style="width: 35%;">
            PESEL<br>
            <div class="number-boxes" style="margin-top: 5px;">
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
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            numer dowodu osobistego lub inny dokument potwierdzający tożsamość pracodawcy<br>
            <div class="field-line-wide" style="width: 100%; margin-top: 5px;"></div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            Kod PKD<br>
            <div class="number-boxes" style="margin-top: 5px;">
                <span class="number-box"></span>
                <span class="number-box"></span>
                <span class="number-box"></span>
                <span class="number-box"></span>
                <span class="number-box"></span>
            </div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4" class="section-header">2. Zespół powypadkowy w składzie:</td>
    </tr>
    <tr>
        <td style="width: 3%;">1)</td>
        <td style="width: 47%;">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small">imię i nazwisko</span>
        </td>
        <td style="width: 47%;">
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small">funkcja</span>
        </td>
        <td rowspan="2" style="width: 3%;"></td>
    </tr>
    <tr>
        <td>2)</td>
        <td>
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small">imię i nazwisko</span>
        </td>
        <td>
            <div class="field-line-wide" style="width: 100%;"></div><br>
            <span class="small">funkcja</span>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4">
            dokonał w dniach od <span class="field-line"></span> do <span class="field-line"></span> ustaleń dotyczących okoliczności i przyczyn<br>
            wypadku przy pracy, jakiemu w dniu <span class="field-line"></span> o godz. <span class="field-line"></span> uległ(a)
        </td>
    </tr>
    <tr>
        <td colspan="4">
            Pan(i) <span class="field-line-wide"></span> urodzony(a) <span class="field-line-wide"></span><br>
            <span style="margin-left: 350px;">dnia</span>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            zamieszkały(a) <span class="field-line" style="width: 100px;"></span> <span class="field-line" style="width: 150px;"></span> <span class="field-line" style="width: 200px;"></span> <span class="field-line" style="width: 50px;"></span> <span class="field-line" style="width: 50px;"></span><br>
            <span style="margin-left: 60px; font-size: 8px;">kod pocztowy</span>
            <span style="margin-left: 100px; font-size: 8px;">miejscowość</span>
            <span style="margin-left: 150px; font-size: 8px;">ulica</span>
            <span style="margin-left: 30px; font-size: 8px;">nr domu</span>
            <span style="margin-left: 15px; font-size: 8px;">nr lokalu</span>
        </td>
    </tr>
    <tr>
        <td style="width: 25%;">
            PESEL<br>
            <div class="number-boxes" style="margin-top: 5px;">
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
            </div>
        </td>
        <td colspan="2" style="width: 50%;"></td>
        <td style="width: 25%;">
            numer dowodu osobistego lub innego dokumentu<br>
            potwierdzającego tożsamość<br>
            <div class="field-line-wide" style="width: 100%; margin-top: 5px;"></div>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            zatrudniony(a) w <span class="field-line-wide"></span> na stanowisku <span class="field-line"></span> <span class="field-line" style="width: 100px;"></span><br>
            <span style="margin-left: 100px; font-size: 8px;">komórka organizacyjna</span>
            <span style="margin-left: 200px; font-size: 8px;">nazwa stanowiska</span>
            <span style="margin-left: 50px; font-size: 8px;">kod zawodu <sup>3)</sup></span>
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

<table>
    <tr>
        <td style="width: 3%;"><strong>4.</strong></td>
        <td colspan="3"><strong>Ustalono następujące okoliczności wypadku:</strong> <sup>4)</sup></td>
    </tr>
    <tr>
        <td></td>
        <td colspan="3">
            <div class="text-area"></div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td style="width: 3%;"><strong>5.</strong></td>
        <td colspan="3"><strong>Ustalono następujące przyczyny wypadku:</strong> <sup>4)</sup></td>
    </tr>
    <tr>
        <td><strong>-</strong></td>
        <td colspan="3">
            <div class="text-area"></div>
        </td>
    </tr>
    <tr>
        <td><strong>-</strong></td>
        <td colspan="3">
            stwierdzono nieprzestrzeganie przez pracodawcę następujących przepisów prawa pracy, w szczególności przepisów i zasad bezpieczeństwa i higieny pracy lub innych przepisów dotyczących ochrony życia i zdrowia <span class="italic">(wskazać dowody)</span>: <sup>4), 5)</sup><br>
            <div class="text-area"></div>
            <div class="checkbox"></div> Nie stwierdzono
        </td>
    </tr>
    <tr>
        <td><strong>-</strong></td>
        <td colspan="3">
            stwierdzono, że wyłączną przyczyną wypadku było naruszenie przez poszkodowanego pracownika przepisów dotyczących ochrony życia i zdrowia, spowodowane przez niego umyślnie lub w skutek rażącego niedbalstwa <span class="italic">(wskazać dowody)</span>: <sup>4)</sup><br>
            <div class="text-area"></div>
            <div class="checkbox"></div> Nie stwierdzono
        </td>
    </tr>
    <tr>
        <td><strong>-</strong></td>
        <td colspan="3">
            stwierdzono stan nietrzeźwości albo użycie przez poszkodowanego pracownika środków odurzających lub substancji psychotropowych przyczyniające się w znacznym stopniu do powstania wypadku przy pracy <span class="italic">(wskazać dowody, a w przypadku odmowy przez poszkodowanego poddania się badaniom na zawartość tych substancji w organizmie – zamieścić informację o tym fakcie)</span>: <sup>4)</sup><br>
            <div class="text-area"></div>
            <div class="checkbox"></div> Nie badano
        </td>
    </tr>
</table>

<div class="page-break"></div>

<table>
    <tr>
        <td colspan="4" class="section-header"><strong>6.</strong> Skutki wypadku dla poszkodowanego <span class="italic">(rodzaj i umiejscowienie urazu)</span></td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="text-area" style="height: 120px;"></div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td style="width: 50%;"><strong>7.</strong> Stwierdza się, że wypadek:</td>
        <td style="width: 15%;" class="center"><strong>JEST</strong> <sup>6)</sup></td>
        <td style="width: 15%;" class="center"><strong><span class="strike">NIE JEST</span></strong> <sup>6)</sup></td>
        <td style="width: 20%;"></td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="checkbox"></div> wypadkiem przy pracy <sup>6)</sup><br>
            <div class="checkbox"></div> <span class="strike">traktowany na równi z wypadkiem przy pracy</span> <sup>6)</sup><br><br>
            co uzasadnia się następująco: <sup>4)</sup><br>
            <div class="text-area" style="height: 150px;"></div>
        </td>
    </tr>
</table>

<table>
    <tr>
        <td colspan="4"><strong>8.</strong> Rodzaj wypadku: <sup>6)</sup></td>
    </tr>
    <tr>
        <td style="width: 25%;">
            <div class="checkbox"></div> indywidualny
        </td>
        <td style="width: 25%;">
            <div class="checkbox"></div> <span class="strike">zbiorowy</span>
        </td>
        <td style="width: 25%;">
            <div class="checkbox"></div> <span class="strike">śmiertelny</span>
        </td>
        <td style="width: 25%;">
            <div class="checkbox"></div> <span class="strike">ciężki</span>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            <div class="checkbox"></div> powodujący czasową niezdolność do pracy
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
