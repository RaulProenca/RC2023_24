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
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="inputNome" name="inputNome"
                                            placeholder="Insira o nome do atleta" />
                                        <label for="inputNome">Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="inputEmail" name="inputEmail"
                                            placeholder="name@example.com" />
                                        <label for="inputEmail">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="inputDataNasc" name="inputDataNasc"
                                            placeholder="Data de Nascimento" />
                                        <label for="inputDataNasc">Data de Nascimento</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating mb-3">
                                        <select class="select2 form-select form-control"
                                            style="width: 100%; padding: 1rem 12px;" placeholder="Escalão"
                                            id="selectEscalao" name="selectEscalao">
                                            <option selected="selected" disabled>Escalão</option>
                                            <option value="BA">Benjamin A</option>
                                            <option value="BB">Benjamin B</option>
                                            <option value="IF">Infantil</option>
                                            <option value="IN">Iniciado</option>
                                            <option value="JV">Juvenil</option>
                                            <option value="JU">Júnior</option>
                                            <option value="S23">Sub-23</option>
                                            <option value="SN">Sénior</option>
                                            <option value="M35">M35</option>
                                            <option value="M40">M40</option>
                                            <option value="M45">M45</option>
                                            <option value="M50">M50</option>
                                            <option value="M55">M55</option>
                                            <option value="M60">M60</option>
                                            <option value="M65">M65</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Género</label>
                                    <div class="form-floating mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inputGen" id="inputGen1"
                                                value="M" checked>
                                            <label class="form-check-label" for="inputGen1">
                                                M
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inputGen" id="inputGen2"
                                                value="F">
                                            <label class="form-check-label" for="inputGen2">
                                                F
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="inputCC" name="inputCC"
                                            placeholder="Cartão de cidadão do atleta" />
                                        <label for="InputCC">BI/CC</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="inputNIF" name="inputNIF"
                                            placeholder="NIf do atleta" />
                                        <label for="InputNIF">NIF</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="inputTel" name="inputTel"
                                            placeholder="Telemóvel" />
                                        <label for="InputTel">Telemóvel</label>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <select class="select2 form-select form-control"
                                            style="width: 100%; padding: 1rem 12px;" placeholder="Nacionalidade"
                                            id="selectNac" name="selectNac">
                                            <option selected="selected" disabled>Nacionalidade</option>
                                            <option>Benjamin A</option>
                                            <option>Benjamin B</option>
                                            <option>Infantil</option>
                                            <option>Iniciado</option>
                                            <option>Juvenil</option>
                                            <option>Júnior</option>
                                            <option>Sub-23</option>
                                            <option>Sénior</option>
                                            <option>M35</option>
                                            <option>M40</option>
                                            <option>M45</option>
                                            <option>M50</option>
                                            <option>M55</option>
                                            <option>M60</option>
                                            <option>M65</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-floating mb-3">
                                        <select class="select2 form-select form-control"
                                            style="width: 100%; padding: 1rem 12px;" placeholder="T-shirt"
                                            id="selectShirt" name="selectShirt">
                                            <option selected="selected" disabled>T-shirt</option>
                                            <option>XS</option>
                                            <option>S</option>
                                            <option>M</option>
                                            <option>L</option>
                                            <option>XL</option>
                                        </select>
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
                                                <input class="form-control" type="file" id="formFile">
                                            </div>
                                        </div>
                                        <div class="ms-auto mt-3 mt-md-0">
                                            <button type="reset" class="
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
