@push('scripts')
<script src="{{ asset('js/modules/administrators.js') }}"></script>
@endpush

<div class="modal fade" id="cadastreadmin" tabindex="-1" role="dialog" aria-labelledby="cadastreadmin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="/administrators" method="post">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fa fa-plus"></i> Novo administrador</h5>
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
              @include('components.field', ['field' => 'email'])
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