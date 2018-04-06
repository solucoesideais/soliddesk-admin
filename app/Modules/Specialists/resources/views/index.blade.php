@extends('layout')

@section('content')

@if($creating)
  @include('specialists::create')
@endif

<div class="row">
  <div class="col-lg">
    <div class="card card-accent-primary">
      <div class="card-header">
        <i class="fa fa-users"></i> Usuários
        <!-- button trigger popup -->
        <a class="btn btn-primary float-right" href="/users/create">
          <i class="fa fa-user-plus"></i> Novo Usuário
        </a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
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