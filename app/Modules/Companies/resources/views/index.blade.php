@extends('layout')

@section('content')

@if($creating)
  @include('companies::create')
@endif

@if($editing)
  @include('companies::edit')
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
              <td>{{ $company->name }} aaaaa </td>
              <td>
                <!-- button trigger modal company -->
                <a href="/companies/{{ $company->id }}/companies" class="btn btn-success">
                  <i class="fa fa-plus"></i>
                  Departamentos
                </a>
              </td>
              <td>
                <div class="row">
                  <a href="/companies/{{ $company->id }}/edit" class="btn btn-link">
                    <i class="fa fa-pencil fa-lg"></i>
                  </a>
                  @include('components.delete', ['action' => "/companies/$company->id"])
                  <form action="/companies/{{ $company->id }}/status" method="post">
                    @csrf
                    @method('patch')
                
                    <button class="btn btn-link" type="submit">
                        <i class="text-danger fa fa-lock fa-lg"></i>
                    </button>
                </form>
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
          <div class="col-6 text-right">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





@endsection