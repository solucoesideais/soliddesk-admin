@push('scripts')
    <script src="{{ asset('js/modules/users.js') }}"></script>
    <script type="text/javascript">
        Users.companies();
    </script>
@endpush

<style type="text/css">
    .modal-close {
        text-decoration: none;
        color: #000;
        opacity: .75;
    }

    .modal-close:hover {
        text-decoration: none;
        color: #000;
    }
</style>

<div class="modal fade" id="link-companies" tabindex="-1" role="dialog" aria-labelledby="link-companies" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="/users/{{ $record->id }}/companies" method="post">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-plus"></i> Vincular <em>{{ $record->name }}</em> a empresas</h5>
                    <div class="close">
                        <input class="form-control-sm" type="text" id="search-input" onkeyup="search()" placeholder="Search...">
                        <a class="modal-close" href="/users">
                            <span aria-label="Close" aria-hidden="true">&times;</span>
                        </a>
                    </div>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th style="width:34%;"><input type="checkbox"> Selecionar tudo</th>
                            <th style="width:33%;"></th>
                            <th style="width:33%;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            @if($loop->index % 3 == 0)
                                <tr>
                            @endif
                                <td>
                                    <input name="companies[]" value="{{ $company->id }}"
                                           {{ $record->companies->find($company->id) == null ?: 'checked="checked"' }}
                                           type="checkbox"> {{ $company->name }}
                                </td>
                            @if($loop->index % 3 == 2)
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <div class="form-group form-actions">
                        <a href="/users" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>