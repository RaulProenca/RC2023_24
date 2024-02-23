@extends('layouts.outerhome')

@section('content')
<div class="page-titles">
    <div class="row">
        <div class="col-lg-7 col-md-6 col-12 align-self-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item">
                        <a href="home.html" class="link"><i class="ri-home-3-line fs-5"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Adicionar
                    </li>
                </ol>
            </nav>
            <h1 class="mb-0 fw-bold">Adicionar Atleta</h1>
        </div>
        <div class="
    col-lg-5 col-md-6
    d-none d-md-flex
    align-items-center
    justify-content-end
  ">
            <select class="form-select theme-select border-0" aria-label="Default select example">
                <option value="1" id="dataatual">

                </option>
            </select>
            <a href="listaratletas.html" class="btn btn-success d-flex align-items-center ms-2">
                <i class="ri-list-check me-1"></i>
                Listar Atletas
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- ============================================================= -->
    <!-- Start Page Content -->
    <!-- ============================================================= -->
    <div class="card overflow-hidden">
        <div class="card-body">
            <h4 class="card-title mb-3 pb-3 border-bottom" style="color: #FF8C00;">Atleta</h4>
              @if (session()->has('message'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('message') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <form method="POST" action="{{ route('atleta.store') }}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text"
                            class="form-control @error('inputNome') is-invalid @enderror"
                            id="inputNome" name="inputNome"
                            placeholder="Insira o nome do atleta" />

                            <label for="inputNome">Nome</label>
                            @error('inputNome')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control @error('inputEmail') is-invalid @enderror" id="inputEmail" name="inputEmail"
                                placeholder="name@example.com" />
                            <label for="inputEmail">Email</label>
                            @error('inputEmail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control @error('inputDataNasc') is-invalid @enderror" id="inputDataNasc" name="inputDataNasc"
                                placeholder="Data de Nascimento" />
                            <label for="inputDataNasc">Data de Nascimento</label>
                            @error('inputDataNasc')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select class="select2 form-select form-control @error('selectEscalao') is-invalid @enderror"
                                style="width: 100%; padding: 1rem 12px;" placeholder="Escalão"
                                id="selectEscalao" name="selectEscalao">
                                <option value="OP" selected="selected" disabled>Escalão</option>
                                <option value="BA">Benjamin A</option>
                                <option value="BB">Benjamin B</option>
                                <option value="IF">Infantil</option>
                                <option value="IN">Iniciado</option>
                                <option value="JV">Juvenil</option>
                                <option value="JU">Júnior</option>
                                <option value="S23">Sub-23</option>
                                <option value="SN">Sénior</option>
                                <option value="V35">V35</option>
                                <option value="V40">V40</option>
                                <option value="V45">V45</option>
                                <option value="V50">V50</option>
                                <option value="V55">V55</option>
                                <option value="V60">V60</option>
                                <option value="V65">V65</option>
                            </select>
                            @error('selectEscalao')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label>Género</label>
                        <div class="form-floating mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('inputGen') is-invalid @enderror" type="radio" name="inputGen" id="inputGen1"
                                    value="M" checked>
                                <label class="form-check-label" for="inputGen1">
                                    M
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('inputGen') is-invalid @enderror" type="radio" name="inputGen" id="inputGen2"
                                    value="F">
                                <label class="form-check-label" for="inputGen2">
                                    F
                                </label>
                            </div>
                            @error('inputGen')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('inputCC') is-invalid @enderror" id="inputCC" name="inputCC"
                                placeholder="Cartão de cidadão do atleta" />
                            <label for="inputCC">BI/CC</label>
                            @error('inputCC')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('inputNIF') is-invalid @enderror" id="inputNIF" name="inputNIF"
                                placeholder="NIf do atleta" />
                            <label for="InputNIF">NIF</label>
                            @error('inputNIF')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('inputTel') is-invalid @enderror" id="inputTel" name="inputTel"
                                placeholder="Telemóvel" />
                            <label for="InputTel">Telemóvel</label>
                            @error('inputTel')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <select class="select2 form-select form-control @error('selectNac') is-invalid @enderror"
                                style="width: 100%; padding: 1rem 12px;" placeholder="Nacionalidade"
                                id="selectNac" name="selectNac">
                                <option value="OP" selected="selected" disabled>Nacionalidade</option>
                                <option value="PT">Portugal</option>
                                <option value="AF">Afeganistão</option>
                                <option value="ZA">África do Sul</option>
                                <option value="AL">Albânia</option>
                                <option value="DE">Alemanha</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguila</option>
                                <option value="AQ">Antártida</option>
                                <option value="AG">Antígua e Barbuda</option>
                                <option value="AN">Antilhas Holandesas</option>
                                <option value="SA">Arábia Saudita</option>
                                <option value="DZ">Argélia</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Arménia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Austrália</option>
                                <option value="AT">Áustria</option>
                                <option value="AZ">Azerbaijão</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrein</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Bélgica</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermudas</option>
                                <option value="BO">Bolívia</option>
                                <option value="BA">Bósnia e Herzegovina</option>
                                <option value="BW">Botsuana</option>
                                <option value="BR">Brasil</option>
                                <option value="BN">Brunei</option>
                                <option value="BG">Bulgária</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="BT">Butão</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KH">Camboja</option>
                                <option value="CM">Camarões</option>
                                <option value="CA">Canadá</option>
                                <option value="QA">Catar</option>
                                <option value="KZ">Cazaquistão</option>
                                <option value="TD">Chade</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CY">Chipre</option>
                                <option value="SG">Singapura</option>
                                <option value="CO">Colômbia</option>
                                <option value="KM">Comores</option>
                                <option value="CG">Congo</option>
                                <option value="KP">Coreia do Norte</option>
                                <option value="KR">Coreia do Sul</option>
                                <option value="CI">Costa do Marfim</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croácia</option>
                                <option value="CU">Cuba</option>
                                <option value="DK">Dinamarca</option>
                                <option value="DJ">Djibuti</option>
                                <option value="DM">Dominica</option>
                                <option value="EG">Egito</option>
                                <option value="SV">El Salvador</option>
                                <option value="AE">Emirados Árabes Unidos</option>
                                <option value="EC">Equador</option>
                                <option value="ER">Eritreia</option>
                                <option value="SK">Eslováquia</option>
                                <option value="SI">Eslovénia</option>
                                <option value="ES">Espanha</option>
                                <option value="US">Estados Unidos</option>
                                <option value="EE">Estónia</option>
                                <option value="ET">Etiópia</option>
                                <option value="FJ">Fiji</option>
                                <option value="PH">Filipinas</option>
                                <option value="FI">Finlândia</option>
                                <option value="FR">França</option>
                                <option value="GA">Gabão</option>
                                <option value="GM">Gâmbia</option>
                                <option value="GH">Gana</option>
                                <option value="GE">Geórgia</option>
                                <option value="GS">Geórgia do Sul e Ilhas Sandwich do Sul</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Grécia</option>
                                <option value="GD">Grenada</option>
                                <option value="GL">Groenlândia</option>
                                <option value="GP">Guadalupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GY">Guiana</option>
                                <option value="GF">Guiana Francesa</option>
                                <option value="GN">Guiné</option>
                                <option value="GQ">Guiné Equatorial</option>
                                <option value="GW">Guiné-Bissau</option>
                                <option value="HT">Haiti</option>
                                <option value="NL">Holanda</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong, Região Admin. Especial da China</option>
                                <option value="HU">Hungria</option>
                                <option value="YE">Iémen</option>
                                <option value="BV">Ilha Bouvet</option>
                                <option value="CX">Ilha Christmas</option>
                                <option value="NF">Ilha Norfolk</option>
                                <option value="IM">Ilha de Man</option>
                                <option value="KY">Ilhas Caiman</option>
                                <option value="CC">Ilhas Cocos (Keeling)</option>
                                <option value="CK">Ilhas Cook</option>
                                <option value="FO">Ilhas Faroe</option>
                                <option value="HM">Ilhas Heard e McDonald</option>
                                <option value="FK">Ilhas Malvinas</option>
                                <option value="MP">Ilhas Marianas do Norte</option>
                                <option value="MH">Ilhas Marshall</option>
                                <option value="UM">Ilhas Menores Distantes dos Estados Unidos</option>
                                <option value="SB">Ilhas Salomão</option>
                                <option value="TC">Ilhas Turks e Caicos</option>
                                <option value="VG">Ilhas Virgens Britânicas</option>
                                <option value="VI">Ilhas Virgens dos EUA</option>
                                <option value="IN">Índia</option>
                                <option value="ID">Indonésia</option>
                                <option value="IR">Irã</option>
                                <option value="IQ">Iraque</option>
                                <option value="IE">Irlanda</option>
                                <option value="IS">Islândia</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Itália</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japão</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordânia</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="LA">Laos</option>
                                <option value="LS">Lesoto</option>
                                <option value="LV">Letónia</option>
                                <option value="LB">Líbano</option>
                                <option value="LR">Libéria</option>
                                <option value="LY">Líbia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lituânia</option>
                                <option value="LU">Luxemburgo</option>
                                <option value="MO">Macau, Região Admin. Especial da China</option>
                                <option value="MG">Madagascar</option>
                                <option value="MY">Malásia</option>
                                <option value="MW">Malawi</option>
                                <option value="MV">Maldivas</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MA">Marrocos</option>
                                <option value="MQ">Martinica</option>
                                <option value="MU">Maurício</option>
                                <option value="MR">Mauritânia</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">México</option>
                                <option value="MM">Mianmar</option>
                                <option value="FM">Micronésia</option>
                                <option value="MZ">Moçambique</option>
                                <option value="MD">Moldávia</option>
                                <option value="MC">Mónaco</option>
                                <option value="MN">Mongólia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="NA">Namíbia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NI">Nicarágua</option>
                                <option value="NE">Níger</option>
                                <option value="NG">Nigéria</option>
                                <option value="NU">Niue</option>
                                <option value="NO">Noruega</option>
                                <option value="NC">Nova Caledónia</option>
                                <option value="NZ">Nova Zelândia</option>
                                <option value="OM">Omã</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestina</option>
                                <option value="PA">Panamá</option>
                                <option value="PG">Papua-Nova Guiné</option>
                                <option value="PK">Paquistão</option>
                                <option value="PY">Paraguai</option>
                                <option value="PE">Peru</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PF">Polinésia Francesa</option>
                                <option value="PL">Polónia</option>
                                <option value="PR">Porto Rico</option>
                                <option value="KE">Quénia</option>
                                <option value="KG">Quirguistão</option>
                                <option value="GB">Reino Unido</option>
                                <option value="RE">Reunião</option>
                                <option value="RO">Roménia</option>
                                <option value="RW">Ruanda</option>
                                <option value="RU">Rússia</option>
                                <option value="EH">Saara Ocidental</option>
                                <option value="WS">Samoa</option>
                                <option value="AS">Samoa Americana</option>
                                <option value="SH">Santa Helena</option>
                                <option value="LC">Santa Lúcia</option>
                                <option value="BL">São Bartolomeu</option>
                                <option value="KN">São Cristóvão e Nevis</option>
                                <option value="SM">San Marino</option>
                                <option value="MF">São Martinho (parte francesa)</option>
                                <option value="PM">São Pedro e Miquelon</option>
                                <option value="ST">São Tomé e Príncipe</option>
                                <option value="VC">São Vicente e Granadinas</option>
                                <option value="SC">Seicheles</option>
                                <option value="SN">Senegal</option>
                                <option value="SL">Serra Leoa</option>
                                <option value="RS">Sérvia</option>
                                <option value="SY">Síria</option>
                                <option value="SO">Somália</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SZ">Suazilândia</option>
                                <option value="SD">Sudão</option>
                                <option value="SS">Sudão do Sul</option>
                                <option value="SE">Suécia</option>
                                <option value="CH">Suíça</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard e Jan Mayen</option>
                                <option value="TJ">Tadjiquistão</option>
                                <option value="TH">Tailândia</option>
                                <option value="TW">Taiwan</option>
                                <option value="TZ">Tanzânia</option>
                                <option value="IO">Territ. Britânico do Oceano Índico</option>
                                <option value="TF">Territórios Franceses do Sul</option>
                                <option value="PS">Territórios palestinos</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad e Tobago</option>
                                <option value="TN">Tunísia</option>
                                <option value="TM">Turcomenistão</option>
                                <option value="TR">Turquia</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UA">Ucrânia</option>
                                <option value="UG">Uganda</option>
                                <option value="UY">Uruguai</option>
                                <option value="UZ">Uzbequistão</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VA">Vaticano</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Vietname</option>
                                <option value="WF">Wallis e Futuna</option>
                                <option value="ZM">Zâmbia</option>
                                <option value="ZW">Zimbábue</option>
                            </select>
                            @error('selectNac')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <select class="select2 form-select form-control @error('inputNome') is-invalid @enderror""
                                style="width: 100%; padding: 1rem 12px;" placeholder="T-shirt"
                                id="selectShirt" name="selectShirt">
                                <option value="OP" selected="selected" disabled>T-shirt</option>
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                            </select>
                            @error('selectShirt')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <div class="form-check form-switch mt-3">
                                <input class="form-check-input" type="checkbox" id="switchFederado"
                                    name="switchFederado" checked />
                                <label class="form-check-label" for="switchFederado">Federado</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-md-flex align-items-center mt-3">
                            <span class="input-group-text bg-danger text-white">Foto</span>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input class="form-control @error('inputFoto') is-invalid @enderror"" type="file" id="inputFoto" name="inputFoto">
                                    @error('inputFoto')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="ms-auto mt-3 mt-md-0">
                                <button type="reset" id="btnReset" class="
                                        btn btn-warning
                                        font-weight-medium
                                        px-4
                                        ">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="rotate-ccw" class="feather-sm fill-white me-2"></i>
                                        Limpar
                                    </div>
                                </button>
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="ms-auto mt-3 mt-md-0">
                                <button type="submit" class="
                                        btn btn-info
                                        font-weight-medium
                                        px-4
                                        ">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="save" class="feather-sm fill-white me-2"></i>
                                        Gravar
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- ============================================================= -->
    <!-- End PAge Content -->
    <!-- ============================================================= -->
</div>
@endsection
