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
                        Editar
                    </li>
                </ol>
            </nav>
            <h1 class="mb-0 fw-bold">Editar Atleta</h1>
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
            <a href="{{ route('atleta.index') }}" class="btn btn-success d-flex align-items-center ms-2">
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
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             @endif


             <form method="POST" action="{{ route('atleta.update', $atleta->id) }}">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control @error('inputNome') is-invalid @enderror" id="inputNome" name="inputNome"
                                placeholder="Insira o nome do atleta" value="@if(old('inputNome')) {{old('inputNome')}} @else {{$atleta->nome}}" @endif/>
                            <label for="inputNome">Nome</label>
                            @error('inputNome')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" required class="form-control @error('inputEmail') is-invalid @enderror" id="inputEmail" name="inputEmail"
                                placeholder="name@example.com" value="@if(old('inputEmail')) {{old('inputEmail')}} @else {{$atleta->email}} @endif" />
                            <label for="inputEmail">Email</label>
                            @error('inputEmail')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <input type="date" required class="form-control @error('inputDataNasc') is-invalid @enderror" id="inputDataNasc" name="inputDataNasc"
                                placeholder="Data de Nascimento" value=@if(old('inputDataNasc')) {{old('inputDataNasc')}} @else{{date('Y-m-d', strtotime($atleta->data_nasc))}}@endif />
                            <label for="inputDataNasc">Data de Nascimento</label>
                            @error('inputDataNasc')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select required class="select2 form-select form-control @error('selectEscalao') is-invalid @enderror"
                                style="width: 100%; padding: 1rem 12px;" placeholder="Escalão"
                                id="selectEscalao" name="selectEscalao">
                                <option value="OP" selected="selected" disabled>Escalão</option>
                                <option value="BA" @if(old('selectEscalao') == 'BA') selected @endif>Benjamin A</option>
                                <option value="BB" @if(old('selectEscalao') == 'BB') selected @endif>Benjamin B</option>
                                <option value="IF" @if(old('selectEscalao') == 'IF') selected @endif>Infantil</option>
                                <option value="IN" @if(old('selectEscalao') == 'IN') selected @endif>Iniciado</option>
                                <option value="JV" @if(old('selectEscalao') == 'JV') selected @endif>Juvenil</option>
                                <option value="JU" @if(old('selectEscalao') == 'JU') selected @endif>Júnior</option>
                                <option value="S23" @if(old('selectEscalao') == 'S23') selected @endif>Sub-23</option>
                                <option value="SN" @if(old('selectEscalao') == 'SN') selected @endif>Sénior</option>
                                <option value="V35" @if(old('selectEscalao') == 'V35') selected @endif>V35</option>
                                <option value="V40" @if(old('selectEscalao') == 'V40') selected @endif>V40</option>
                                <option value="V45" @if(old('selectEscalao') == 'V45') selected @endif>V45</option>
                                <option value="V50" @if(old('selectEscalao') == 'V50') selected @endif>V50</option>
                                <option value="V55" @if(old('selectEscalao') == 'V55') selected @endif>V55</option>
                                <option value="V60" @if(old('selectEscalao') == 'V60') selected @endif>V60</option>
                                <option value="V65" @if(old('selectEscalao') == 'V65') selected @endif>V65</option>
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
                                <input class="form-check-input" type="radio" name="inputGen" id="inputGen1"
                                    value="M" @if (old('inputGen') == 'M' || $atleta->genero == 'M')
                                        checked
                                    @endif>
                                <label class="form-check-label" for="inputGen1">
                                    M
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inputGen" id="inputGen2"
                                    value="F" @if (old('inputGen') == 'F' || $atleta->genero == 'F')
                                    checked
                                @endif>
                                <label class="form-check-label" for="inputGen2">
                                    F
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control @error('inputCC') is-invalid @enderror" id="inputCC" name="inputCC"
                                placeholder="Cartão de cidadão do atleta" value="@if(old('inputCC')) {{old('inputCC')}} @else {{$atleta->cc}} @endif" />
                            <label for="inputCC">BI/CC</label>
                            @error('inputCC')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control @error('inputNIF') is-invalid @enderror" id="inputNIF" name="inputNIF"
                                placeholder="NIf do atleta" value="@if(old('inputNIF')) {{old('inputNIF')}} @else {{$atleta->nif}} @endif" />
                            <label for="inputNIF">NIF</label>
                            @error('inputNIF')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control @error('inputTel') is-invalid @enderror" id="inputTel" name="inputTel"
                                placeholder="Telemóvel" value="@if(old('inputTel')) {{old('inputTel')}} @else {{$atleta->telemovel}} @endif" />
                            <label for="inputTel">Telemóvel</label>
                            @error('inputTel')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <select required class="select2 form-select form-control @error('selectNac') is-invalid @enderror"
                                style="width: 100%; padding: 1rem 12px;" placeholder="Nacionalidade"
                                id="selectNac" name="selectNac">
                                <option value="OP" selected="selected" disabled>Nacionalidade</option>
                                @foreach ($countries as $value => $country)
                                    <option value="{{ $value }}"
                                     @if(old('selectNac') == $value) selected @endif>{{ $country }}
                                    </option>
                                @endforeach
                            </select>
                            @error('selectNac')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-floating mb-3">
                            <select class="select2 form-select form-control @error('selectShirt') is-invalid @enderror"
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
                                    <input class="form-control @error('inputFoto') is-invalid @enderror" type="file" id="inputFoto" name="inputFoto">
                                </div>
                                @error('inputFoto')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
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
