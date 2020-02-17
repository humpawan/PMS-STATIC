<!--document--->
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token">
    <title>Project-task</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--style code here-->
    <link rel="stylesheet" href="../../layouts/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../layouts/assets/css/adminlte.min.css">
    <link rel="stylesheet" href="../../layouts/css/pms_k.css">
    <link rel="stylesheet"
          href="../../layouts/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../../layouts/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../layouts/assets/plugins/chart.js/Chart.css" rel="stylesheet">
    <link href="https://www.riccardotartaglia.it/jkanban/dist/jkanban.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../layouts/assets/plugins/daterangepicker/daterangepicker.css">
    <!--end-->
    <!--inline css code here-->
    <style>
        body{font-family: "Lato"; margin:0; padding: 0;}
        #Task{overflow-x: auto; padding:20px 0;}
    </style>
    <!--end-->
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed text-sm">
<!--page content here-->
<div class="wrapper wrapper-without-filter">
    <!--Page nav-bar code here-->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <div class="page-header page-header-without-filter">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="details.html" class="nav-link">
                        Project
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="task_list.html"  class="nav-link">Tasks</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="bug_index.html" class="nav-link">Bugs</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="milestone_index.html" class="nav-link">milestones</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!--                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#create-model"><i class="fas fa-plus "></i>-->
                    <!--                        create Task-->
                    <!--                    </button>-->
                    <button type="button" id="addToDo"class="btn btn-success float-right">
                        <i class="fas fa-plus "></i>
                        create Task
                    </button>
                </li>
            </ul>
        </div>
        <!-- Add filter code -->

        <!--        <div class="sub-header">-->
        <!--            <div class="form-inline">-->
        <!--                <div class="form-group">-->
        <!--                    <ul class="navbar-nav">-->
        <!--                        <li class="nav-item d-none d-sm-inline-block">-->
        <!--                            <div class="input-group">-->
        <!--                                <button type="button" class="btn btn-default  filter-date">-->
        <!--                                    <i class="far fa-calendar-alt"></i> Filter-By-->

        <!--                                    <i class="fas fa-caret-down"></i>-->
        <!--                                </button>-->
        <!--                            </div>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
    </nav>
    <!--end nav-bar-->
    <!--model for create task-->
    <div class="modal fade" id="create-model">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Task</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="resetData">&times;</span>
                    </button>
                </div>

                <form class="form validation" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Task Name</label>
                            <input type="text" class="form-control validate[required] text-input"
                                   name="name" placeholder="Project name">
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <select class="form-control create-project-select2"  name="id_client" style="width: 100%;">
                                <option>Select-tag</option>
                                <option>TAG-name</option>
                                <option>TAG-name</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Teams</label>
                            <select class="form-control create-project-select2"  name="id_client" style="width: 100%;">
                                <option>Select-team</option>
                                <option>Team-name</option>
                                <option>Team-name</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-block">Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end-->
    <!--sidebar code here-->
    <!--sidebar code here-->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="../../dashboard/index.html" class="brand-link">
            <img alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 src="../../layouts/assets/img/AdminLTELogo.png"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">PMS</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="../../layouts/assets/img/avatar04.png"
                         class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="../../profile/index.html" class="d-block">Pawan garg</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent " data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="../../timer/index.html" class="nav-link">
                        <i class="nav-icon fas fa-clock-o"></i>
                        <p>
                            Timer
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent " data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Analyze</li>
                <li class="nav-item">
                    <a href="../../dashboard/index.html" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboards
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../report/index.html" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Reports
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent " data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">Manage</li>
                <li class="nav-item has-treeview">
                    <a href="../../project/index.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Projects
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../team/index.html" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Teams
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../client/index.html" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Clients
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../tag/index.html" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Tags
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../dashboard/index.html">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
            <!--end Sidebar Menu-->

        </div>
    </aside>

    <!--end-->
    <!--main page content-->
    <div class="content-wrapper">
        <section class="content-header">
        </section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <button class="btn btn-default" id="add_task_btn">
                                    <i class="fa fa-plus"></i> Add Task
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">To Do</h5>
                        <div class="card-tools">
                            <button class="btn btn-tool" data-card-widget="collapse" type="button">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button class="btn btn-tool" data-card-widget="remove" type="button">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item " contenteditable="true">
                                Task one
                            </li>
                            <li class="list-group-item " contenteditable="true">
                                Task one
                            </li>
                            <li class="list-group-item " contenteditable="true">
                                Task one
                            </li>

                            <!--                            <li class="list-group-item" contenteditable="true">Dapibus ac facilisis in</li>-->
                            <!--                            <li class="list-group-item" contenteditable="true">Vestibulum at eros</li>-->
                        </ul>
                        <!--                        <ul class="todo-list" data-widget="todo-list">-->
                        <!--                            <li class="append_task_text_box">-->

                        <!--&lt;!&ndash;                                <div id="external-events" class="col-md-6">&ndash;&gt;-->
                        <!--&lt;!&ndash;                                    <div class="external-event bg-success task-create-input-box task">kajal</div>&ndash;&gt;-->
                        <!--&lt;!&ndash;                                </div>&ndash;&gt;-->
                        <!--                                &lt;!&ndash; drag handle &ndash;&gt;-->

                        <!--&lt;!&ndash;                                <span class="handle ui-sortable-handle">&ndash;&gt;-->
                        <!--&lt;!&ndash;                                  <i class="fas fa-ellipsis-v"></i>&ndash;&gt;-->
                        <!--&lt;!&ndash;                                  <i class="fas fa-ellipsis-v"></i>&ndash;&gt;-->
                        <!--&lt;!&ndash;                                </span>&ndash;&gt;-->
                        <!--&lt;!&ndash;                                &lt;!&ndash; todo text &ndash;&gt;&ndash;&gt;-->
                        <!--&lt;!&ndash;                                    <span class="text" >&ndash;&gt;-->
                        <!--&lt;!&ndash;                                    <input class="form-control task-create-input-box task" value="task 1">&ndash;&gt;-->
                        <!--&lt;!&ndash;                                </span>&ndash;&gt;-->

                        <!--                                &lt;!&ndash; Emphasis label &ndash;&gt;-->
                        <!--                            </li>-->

                        <!--                        </ul>-->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--end main page content-->
    <!--footer page here-->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.1
        </div>
        <strong>Copyright</strong>
        2020
    </footer>
    <aside class="control-sidebar control-sidebar-dark"></aside>
    <!--end footer page-->
</div>
<!--end page content-->

<!--scripts here-->
<script src="../../layouts/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../layouts/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../layouts/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!--<script src="../layouts/assets/plugins/daterangepicker/daterangepicker.js"></script>-->
<script src="../../layouts/js/pms_k.js"></script>
<!--end-->
<!--incline script here-->
<!--end-->
</body>

