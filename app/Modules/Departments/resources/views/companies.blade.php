@push('scripts')
    <script src="{{ asset('js/modules/departments.js') }}"></script>
    <script type="text/javascript">
        Departments.companies();
    </script>
@endpush

<div class="modal fade" id="link-companies" tabindex="-1" role="dialog" aria-labelledby="link-companies" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fa fa-plus"></i> Vincular ....</h5>
                    <input class="ml-5 form-control-sm" type="text" id="search-input" onkeyup="search()" placeholder="Search..">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-responsive-sm">
                        <thead>
                        <tr>
                            <th><input type="checkbox"> Nome</th>
                            <th>Nome</th>
                            <th>Nome</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <input name="companies[]" type="checkbox"> Empresa 1</td>
                            <td>
                                <input type="checkbox"> Empresa 2</td>
                            <td>
                                <input type="checkbox"> Empresa 3</td>
                        </tr>
                        </tbody>
                    </table>
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