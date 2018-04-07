@extends('layout')

@section('content')

@if($creating)
  @include('specialists::create')
@endif

@if($linkingCompanies)
  @include('specialists::companies')
@endif

<div class="row">
  <div class="col-lg">
    <div class="card card-accent-primary">
      <div class="card-header">
        <i class="icon-earphones-alt"></i> Técnicos
        <!-- button trigger modal create -->
        <a class="btn btn-primary float-right" href="/specialists/create">
          <i class="fa fa-user-plus"></i> Novo Técnico
        </a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Cargo</th>
              <th>Empresa</th>
              <th>Criado em</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($specialists as $specialist)
            <tr>
              <td>{{ $specialist->name }}</td>
              <td>{{ $specialist->email }}</td>
              <td>{{ $specialist->role }}</td>
              <td>
                <!-- button trigger modal company -->
                <a href="/specialists/{{ $specialist->id }}/companies" class="btn btn-success">
                  <i class="fa fa-plus"></i>
                  Empresas
                </a>
              </td>
              <td>{{ $specialist->created_at }}</td>
              <td>
                <div class="row">
                  <a href="/users/{{ $specialist->id }}/edit" class="btn btn-link">
                    <i class="fa fa-pencil fa-lg"></i>
                  </a>
                  @include('components.delete', ['action' => "/users/$specialist->id"])
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- pagination -->
        <div class="row">
          <div class="col-6">
            {{ $specialists->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection