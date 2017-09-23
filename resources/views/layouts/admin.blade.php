<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <title>Admin | Account</title>
    <link rel=icon type=image/png href= {{asset('img/icon.ico')}} />
    <link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin')}}"  rel=stylesheet>
    {{--{!! HTML::style('css/style.css') !!}--}}
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{asset('css/bootstrap.min.css')}}" rel=stylesheet>
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link   href="{{ asset('css/nifty.min.css') }}" rel=stylesheet>

    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="{{asset('css/nifty-demo-icons.min.css')}}"  rel="stylesheet">


    <!--Demo [ DEMONSTRATION ]-->
    <link href="{{asset('css/nifty-demo.min.css')}}"  rel="stylesheet">
    <!--Premium Icons [ OPTIONAL ]-->
    <link href="{{asset('premium/icon-sets/icons/line-icons/premium-line-icons.min.css')}}" rel=stylesheet>
    <link href="{{asset('premium/icon-sets/icons/solid-icons/premium-solid-icons.min.css')}}"  rel=stylesheet>
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="{{asset('css/pace.min.css')}}"  rel=stylesheet>
    <!--FooTable [ OPTIONAL ]-->
    <link href="{{asset('plugins/fooTable/css/footable.core.css')}}"  rel=stylesheet>
    <link href="{{asset('plugins/bootstrap-validator/bootstrapValidator.min.css')}}"  rel=stylesheet>
    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.css')}}"  rel=stylesheet>
    <link href="{{asset('css/chosen.min.css')}}"  rel=stylesheet>



    <!--DataTables [ OPTIONAL ]-->
    <link href= {{asset('plugins/datatables/media/css/dataTables.bootstrap.css')}} rel="stylesheet">
    <link href= {{asset('plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css')}} rel="stylesheet">

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/pace.min.js')}}" ></script>
    <!--jQuery [ REQUIRED ]-->

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--Nifty Admin [ RECOMMENDED ]-->
    <script src="{{asset('js/nifty.min.js')}}" ></script>
    <!--FooTable [ OPTIONAL ]-->
    <script src="{{asset('plugins/fooTable/dist/footable.all.min.js')}}" ></script>
    <!--FooTable Example [ SAMPLE ]-->
    <script src="{{asset('js/tables-footable.js')}}"></script>

    <!--Demo script [ DEMONSTRATION ]-->
    <script src= {{asset('js/nifty-demo.min.js')}}></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="{{asset('plugins/bootstrap-validator/bootstrapValidator.min.js')}}"></script>
    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <script src="{{asset('plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!--Masked Input [ OPTIONAL ]-->
    <script src="{{asset('plugins/masked-input/jquery.maskedinput.min.js')}}"></script>

    <script src= {{asset('plugins/datatables/media/js/jquery.dataTables.js')}}></script>
    <script src= {{asset('plugins/datatables/media/js/dataTables.bootstrap.js')}}></script>
    <script src= {{asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}></script>

    <!--DataTables Sample [ SAMPLE ]-->
    <script src= {{asset('js/tables-datatables.js')}}></script>
    <!--Form validation [ SAMPLE ]-->
    <script src="{{asset('js/chosen.jquery.min.js')}}"></script>

    <!--Form validation [ SAMPLE ]-->
    <script src="{{asset('js/form-validation.js')}}"></script>
    <!--Form Component [ SAMPLE ]-->
    <script src="{{asset('js/form-component.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</head>
<body>
<div id=container class="effect mainnav-lg navbar-fixed">
    <header id=navbar>
        <div id=navbar-container class=boxed>
            <div class=navbar-header>
                <a href=index.html class=navbar-brand style=padding-left:10px>
                    <img  src="{{asset('img/logo.png')}}"  alt="Nifty Logo" class=brand-icon>
                    <div class=brand-title>
                        <span class=brand-text>SCHOOL</span>
                    </div>
                </a>
            </div>
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">
                    <li class=tgl-menu-btn>
                        <a class=mainnav-toggle href=#>
                            <i class="pli-view-list icon-lg"></i>
                        </a>
                    </li>
                    <li class=dropdown>
                        <a href=# data-toggle=dropdown class=dropdown-toggle>
                            <i class="pli-bell icon-lg"></i>
                            <span class="badge badge-header badge-danger"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md">
                            <div class="pad-all bord-btm">
                                <p class="text-semibold text-main mar-no">You have 3 notifications.</p>
                            </div>
                            <div class="nano scrollable">
                                <div class=nano-content>
                                    <ul class=head-list>
                                        <li>
                                            <a href=#>
                                                <div class=clearfix>
                                                    <p class=pull-left>Progressbar</p>
                                                    <p class=pull-right>70%</p>
                                                </div>
                                                <div class="progress progress-sm">
                                                    <div style=width:70% class=progress-bar>
                                                        <span class=sr-only>70% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=# class=media>
                                                <div class=media-left>
                                                    <i class="pli-hd icon-2x icon-lg"></i>
                                                </div>
                                                <div class=media-body>
                                                    <div class=text-nowrap>With Icon</div>
                                                    <small class=text-muted>15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=# class=media>
                                                <div class=media-left>
                                                    <i class="pli-power-cable icon-2x icon-lg"></i>
                                                </div>
                                                <div class=media-body>
                                                    <div class=text-nowrap>With Icon</div>
                                                    <small class=text-muted>15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=# class=media>
                                                <div class=media-left>
<span class="icon-wrap icon-circle bg-primary">
<i class="pli-disk icon-lg icon-lg"></i>
</span>
                                                </div>
                                                <div class=media-body>
                                                    <div class=text-nowrap>Circle Icon</div>
                                                    <small class=text-muted>15 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=# class=media>
                                                <span class="badge badge-success pull-right">90%</span>
                                                <div class=media-left>
<span class="icon-wrap icon-circle bg-danger">
<i class="pli-mail-open icon-lg icon-lg"></i>
</span>
                                                </div>
                                                <div class=media-body>
                                                    <div class=text-nowrap>Circle icon with badge</div>
                                                    <small class=text-muted>50 minutes ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=# class=media>
                                                <div class=media-left>
<span class="icon-wrap bg-info">
<i class="pli-monitor-3 icon-lg icon-lg"></i>
</span>
                                                </div>
                                                <div class=media-body>
                                                    <div class=text-nowrap>Square icon</div>
                                                    <small class=text-muted>Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=# class=media>
                                                <span class="label label-danger pull-right">New</span>
                                                <div class=media-left>
<span class="icon-wrap bg-purple">
<i class="pli-paintbrush icon-lg icon-lg"></i>
</span>
                                                </div>
                                                <div class=media-body>
                                                    <div class=text-nowrap>Square icon with label</div>
                                                    <small class=text-muted>Last Update 8 hours ago</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pad-all bord-top">
                                <a href=# class="btn-link text-dark box-block">
                                    <i class="pli-arrow-right-2 pull-right"></i>Show All Notifications
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class=mega-dropdown>
                        <a href=# class=mega-dropdown-toggle>
                            <i class="pli-layout-grid icon-lg"></i>
                        </a>
                        <div class="dropdown-menu mega-dropdown-menu">
                            <div class=clearfix>
                                <div class="col-sm-12 col-md-3">
                                    <div class="text-center bg-info pad-all">
                                        <h4 class="text-light mar-no">Weekend shopping</h4>
                                        <div class="pad-ver box-inline">
<span class="icon-wrap icon-wrap-lg icon-circle bg-trans-light">
<i class="pli-add-cart icon-4x"></i>
</span>
                                        </div>
                                        <p class=pad-btm>
                                            Members get <span class="text-lg text-bold">50%</span> more points. Lorem ipsum dolor sit amet!
                                        </p>
                                        <a href=# class="btn btn-info">Learn More...</a>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <ul class=list-unstyled>
                                        <li class=dropdown-header>Pages</li>
                                        <li><a href=#>Profile</a></li>
                                        <li><a href=#>Search Result</a></li>
                                        <li><a href=#>FAQ</a></li>
                                        <li><a href=#>Sreen Lock</a></li>
                                        <li><a href=# class=disabled>Disabled</a></li>
                                        <li class=divider></li>
                                        <li class=dropdown-header>Icons</li>
                                        <li><a href=#><span class="pull-right badge badge-purple">479</span> Font Awesome</a></li>
                                        <li><a href=#>Skycons</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <ul class=list-unstyled>
                                        <li class=dropdown-header>Mailbox</li>
                                        <li><a href=#><span class="pull-right label label-danger">Hot</span>Indox</a></li>
                                        <li><a href=#>Read Message</a></li>
                                        <li><a href=#>Compose</a></li>
                                        <li class=divider></li>
                                        <li class=dropdown-header>Featured</li>
                                        <li><a href=#>Smart navigation</a></li>
                                        <li><a href=#><span class="pull-right badge badge-success">6</span>Exclusive plugins</a></li>
                                        <li><a href=#>Lot of themes</a></li>
                                        <li><a href=#>Transition effects</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <ul class=list-unstyled>
                                        <li class=dropdown-header>Components</li>
                                        <li><a href=#>Tables</a></li>
                                        <li><a href=#>Charts</a></li>
                                        <li><a href=#>Forms</a></li>
                                        <li class=divider></li>
                                        <li>
                                            <form role=form class=form>
                                                <div class=form-group>
                                                    <label class=dropdown-header for=demo-megamenu-input>Newsletter</label>
                                                    <input id=demo-megamenu-input type=email placeholder="Enter email" class=form-control>
                                                </div>
                                                <button class="btn btn-primary btn-block" type=submit>Submit</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-top-links pull-right">
                    <li class=dropdown>
                        <a class="lang-selector dropdown-toggle" href=# data-toggle=dropdown>
<span class=lang-selected>
<img class=lang-flag src= {{asset('img/flags/united-kingdom.png')}} alt=English>
<span class=lang-id>EN</span>
<span class=lang-name>English</span>
</span>
                        </a>
                        <ul class="head-list dropdown-menu">
                            <li>
                                <a href=# class=active>
                                    <img class=lang-flag src= {{asset('img/flags/united-kingdom.png')}} alt=English>
                                    <span class=lang-id>EN</span>
                                    <span class=lang-name>English</span>
                                </a>
                            </li>
                            <li>
                                <a href=#>
                                    <img class=lang-flag src= {{asset('img/flags/france.png')}} alt=France>
                                    <span class=lang-id>FR</span>
                                    <span class=lang-name>Fran&ccedil;ais</span>
                                </a>
                            </li>
                            <li>
                                <a href=#>
                                    <img class=lang-flag src= {{asset('img/flags/germany.png')}} alt=Germany>
                                    <span class=lang-id>DE</span>
                                    <span class=lang-name>Deutsch</span>
                                </a>
                            </li>
                            <li>
                                <a href=#>
                                    <img class=lang-flag src= {{asset('img/flags/italy.png')}} alt=Italy>
                                    <span class=lang-id>IT</span>
                                    <span class=lang-name>Italiano</span>
                                </a>
                            </li>
                            <li>
                                <a href=#>
                                    <img class=lang-flag src= {{asset('img/flags/spain.png')}} alt=Spain>
                                    <span class=lang-id>ES</span>
                                    <span class=lang-name>Espa&ntilde;ol</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li id=dropdown-user class=dropdown>
                        <a href=# data-toggle=dropdown class="dropdown-toggle text-right">
<span class="ic-user pull-right">
<i class=pli-male></i>
</span>
                            <div class="username hidden-xs">John Doe</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
                            <div class="pad-all bord-btm">
                                <p class="text-main mar-btm"><span class=text-bold>750GB</span> of 1,000GB Used</p>
                                <div class="progress progress-sm">
                                    <div class=progress-bar style=width:70%>
                                        <span class=sr-only>70%</span>
                                    </div>
                                </div>
                            </div>
                            <ul class=head-list>
                                <li>
                                    <a href=#>
                                        <i class="pli-male icon-fw icon-lg"></i> Profile
                                    </a>
                                </li>
                                <li>
                                    <a href=#>
                                        <span class="badge badge-danger pull-right">9</span>
                                        <i class="pli-mail icon-fw icon-lg"></i> Messages
                                    </a>
                                </li>
                                <li>
                                    <a href=#>
                                        <span class="label label-success pull-right">New</span>
                                        <i class="pli-gear icon-fw icon-lg"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <div class="pad-all text-right">
                                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                                    <i class="pli-unlock icon-fw"></i> Logout
                                </a>
                                <form id=logout-form action="{{ route('logout') }}" method=POST style=display:none>
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href=# class="aside-toggle navbar-aside-icon">
                            <i class=pci-ver-dots></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class=boxed>
        <div id=content-container>
            @yield('content')
        </div>
        <nav id=mainnav-container>
            <div id=mainnav>
                <div id=mainnav-menu-wrap>
                    <div class=nano>
                        <div class=nano-content>
                            <div id=mainnav-profile class=mainnav-profile>
                                <div class="profile-wrap text-center">
                                    <div class=pad-btm>
                                        <img class="img-circle img-md" src= {{asset('img/profile-photos/1.png')}} alt="Profile Picture">
                                    </div>
                                    <a href=#profile-nav class=box-block data-toggle=collapse aria-expanded=false>
<span class="pull-right dropdown-toggle">
<i class=dropdown-caret></i>
</span>
                                        <p class=mnp-name>Hassan <Abbas></Abbas></p>
                                        <span class=mnp-desc>hsnch41@gmail.com</span>
                                    </a>
                                </div>
                                <div id=profile-nav class="collapse list-group bg-trans">
                                    <a href=# class=list-group-item>
                                        <i class="pli-male icon-lg icon-fw"></i> View Profile
                                    </a>
                                    <a href=# class=list-group-item>
                                        <i class="pli-gear icon-lg icon-fw"></i> Settings
                                    </a>
                                    <a href=# class=list-group-item>
                                        <i class="pli-information icon-lg icon-fw"></i> Help
                                    </a>
                                    <a href=# class=list-group-item>
                                        <i class="pli-unlock icon-lg icon-fw"></i> Logout
                                    </a>
                                </div>
                            </div>
                            <ul id=mainnav-menu class=list-group>
                                <li class=list-header>Main Menu</li>
                                <li>
                                    <a href=#>
                                        <i class=psi-quill-2></i>
                                        <span class=menu-title>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=#>
                                        <i class=psi-hipster-headphones></i>
                                        <span class=menu-title>
<strong>Student</strong>
</span>
                                        <i class=arrow></i>
                                    </a>
                                    <ul class=collapse>
                                        <li><a href=#>Admit Student</a></li>
                                        <li><a href=#>Stuednt Information</a></li>
                                        <li><a href=#>Promtoe Student</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=#>
                                        <i class=psi-gamepad-2></i>
                                        <span class=menu-title>Teacher
</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=#>
                                        <i class=psi-usb></i>
                                        <span class=menu-title>
Parents
</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=#>
                                        <i class=psi-usb></i>
                                        <span class=menu-title>
Librarian
</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=#>
                                        <i class=psi-usb></i>
                                        <span class=menu-title>
                                            Accountant
                                        </span>
                                    </a>
                                </li>


                                <li>
                                    <a href=#>
                                        <i class=psi-hipster-headphones></i>
                                        <span class=menu-title>
                                            <strong>Class</strong>
                                        </span>
                                        <i class=arrow></i>
                                    </a>
                                    <ul class=collapse>
                                        <li><a href=#>Manage Classes</a></li>
                                        <li><a href=#>Manage Sections</a></li>
                                        <li><a href=#>Academic Syllabus</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=#>
                                        <i class=psi-usb></i>
                                        <span class=menu-title>
                                            Transport
                                        </span>
                                    </a>
                                </li>
                                <li class=list-divider></li>
                                <li class=list-header>Multi level</li>
                                <li>
                                    <a href=#>
                                        <i class=psi-geo-2-star></i>
                                        <span class=menu-title>Menu Level</span>
                                        <i class=arrow></i>
                                    </a>
                                    <ul class=collapse>
                                        <li><a href=#>Second Level Item</a></li>
                                        <li><a href=#>Second Level Item</a></li>
                                        <li><a href=#>Second Level Item</a></li>
                                        <li class=list-divider></li>
                                        <li>
                                            <a href=#>Third Level<i class=arrow></i></a>
                                            <ul class=collapse>
                                                <li><a href=#>Third Level Item</a></li>
                                                <li><a href=#>Third Level Item</a></li>
                                                <li><a href=#>Third Level Item</a></li>
                                                <li><a href=#>Third Level Item</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=#>Third Level<i class=arrow></i></a>
                                            <ul class=collapse>
                                                <li><a href=#>Third Level Item</a></li>
                                                <li><a href=#>Third Level Item</a></li>
                                                <li><a href=#>Third Level Item</a></li>
                                                <li class=list-divider></li>
                                                <li><a href=#>Third Level Item</a></li>
                                                <li><a href=#>Third Level Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class=mainnav-widget>
                                <div class=show-small>
                                    <a href=# data-toggle=menu-widget data-target=#demo-wg-server>
                                        <i class="fa fa-desktop"></i>
                                    </a>
                                </div>
                                <div id=demo-wg-server class="hide-small mainnav-widget-content">
                                    <ul class=list-group>
                                        <li class="list-header pad-no pad-ver">Simple Widget</li>
                                        <li class=mar-btm>
                                            <span class="label label-primary pull-right">15%</span>
                                            <p>CPU Usage</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-primary" style=width:15%>
                                                    <span class=sr-only>15%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=mar-btm>
                                            <span class="label label-purple pull-right">75%</span>
                                            <p>Bandwidth</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-purple" style=width:75%>
                                                    <span class=sr-only>75%</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class=pad-ver><a href=# class="btn btn-success btn-bock">View Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <aside id=aside-container>
            <div id=aside>
                <div class=nano>
                    <div class=nano-content>
                        <ul class="nav nav-tabs nav-justified">
                            <li class=active>
                                <a href=#demo-asd-tab-1 data-toggle=tab>
                                    <i class=pli-speech-bubble-7></i>
                                </a>
                            </li>
                            <li>
                                <a href=#demo-asd-tab-2 data-toggle=tab>
                                    <i class=pli-information></i>
                                    Reports
                                </a>
                            </li>
                            <li>
                                <a href=#demo-asd-tab-3 data-toggle=tab>
                                    <i class=pli-wrench></i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                        <div class=tab-content>
                            <div class="tab-pane fade in active" id=demo-asd-tab-1>
                                <p class="pad-all text-lg">First tab</p>
                                <div class=pad-hor>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                    et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                </div>
                            </div>
                            <div class="tab-pane fade" id=demo-asd-tab-2>
                                <p class="pad-all text-lg">Second tab</p>
                                <div class=pad-hor>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                    et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                </div>
                            </div>
                            <div class="tab-pane fade" id=demo-asd-tab-3>
                                <p class="pad-all text-lg">Third tab</p>
                                <div class=pad-hor>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                    sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                                    ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                                    velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan
                                    et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
    <footer id=footer>
        <div class="show-fixed pad-rgt pull-right">
            You have <a href=# class=text-main><span class="badge badge-danger">3</span> pending action.</a>
        </div>
        <div class="hide-fixed pull-right pad-rgt">
            14GB of <strong>512GB</strong> Free.
        </div>
        <p class=pad-lft>&#0169; 2017 Your Company</p>
    </footer>
    <button class="scroll-top btn">
        <i class="pci-chevron chevron-up"></i>
    </button>
</div>
</body>
</html>