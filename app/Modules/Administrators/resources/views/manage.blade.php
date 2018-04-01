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
              <td><a href="#">
                <i class="text-danger fa fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <!-- pagination -->
        <div class="row">
          <div class="col-6">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#">Prev</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
        </div>
        <div class="col-6 text-right">
          <!-- button trigger popup -->
        <a class="btn btn-primary" href="/administrators/create">
          <i class="fa fa-plus"></i> Cadastre Admin
        </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection