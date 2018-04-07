@push('scripts')
  <script src="{{ asset('js/modules/users.js') }}"></script>
  <script type="text/javascript">
      Users.edit();
  </script>
@endpush

<div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="edit-user" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="/users/{{ $record->id }}" method="post">
          @csrf
          @method('patch')

          <div class="modal-header">
            <h5 class="modal-title"><i class="fa fa-pencil"></i> Editar usuário</h5>
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
                <input required type="text" value="{{ old('name', $record->name) }}" id="name" name="name" class="form-control" placeholder="Nome"> @include('components.field', ['field' => 'name'])
              </div>
            </div>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa fa-envelope"></i>
                </span>
                </div>
                <input required type="email" value="{{ old('email', $record->email) }}" id="email" name="email" class="form-control" placeholder="Email"> @include('components.field', ['field' => 'email'])
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
                    <option value="{{ $company->id }}" {{ old('company', $record->company_id) == $company->id ? 'selected' : ''}}>
                      {{ $company->name }}
                    </option>
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
                    <option value="{{ $department->id }}" {{ old('department', $record->department_id) == $department->id ? 'selected' : ''}}>
                      {{ $department->name }}
                    </option>
                  @endforeach
                </select>
                @include('components.field', ['field' => 'department'])
              </div>
            </div>
            <div class="form-group row">
              <div class="col col-form-label">
                <div class="form-check form-check-inline mr-1">
                  <input required class="form-check-input" type="radio" value="user" name="type"
                          {{ old('type', $record->type == 'user' ? ' checked' : '') }}>
                  <label class="form-check-label">Usuário</label>
                </div>
                <div class="form-check form-check-inline mr-1">
                  <input required class="form-check-input" type="radio" value="manager" name="type"
                          {{ old('type', $record->type == 'manager' ? ' checked' : '') }}>
                  <label class="form-check-label">Gestor</label>
                </div>
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