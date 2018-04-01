@extends('layout') @section('content')

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
              <th>Vincular empresa</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Samppa Nori</td>
              <td>...</td>
              <td><a href="#">
                <i class="text-danger fa fa-trash fa-lg"></i></a>
              </td> 
            </tr>
            <tr>
              <td>Estavan Lykos</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                <i class="text-danger fa fa-trash"></i></a>
              </td> 
            </tr>
            <tr>
              <td>Chetan Mohamed</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
            <tr>
              <td>Derick Maximinus</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
            <tr>
              <td>Friderik Dávid</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
            <tr>
              <td>Friderik Dávid</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
            <tr>
              <td>Friderik Dávid</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
            <tr>
              <td>Friderik Dávid</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
            <tr>
              <td>Friderik Dávid</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
            <tr>
              <td>Friderik Dávid</td>
              <td>johndoe@email.com</td>
              <td>2012/01/21</td>
              <td><a href="#">
                  <i class="text-danger fa fa-trash"></i></a>
                </td> 
            </tr>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastredepartamento"><i class="fa fa-plus"></i>
            Cadastre Departamento
          </button>
          <!-- popup-->
          <div class="modal fade" id="cadastredepartamento" tabindex="-1" role="dialog" aria-labelledby="cadastredepartamento" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <form action="" method="post">
                <div class="modal-header">
                  <h5 class="modal-title"><i class="fa fa-plus"></i> Novo departamento</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <div class="modal-body">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="fa fa-tag"></i>
                            </span>
                          </div>
                          <input type="text" id="name" name="name" class="form-control" placeholder="Departamento">
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