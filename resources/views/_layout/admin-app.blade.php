<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$pageTitle or 'adminEx后台管理'}}</title>
    <meta name="keywords" content="{{$pageKeywords or '后台管理系统'}}" />
    <meta name="description" content="{{$pageDescription or '网站描述'}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('_layout.css')
    @include('_layout.commonCss')
    @section('pageCss')@show
    @section('headJs')@show
</head>
<body class="sticky-header">
    <section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="{{asset('static/images/logo.png')}}" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="{{asset('static/images/logo_icon.png')}}" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="{{asset('static/images/photos/user-avatar.png')}}" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">bruce lee</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                    <li><a href="{{ url('admin/logout ') }}"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start 侧边菜单栏-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                @inject('permissionPresenter','App\Presenters\PermissionPresenter')
                {!! $permissionPresenter->menus() !!}
            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->

    <!-- main content start 主要中间部分-->
    <div class="main-content" >

        <!-- header section start 页面头部导航-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
            </form>
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-tasks"></i>
                            <span class="badge">8</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 8 pending task</h5>
                            <ul class="dropdown-list user-list">
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Database update</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-warning">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Dashboard done</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success">
                                                <span class="">90%</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Web Development</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 66%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-info">
                                                <span class="">66% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Mobile App</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="33" role="progressbar" class="progress-bar progress-bar-danger">
                                                <span class="">33% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="task-info">
                                            <div>Issues fixed</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar">
                                                <span class="">80% </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Pending Task</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">5</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">You have 5 Mails </h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="{{asset('static/images/photos/user1.png')}}" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">John Doe <span class="badge badge-success">new</span></span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="{{asset('static/images/photos/user2.png')}}" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jonathan Smith</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="{{asset('static/images/photos/user3.png')}}" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jane Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="{{asset('static/images/photos/user4.png')}}" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Mark Henry</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span class="thumb"><img src="{{asset('static/images/photos/user5.png')}}" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">Jim Doe</span>
                                          <span class="msg">Lorem ipsum dolor sit amet...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">Read All Mails</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('static/images/photos/user-avatar.png')}}" alt="" />
                            {{ Auth::guard('admin')->user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li>
                            <li><a href="{{ url('admin/logout ') }}"><i class="fa fa-sign-out"></i>退出</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

        <!-- page heading start 面包屑导航那一部分-->
        <div class="page-heading">
            @section('pageHeading')
            <ul class="breadcrumb">
                <li>
                    <a href="{{route('admin.home')}}">首页</a>
                </li>
            </ul>
            <div class="state-info">
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>yearly expense</span>
                            <h3 class="red-txt">$ 45,600</h3>
                        </div>
                        <div id="income" class="chart-bar"></div>
                    </div>
                </section>
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>yearly  income</span>
                            <h3 class="green-txt">$ 45,600</h3>
                        </div>
                        <div id="expense" class="chart-bar"></div>
                    </div>
                </section>
            </div>
            @show
        </div>
        <!-- page heading end-->

        <!--body wrapper start 主要内容展示区-->
        <div class="wrapper">

            @section('wrapper')

            <div class="row">
                <div class="col-md-6">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple">
                                <div class="symbol">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">230</div>
                                    <div class="title">New Order</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red">
                                <div class="symbol">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">3490</div>
                                    <div class="title">Copy Sold</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">22014</div>
                                    <div class="title"> Total Revenue</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green">
                                <div class="symbol">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">390</div>
                                    <div class="title"> Unique Visitors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--statistics end-->
                </div>
                <div class="col-md-6">
                    <!--more statistics box start-->
                    <div class="panel deep-purple-box">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div id="graph-donut" class="revenue-graph"></div>

                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <ul class="bar-legend">
                                        <li><span class="blue"></span> Open rate</li>
                                        <li><span class="green"></span> Click rate</li>
                                        <li><span class="purple"></span> Share rate</li>
                                        <li><span class="red"></span> Unsubscribed rate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--more statistics box end-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row revenue-states">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>Monthly revenue report</h4>
                                    <div class="icheck">
                                        <div class="square-red single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox" checked>
                                                <label>Online</label>
                                            </div>
                                        </div>
                                        <div class="square-blue single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox">
                                                <label>Offline </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="revenue-nav">
                                        <li><a href="#">weekly</a></li>
                                        <li><a href="#">monthly</a></li>
                                        <li class="active"><a href="#">yearly</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="clearfix">
                                        <div id="main-chart-legend" class="pull-right">
                                        </div>
                                    </div>

                                    <div id="main-chart">
                                        <div id="main-chart-container" class="main-chart">
                                        </div>
                                    </div>
                                    <ul class="revenue-short-info">
                                        <li>
                                            <h1 class="red">15%</h1>
                                            <p>Server Load</p>
                                        </li>
                                        <li>
                                            <h1 class="purple">30%</h1>
                                            <p>Disk Space</p>
                                        </li>
                                        <li>
                                            <h1 class="green">84%</h1>
                                            <p>Transferred</p>
                                        </li>
                                        <li>
                                            <h1 class="blue">28%</h1>
                                            <p>Temperature</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            goal progress
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="goal-progress">
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{asset('static/images/photos/user1.png')}}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">John Doe</a> - Project Lead
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="">70%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{asset('static/images/photos/user2.png')}}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Cameron Doe</a> - Sales
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                                <span class="">91%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{asset('static/images/photos/user3.png')}}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Hoffman Doe</a> - Support
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{asset('static/images/photos/user4.png')}}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Jane Doe</a> - Marketing
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{asset('static/images/photos/user5.png')}}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">Hoffman Doe</a> - Support
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                <span class="">45%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center"><a href="#">View all Goals</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <h4 class="pros-title">prospective <span>leads</span></h4>
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-1"></div>
                                    <p class="p-chart-title">Laptop</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-2"></div>
                                    <p class="p-chart-title">iPhone</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-3"></div>
                                    <p class="p-chart-title">iPad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title">Visits</div>
                                <div class="v-value">10,090</div>
                                <div id="visit-1"></div>
                                <div class="v-info">Pages/Visit</div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title">Unique Visitors</div>
                                <div class="v-value">8,173</div>
                                <div id="visit-2"></div>
                                <div class="v-info">Avg. Visit Duration</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel green-box">
                        <div class="panel-body extra-pad">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="79">
                                            <span class="percent">79% <span class="sm">New Visit</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="56">
                                            <span class="percent">56% <span class="sm">Bounce rate</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="calendar-block ">
                                <div class="cal1">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            Todo List
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="to-do-list" id="sortable-todo">
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check"/>
                                        <label for="todo-check"></label>
                                    </div>
                                    <p class="todo-title">
                                        Dashboard Design & Wiget placement
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check1"/>
                                        <label for="todo-check1"></label>
                                    </div>
                                    <p class="todo-title">
                                        Wireframe prepare for new design
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check2"/>
                                        <label for="todo-check2"></label>
                                    </div>
                                    <p class="todo-title">
                                        UI perfection testing for Mega Section
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check3"/>
                                        <label for="todo-check3"></label>
                                    </div>
                                    <p class="todo-title">
                                        Wiget & Design placement
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check4"/>
                                        <label for="todo-check4"></label>
                                    </div>
                                    <p class="todo-title">
                                        Development & Wiget placement
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>

                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" class="form-inline">
                                        <div class="form-group todo-entry">
                                            <input type="text" placeholder="Enter your ToDo List" class="form-control" style="width: 100%">
                                        </div>
                                        <button class="btn btn-primary pull-right" type="submit">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel blue-box twt-info">
                        <div class="panel-body">
                            <h3>19 Februay 2014</h3>

                            <p>AdminEx is new model of admin
                                dashboard <a href="#">http://t.co/3laCVziTw4</a>
                                4 days ago by John Doe</p>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media usr-info">
                                <a href="#" class="pull-left">
                                    <img class="thumb" src="{{asset('static/images/photos/user2.png')}}" alt=""/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Mila Watson</h4>
                                    <span>Senior UI Designer</span>
                                    <p>I use to design websites and applications for the web.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer custom-trq-footer">
                            <ul class="user-states">
                                <li>
                                    <i class="fa fa-heart"></i> 127
                                </li>
                                <li>
                                    <i class="fa fa-eye"></i> 853
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> 311
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @yield('pageJS')
            @show
        </div>
        <!--body wrapper end-->

        <!--footer section start 页脚说明部分-->
        <footer>
            @section('footer')
            2016 &copy; laravel5.2 后台管理 by lipeng
            @show
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
    </section>

@include('_layout.js')
@include('_layout.commonJs')
@section('pageJs')
@show
</body>
</html>
<script>
    jQuery(document).ready(function($) {
        // 左侧菜单高亮
        var currentMenu;
        if(window.location.pathname.split('/').length>=3){
            currentMenu = $('.nav.nav-pills.nav-stacked.custom-nav a[href="'+window.location.origin + '/'+window.location.pathname.split('/')[1]+'/'+window.location.pathname.split('/')[2]+'"]:first');
        }else{
            currentMenu = $('.nav.nav-pills.nav-stacked.custom-nav a[href="'+window.location.origin + '/'+window.location.pathname.split('/')[1]+'"]:first');
        }
        if (currentMenu) {
            var treeview = currentMenu.closest('.menu-list');
            if (treeview.find('ul').length) {
                currentMenu.closest('li').addClass('active').siblings().removeClass('active');
                return treeview.find('a:first').trigger('click');
            } else {
                return treeview.addClass('active').siblings().removeClass('active');
            }
        };

    });
</script>
