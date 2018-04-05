@push('scripts')
    <script src="{{ asset('js/modules/companies.js') }}"></script>
    <script type="text/javascript">
        Companies.departments();
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

<div class="modal fade" id="link-departments" tabindex="-1" role="dialog" aria-labelledby="link-departments" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="/companies/{{ $record->id }}/departments" method="post">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-plus"></i> Adicionar departamentos à <em>{{ $record->name }}</em></h5>
                    <div class="close">
                        <input class="form-control-sm" type="text" id="search-input" onkeyup="search()" placeholder="Search...">
                        <a class="modal-close" href="/companies">
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
                        @foreach($departments as $department)
                            @if($loop->index % 3 == 0)
                                <tr>
                            @endif
                                <td>
                                    <input name="departments[]" value="{{ $department->id }}"
                                           {{ $record->departments->find($department->id) == null ?: 'checked="checked"' }}
                                           type="checkbox"> {{ $department->name }}
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
                        <a href="/companies" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>