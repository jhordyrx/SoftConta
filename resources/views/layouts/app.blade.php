 @if (Auth::guest())
    <script> window.location.href = '/login';</script>
    @else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ContaSoft</title>
    {!! Html::style('assets/estilo/Content/jquery.bootgrid.min.css') !!}
    {!! Html::style('assets/estilo/Content/material-design-iconic-font.min.css') !!}
    {!! Html::style('assets/estilo/Content/jquery-ui.min.css') !!}
    {!! Html::style('assets/estilo/Content/sweet-alert.min.css') !!}
    {!! Html::style('assets/estilo/Content/toastr.min.css') !!}
    {!! Html::style('assets/estilo/Content/app.min.1.css') !!}
    {!! Html::style('assets/estilo/Content/app.min.2.css') !!}
    {!! Html::style('assets/estilo/Content/style.css') !!}
    {!! Html::style('assets/estilo/Content/dataTables.css') !!}
    {!! Html::style('assets/estilo/Content/css/font-awesome.min.css') !!}
    {!! Html::style('assets/estilo/vendors/fullcalendar/fullcalendar.css') !!}
    {!! Html::style('assets/estilo/vendors/animate-css/animate.min.css') !!}
    {!! Html::style('assets/estilo/vendors/socicon/socicon.min.css') !!}
    {!! Html::style('assets/css/JQuerySteps.css') !!}

</head>
<body>
<header id="header" class="bgm-bluegray">
    <ul class="header-inner">
        <li id="menu-trigger" data-trigger="#sidebar">
            <div class="line-wrap">
                <div class="line top"></div>
                <div class="line center"></div>
                <div class="line bottom"></div>
            </div>
        </li>

        <li class="logo hidden-xs">
            <a href="index.html">Material Admin</a>
        </li>

        <li class="pull-right">
            <ul class="top-menu">
                <li id="toggle-width">
                    <div class="toggle-switch">
                        <input id="tw-switch" type="checkbox" hidden="hidden">
                        <label for="tw-switch" class="ts-helper"></label>
                    </div>
                </li>
                <li id="top-search">
                    <a class="tm-search" href=""></a>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="tm-message" href=""><i class="tmn-counts">6</i></a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview">
                            <div class="lv-header">
                                Messages
                            </div>
                            <div class="lv-body c-overflow">
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a class="lv-footer" href="">View All</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="tm-notification" href=""><i class="tmn-counts">9</i></a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview" id="notifications">
                            <div class="lv-header">
                                Notification

                                <ul class="actions">
                                    <li class="dropdown">
                                        <a href="" data-clear="notification">
                                            <i class="md md-done-all"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lv-body c-overflow">
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a class="lv-footer" href="">View Previous</a>
                        </div>

                    </div>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" class="tm-task" href=""><i class="tmn-counts">2</i></a>
                    <div class="dropdown-menu pull-right dropdown-menu-lg">
                        <div class="listview">
                            <div class="lv-header">
                                Tasks
                            </div>
                            <div class="lv-body">
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                            <span class="sr-only">95% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Google Chrome Extension</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Social Intranet Projects</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Youtube Client App</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="lv-footer" href="">View All</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="tm-settings" href=""></a>
                    <ul class="dropdown-menu dm-icon pull-right">
                        <li>
                            <a data-action="fullscreen" href=""><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a data-action="clear-localstorage" href=""><i class="md md-delete"></i> Clear Local Storage</a>
                        </li>
                        <li>
                            <a href=""><i class="md md-person"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="md md-settings"></i> Other Settings</a>
                        </li>
                    </ul>
                </li>
                <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                    <a class="tm-chat" href=""></a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Top Search Content -->
    <div id="top-search-wrap">
        <input type="text">
        <i id="top-search-close">&times;</i>
    </div>
</header>

<section id="main">
    <aside id="sidebar">
        <div class="sidebar-inner">
            <div class="si-inner">
                <div class="profile-menu">
                    <a href="">
                        <div class="profile-pic">
                            {{ HTML::image(Auth::user()->avatar) }}
                        </div>

                        <div class="profile-info">
                            Welcome :{{ Auth::user()->name }}
                            <i class="md md-arrow-drop-down"></i>
                        </div>
                    </a>

                    <ul class="main-menu">
                        <li>
                            <a href="profile-about.html"><i class="md md-person"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="md md-settings-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="md md-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}"><i class="md md-history"></i> Logout</a>
                        </li>
                    </ul>
                </div>

                <ul class="main-menu">
                    <li class="active"><a href="/"><i class="md md-home"></i> Home</a></li>

                    <li class="sub-menu">
                        <a href=""><i class="md md-shopping-cart"></i>Compras</a>
                        <ul>
                            <li><a href="/Compra">Rep Compras</a></li>
                            <li><a href="#">Nueva Compra</a></li>
                            <li><a href="#">Proveedores</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href=""><i class="md md-attach-money"></i>Ventas</a>
                        <ul>
                            <li><a href="/Venta">Rep Ventas</a></li>
                            <li><a href="#">Registar Cliente</a></li>
                            <li><a href="#">Almasen</a></li>

                        </ul>
                    </li>


                </ul>
            </div>
        </div>
    </aside>

    <aside id="chat">
        <ul class="tab-nav tn-justified" role="tablist">
            <li role="presentation" class="active"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">Friends</a></li>
            <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online Now</a></li>
        </ul>

        <div class="chat-search">
            <div class="fg-line">
                <input type="text" class="form-control" placeholder="Search People">
            </div>
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="friends">
                <div class="listview">
                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Jonathan Morris</div>
                                <small class="lv-small">Available</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">David Belle</div>
                                <small class="lv-small">Last seen 3 hours ago</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Glenn Jecobs</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="img/profile-pics/5.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Bill Phillips</div>
                                <small class="lv-small">Last seen 3 days ago</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left">
                                <img class="lv-img-sm" src="img/profile-pics/6.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Wendy Mitchell</div>
                                <small class="lv-small">Last seen 2 minutes ago</small>
                            </div>
                        </div>
                    </a>
                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Teena Bell Ann</div>
                                <small class="lv-small">Busy</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="online">
                <div class="listview">
                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Jonathan Morris</div>
                                <small class="lv-small">Available</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                <i class="chat-status-online"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Glenn Jecobs</div>
                                <small class="lv-small">Availble</small>
                            </div>
                        </div>
                    </a>

                    <a class="lv-item" href="">
                        <div class="media">
                            <div class="pull-left p-relative">
                                <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                <i class="chat-status-busy"></i>
                            </div>
                            <div class="media-body">
                                <div class="lv-title">Teena Bell Ann</div>
                                <small class="lv-small">Busy</small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </aside>


    <section id="content">
        <div class="container">

                @yield('content')

        </div>
    </section>
    </section>


{!! Html::script('assets/estilo/Scripts/jquery-2.1.1.min.js') !!}
{!! Html::script('assets/estilo/Scripts/bootstrap.min.js') !!}
{!! Html::script('assets/estilo/Scripts/functions.js') !!}
{!! Html::script('assets/estilo/Scripts/waves.min.js') !!}
{!! Html::script('assets/estilo/Scripts/jquery.nicescroll.min.js') !!}
{!! Html::script('assets/estilo/Scripts/jquery-ui.min.js') !!}
{!! Html::script('assets/estilo/Scripts/sweet-alert.min.js') !!}
{!! Html::script('assets/estilo/Scripts/toastr.min.js') !!}
{!! Html::script('assets/estilo/Scripts/bootstrap-select.min.js') !!}
{!! Html::script('assets/estilo/Scripts/moment.min.js') !!}
{!! Html::script('assets/estilo/Scripts/datetimepicker.min.js') !!}
{!! Html::script('assets/estilo/Scripts/dataTables/jquery.dataTables.js') !!}
{!! Html::script('assets/estilo/Scripts/dataTables/dataTables.bootstrap.js') !!}
{!! Html::script('assets/estilo/vendors/fullcalendar/lib/moment.min.js') !!}
{!! Html::script('assets/estilo/vendors/fullcalendar/fullcalendar.min.js') !!}
{!! Html::script('assets/estilo/vendors/simpleWeather/jquery.simpleWeather.min.js') !!}
{!! Html::script('assets/js/jquery.steps.min.js') !!}
{!! Html::script('assets/js/jquery.validate.min.js') !!}
{!! Html::script('funciones/Tools.js')!!}

{!! Html::script('funciones/getTipoTab.js')!!}
{!! Html::script('funciones/proveedor.js')!!}


@yield('footer')
    </body>
</html>
 @endif