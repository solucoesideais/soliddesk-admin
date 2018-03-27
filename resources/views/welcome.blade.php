<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
    <main class="main">

        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>

            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#"><i class="icon-speech"></i></a>
                    <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                    <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
                </div>
            </li>
        </ol>
        <div class="container-fluid">
            <div id="ui-view" style="opacity: 1;"><div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Simple Table
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Samppa Nori</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Estavan Lykos</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chetan Mohamed</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-secondary">Inactive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Derick Maximinus</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Friderik Dávid</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Striped Table
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-striped">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Yiorgos Avraamu</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Avram Tarasios</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quintin Ed</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-secondary">Inactive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Enéas Kwadwo</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Agapetus Tadeáš</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Condensed Table
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-sm">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Carwyn Fachtna</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nehemiah Tatius</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ebbe Gemariah</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-secondary">Inactive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Eustorgios Amulius</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Leopold Gáspár</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Bordered Table
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Pompeius René</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paĉjo Jadon</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Micheal Mercurius</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-secondary">Inactive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ganesha Dubhghall</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hiroto Šimun</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-align-justify"></i> Combined All Table
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                                        <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Date registered</th>
                                            <th>Role</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Vishnu Serghei</td>
                                            <td>2012/01/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Zbyněk Phoibos</td>
                                            <td>2012/02/01</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-danger">Banned</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Einar Randall</td>
                                            <td>2012/02/01</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-secondary">Inactive</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Félix Troels</td>
                                            <td>2012/03/01</td>
                                            <td>Member</td>
                                            <td>
                                                <span class="badge badge-warning">Pending</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Aulus Agmundr</td>
                                            <td>2012/01/21</td>
                                            <td>Staff</td>
                                            <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>

                </div></div>
        </div>

    </main>
    </body>
</html>
