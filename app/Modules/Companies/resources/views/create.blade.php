@push('scripts')
<script src="{{ asset('js/modules/companies.js') }}"></script>
<script type="text/javascript">
  Companies.create();
</script>
@endpush

<div class="modal fade" id="register-company" tabindex="-1" role="dialog" aria-labelledby="register-company" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="/companies" method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fa fa-plus"></i> Nova Empresa</h5>
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
              <input type="text" id="name" name="name" class="form-control" placeholder="Empresa">
              @include('components.field', ['field' => 'name'])
            </div>
          </div>
          <div class="form-group">
            <div class="custom-file">
              <input name="logo" type="file" class="custom-file-input" onchange="$(this).next().html('Arquivo selecionado')">
              <label class="custom-file-label">Selecionar Arquivo</label>
              @include('components.field', ['field' => 'logo'])
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