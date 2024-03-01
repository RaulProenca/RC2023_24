<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
use Illuminate\Http\Request;

class AtletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listar Atletas
        $atletas = Atleta::all(); //Obter todos os atletas
        return view('atleta.index', compact('atletas'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Lista de tamanhos das t-shirts

        $tamanhos = [
            "XS" => "Extra Small",
            "S" => "Small",
            "M" => "Medium",
            "L" => "Large",
            "XL" => "Extra Large",
            "XXL" => "Extra Extra Large",
        ];

        //Lista de escaloes
        $escaloes = [
            "BA" => "Benjamin A",
            "BB" => "Benjamin B",
            "IF" => "Infantil",
            "IN" => "Iniciado",
            "JV" => "Juvenil",
            "JU" => "Júnior",
            "S23" => "Sub-23",
            "SN" => "Sénior",
            "V35" => "V35",
            "V40" => "V40",
            "V45" => "V45",
            "V50" => "V50",
            "V55" => "V55",
            "V60" => "V60",
            "V65" => "V65"
        ];


        $paises = [
            "PT" => "Portugal",
            "AF" => "Afeganistão",
            "ZA" => "África do Sul",
            "AL" => "Albânia",
            "DE" => "Alemanha",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AI" => "Anguila",
            "AQ" => "Antártica",
            "AG" => "Antígua e Barbuda",
            "SA" => "Arábia Saudita",
            "DZ" => "Argélia",
            "AR" => "Argentina",
            "AM" => "Arménia",
            "AW" => "Aruba",
            "AU" => "Austrália",
            "AT" => "Áustria",
            "AZ" => "Azerbaijão",
            "BS" => "Bahamas",
            "BH" => "Bahrein",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BE" => "Bélgica",
            "BZ" => "Belize",
            "BJ" => "Benim",
            "BM" => "Bermudas",
            "BY" => "Bielorrússia",
            "BO" => "Bolívia",
            "BA" => "Bósnia e Herzegovina",
            "BW" => "Botsuana",
            "BV" => "Ilha Bouvet",
            "BR" => "Brasil",
            "BN" => "Brunei",
            "BG" => "Bulgária",
            "BF" => "Burquina Faso",
            "BI" => "Burundi",
            "BT" => "Butão",
            "CV" => "Cabo Verde",
            "CM" => "Camarões",
            "KH" => "Camboja",
            "CA" => "Canadá",
            "QA" => "Catar",
            "KZ" => "Cazaquistão",
            "TD" => "Chade",
            "CL" => "Chile",
            "CN" => "China",
            "CY" => "Chipre",
            "CX" => "Ilha Christmas",
            "SG" => "Cingapura",
            "CC" => "Ilhas Cocos (Keeling)",
            "CO" => "Colômbia",
            "KM" => "Comores",
            "CG" => "Congo",
            "KP" => "Coreia do Norte",
            "KR" => "Coreia do Sul",
            "CR" => "Costa Rica",
            "CI" => "Costa do Marfim",
            "HR" => "Croácia",
            "CU" => "Cuba",
            "DK" => "Dinamarca",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "EG" => "Egito",
            "SV" => "El Salvador",
            "AE" => "Emirados Árabes Unidos",
            "EC" => "Equador",
            "ER" => "Eritreia",
            "SK" => "Eslováquia",
            "SI" => "Eslovénia",
            "ES" => "Espanha",
            "US" => "Estados Unidos",
            "EE" => "Estónia",
            "ET" => "Etiópia",
            "FK" => "Ilhas Malvinas",
            "FO" => "Ilhas Faroé",
            "FJ" => "Fiji",
            "PH" => "Filipinas",
            "FI" => "Finlândia",
            "FR" => "França",
            "GA" => "Gabão",
            "GM" => "Gâmbia",
            "GH" => "Gana",
            "GE" => "Geórgia",
            "GS" => "Geórgia do Sul e Ilhas Sandwich do Sul",
            "GI" => "Gibraltar",
            "GR" => "Grécia",
            "GD" => "Granada",
            "GL" => "Groenlândia",
            "GP" => "Guadalupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GG" => "Guernsey",
            "GY" => "Guiana",
            "GF" => "Guiana Francesa",
            "GN" => "Guiné",
            "GQ" => "Guiné Equatorial",
            "GW" => "Guiné-Bissau",
            "HT" => "Haiti",
            "HM" => "Ilha Heard e Ilhas McDonald",
            "HN" => "Honduras",
            "HK" => "Hong Kong",
            "HU" => "Hungria",
            "YE" => "Iémen",
            "BV" => "Ilha Bouvet",
            "AC" => "Ilha de Ascensão",
            "IM" => "Ilha de Man",
            "NF" => "Ilha Norfolk",
            "AX" => "Ilhas Aland",
            "KY" => "Ilhas Cayman",
            "IC" => "Ilhas Canárias",
            "CC" => "Ilhas Cocos",
            "CK" => "Ilhas Cook",
            "FK" => "Ilhas Malvinas",
            "FO" => "Ilhas Faroé",
            "GS" => "Ilhas Geórgia do Sul e Sandwich do Sul",
            "HM" => "Ilhas Heard e McDonald",
            "FK" => "Ilhas Malvinas",
            "MP" => "Ilhas Marianas do Norte",
            "MH" => "Ilhas Marshall",
            "UM" => "Ilhas Menores Afastadas dos Estados Unidos",
            "PN" => "Ilhas Pitcairn",
            "SB" => "Ilhas Salomão",
            "TC" => "Ilhas Turks e Caicos",
            "VG" => "Ilhas Virgens Britânicas",
            "VI" => "Ilhas Virgens dos EUA",
            "IL" => "Israel",
            "IT" => "Itália",
            "JM" => "Jamaica",
            "JP" => "Japão",
            "JE" => "Jersey",
            "JO" => "Jordânia",
            "XK" => "Kosovo",
            "KW" => "Kuwait",
            "LA" => "Laos",
            "LS" => "Lesoto",
            "LV" => "Letónia",
            "LB" => "Líbano",
            "LR" => "Libéria",
            "LY" => "Líbia",
            "LI" => "Liechtenstein",
            "LT" => "Lituânia",
            "LU" => "Luxemburgo",
            "MO" => "Macau",
            "MK" => "Macedónia do Norte",
            "MG" => "Madagáscar",
            "MW" => "Maláui",
            "MV" => "Maldivas",
            "MY" => "Malásia",
            "ML" => "Mali",
            "MT" => "Malta",
            "MA" => "Marrocos",
            "MQ" => "Martinica",
            "MU" => "Maurícia",
            "MR" => "Mauritânia",
            "YT" => "Mayotte",
            "MX" => "México",
            "MM" => "Mianmar",
            "FM" => "Micronésia",
            "MZ" => "Moçambique",
            "MD" => "Moldávia",
            "MC" => "Mónaco",
            "MN" => "Mongólia",
            "ME" => "Montenegro",
            "MS" => "Montserrat",
            "NA" => "Namíbia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NI" => "Nicarágua",
            "NE" => "Níger",
            "NG" => "Nigéria",
            "NU" => "Niué",
            "NO" => "Noruega",
            "NC" => "Nova Caledónia",
            "NZ" => "Nova Zelândia",
            "OM" => "Omã",
            "NL" => "Países Baixos",
            "PW" => "Palau",
            "PA" => "Panamá",
            "PG" => "Papua-Nova Guiné",
            "PK" => "Paquistão",
            "PY" => "Paraguai",
            "PE" => "Peru",
            "PF" => "Polinésia Francesa",
            "PL" => "Polónia",
            "PR" => "Porto Rico",
            "QA" => "Qatar",
            "KE" => "Quénia",
            "KG" => "Quirguistão",
            "GB" => "Reino Unido",
            "CF" => "República Centro-Africana",
            "CZ" => "República Checa",
            "DO" => "República Dominicana",
            "RE" => "Reunião",
            "RO" => "Roménia",
            "RW" => "Ruanda",
            "RU" => "Rússia",
            "EH" => "Saara Ocidental",
            "WS" => "Samoa",
            "AS" => "Samoa Americana",
            "BL" => "São Bartolomeu",
            "KN" => "São Cristóvão e Neves",
            "SM" => "São Marinho",
            "MF" => "São Martinho",
            "PM" => "São Pedro e Miquelon",
            "ST" => "São Tomé e Príncipe",
            "VC" => "São Vicente e Granadinas",
            "SN" => "Senegal",
            "SL" => "Serra Leoa",
            "RS" => "Sérvia",
            "SC" => "Seychelles",
            "SY" => "Síria",
            "SO" => "Somália",
            "LK" => "Sri Lanca",
            "SZ" => "Suazilândia",
            "SD" => "Sudão",
            "SS" => "Sudão do Sul",
            "SE" => "Suécia",
            "CH" => "Suíça",
            "SR" => "Suriname",
            "SJ" => "Svalbard e Jan Mayen",
            "TH" => "Tailândia",
            "TW" => "Taiwan",
            "TJ" => "Tajiquistão",
            "TZ" => "Tanzânia",
            "IO" => "Território Britânico do Oceano Índico",
            "TF" => "Territórios Franceses do Sul",
            "PS" => "Territórios palestinianos",
            "TL" => "Timor-Leste",
            "TG" => "Togo",
            "TK" => "Tokelau",
            "TO" => "Tonga",
            "TT" => "Trindade e Tobago",
            "TN" => "Tunísia",
            "TR" => "Turquia",
            "TM" => "Turquemenistão",
            "TC" => "Turks e Caicos",
            "TV" => "Tuvalu",
            "UA" => "Ucrânia",
            "UG" => "Uganda",
            "UY" => "Uruguai",
            "UZ" => "Uzbequistão",
            "VU" => "Vanuatu",
            "VA" => "Vaticano",
            "VE" => "Venezuela",
            "VN" => "Vietname",
            "WF" => "Wallis e Futuna",
            "ZM" => "Zâmbia",
            "ZW" => "Zimbábue"
        ];
        return view('atleta.create', compact('tamanhos', 'escaloes', 'paises'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validação dos dados
        $request->validate([
            'inputNome' => 'required|string|max:255',
            'inputEmail' => 'required|email|unique:atletas,email',
            'inputDataNasc' => 'required|date',
            'selectEscalao' => 'required',
            'inputGen' => 'required',
            'inputCC' => 'required|numeric|digits:8|unique:atletas,cc',
            'inputNIF' => 'required|numeric|digits:9|unique:atletas,nif',
            'inputTel' => 'required|numeric|digits:9',
            'selectNac' => 'required',
            'selectShirt' => 'required',
            //'inputFoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Inserção de dados na base de dados
        $atleta = new Atleta();
        $atleta->nome = $request->inputNome;
        $atleta->email = $request->inputEmail;
        $atleta->data_nasc = $request->inputDataNasc;
        $atleta->escalao = $request->selectEscalao;
        $atleta->genero = $request->inputGen;
        $atleta->cc = $request->inputCC;
        $atleta->nif = $request->inputNIF;
        $atleta->telemovel = $request->inputTel;
        $atleta->nacionalidade = $request->selectNac;
        $atleta->tshirt = $request->selectShirt;
        $atleta->federado = $request->has('switchFederado');
        $atleta->foto = $request->inputFoto;
        $atleta->save();
        return redirect()->route('atleta.create')
        ->with('message', 'Atleta criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Atleta $atleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atleta $atleta)
    {
        //Mostrar o formulário de edição de atleta

        $tamanhos = [
            "XS" => "Extra Small",
            "S" => "Small",
            "M" => "Medium",
            "L" => "Large",
            "XL" => "Extra Large",
            "XXL" => "Extra Extra Large",
        ];

        //Lista de escaloes
        $escaloes = [
            "BA" => "Benjamin A",
            "BB" => "Benjamin B",
            "IF" => "Infantil",
            "IN" => "Iniciado",
            "JV" => "Juvenil",
            "JU" => "Júnior",
            "S23" => "Sub-23",
            "SN" => "Sénior",
            "V35" => "V35",
            "V40" => "V40",
            "V45" => "V45",
            "V50" => "V50",
            "V55" => "V55",
            "V60" => "V60",
            "V65" => "V65"
        ];


        $paises = [
            "PT" => "Portugal",
            "AF" => "Afeganistão",
            "ZA" => "África do Sul",
            "AL" => "Albânia",
            "DE" => "Alemanha",
            "AD" => "Andorra",
            "AO" => "Angola",
            "AI" => "Anguila",
            "AQ" => "Antártica",
            "AG" => "Antígua e Barbuda",
            "SA" => "Arábia Saudita",
            "DZ" => "Argélia",
            "AR" => "Argentina",
            "AM" => "Arménia",
            "AW" => "Aruba",
            "AU" => "Austrália",
            "AT" => "Áustria",
            "AZ" => "Azerbaijão",
            "BS" => "Bahamas",
            "BH" => "Bahrein",
            "BD" => "Bangladesh",
            "BB" => "Barbados",
            "BE" => "Bélgica",
            "BZ" => "Belize",
            "BJ" => "Benim",
            "BM" => "Bermudas",
            "BY" => "Bielorrússia",
            "BO" => "Bolívia",
            "BA" => "Bósnia e Herzegovina",
            "BW" => "Botsuana",
            "BV" => "Ilha Bouvet",
            "BR" => "Brasil",
            "BN" => "Brunei",
            "BG" => "Bulgária",
            "BF" => "Burquina Faso",
            "BI" => "Burundi",
            "BT" => "Butão",
            "CV" => "Cabo Verde",
            "CM" => "Camarões",
            "KH" => "Camboja",
            "CA" => "Canadá",
            "QA" => "Catar",
            "KZ" => "Cazaquistão",
            "TD" => "Chade",
            "CL" => "Chile",
            "CN" => "China",
            "CY" => "Chipre",
            "CX" => "Ilha Christmas",
            "SG" => "Cingapura",
            "CC" => "Ilhas Cocos (Keeling)",
            "CO" => "Colômbia",
            "KM" => "Comores",
            "CG" => "Congo",
            "KP" => "Coreia do Norte",
            "KR" => "Coreia do Sul",
            "CR" => "Costa Rica",
            "CI" => "Costa do Marfim",
            "HR" => "Croácia",
            "CU" => "Cuba",
            "DK" => "Dinamarca",
            "DJ" => "Djibouti",
            "DM" => "Dominica",
            "EG" => "Egito",
            "SV" => "El Salvador",
            "AE" => "Emirados Árabes Unidos",
            "EC" => "Equador",
            "ER" => "Eritreia",
            "SK" => "Eslováquia",
            "SI" => "Eslovénia",
            "ES" => "Espanha",
            "US" => "Estados Unidos",
            "EE" => "Estónia",
            "ET" => "Etiópia",
            "FK" => "Ilhas Malvinas",
            "FO" => "Ilhas Faroé",
            "FJ" => "Fiji",
            "PH" => "Filipinas",
            "FI" => "Finlândia",
            "FR" => "França",
            "GA" => "Gabão",
            "GM" => "Gâmbia",
            "GH" => "Gana",
            "GE" => "Geórgia",
            "GS" => "Geórgia do Sul e Ilhas Sandwich do Sul",
            "GI" => "Gibraltar",
            "GR" => "Grécia",
            "GD" => "Granada",
            "GL" => "Groenlândia",
            "GP" => "Guadalupe",
            "GU" => "Guam",
            "GT" => "Guatemala",
            "GG" => "Guernsey",
            "GY" => "Guiana",
            "GF" => "Guiana Francesa",
            "GN" => "Guiné",
            "GQ" => "Guiné Equatorial",
            "GW" => "Guiné-Bissau",
            "HT" => "Haiti",
            "HM" => "Ilha Heard e Ilhas McDonald",
            "HN" => "Honduras",
            "HK" => "Hong Kong",
            "HU" => "Hungria",
            "YE" => "Iémen",
            "BV" => "Ilha Bouvet",
            "AC" => "Ilha de Ascensão",
            "IM" => "Ilha de Man",
            "NF" => "Ilha Norfolk",
            "AX" => "Ilhas Aland",
            "KY" => "Ilhas Cayman",
            "IC" => "Ilhas Canárias",
            "CC" => "Ilhas Cocos",
            "CK" => "Ilhas Cook",
            "FK" => "Ilhas Malvinas",
            "FO" => "Ilhas Faroé",
            "GS" => "Ilhas Geórgia do Sul e Sandwich do Sul",
            "HM" => "Ilhas Heard e McDonald",
            "FK" => "Ilhas Malvinas",
            "MP" => "Ilhas Marianas do Norte",
            "MH" => "Ilhas Marshall",
            "UM" => "Ilhas Menores Afastadas dos Estados Unidos",
            "PN" => "Ilhas Pitcairn",
            "SB" => "Ilhas Salomão",
            "TC" => "Ilhas Turks e Caicos",
            "VG" => "Ilhas Virgens Britânicas",
            "VI" => "Ilhas Virgens dos EUA",
            "IL" => "Israel",
            "IT" => "Itália",
            "JM" => "Jamaica",
            "JP" => "Japão",
            "JE" => "Jersey",
            "JO" => "Jordânia",
            "XK" => "Kosovo",
            "KW" => "Kuwait",
            "LA" => "Laos",
            "LS" => "Lesoto",
            "LV" => "Letónia",
            "LB" => "Líbano",
            "LR" => "Libéria",
            "LY" => "Líbia",
            "LI" => "Liechtenstein",
            "LT" => "Lituânia",
            "LU" => "Luxemburgo",
            "MO" => "Macau",
            "MK" => "Macedónia do Norte",
            "MG" => "Madagáscar",
            "MW" => "Maláui",
            "MV" => "Maldivas",
            "MY" => "Malásia",
            "ML" => "Mali",
            "MT" => "Malta",
            "MA" => "Marrocos",
            "MQ" => "Martinica",
            "MU" => "Maurícia",
            "MR" => "Mauritânia",
            "YT" => "Mayotte",
            "MX" => "México",
            "MM" => "Mianmar",
            "FM" => "Micronésia",
            "MZ" => "Moçambique",
            "MD" => "Moldávia",
            "MC" => "Mónaco",
            "MN" => "Mongólia",
            "ME" => "Montenegro",
            "MS" => "Montserrat",
            "NA" => "Namíbia",
            "NR" => "Nauru",
            "NP" => "Nepal",
            "NI" => "Nicarágua",
            "NE" => "Níger",
            "NG" => "Nigéria",
            "NU" => "Niué",
            "NO" => "Noruega",
            "NC" => "Nova Caledónia",
            "NZ" => "Nova Zelândia",
            "OM" => "Omã",
            "NL" => "Países Baixos",
            "PW" => "Palau",
            "PA" => "Panamá",
            "PG" => "Papua-Nova Guiné",
            "PK" => "Paquistão",
            "PY" => "Paraguai",
            "PE" => "Peru",
            "PF" => "Polinésia Francesa",
            "PL" => "Polónia",
            "PR" => "Porto Rico",
            "QA" => "Qatar",
            "KE" => "Quénia",
            "KG" => "Quirguistão",
            "GB" => "Reino Unido",
            "CF" => "República Centro-Africana",
            "CZ" => "República Checa",
            "DO" => "República Dominicana",
            "RE" => "Reunião",
            "RO" => "Roménia",
            "RW" => "Ruanda",
            "RU" => "Rússia",
            "EH" => "Saara Ocidental",
            "WS" => "Samoa",
            "AS" => "Samoa Americana",
            "BL" => "São Bartolomeu",
            "KN" => "São Cristóvão e Neves",
            "SM" => "São Marinho",
            "MF" => "São Martinho",
            "PM" => "São Pedro e Miquelon",
            "ST" => "São Tomé e Príncipe",
            "VC" => "São Vicente e Granadinas",
            "SN" => "Senegal",
            "SL" => "Serra Leoa",
            "RS" => "Sérvia",
            "SC" => "Seychelles",
            "SY" => "Síria",
            "SO" => "Somália",
            "LK" => "Sri Lanca",
            "SZ" => "Suazilândia",
            "SD" => "Sudão",
            "SS" => "Sudão do Sul",
            "SE" => "Suécia",
            "CH" => "Suíça",
            "SR" => "Suriname",
            "SJ" => "Svalbard e Jan Mayen",
            "TH" => "Tailândia",
            "TW" => "Taiwan",
            "TJ" => "Tajiquistão",
            "TZ" => "Tanzânia",
            "IO" => "Território Britânico do Oceano Índico",
            "TF" => "Territórios Franceses do Sul",
            "PS" => "Territórios palestinianos",
            "TL" => "Timor-Leste",
            "TG" => "Togo",
            "TK" => "Tokelau",
            "TO" => "Tonga",
            "TT" => "Trindade e Tobago",
            "TN" => "Tunísia",
            "TR" => "Turquia",
            "TM" => "Turquemenistão",
            "TC" => "Turks e Caicos",
            "TV" => "Tuvalu",
            "UA" => "Ucrânia",
            "UG" => "Uganda",
            "UY" => "Uruguai",
            "UZ" => "Uzbequistão",
            "VU" => "Vanuatu",
            "VA" => "Vaticano",
            "VE" => "Venezuela",
            "VN" => "Vietname",
            "WF" => "Wallis e Futuna",
            "ZM" => "Zâmbia",
            "ZW" => "Zimbábue"
        ];


        //compact('atleta') -> envia a variável $atleta para a view edit.blade.php
        return view('atleta.edit', compact('atleta', 'tamanhos', 'escaloes', 'paises'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atleta $atleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atleta $atleta)
    {
        //Apagar atleta
        $atleta->delete();
        return redirect()->route('atleta.index')
            ->with('message', 'Atleta apagado com sucesso!');
    }
}