@extends('base')

@section('page')
<div class="app flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card-group">
          <div class="card p-4">
            <div class="card-header-white">
              <img src="{{ asset('images/logo.png') }}" alt="logo" class="mx-auto d-block">
            </div>
            <div class="card-body">
              <form action="/login" method="post">
                @csrf
                <h1>Login</h1>
                <p class="text-muted">Entre na sua conta</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-envelope"></i></span>
                  </div>
                  <input required type="text" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-lock"></i></span>
                  </div>
                  <input required type="password" class="form-control" placeholder="Senha" name="password">
                </div>

                @if($errors->first())
                  <div class="row">
                    <div class="col">
                      <div class="alert alert-danger" role="alert">
                        {{ $errors->first() }}
                      </div>
                    </div>
                  </div>
                @endif

                <div class="row">
                  <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4">Login</button>
                  </div>
                  <div class="col-6 text-right">
                    <a href="/password/reset" class="btn btn-link px-0">Esqueceu sua senha?</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
