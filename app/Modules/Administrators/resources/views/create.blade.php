@push('scripts')
<script src="{{ asset('js/modules/administrators.js') }}"></script>
@endpush

<div class="modal fade" id="cadastreadmin" tabindex="-1" role="dialog" aria-labelledby="cadastreadmin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="/administrators" method="post" class="was-validated">
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
              <input required type="text" value="{{ old('name') }}" id="name" name="name" class="form-control" placeholder="Nome"> 
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
              <input required type="email" value="{{ old('email') }}" id="email" name="email" class="form-control" placeholder="Email">
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
              <input required type="password" value="{{ old('password') }}" id="password" name="password" class="form-control" placeholder="Password">
              @include('components.field', ['field' => 'password'])
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-group form-actions">
            <a class="btn btn-secondary" href="/administrators">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>