<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <style type="text/css">
  /* css here */


  </style>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">

  </script>


</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done">
  <div class="pace  pace-inactive">
    <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
      <div class="pace-progress-inner">
      </div>
    </div>
    <div class="pace-activity">
    </div>
  </div>
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto mr-4">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="{{ asset('images/avatar.png') }}" class="img-avatar">
          <span class="name"> John Doe</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
        </div>
      </li>
    </ul>

  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item open">
            <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> Dashboard</a>
          </li>
          <li class="nav-title">
            Gerenciar
          </li>
          <li class="nav-item">
            <a href="admin.html" class="nav-link"><i class="icon-wrench"></i> Admin</a>
          </li>
          <li class="nav-item">
            <a href="support.html" class="nav-link"><i class="icon-support"></i> Técnico</a>
          </li>
          <li class="nav-item">
            <a href="department.html" class="nav-link"><i class="icon-tag"></i> Departamento</a>
          </li>
          <li class="nav-item">
            <a href="company.html" class="nav-link"><i class="icon-briefcase"></i> Empresa</a>
          </li>
          <li class="nav-item">
            <a href="manager.html" class="nav-link"><i class="icon-pencil"></i> Gestor</a>
          </li>
          <li class="nav-item">
            <a href="user.html" class="nav-link"><i class="icon-user"></i> Usuário</a>
          </li>
          <li class="divider"></li>
          <li class="nav-title">
            Relatórios
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><i class="icon-puzzle"></i> Qnt chamados</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="base/cards.html"><i class="icon-puzzle"></i> Técnicos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/carousel.html"><i class="icon-puzzle"></i> Empresas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/collapse.html"><i class="icon-puzzle"></i> Gestores</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="base/popovers.html"><i class="icon-graph"></i> Velocidade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="base/progress.html"><i class="icon-chart"></i> Chamados totais</a>
          </li>
        </ul>
      </nav>
    </div>

    <main class="main">
      <div class="container-fluid">
        <div id="ui-view" style="opacity: 1;">
          <div class="animated fadeIn">

          </div>
        </div>
      </div>
    </div>

  </main>
</body>
</html>
