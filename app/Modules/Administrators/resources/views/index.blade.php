@extends('layout')

@section('content')

@if($creating)
    @include('administrators::create')
@endif

<div class="row">
  <div class="col-lg">
    <div class="card card-accent-primary">
      <div class="card-header">
        <i class="fa fa-wrench"></i> Administradores
        <!-- button trigger popup -->
        <a class="btn btn-primary float-right" href="/administrators/create">
          <i class="fa fa-plus"></i> Novo Administrador
        </a>
      </div>
      <div class="card-body">
        <table class="table table-responsive-sm">
          <thead>
            <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Criado em</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($administrators as $administrator)
            <tr>
              <td>{{ $administrator->name }}</td>
              <td>{{ $administrator->email }}</td>
              <td>{{ $administrator->created_at }}</td>
              <td>
                @include('components.delete', ['action' => "/administrators/$administrator->id"])
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- pagination -->
        <div class="row">
          <div class="col-6">
              {{ $administrators->render() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection