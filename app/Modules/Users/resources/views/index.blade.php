@extends('layout')

@section('content')

@if($creating)
  @include('users::create')
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
              <th>Gestor</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->company->name }}</td>
              <td>{{ $user->created_at }}</td>
              <td>
                @if($user->type == 'manager')
                  <i class="fa fa-check fa-lg"></i>
                @endif
              </td>
              <td>
                <div class="row">
                  <a href="/users/{{ $user->id }}/edit" class="btn btn-link">
                    <i class="fa fa-pencil fa-lg"></i>
                  </a>
                  @include('components.delete', ['action' => "/users/$user->id"])
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- pagination -->
        <div class="row">
          <div class="col-6">
            {{ $users->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection