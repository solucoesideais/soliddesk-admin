@push('scripts')
  <script src="{{ asset('js/modules/companies.js') }}"></script>
  <script type="text/javascript">
      Companies.edit();
  </script>
@endpush

<div class="modal fade" id="edit-company" tabindex="-1" role="dialog" aria-labelledby="edit-company" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="/companies/{{ $record->id }}" method="post">
          @csrf
          @method('patch')

          <div class="modal-header">
            <h5 class="modal-title"><i class="fa fa-pencil"></i> Editar empresa</h5>
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
                  <input required type="text" id="name" name="name" class="form-control" placeholder="Empresa" value="{{ $record->name }}">
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" onchange="$(this).next().html('Arquivo selecionado')">
                  <label class="custom-file-label">Selecionar Arquivo</label>
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