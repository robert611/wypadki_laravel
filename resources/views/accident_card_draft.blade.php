<html>
<head>
    <meta charset="UTF-8"/>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }

        .corner-info {
            font-size: 9pt;
            margin-top: 50px;
            margin-bottom: 70px;
        }

        .title {
            font-size: 12pt;
            text-align: center;
            text-transform: uppercase;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .section-title {
            font-size: 12pt;
            margin-top: 30px;
            margin-bottom: 30px;
            font-family: 'DejaVu Sans', sans-serif;
        }

        .border-bottom {
            border-bottom: 1px dotted #000;
        }

        .pt-12 {
            padding-top: 12px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="corner-info">
    <span style="border-bottom: 1px dotted #000; display: inline; width: 100%;">
        {{ $maker_name_and_address }}
    </span>
    <br>
    Nazwa i adres podmiotu <br/>
    sporządzającego kartę wypadku
</div>

<h2 class="title">
    KARTA WYPADKU
</h2>

<h3 class="section-title">I. DANE IDENTYFIKACYJNE PŁATNIKA SKŁADEK<sup>1</sup></h3>

<table class="first-section" style="width: 100%; font-size: 10pt; font-family: DejaVu Sans, sans-serif; border-collapse: collapse;">
    <tr style="margin-bottom: 10px">
        <td style="width: 3%; padding-top: 12px;">1.</td>
        <td style="width: 30%; padding-top: 12px;">Imię i nazwisko lub nazwa</td>
        <td class="border-bottom pt-12">{{ $payer_name }}</td>
    </tr>
    <tr>
        <td class="pt-12">2.</td>
        <td class="pt-12">Adres siedziby</td>
        <td class="border-bottom pt-12">{{ $payer_residence_address }}</td>
    </tr>
    <tr>
        <td class="pt-12">3.</td>
        <td colspan="2">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="width: 5%; font-size: 10pt; padding-top: 12px;">NIP</td>
                    <td class="border-bottom pt-12 text-center">{{ $payer_nip }}</td>
                    <td style="width: 5%; font-size: 10pt; padding-top: 12px;">REGON</td>
                    <td class="border-bottom pt-12 text-center">{{ $payer_regon }}</td>
                    <td style="width: 5%; font-size: 10pt; padding-top: 12px;">PESEL</td>
                    <td class="border-bottom pt-12 text-center">{{ $payer_pesel }}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="padding-top: 10pt; padding-left: 19px;">
            Dokument tożsamości (dowód osobisty lub paszport)
        </td>
    </tr>
    <tr>
        <td colspan="3" style="padding-left: 19px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr style="border-bottom: 1px dotted #000;">
                    <td style="width: 33%; text-align: left; padding-top: 12px;">{{ $p_doc }}</td>
                    <td style="width: 33%; text-align: center; padding-top: 12px;">{{ $p_doc_s }}</td>
                    <td style="width: 33%; text-align: right; padding-top: 12px;">{{ $p_doc_nr }}</td>
                </tr>
                <tr style="font-size: 8pt;">
                    <td style="width: 33%; text-align: left;">rodzaj dokumentu</td>
                    <td style="width: 33%; text-align: center;">seria</td>
                    <td style="width: 33%; text-align: right;">numer</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<h2 class="section-title">II. DANE IDENTYFIKACYJNE POSZKODOWANEGO</h2>

<table class="second-section" style="width: 100%; font-size: 10pt; font-family: DejaVu Sans, sans-serif; border-collapse: collapse;">
    <tr>
        <td style="width: 3%; padding-top: 12px;">1.</td>
        <td style="width: 50%; padding-top: 12px;">Imię i nazwisko poszkodowanego</td>
        <td style="width: 100%; border-bottom: 1px dotted #000; padding-top: 12px;">
            {{ $injured_full_name }}
        </td>
    </tr>
    <tr>
        <td style="width: 3%; padding-top: 12px;">2.</td>
        <td style="width: 15%; padding-top: 12px;">PESEL</td>
        <td style="width: 100%; border-bottom: 1px dotted #000; padding-top: 12px;">
            {{ $injured_pesel }}
        </td>
    </tr>
    <tr>
        <td colspan="3" style="padding-top: 12px; padding-left: 19px;">
            Dokument tożsamości (dowód osobisty lub paszport)
        </td>
    </tr>
    <tr>
        <td colspan="3" style="padding-left: 19px;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr class="border-bottom pt-12">
                    <td style="width: 33%; text-align: left; padding-top: 12px;">{{ $i_doc }}</td>
                    <td style="width: 33%; text-align: center; padding-top: 12px;">{{ $i_doc_s }}</td>
                    <td style="width: 33%; text-align: right; padding-top: 12px;">{{ $i_doc_n }}</td>
                </tr>
                <tr style="font-size: 8pt;">
                    <td style="width: 33%; text-align: left;">rodzaj dokumentu</td>
                    <td style="width: 33%; text-align: center;">seria</td>
                    <td style="width: 33%; text-align: right;">numer</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="pt-12">3.</td>
        <td class="pt-12">Data i miejsce urodzenia</td>
        <td class="border-bottom pt-12">{{ $injured_birth_date_and_place }}</td>
    </tr>
    <tr>
        <td class="pt-12">4.</td>
        <td class="pt-12">Adres zamieszkania</td>
        <td class="border-bottom pt-12">{{ $injured_address }}</td>
    </tr>
    <tr>
        <td style="padding-top: 12px; vertical-align: top;">5.</td>
        <td colspan="2" style="padding-top: 12px;">Tytuł ubezpieczenia wypadkowego (wymienić numer pozycji i pełny tytuł ubezpieczenia społecznego, zgodnie z art. 3 ust. 3 albo art. 3a ustawy z dnia 30 października 2002 r. o ubezpieczeniu społecznym z tytułu wypadków przy pracy i chorób zawodowych (Dz. U. z 2019 r. poz. 1205, z późn. zm.))</td>
    </tr>
    <tr>
        <td></td>
        <td colspan="2" style="border-bottom: 1px dotted #000; height: 1em; padding-top: 12px;">
            {{ $injured_insurance_information }}
        </td>
    </tr>
</table>

<div style="font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 20px; line-height: 1.3; padding-top: 15px;">
    <div style="width: 30%; height: 2px; background-color: grey;"></div>
    <p style="margin: 5px 0; text-align: justify;">
        <sup>1</sup>  Nie wypełniają podmioty niebędące płatnikami składek na ubezpieczenie wypadkowe.
    </p>
</div>

<h2 class="section-title">III. INFORMACJE O WYPADKU</h2>

<div class="third-section" style="width: 100%; font-size: 10pt; font-family: DejaVu Sans, sans-serif; border-collapse: collapse;">
    <p>
        1. Data zgłoszenia oraz imię i nazwisko osoby zgłaszającej wypadek
    </p>
    <p>
        <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
            {{ $accident_report_date_and_full_name }}
        </span>
    </p>

    <p style="margin-top: 25px;">
        2. Informacje dotyczące okoliczności, przyczyn, czasu i miejsca wypadku, rodzaju
        i umiejscowienia urazu
    </p>
    <p>
        <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
            {{ $accident_details }}
        </span>
    </p>

    <p style="margin-top: 25px;">
        3. Świadkowie wypadku:
    </p>
    <table style="width: 100%; border-collapse: collapse; font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 10px;">
        <tr>
            <td style="width: 3%; padding-top: 12px; vertical-align: top;">1)</td>
            <td style="border-bottom: 1px dotted #000; padding-top: 12px; width: 97%;">
                {{ $witness_1 }}
            </td>
        </tr>
        <tr style="font-size: 8pt;">
            <td></td>
            <td style="padding-left: 20px;"></td>
        </tr>

        <tr>
            <td style="width: 3%; padding-top: 12px; vertical-align: top;">2)</td>
            <td style="border-bottom: 1px dotted #000; padding-top: 12px; width: 97%;">
                {{ $witness_2 }}
            </td>
        </tr>
        <tr style="font-size: 8pt;">
            <td></td>
            <td style="padding-left: 20px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="width: 50%; text-align: left;">imię i nazwisko</td>
                        <td style="width: 50%; text-align: left;">miejsce zamieszkania</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <p style="margin-top: 25px;">
        4. Wypadek jest / nie jest<sup>2</sup> wypadkiem przy pracy określonym w art. 3 ust. 3 pkt ..... <sup>3</sup> / albo art. 3a<sup>4</sup> ustawy z dnia 30 października 2002 r. o ubezpieczeniu społecznym z tytułu wypadków przy pracy i chorób zawodowych (uzasadnić i wskazać dowody, jeżeli zdarzenia nie uznano za wypadek przy pracy)
    </p>
    <p>
        <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
            {{ $not_work_accident_argumentation }}
        </span>
    </p>

    <p style="margin-top: 25px;">
        5. Stwierdzono, że wyłączną przyczyną wypadku było udowodnione naruszenie przez poszkodowanego przepisów dotyczących ochrony życia i zdrowia, spowodowane przez niego umyślnie lub wskutek rażącego niedbalstwa (wskazać dowody)
    </p>
    <p>
        <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
            {{ $bhp_rules_breached_argumentation }}
        </span>
    </p>

    <p style="margin-top: 25px;">
       6. Stwierdzono, że poszkodowany, będąc w stanie nietrzeźwości lub pod wpływem środków odurzających lub substancji psychotropowych, przyczynił się w znacznym stopniu do spowodowania wypadku (wskazać dowody, a w przypadku odmowy przez poszkodowanego poddania się badaniu na zawartość tych substancji w organizmie – zamieścić informację o tym fakcie)
    </p>
    <p>
        <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
            {{ $injured_was_intoxicated_argumentation }}
        </span>
    </p>

    <div style="font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 20px; line-height: 1.3; padding-top: 15px;">
        <div style="width: 30%; height: 2px; background-color: grey;"></div>
        <p style="margin: 5px 0; text-align: justify;">
            <sup>2</sup> Niepotrzebne skreślić.
        </p>

        <p style="margin: 5px 0; text-align: justify;">
            <sup>3</sup> Wpisać odpowiednią punkt z art. 3 ust. 3 ustawy z dnia 30 października 2002 r. o ubezpieczeniu społecznym z tytułu wypadków przy pracy i chorób zawodowych.
        </p>

        <p style="margin: 5px 0; text-align: justify;">
            <sup>4</sup> Niepotrzebne skreślić.
        </p>
    </div>
</div>

<h2 class="section-title">IV. POZOSTAŁE INFORMACJE</h2>

<div class="fourth-section" style="width: 100%; font-size: 10pt; font-family: DejaVu Sans, sans-serif; border-collapse: collapse;">
    <table style="width: 100%; font-size: 10pt; font-family: DejaVu Sans, sans-serif; border-collapse: collapse;">
        <tr>
            <td colspan="3" style="padding-top: 10pt;">
                1. Poszkodowanego (członka rodziny) zapoznano z treścią karty wypadku i pouczono o prawie zgłaszania uwag i zastrzeżeń do ustaleń zawartych w karcie wypadku
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr style="border-bottom: 1px dotted #000;">
                        <td style="width: 33%; text-align: left; padding-top: 12px;">{{ $other_full_name }}</td>
                        <td style="width: 33%; text-align: center; padding-top: 12px;">{{ $other_acc_date }}</td>
                        <td style="width: 33%; text-align: right; padding-top: 12px;"></td>
                    </tr>
                    <tr style="font-size: 8pt;">
                        <td style="width: 33%; text-align: left;">imię i nazwisko poszkodowanego (członka rodziny)</td>
                        <td style="width: 33%; text-align: center;">data</td>
                        <td style="width: 33%; text-align: right;">podpis</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; border-collapse: collapse; font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 10px;">
        <tr style="margin-bottom: 10px">
            <td style="width: 3%; padding-top: 12px;">2.</td>
            <td style="width: 40%; padding-top: 12px;">Kartę wypadku sporządzono w dniu</td>
            <td style="border-bottom: 1px dotted #000; padding-top: 12px;"></td>
        </tr>
    </table>

    <table style="width: 100%; border-collapse: collapse; font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 10px;">
        <tr>
            <td style="width: 3%; padding-top: 12px; vertical-align: top;">1)</td>
            <td style="border-bottom: 1px dotted #000; padding-top: 12px; width: 97%;">
                {{ $entity_responsible }}
            </td>
        </tr>
        <tr style="font-size: 8pt;">
            <td></td>
            <td style="padding-left: 20px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="width: 50%; text-align: left;">nazwa podmiotu obowiązanego
                            do sporządzenia karty wypadku
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td style="width: 3%; padding-top: 12px; vertical-align: top;">2)</td>
            <td style="border-bottom: 1px dotted #000; padding-top: 12px; width: 97%;">

            </td>
        </tr>
        <tr style="font-size: 8pt;">
            <td></td>
            <td style="padding-left: 20px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <td style="width: 50%; text-align: left;">imię i nazwisko sporządzającego kartę wypadku</td>
                        <td style="width: 50%; text-align: right;">podpis</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <p>
        3. Przeszkody i trudności uniemożliwiające sporządzenie karty wypadku w wymaganym terminie 14 dni
    </p>
    <p>
        <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
            {{ $preparation_not_in_time }}
        </span>
    </p>

    <table style="width: 100%; border-collapse: collapse; font-size: 10pt; font-family: DejaVu Sans, sans-serif; margin-top: 10px;">
        <tr style="margin-bottom: 10px">
            <td style="width: 3%; padding-top: 12px;">4.</td>
            <td style="width: 40%; padding-top: 12px;">Kartę wypadku odebrano w dniu</td>
            <td style="border-bottom: 1px dotted #000; padding-top: 12px;"></td>
        </tr>
        <tr style="font-size: 8pt;">
            <td></td>
            <td></td>
            <td style="text-align: center; padding-top: 2px;">podpis uprawnionego</td>
        </tr>
    </table>

    <p>
        5. Załączniki:
    </p>
    <p>
        <span style="border-bottom: 1px dotted #000; display: block; width: 100%;">
            @foreach($attachments as $attachment)
                {{ $attachment }} <br>
            @endforeach
        </span>
    </p>
</div>

</body>
</html>
