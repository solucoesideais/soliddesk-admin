@push('scripts')
  <script src="{{ asset('js/modules/departments.js') }}"></script>
@endpush

<div class="modal fade" id="register-department" tabindex="-1" role="dialog" aria-labelledby="register-department" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="/departments" method="post">
          @csrf

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