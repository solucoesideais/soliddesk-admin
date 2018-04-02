@extends('layout')

@section('content')

@if($creating)
  @include('departments::create')
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
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#add-company">
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

<!-- modal add-company -->
<div class="modal fade" id="add-company" tabindex="-1" role="dialog" aria-labelledby="add-company" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="" method="post">
        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fa fa-plus"></i> Vincular ....</h5>
          <input class="ml-5 form-control-sm" type="text" id="search-input" onkeyup="search()" placeholder="Search..">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-responsive-sm">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Nome</th>
                <th>Nome</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <input type="checkbox"> Empresa 1</td>
                <td>
                  <input type="checkbox"> Empresa 2</td>
                <td>
                  <input type="checkbox"> Empresa 3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <div class="form-group form-actions">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection