@if($errors->form->first($field))
    <div class="row">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                {{ $errors->form->first($field) }}
            </div>
        </div>
    </div>
@endif