@extends('layout')

@section('content')

@if($creating)
  @include('departments::create')
@endif

@if($linkingCompanies)
  @include('departments::companies')
@endif

<div class="row">
  <div class="col-lg">
    <div class="card card-accent-primary">
      <div class="card-header">
        <i class="fa fa-tag"></i> Departamentos
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Vincular empresas</th>
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
                @include('components.delete', ['action' => "/departments/$department->id"])
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
            <a class="btn btn-primary" href="/departments/create">
              <i class="fa fa-plus"></i> Novo Departamento
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection