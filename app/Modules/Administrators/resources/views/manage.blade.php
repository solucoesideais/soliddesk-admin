@extends('layout') @section('content')

@if($creating)
    @push('scripts')
      <script src="{{ asset('js/modules/administrators.js') }}"></script>
    @endpush
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
          <!-- popup-->
          <div class="modal fade" id="cadastreadmin" tabindex="-1" role="dialog" aria-labelledby="cadastreadmin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <form action="/administrators" method="post">
                  @csrf

                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa fa-plus"></i> Novo administrador</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa fa-user"></i>
                            </span>
                          </div>
                          <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required>
                          @include('components.field', ['field' => 'name'])
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa fa-envelope"></i>
                            </span>
                          </div>
                          <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa fa-asterisk"></i>
                            </span>
                          </div>
                          <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                      </div>
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
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection