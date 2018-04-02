@extends('layout')

@section('content')

@if($creating)
  @include('departments::create')
@endif

@if($editing)
  @include('departments::edit')
@endif

@if($linkingCompanies)
  @include('departments::companies')
@endif

<div class="row">
  <div class="col-lg">
    <div class="card card-accent-primary">
      <div class="card-header">
        <i class="fa fa-tag"></i> Departamentos
        <a class="btn btn-primary float-right" href="/departments/create">
          <i class="fa fa-plus"></i> Novo Departamento
        </a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Gerenciar empresas</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($departments as $department)
            <tr>
              <td>{{ $department->name }}</td>
              <td>
                <!-- button trigger modal company -->
                <a href="/departments/{{ $department->id }}/companies" class="btn btn-success">
                  <i class="fa fa-plus"></i>
                  Empresas
                </a>
              </td>
              <td>
                <div class="row">
                  <a href="/departments/{{ $department->id }}/edit" class="btn btn-link">
                    <i class="fa fa-pencil fa-lg"></i>
                  </a>
                  @include('components.delete', ['action' => "/departments/$department->id"])
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- pagination -->
        <div class="row">
          <div class="col-6">
            {{ $departments->render() }}
          </div>
          <div class="col-6 text-right">
            <!-- button trigger modal register-->
            <!--
              <a class="btn btn-primary" href="/departments/create">
              <i class="fa fa-plus"></i> Novo Departamento
            </a>
          -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection