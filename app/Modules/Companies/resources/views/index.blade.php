@extends('layout')

@section('content')

@if($creating)
  @include('companies::create')
@endif

<div class="row">
  <div class="col-lg">
    <div class="card card-accent-primary">
      <div class="card-header">
        <i class="fa fa-tag"></i> Empresas
        <a class="btn btn-primary float-right" href="/companies/create">
          <i class="fa fa-plus"></i> Nova Empresa
        </a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Gerenciar departamentos</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($companies as $company)
            <tr>
              <td style="width: 40%">
                <img src="http://admin.local.solucoesideais.com.br/images/companyavatar.png" class="img-avatar img-responsive" style="width:8%">
                {{ $company->name }}</td>
              <td style="width: 40%">
                <!-- button trigger modal company -->
                <a href="/companies/{{ $company->id }}/companies" class="btn btn-success">
                  <i class="fa fa-plus"></i>
                  Departamentos
                </a>
              </td>
              <td style="width: 20%">
                <div class="row">
                  <a href="/companies/{{ $company->id }}/edit" class="btn btn-link">
                    <i class="fa fa-pencil fa-lg"></i>
                  </a>
                  <form action="/companies/{{ $company->id }}/status" method="post">
                    @csrf
                    @method('patch')
                
                    <button class="btn btn-link" type="submit">
                        <i class="text-warning fa fa-lock fa-lg"></i>
                    </button>
                </form>
                  @include('components.delete', ['action' => "/companies/$company->id"])
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- pagination -->
        <div class="row">
          <div class="col-6">
            {{ $companies->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection