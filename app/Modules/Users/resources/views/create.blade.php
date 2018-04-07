@push('scripts')
<script src="{{ asset('js/modules/users.js') }}"></script>
<script type="text/javascript">
  Users.create();
</script>
@endpush

<div class="modal fade" id="register-user" tabindex="-1" role="dialog" aria-labelledby="register-user" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form action="/users" method="post" class="was-validated">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title">
            <i class="fa fa-plus"></i> Novo usuário</h5>
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
              <input required type="text" value="{{ old('name') }}" id="name" name="name" class="form-control" placeholder="Nome"> @include('components.field', ['field' => 'name'])
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-envelope"></i>
                </span>
              </div>
              <input required type="email" value="{{ old('email') }}" id="email" name="email" class="form-control" placeholder="Email"> @include('components.field', ['field' => 'email'])
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-lock"></i>
                </span>
              </div>
              <input required type="password" value="{{ old('password') }}" id="password" name="password" class="form-control" placeholder="Password"> @include('components.field', ['field' => 'password'])
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-briefcase"></i>
                </span>
              </div>
              <select required name="company" class="form-control">
                @foreach($companies as $company)
                <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
              </select>
              @include('components.field', ['field' => 'company'])
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-sitemap"></i>
                </span>
              </div>
              <select name="department" class="form-control">
                @foreach($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
              </select>
              @include('components.field', ['field' => 'department'])
            </div>
          </div>
          <div class="form-group row">
            <div class="col col-form-label">
              <div class="form-check form-check-inline mr-1">
                <input required class="form-check-input" type="radio" value="user" name="type">
                <label class="form-check-label">Usuário</label>
              </div>
              <div class="form-check form-check-inline mr-1">
                <input required class="form-check-input" type="radio" value="manager" name="type">
                <label class="form-check-label">Gestor</label>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <div class="form-group form-actions">
            <a class="btn btn-secondary" href="/users">Cancelar</a>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>