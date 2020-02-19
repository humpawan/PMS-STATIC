<!--document--->
<html lang="">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="csrf-token">
    <title>Project-task</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!--style code here-->
    <link href="../../layouts/assets/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="../../layouts/assets/css/adminlte.min.css" rel="stylesheet">
    <link href="../../layouts/css/pms_k.css" rel="stylesheet">
    <link href="../../layouts/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
          rel="stylesheet">

    <link href="../../layouts/assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../layouts/assets/plugins/chart.js/Chart.css" rel="stylesheet">



    <!--    <link rel="stylesheet"-->
    <!--          href="../../layouts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker3.min.css">-->
    <!--    <link href="../../layouts/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet">-->
    <!--end-->
    <!--inline css code here-->
    <style>
        body {
            font-family: "Lato";
            margin: 0;
            padding: 0;
        }

        #Task {
            overflow-x: auto;
            padding: 20px 0;
        }

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
                    <a class="nav-link" href="details.html">
                        Project
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="task_list.html">Tasks</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="bug_index.html">Bugs</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link" href="milestone_index.html">milestones</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <!--                    <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#create-model"><i class="fas fa-plus "></i>-->
                    <!--                        create Task-->
                    <!--                    </button>-->

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
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true" class="resetData">&times;</span>
                    </button>
                </div>


                <form class="form validation" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Task Name</label>
                            <input class="form-control validate[required] text-input" name="name"
                                   placeholder="Project name" type="text">
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <select class="form-control create-project-select2" name="id_client" style="width: 100%;">
                                <option>Select-tag</option>
                                <option>TAG-name</option>
                                <option>TAG-name</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Teams</label>
                            <select class="form-control create-project-select2" name="id_client" style="width: 100%;">
                                <option>Select-team</option>
                                <option>Team-name</option>
                                <option>Team-name</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-block" type="submit">Create
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
        <a class="brand-link" href="../../dashboard/index.html">
            <img alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 src="../../layouts/assets/img/AdminLTELogo.png"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">PMS</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img alt="User Image"
                         class="img-circle elevation-2"
                         src="../../layouts/assets/img/avatar04.png">
                </div>
                <div class="info">
                    <a class="d-block" href="../../profile/index.html">Pawan garg</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-accordion="false"
                data-widget="treeview"
                role="menu">
                <li class="nav-item">
                    <a class="nav-link" href="../../timer/index.html">
                        <i class="nav-icon fas fa-clock-o"></i>
                        <p>
                            Timer
                        </p>
                    </a>
                </li>
            </ul>


            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent " data-accordion="false"
                data-widget="treeview"
                role="menu">
                <li class="nav-header">Analyze</li>
                <li class="nav-item">
                    <a class="nav-link" href="../../dashboard/index.html">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboards
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../report/index.html">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Reports
                        </p>
                    </a>
                </li>
            </ul>
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent " data-accordion="false"
                data-widget="treeview"
                role="menu">
                <li class="nav-header">Manage</li>
                <li class="nav-item has-treeview">
                    <a class="nav-link" href="../../project/index.html">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Projects
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../team/index.html">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Teams
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../client/index.html">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Clients
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../tag/index.html">
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
                    <div class="card-body set-custom-padding">
                        <ul class="todo-list ui-sortable to_do_task_list list-group list-group-flush ui-sortable"
                            data-widget="todo-list">
                            <li class="task to-do-task list-group-item"
                                contenteditable="true" value="task_one">
                                <div class="col-md-7 set-custom-border">
                                    Task Name
                                </div>
                                <div class="col-md-1 set-custom-border">
                                    Assignee
                                </div>
                                <div class="col-md-1 set-custom-border">
                                    Due Date
                                </div>
                                <div class="col-md-3">

                                </div>
                            </li>
                        </ul>
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
                        <ul class="todo-list ui-sortable to_do_task_list list-group list-group-flush ui-sortable"
                            data-widget="todo-list">
                            <li class="task to-do-task list-group-item"
                                contenteditable="true" value="task_one">

                                <div class="col-md-7 set-custom-border">  <span
                                            class="handle">
                                  <i class="fas fa-ellipsis-v"></i>
                                  <i class="fas fa-ellipsis-v"></i>
                                </span>
                                    Task One
                                </div>
                                <div class="col-md-3 set-custom-border" contenteditable="false">
                                    <img alt="message user image" class="direct-chat-img drop down-arrow"
                                         src="../../layouts/dist/img/user1-128x128.jpg">
                                    <select  name="support[support_type]"
                                             style="display: none; height: 117px;"
                                             class="form-control support-support-type" >
                                        <option>kajal     kajal@gmail.com</option>
                                        <option>Dezal     dezal@gmail.com</option>
                                        <option>Pawan     pawan@gmail.com</option>
                                        <option>Rohit     Rohit@gmail.com</option>
                                        <option>pooja     pooja@gmail.com</option>
                                        <option>pooja     pooja@gmail.com</option>
                                        <option>pooja     pooja@gmail.com</option>

                                    </select>
                                </div>
                                <div class="col-md-1 set-custom-border ">
                                    <div class="form-group">
                                        <div class="input-group date">
                                            <p class="card-text datepicker" style="color: #ff3824">
                                                Feb 19</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                </div>
                            </li>

                            <li class="task to-do-task list-group-item"
                                contenteditable="true" value="task_one">

                                <div class="col-md-7 set-custom-border">  <span
                                            class="handle">
                                  <i class="fas fa-ellipsis-v"></i>
                                  <i class="fas fa-ellipsis-v"></i>
                                </span>
                                    Task two
                                </div>
                                <div class="col-md-3 set-custom-border" contenteditable="false">
                                    <img alt="message user image" class="direct-chat-img down-arrow-two
"
                                         src="../../layouts/dist/img/user1-128x128.jpg">
                                    <select style="display: none; height: 117px;" class="form-control
                                            support-support-type-two" >
                                        <option>kajal     kajal@gmail.com</option>
                                        <option>Dezal     dezal@gmail.com</option>
                                        <option>Pawan     pawan@gmail.com</option>
                                        <option>Rohit     Rohit@gmail.com</option>
                                        <option>pooja     pooja@gmail.com</option>
                                        <option>pooja     pooja@gmail.com</option>
                                        <option>pooja     pooja@gmail.com</option>

                                    </select>
                                </div>
                                <div class="col-md-1 set-custom-border ">
                                    <div class="form-group">
                                        <div class="input-group date">

                                            <!--                                            <i class="far fa-calendar-alt mr-1 pt-1"></i>-->
                                            <p class="card-text datepicker"  style="color: #ff3824">
                                                Feb 19</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                </div>
                            </li>

                            <!--                            <li class="task to-do-task list-group-item"-->
                            <!--                                contenteditable="true" value="task_one">-->

                            <!--                                <div class="col-md-7 set-custom-border">  <span-->
                            <!--                                        class="handle">-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                </span>-->
                            <!--                                    Task One-->
                            <!--                                </div>-->
                            <!--                                <div class="col-md-3 set-custom-border">-->
                            <!--                                    <img alt="message user image" class="direct-chat-img dropdown-toggle"-->
                            <!--                                         src="../../layouts/dist/img/user1-128x128.jpg" data-toggle="dropdown">-->


                            <!--                                </div>-->


                            <!--                                <div class="col-md-2 set-last-child-padding">-->
                            <!--                                    <div class="form-group">-->

                            <!--                                        <div class="input-group date">-->
                            <!--                                            <div class="input-group-addon">-->
                            <!--                                                <i class="fa fa-calendar" id="datepicker"></i>-->
                            <!--                                            </div>-->
                            <!--                                            &lt;!&ndash;                                            <input type="text" class="form-control pull-right" >&ndash;&gt;-->
                            <!--                                        </div>-->
                            <!--                                        &lt;!&ndash; /.input group &ndash;&gt;-->
                            <!--                                    </div>-->
                            <!--                                </div>-->

                            <!--                            </li>-->
                            <!--                            <li class="task to-do-task list-group-item"-->
                            <!--                                contenteditable="true" value="task_one">-->

                            <!--                                <div class="col-md-7 set-custom-border">  <span-->
                            <!--                                        class="handle">-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                </span>-->
                            <!--                                    Task One-->
                            <!--                                </div>-->
                            <!--                                <div class="col-md-3 set-custom-border">-->
                            <!--                                    <img alt="message user image" class="direct-chat-img dropdown-toggle"-->
                            <!--                                         src="../../layouts/dist/img/user1-128x128.jpg" data-toggle="dropdown">-->


                            <!--                                </div>-->


                            <!--                                <div class="col-md-2 set-last-child-padding">-->
                            <!--                                    <div class="form-group">-->

                            <!--                                        <div class="input-group date">-->
                            <!--                                            <div class="input-group-addon">-->
                            <!--                                                <i class="fa fa-calendar" id="datepicker"></i>-->
                            <!--                                            </div>-->
                            <!--                                            &lt;!&ndash;                                            <input type="text" class="form-control pull-right" >&ndash;&gt;-->
                            <!--                                        </div>-->
                            <!--                                        &lt;!&ndash; /.input group &ndash;&gt;-->
                            <!--                                    </div>-->
                            <!--                                </div>-->

                            <!--                            </li>-->

                            <!--                            <li class="task to-do-task list-group-item"-->
                            <!--                                contenteditable="true" value="task_one">-->

                            <!--                                <div class="col-md-7 set-custom-border">  <span-->
                            <!--                                        class="handle">-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                </span>-->
                            <!--                                    Task One-->
                            <!--                                </div>-->
                            <!--                                <div class="col-md-2 set-custom-border"> <span-->
                            <!--                                        class="handle">-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                </span>-->
                            <!--                                    Task Two-->
                            <!--                                </div>-->
                            <!--                                <div class="col-md-2 set-custom-border"> <span-->
                            <!--                                        class="handle">-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                </span>-->
                            <!--                                    Task Two-->
                            <!--                                </div>-->
                            <!--                                <div class="col-md-1 set-last-child-padding"> <span class="handle">-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                  <i class="fas fa-ellipsis-v"></i>-->
                            <!--                                </span>-->
                            <!--                                    Task Two-->
                            <!--                                </div>-->

                            <!--                            </li>-->

                        </ul>
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
<script src="../../layouts/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>-->
<!-- Bootstrap 4 -->
<script src="../../layouts/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../layouts/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!--<script src="../layouts/assets/plugins/daterangepicker/daterangepicker.js"></script>-->


<script src="../../layouts/js/pms_k.js"></script>
<script src="../../layouts/dist/js/pages/dashboard.js"></script>

<script src="../../layouts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<!--<script src="../../layouts/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>-->
<!--<script src="../../layouts/assets/plugins/moment/moment.min.js"></script>-->

<!--<script src="../../layouts/assets/plugins/daterangepicker/daterangepicker.js"></script>-->
<!--<script src="../../layouts/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>-->
<!--<script src="../../layouts/assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>-->

<script>
    $(function () {

        //Date picker
        $('.datepicker').datepicker({
            autoclose: true
        });





        // $('.display-user-list').popover({
        //     title: "",
        //     html : true,
        //     content : "<div >" +
        //         "<div class='parent-div-user'>" + "<span class='item-title'>Kajal   </span></div><br>" +
        //         "<div class='parent-div-user'>" + "<span class='item-title'>dezal   </span></div><br>" +
        //         "<div class='parent-div-user'>" + "<span class='item-title'>pawan   </span></div><br>" +
        //         "<div class='parent-div-user'>" + "<span class='item-title'>kajal   </span></div><br>" +
        //         "<div class='parent-div-user'>" + "<span class='item-title'>dezal  </span></div><br>" +
        //
        //         "</div>"
        //
        // });

//        $('[data-toggle="popover"]').popover();

    });
</script>
<!--end-->
<!--incline script here-->
<!--end-->

</body>

</html>