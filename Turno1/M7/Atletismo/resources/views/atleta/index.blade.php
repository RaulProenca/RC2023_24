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
                        Listar
                    </li>
                </ol>
            </nav>
            <h1 class="mb-0 fw-bold">Listar Atletas</h1>
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
            <a href="addatletas.html" class="btn btn-info d-flex align-items-center ms-2">
                <i class="ri-add-line me-1"></i>
                Inserir Atleta
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
            <div class="table-responsive mt-1">
                <table class="
                      table
                      mb-0
                      text-nowrap
                      varient-table
                      align-middle
                      fs-3
                    " id="zero_config">
                    <thead>
                        <tr>
                            <th scope="col" class="px-0 text-muted">Nome</th>
                            <th scope="col" class="px-0 text-muted">Data de Nascimento</th>
                            <th scope="col" class="px-0 text-muted">Escalão</th>
                            <th scope="col" class="px-0 text-muted">
                                Género
                            </th>
                            <th scope="col" class="px-0 text-muted text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($atletas as $atleta)
                        <tr>
                            <td class="px-0">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/1.jpg" class="rounded-circle"
                                        width="35" alt="flexy" />
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-bold">{{ $atleta->nome }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td class="px-0">{{ $atleta->data_nasc }}</td>
                            <td class="px-0">
                                <span class="badge bg-info">{{ $atleta->escalao }}</span>
                            </td>
                            <td class="px-0">
                                {{ $atleta->genero }}
                            </td>
                            <td class="px-0 text-end">
                                <a href="{{ route('atleta.edit', $atleta->id) }}" class="btn btn-warning">
                                    <i class="ri-pencil-line"></i>
                                </a>

                                <a href="{{ route('atleta.destroy', $atleta->id) }}" class="btn btn-danger" onclick="event.preventDefault();
                                    document.getElementById('deleteForm{{$atleta->id}}').submit();" >
                                    <i class="ri-delete-bin-line"></i>
                                </a>
                                <form id="deleteForm{{$atleta->id}}" action="{{ route('atleta.destroy', $atleta->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>

                            </td>
                        </tr>
                        @endforeach
 {{--                        <tr>
                            <td class="px-0">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/2.jpg" class="rounded-circle"
                                        width="35" alt="flexy" />
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-bold">Cátia Montez</h6>
                                        <span class="text-muted fs-9"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-0">27/02/1997</td>
                            <td class="px-0">
                                <span class="badge bg-primary">F35</span>
                            </td>
                            <td class="px-0 text-dark font-weight-medium text-end">
                                F
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/3.jpg" class="rounded-circle"
                                        width="35" alt="flexy" />
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-bold">Nuno Ferreira</h6>
                                        <span class="text-muted fs-9"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-0">23/04/1978</td>
                            <td class="px-0">
                                <span class="badge bg-warning">M45</span>
                            </td>
                            <td class="px-0 text-dark font-weight-medium text-end">
                                M
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/4.jpg" class="rounded-circle"
                                        width="35" alt="flexy" />
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-bold">Pedro Rodrigues</h6>
                                        <span class="text-muted fs-9"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-0">10/12/1967</td>
                            <td class="px-0">
                                <span class="badge bg-danger">M55</span>
                            </td>
                            <td class="px-0 text-dark font-weight-medium text-end">
                                M
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">
                                <div class="d-flex align-items-center">
                                    <img src="../assets/images/users/5.jpg" class="rounded-circle"
                                        width="35" alt="flexy" />
                                    <div class="ms-3">
                                        <h6 class="mb-0 fw-bold">António Ferreira</h6>
                                        <span class="text-muted fs-9"></span>
                                    </div>
                                </div>
                            </td>
                            <td class="px-0">02/08/1954</td>
                            <td class="px-0">
                                <span class="badge bg-success">M65</span>
                            </td>
                            <td class="px-0 text-dark font-weight-medium text-end">
                                M
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- ============================================================= -->
    <!-- End PAge Content -->
    <!-- ============================================================= -->
</div>


@endsection
