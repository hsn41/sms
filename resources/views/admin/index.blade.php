@extends('layouts.admin')
@section('content')
    <div id=page-title>
        <h1 class="page-header text-overflow">Dashboard</h1>
    </div>
    <ol class=breadcrumb>
        <li class="active">Dashboard</li>

    </ol>
    <div id=page-content class="container-fluid">
        <div class="col-md-12 col-lg-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel panel-warning panel-colorful">
                        <div class="pad-all media">
                            <div class="media-left">
                                <i class="demo-pli-male icon-3x icon-fw"></i>
                            </div>
                            <div class="media-body">
                                <p class="h3 text-light mar-no media-heading">314,675</p>
                                <span>Admission Applications</span>
                            </div>
                        </div>
                        <div class="progress progress-xs progress-success mar-no">
                            <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width:30%"></div>
                        </div>
                        <div class="pad-all text-sm">
                            <span class="text-semibold">30</span> Verified
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel panel-success panel-colorful">
                        <div class="pad-all media">
                            <div class="media-left">
                                <i class="demo-pli-male icon-3x icon-fw"></i>
                            </div>
                            <div class="media-body">
                                <p class="h3 text-light mar-no media-heading">314,675</p>
                                <span>Students</span>
                            </div>
                        </div>
                        <div class="progress progress-xs progress-success mar-no">
                            <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width:30%"></div>
                        </div>
                        <div class="pad-all text-sm">
                            <span class="text-semibold">30</span> Present Today
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel panel-purple panel-colorful">
                        <div class="pad-all media">
                            <div class="media-left">
                                <i class="demo-pli-male icon-3x icon-fw"></i>
                            </div>
                            <div class="media-body">
                                <p class="h3 text-light mar-no media-heading">314,675</p>
                                <span>Course</span>
                            </div>
                        </div>
                        <div class="progress progress-xs progress-success mar-no">
                            <div role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width:30%"></div>
                        </div>
                        <div class="pad-all text-sm">
                            <span class="text-semibold">30</span> New This Year
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="panel panel-primary panel-colorful">
                        <div class="pad-all media">
                            <div class="media-left">
                                <i class="demo-pli-add-cart icon-3x icon-fw"></i>
                            </div>
                            <div class="media-body">
                                <p class="h3 text-light mar-no media-heading">5,345</p>
                                <span>Teacher</span>
                            </div>
                        </div>
                        <div class="progress progress-xs progress-dark-base mar-no">
                            <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-light" style="width:75%"></div>
                        </div>
                        <div class="pad-all text-sm bg-trans-dark">
                            <span class="text-semibold">954</span> Present Today
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Filtering</h3>
            </div>

            <!-- Foo Table - Filtering -->
            <!--===================================================-->
            <div class="panel-body">
                <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                    <thead>
                    <tr>
                        <th data-toggle="true">First Name</th>
                        <th>Last Name</th>
                        <th data-hide="phone, tablet">Job Title</th>
                        <th data-hide="phone, tablet">DOB</th>
                        <th data-hide="phone, tablet">Status</th>
                    </tr>
                    </thead>
                    <div class="pad-btm form-inline">
                        <div class="row">
                            <div class="col-sm-6 text-xs-center">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select id="demo-foo-filter-status" class="form-control">
                                        <option value="">Show all</option>
                                        <option value="active">Active</option>
                                        <option value="disabled">Disabled</option>
                                        <option value="suspended">Suspended</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 text-xs-center text-right">
                                <div class="form-group">
                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                    <tbody>
                    <tr>
                        <td>Isidra</td>
                        <td>Boudreaux</td>
                        <td>Traffic Court Referee</td>
                        <td>22 Jun 1972</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Shona</td>
                        <td>Woldt</td>
                        <td>Airline Transport Pilot</td>
                        <td>3 Oct 1981</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Granville</td>
                        <td>Leonardo</td>
                        <td>Business Services Sales Representative</td>
                        <td>19 Apr 1969</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Easer</td>
                        <td>Dragoo</td>
                        <td>Drywall Stripper</td>
                        <td>13 Dec 1977</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Maple</td>
                        <td>Halladay</td>
                        <td>Aviation Tactical Readiness Officer</td>
                        <td>30 Dec 1991</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Maxine</td>
                        <td><a href="#">Woldt</a></td>
                        <td><a href="#">Business Services Sales Representative</a></td>
                        <td>17 Oct 1987</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Lorraine</td>
                        <td>Mcgaughy</td>
                        <td>Hemodialysis Technician</td>
                        <td>11 Nov 1983</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Lizzee</td>
                        <td><a href="#">Goodlow</a></td>
                        <td>Technical Services Librarian</td>
                        <td>1 Nov 1961</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Judi</td>
                        <td>Badgett</td>
                        <td>Electrical Lineworker</td>
                        <td>23 Jun 1981</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Lauri</td>
                        <td>Hyland</td>
                        <td>Blackjack Supervisor</td>
                        <td>15 Nov 1985</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Isidra</td>
                        <td>Boudreaux</td>
                        <td>Traffic Court Referee</td>
                        <td>22 Jun 1972</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Shona</td>
                        <td>Woldt</td>
                        <td>Airline Transport Pilot</td>
                        <td>3 Oct 1981</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Granville</td>
                        <td>Leonardo</td>
                        <td>Business Services Sales Representative</td>
                        <td>19 Apr 1969</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Easer</td>
                        <td>Dragoo</td>
                        <td>Drywall Stripper</td>
                        <td>13 Dec 1977</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Maple</td>
                        <td>Halladay</td>
                        <td>Aviation Tactical Readiness Officer</td>
                        <td>30 Dec 1991</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Maxine</td>
                        <td><a href="#">Woldt</a></td>
                        <td><a href="#">Business Services Sales Representative</a></td>
                        <td>17 Oct 1987</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Lorraine</td>
                        <td>Mcgaughy</td>
                        <td>Hemodialysis Technician</td>
                        <td>11 Nov 1983</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Lizzee</td>
                        <td><a href="#">Goodlow</a></td>
                        <td>Technical Services Librarian</td>
                        <td>1 Nov 1961</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Judi</td>
                        <td>Badgett</td>
                        <td>Electrical Lineworker</td>
                        <td>23 Jun 1981</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Lauri</td>
                        <td>Hyland</td>
                        <td>Blackjack Supervisor</td>
                        <td>15 Nov 1985</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Isidra</td>
                        <td>Boudreaux</td>
                        <td>Traffic Court Referee</td>
                        <td>22 Jun 1972</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Shona</td>
                        <td>Woldt</td>
                        <td>Airline Transport Pilot</td>
                        <td>3 Oct 1981</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Granville</td>
                        <td>Leonardo</td>
                        <td>Business Services Sales Representative</td>
                        <td>19 Apr 1969</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Easer</td>
                        <td>Dragoo</td>
                        <td>Drywall Stripper</td>
                        <td>13 Dec 1977</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Maple</td>
                        <td>Halladay</td>
                        <td>Aviation Tactical Readiness Officer</td>
                        <td>30 Dec 1991</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Maxine</td>
                        <td><a href="#">Woldt</a></td>
                        <td><a href="#">Business Services Sales Representative</a></td>
                        <td>17 Oct 1987</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Lorraine</td>
                        <td>Mcgaughy</td>
                        <td>Hemodialysis Technician</td>
                        <td>11 Nov 1983</td>
                        <td><span class="label label-table label-dark">Disabled</span></td>
                    </tr>
                    <tr>
                        <td>Lizzee</td>
                        <td><a href="#">Goodlow</a></td>
                        <td>Technical Services Librarian</td>
                        <td>1 Nov 1961</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    <tr>
                        <td>Judi</td>
                        <td>Badgett</td>
                        <td>Electrical Lineworker</td>
                        <td>23 Jun 1981</td>
                        <td><span class="label label-table label-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>Lauri</td>
                        <td>Hyland</td>
                        <td>Blackjack Supervisor</td>
                        <td>15 Nov 1985</td>
                        <td><span class="label label-table label-danger">Suspended</span></td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="5">
                            <div class="text-right">
                                <ul class="pagination"></ul>
                            </div>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <!--===================================================-->
            <!-- End Foo Table - Filtering -->

        </div>
    </div>
@stop