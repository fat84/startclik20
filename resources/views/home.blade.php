@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:56:31 GMT -->
<head><title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="../fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/mainbfdf.css?version=2.3" rel="stylesheet">
</head>
<body>
<div class="all-wrapper menu-side with-side-panel">
    <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Forms</span></a>
                        <ul class="sub-menu">
                            <li><a href="forms_regular.html">Regular Forms</a></li>
                            <li><a href="forms_validation.html">Form Validation</a></li>
                            <li><a href="forms_wizard.html">Form Wizard</a></li>
                            <li><a href="forms_uploads.html">File Uploads</a></li>
                            <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares"></div>
                            </div>
                            <span>Tables</span></a>
                        <ul class="sub-menu">
                            <li><a href="tables_regular.html">Regular Tables</a></li>
                            <li><a href="tables_datatables.html">Data Tables</a></li>
                            <li><a href="tables_editable.html">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-hierarchy-structure-2"></div>
                            </div>
                            <span>Menu Styles</span></a>
                        <ul class="sub-menu">
                            <li><a href="layouts_menu_side.html">Side Menu</a></li>
                            <li><a href="layouts_menu_side_dark.html">Side Menu Dark</a></li>
                            <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                            <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                            <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                            <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                            <li><a href="layouts_menu_top_image.html">Top Menu Image</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-robot-1"></div>
                            </div>
                            <span>Icons</span></a>
                        <ul class="sub-menu">
                            <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                            <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                            <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                            <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                            <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                            <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                            <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                            <li><a href="icon_fonts_ligature_symbols.html">Ligature Symbols</a></li>
                            <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                            <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                            <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                            <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                            <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                            <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_charts.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-donut-chart-2"></div>
                            </div>
                            <span>Charts</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-newspaper"></div>
                            </div>
                            <span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="misc_invoice.html">Invoice</a></li>
                            <li><a href="auth_login.html">Login</a></li>
                            <li><a href="auth_register.html">Register</a></li>
                            <li><a href="auth_lock.html">Lock Screen</a></li>
                            <li><a href="misc_chat.html">Popup Chat</a></li>
                            <li><a href="misc_error_404.html">Error 404</a></li>
                            <li><a href="misc_error_500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_calendar.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-calendar-time"></div>
                            </div>
                            <span>Calendar</span></a></li>
                </ul>
                <div class="mobile-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>
            </div>
        </div>
        <div class="desktop-menu menu-side-w menu-activated-on-click">
            <div class="logo-w"><a class="logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                    <div class="logged-user-menu">
                        <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                        <ul>
                            <li><a href="#"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                            <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                            </li>
                            <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                            </li>
                            <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                            <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Forms</span></a>
                        <ul class="sub-menu">
                            <li><a href="forms_regular.html">Regular Forms</a></li>
                            <li><a href="forms_validation.html">Form Validation</a></li>
                            <li><a href="forms_wizard.html">Form Wizard</a></li>
                            <li><a href="forms_uploads.html">File Uploads</a></li>
                            <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares"></div>
                            </div>
                            <span>Tables</span></a>
                        <ul class="sub-menu">
                            <li><a href="tables_regular.html">Regular Tables</a></li>
                            <li><a href="tables_datatables.html">Data Tables</a></li>
                            <li><a href="tables_editable.html">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-hierarchy-structure-2"></div>
                            </div>
                            <span>Menu Styles</span></a>
                        <ul class="sub-menu">
                            <li><a href="layouts_menu_side.html">Side Menu</a></li>
                            <li><a href="layouts_menu_side_dark.html">Side Menu Dark</a></li>
                            <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                            <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                            <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                            <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                            <li><a href="layouts_menu_top_image.html">Top Menu Image</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-robot-1"></div>
                            </div>
                            <span>Icons</span></a>
                        <ul class="sub-menu">
                            <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                            <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                            <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                            <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                            <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                            <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                            <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                            <li><a href="icon_fonts_ligature_symbols.html">Ligature Symbols</a></li>
                            <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                            <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                            <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                            <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                            <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                            <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_charts.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-donut-chart-2"></div>
                            </div>
                            <span>Charts</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-newspaper"></div>
                            </div>
                            <span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="misc_invoice.html">Invoice</a></li>
                            <li><a href="auth_login.html">Login</a></li>
                            <li><a href="auth_register.html">Register</a></li>
                            <li><a href="auth_lock.html">Lock Screen</a></li>
                            <li><a href="misc_chat.html">Popup Chat</a></li>
                            <li><a href="misc_error_404.html">Error 404</a></li>
                            <li><a href="misc_error_500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_calendar.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-calendar-time"></div>
                            </div>
                            <span>Calendar</span></a></li>
                </ul>
                <div class="side-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>
            </div>
        </div>
        <div class="content-w">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
            </ul>
            <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <div class="element-actions">
                                    <form class="form-inline justify-content-sm-end"><select
                                                class="form-control form-control-sm rounded">
                                            <option value="Pending">Today</option>
                                            <option value="Active">Last Week</option>
                                            <option value="Cancelled">Last 30 Days</option>
                                        </select></form>
                                </div>
                                <h6 class="element-header">Sales Dashboard</h6>
                                <div class="element-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">Products Sold</div>
                                                <div class="value">57</div>
                                                <div class="trending trending-up"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-up2"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">Gross Profit</div>
                                                <div class="value">$457</div>
                                                <div class="trending trending-down-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-2-down"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">New Customers</div>
                                                <div class="value">125</div>
                                                <div class="trending trending-down-basic"><span>9%</span><i
                                                            class="os-icon os-icon-graph-down"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="element-wrapper"><h6 class="element-header">New Orders</h6>
                                <div class="element-box">
                                    <div class="table-responsive">
                                        <table class="table table-lightborder">
                                            <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Products Ordered</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-right">Order Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="nowrap">John Mayers</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio9.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio2.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio12.jpg)"></div>
                                                        <div class="cell-img-more">+ 5 more</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$354</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Kelly Brans</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio14.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio8.jpg)"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill red" data-title="Cancelled"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$94</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Tim Howard</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio16.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio14.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio5.jpg)"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$156</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Joe Trulli</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio1.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio5.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio6.jpg)"></div>
                                                        <div class="cell-img-more">+ 2 more</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill yellow" data-title="Pending"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$1,120</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Jerry Lingard</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio9.jpg)"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$856</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="element-wrapper"><h6 class="element-header">Top Selling Today</h6>
                                <div class="element-box">
                                    <div class="el-chart-w">
                                        <canvas height="120" id="donutChart" width="120"></canvas>
                                        <div class="inside-donut-chart-label">
                                            <strong>142</strong><span>Total Orders</span></div>
                                    </div>
                                    <div class="el-legend">
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #6896f9;"></div>
                                            <div class="legend-value">Processed</div>
                                        </div>
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #85c751;"></div>
                                            <div class="legend-value">Cancelled</div>
                                        </div>
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #d97b70;"></div>
                                            <div class="legend-value">Pending</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper"><h6 class="element-header">Unique Visitors Graph</h6>
                                <div class="element-box">
                                    <div class="os-tabs-w">
                                        <div class="os-tabs-controls">
                                            <ul class="nav nav-tabs smaller">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                        href="#tab_overview">Overview</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                                        href="#tab_sales">Sales</a></li>
                                            </ul>
                                            <ul class="nav nav-pills smaller hidden-sm-down">
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Today</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                        href="#">7 Days</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">14
                                                        Days</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Last
                                                        Month</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_overview">
                                                <div class="el-tablo">
                                                    <div class="label">Unique Visitors</div>
                                                    <div class="value">12,537</div>
                                                </div>
                                                <div class="el-chart-w">
                                                    <canvas height="150px" id="lineChart" width="600px"></canvas>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_sales"></div>
                                            <div class="tab-pane" id="tab_conversion"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper"><h6 class="element-header">Recent Orders</h6>
                                <div class="element-box-tp">
                                    <div class="controls-above-table">
                                        <div class="row">
                                            <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                                                    CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a
                                                        class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                            <div class="col-sm-6">
                                                <form class="form-inline justify-content-sm-end"><input
                                                            class="form-control form-control-sm rounded bright"
                                                            placeholder="Search" type="text"><select
                                                            class="form-control form-control-sm rounded bright">
                                                        <option selected="selected" value="">Select Status</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                    </select></form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-lg table-v2 table-striped">
                                            <thead>
                                            <tr>
                                                <th class="text-center"><input class="form-control" type="checkbox">
                                                </th>
                                                <th>Customer Name</th>
                                                <th>Country</th>
                                                <th>Order Total</th>
                                                <th>Referral</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>John Mayers</td>
                                                <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                                <td class="text-right">$245</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Mike Astone</td>
                                                <td><img alt="" src="img/flags-icons/fr.png" width="25px"></td>
                                                <td class="text-right">$154</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill red" data-title="Cancelled"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Kira Knight</td>
                                                <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                                <td class="text-right">$23</td>
                                                <td>Adwords</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Jessica Bloom</td>
                                                <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                                <td class="text-right">$112</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Gary Lineker</td>
                                                <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                                <td class="text-right">$64</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill yellow" data-title="Pending"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="controls-below-table">
                                        <div class="table-records-info">Showing records 1 - 5</div>
                                        <div class="table-records-pages">
                                            <ul>
                                                <li><a href="#">Previous</a></li>
                                                <li><a class="current" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span></div>
                    <div class="floated-chat-w">
                        <div class="floated-chat-i">
                            <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
                            <div class="chat-head">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">John Mayers</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-messages">
                                <div class="message">
                                    <div class="message-content">Hi, how can I help you?</div>
                                </div>
                                <div class="date-break">Mon 10:20am</div>
                                <div class="message">
                                    <div class="message-content">Hi, my name is Mike, I will be happy to assist you
                                    </div>
                                </div>
                                <div class="message self">
                                    <div class="message-content">Hi, I tried ordering this product and it keeps showing
                                        me error code.
                                    </div>
                                </div>
                            </div>
                            <div class="chat-controls"><input class="message-input"
                                                              placeholder="Type your message here..." type="text">
                                <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                                                class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                                                class="extra-tooltip">Insert Photo</span><i
                                                class="os-icon os-icon-others-29"></i></a><a href="#"><span
                                                class="extra-tooltip">Upload Video</span><i
                                                class="os-icon os-icon-ui-51"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-panel">
                    <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
                    <div class="element-wrapper"><h6 class="element-header">Quick Links</h6>
                        <div class="element-box-tp">
                            <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-delivery-box-2"></i><span>Create New Product</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-window-content"></i><span>Customer Comments</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper"><h6 class="element-header">Support Agents</h6>
                        <div class="element-box-tp">
                            <div class="profile-tile">
                                <div class="profile-tile-box">
                                    <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                    <div class="pt-user-name">Mark Parson</div>
                                </div>
                                <div class="profile-tile-meta">
                                    <ul>
                                        <li>Last Login:<strong>Online Now</strong></li>
                                        <li>Tickets:<strong>12</strong></li>
                                        <li>Response Time:<strong>2 hours</strong></li>
                                    </ul>
                                    <div class="pt-btn"><a class="btn btn-success btn-sm" href="#">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-tile">
                                <div class="profile-tile-box">
                                    <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                    <div class="pt-user-name">Mark Parson</div>
                                </div>
                                <div class="profile-tile-meta">
                                    <ul>
                                        <li>Last Login:<strong>Online Now</strong></li>
                                        <li>Tickets:<strong>12</strong></li>
                                        <li>Response Time:<strong>2 hours</strong></li>
                                    </ul>
                                    <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="#">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper"><h6 class="element-header">Recent Activity</h6>
                        <div class="element-box-tp">
                            <div class="activity-boxes-w">
                                <div class="activity-box-w">
                                    <div class="activity-time">10 Min</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Mark Pearson</div>
                                            <strong class="activity-title">Opened New Account</strong></div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">2 Hours</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">John Mayers</div>
                                            <strong class="activity-title">Posted Comment</strong></div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">5 Hours</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Kate Wallet</div>
                                            <strong class="activity-title">Opened New Account</strong></div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">2 Days</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Monica Bonak</div>
                                            <strong class="activity-title">Uploaded Image</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper"><h6 class="element-header">Team Members</h6>
                        <div class="element-box-tp">
                            <div class="input-search-w"><input class="form-control rounded bright"
                                                               placeholder="Search team members..." type="search"></div>
                            <div class="users-list-w">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">John Mayers</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">Ben Gossman</h6>
                                        <div class="user-role">Administrator</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-red">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">Phil Nokorin</h6>
                                        <div class="user-role">HR Manger</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">Jenny Miksa</h6>
                                        <div class="user-role">Lead Developer</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="js/mainbfdf.js?version=2.3"></script>
<script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42863888-9', 'auto');
    ga('send', 'pageview');</script>
</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:57:06 GMT -->
</html>


<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/tables_datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:57:08 GMT -->
<head><title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="../fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/mainbfdf.css?version=2.3" rel="stylesheet">
</head>
<body>
<div class="all-wrapper menu-side">
    <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Forms</span></a>
                        <ul class="sub-menu">
                            <li><a href="forms_regular.html">Regular Forms</a></li>
                            <li><a href="forms_validation.html">Form Validation</a></li>
                            <li><a href="forms_wizard.html">Form Wizard</a></li>
                            <li><a href="forms_uploads.html">File Uploads</a></li>
                            <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares"></div>
                            </div>
                            <span>Tables</span></a>
                        <ul class="sub-menu">
                            <li><a href="tables_regular.html">Regular Tables</a></li>
                            <li><a href="tables_datatables.html">Data Tables</a></li>
                            <li><a href="tables_editable.html">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-hierarchy-structure-2"></div>
                            </div>
                            <span>Menu Styles</span></a>
                        <ul class="sub-menu">
                            <li><a href="layouts_menu_side.html">Side Menu</a></li>
                            <li><a href="layouts_menu_side_dark.html">Side Menu Dark</a></li>
                            <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                            <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                            <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                            <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                            <li><a href="layouts_menu_top_image.html">Top Menu Image</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-robot-1"></div>
                            </div>
                            <span>Icons</span></a>
                        <ul class="sub-menu">
                            <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                            <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                            <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                            <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                            <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                            <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                            <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                            <li><a href="icon_fonts_ligature_symbols.html">Ligature Symbols</a></li>
                            <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                            <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                            <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                            <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                            <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                            <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_charts.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-donut-chart-2"></div>
                            </div>
                            <span>Charts</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-newspaper"></div>
                            </div>
                            <span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="misc_invoice.html">Invoice</a></li>
                            <li><a href="auth_login.html">Login</a></li>
                            <li><a href="auth_register.html">Register</a></li>
                            <li><a href="auth_lock.html">Lock Screen</a></li>
                            <li><a href="misc_chat.html">Popup Chat</a></li>
                            <li><a href="misc_error_404.html">Error 404</a></li>
                            <li><a href="misc_error_500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_calendar.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-calendar-time"></div>
                            </div>
                            <span>Calendar</span></a></li>
                </ul>
                <div class="mobile-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>
            </div>
        </div>
        <div class="desktop-menu menu-side-w menu-activated-on-click">
            <div class="logo-w"><a class="logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                    <div class="logged-user-menu">
                        <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                        <ul>
                            <li><a href="#"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                            <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                            </li>
                            <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                            </li>
                            <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                            <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Forms</span></a>
                        <ul class="sub-menu">
                            <li><a href="forms_regular.html">Regular Forms</a></li>
                            <li><a href="forms_validation.html">Form Validation</a></li>
                            <li><a href="forms_wizard.html">Form Wizard</a></li>
                            <li><a href="forms_uploads.html">File Uploads</a></li>
                            <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares"></div>
                            </div>
                            <span>Tables</span></a>
                        <ul class="sub-menu">
                            <li><a href="tables_regular.html">Regular Tables</a></li>
                            <li><a href="tables_datatables.html">Data Tables</a></li>
                            <li><a href="tables_editable.html">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-hierarchy-structure-2"></div>
                            </div>
                            <span>Menu Styles</span></a>
                        <ul class="sub-menu">
                            <li><a href="layouts_menu_side.html">Side Menu</a></li>
                            <li><a href="layouts_menu_side_dark.html">Side Menu Dark</a></li>
                            <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                            <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                            <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                            <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                            <li><a href="layouts_menu_top_image.html">Top Menu Image</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-robot-1"></div>
                            </div>
                            <span>Icons</span></a>
                        <ul class="sub-menu">
                            <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                            <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                            <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                            <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                            <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                            <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                            <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                            <li><a href="icon_fonts_ligature_symbols.html">Ligature Symbols</a></li>
                            <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                            <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                            <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                            <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                            <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                            <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_charts.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-donut-chart-2"></div>
                            </div>
                            <span>Charts</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-newspaper"></div>
                            </div>
                            <span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="misc_invoice.html">Invoice</a></li>
                            <li><a href="auth_login.html">Login</a></li>
                            <li><a href="auth_register.html">Register</a></li>
                            <li><a href="auth_lock.html">Lock Screen</a></li>
                            <li><a href="misc_chat.html">Popup Chat</a></li>
                            <li><a href="misc_error_404.html">Error 404</a></li>
                            <li><a href="misc_error_500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_calendar.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-calendar-time"></div>
                            </div>
                            <span>Calendar</span></a></li>
                </ul>
                <div class="side-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>
            </div>
        </div>
        <div class="content-w">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
            </ul>
            <div class="content-i">
                <div class="content-box">
                    <div class="element-wrapper"><h6 class="element-header">Data Tables</h6>
                        <div class="element-box"><h5 class="form-header">Powerful Datatables</h5>
                            <div class="form-desc">DataTables is a plug-in for the jQuery Javascript library. It is a
                                highly flexible tool, based upon the foundations of progressive enhancement, and will
                                add advanced interaction controls to any HTML table.. <a
                                        href="https://www.datatables.net/" target="_blank">Learn More about
                                    DataTables</a></div>
                            <div class="table-responsive">
                                <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>San Francisco</td>
                                        <td>59</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                    </tr>
                                    <tr>
                                        <td>Rhona Davidson</td>
                                        <td>Integration Specialist</td>
                                        <td>Tokyo</td>
                                        <td>55</td>
                                        <td>2010/10/14</td>
                                        <td>$327,900</td>
                                    </tr>
                                    <tr>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Edinburgh</td>
                                        <td>23</td>
                                        <td>2008/12/13</td>
                                        <td>$103,600</td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>30</td>
                                        <td>2008/12/19</td>
                                        <td>$90,560</td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2013/03/03</td>
                                        <td>$342,000</td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr>
                                    <tr>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>London</td>
                                        <td>43</td>
                                        <td>2012/12/18</td>
                                        <td>$313,500</td>
                                    </tr>
                                    <tr>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>19</td>
                                        <td>2010/03/17</td>
                                        <td>$385,750</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>London</td>
                                        <td>66</td>
                                        <td>2012/11/27</td>
                                        <td>$198,500</td>
                                    </tr>
                                    <tr>
                                        <td>Paul Byrd</td>
                                        <td>Chief Financial Officer (CFO)</td>
                                        <td>New York</td>
                                        <td>64</td>
                                        <td>2010/06/09</td>
                                        <td>$725,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>New York</td>
                                        <td>59</td>
                                        <td>2009/04/10</td>
                                        <td>$237,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr>
                                    <tr>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>New York</td>
                                        <td>30</td>
                                        <td>2011/09/03</td>
                                        <td>$345,000</td>
                                    </tr>
                                    <tr>
                                        <td>Yuri Berry</td>
                                        <td>Chief Marketing Officer (CMO)</td>
                                        <td>New York</td>
                                        <td>40</td>
                                        <td>2009/06/25</td>
                                        <td>$675,000</td>
                                    </tr>
                                    <tr>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr>
                                    <tr>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sidney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2009/10/09</td>
                                        <td>$1,200,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                        <td>2010/12/22</td>
                                        <td>$92,575</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                        <td>2010/11/14</td>
                                        <td>$357,650</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                        <td>2011/06/07</td>
                                        <td>$206,850</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona Green</td>
                                        <td>Chief Operating Officer (COO)</td>
                                        <td>San Francisco</td>
                                        <td>48</td>
                                        <td>2010/03/11</td>
                                        <td>$850,000</td>
                                    </tr>
                                    <tr>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Tokyo</td>
                                        <td>20</td>
                                        <td>2011/08/14</td>
                                        <td>$163,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle House</td>
                                        <td>Integration Specialist</td>
                                        <td>Sidney</td>
                                        <td>37</td>
                                        <td>2011/06/02</td>
                                        <td>$95,400</td>
                                    </tr>
                                    <tr>
                                        <td>Suki Burks</td>
                                        <td>Developer</td>
                                        <td>London</td>
                                        <td>53</td>
                                        <td>2009/10/22</td>
                                        <td>$114,500</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>London</td>
                                        <td>27</td>
                                        <td>2011/05/07</td>
                                        <td>$145,000</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Cortez</td>
                                        <td>Team Leader</td>
                                        <td>San Francisco</td>
                                        <td>22</td>
                                        <td>2008/10/26</td>
                                        <td>$235,500</td>
                                    </tr>
                                    <tr>
                                        <td>Martena Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>Edinburgh</td>
                                        <td>46</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                    </tr>
                                    <tr>
                                        <td>Unity Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/12/09</td>
                                        <td>$85,675</td>
                                    </tr>
                                    <tr>
                                        <td>Howard Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>San Francisco</td>
                                        <td>51</td>
                                        <td>2008/12/16</td>
                                        <td>$164,500</td>
                                    </tr>
                                    <tr>
                                        <td>Hope Fuentes</td>
                                        <td>Secretary</td>
                                        <td>San Francisco</td>
                                        <td>41</td>
                                        <td>2010/02/12</td>
                                        <td>$109,850</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>San Francisco</td>
                                        <td>62</td>
                                        <td>2009/02/14</td>
                                        <td>$452,500</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy Mooney</td>
                                        <td>Office Manager</td>
                                        <td>London</td>
                                        <td>37</td>
                                        <td>2008/12/11</td>
                                        <td>$136,200</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson Bradshaw</td>
                                        <td>Director</td>
                                        <td>New York</td>
                                        <td>65</td>
                                        <td>2008/09/26</td>
                                        <td>$645,750</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia Liang</td>
                                        <td>Support Engineer</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2011/02/03</td>
                                        <td>$234,500</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Nash</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>38</td>
                                        <td>2011/05/03</td>
                                        <td>$163,500</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>Tokyo</td>
                                        <td>37</td>
                                        <td>2009/08/19</td>
                                        <td>$139,575</td>
                                    </tr>
                                    <tr>
                                        <td>Thor Walton</td>
                                        <td>Developer</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2013/08/11</td>
                                        <td>$98,540</td>
                                    </tr>
                                    <tr>
                                        <td>Finn Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>San Francisco</td>
                                        <td>47</td>
                                        <td>2009/07/07</td>
                                        <td>$87,500</td>
                                    </tr>
                                    <tr>
                                        <td>Serge Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>Singapore</td>
                                        <td>64</td>
                                        <td>2012/04/09</td>
                                        <td>$138,575</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida Frank</td>
                                        <td>Software Engineer</td>
                                        <td>New York</td>
                                        <td>63</td>
                                        <td>2010/01/04</td>
                                        <td>$125,250</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>56</td>
                                        <td>2012/06/01</td>
                                        <td>$115,000</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>43</td>
                                        <td>2013/02/01</td>
                                        <td>$75,650</td>
                                    </tr>
                                    <tr>
                                        <td>Cara Stevens</td>
                                        <td>Sales Assistant</td>
                                        <td>New York</td>
                                        <td>46</td>
                                        <td>2011/12/06</td>
                                        <td>$145,600</td>
                                    </tr>
                                    <tr>
                                        <td>Hermione Butler</td>
                                        <td>Regional Director</td>
                                        <td>London</td>
                                        <td>47</td>
                                        <td>2011/03/21</td>
                                        <td>$356,250</td>
                                    </tr>
                                    <tr>
                                        <td>Lael Greer</td>
                                        <td>Systems Administrator</td>
                                        <td>London</td>
                                        <td>21</td>
                                        <td>2009/02/27</td>
                                        <td>$103,500</td>
                                    </tr>
                                    <tr>
                                        <td>Jonas Alexander</td>
                                        <td>Developer</td>
                                        <td>San Francisco</td>
                                        <td>30</td>
                                        <td>2010/07/14</td>
                                        <td>$86,500</td>
                                    </tr>
                                    <tr>
                                        <td>Shad Decker</td>
                                        <td>Regional Director</td>
                                        <td>Edinburgh</td>
                                        <td>51</td>
                                        <td>2008/11/13</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Bruce</td>
                                        <td>Javascript Developer</td>
                                        <td>Singapore</td>
                                        <td>29</td>
                                        <td>2011/06/27</td>
                                        <td>$183,000</td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span></div>
                    <div class="floated-chat-w">
                        <div class="floated-chat-i">
                            <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
                            <div class="chat-head">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">John Mayers</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-messages">
                                <div class="message">
                                    <div class="message-content">Hi, how can I help you?</div>
                                </div>
                                <div class="date-break">Mon 10:20am</div>
                                <div class="message">
                                    <div class="message-content">Hi, my name is Mike, I will be happy to assist you
                                    </div>
                                </div>
                                <div class="message self">
                                    <div class="message-content">Hi, I tried ordering this product and it keeps showing
                                        me error code.
                                    </div>
                                </div>
                            </div>
                            <div class="chat-controls"><input class="message-input"
                                                              placeholder="Type your message here..." type="text">
                                <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                                                class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                                                class="extra-tooltip">Insert Photo</span><i
                                                class="os-icon os-icon-others-29"></i></a><a href="#"><span
                                                class="extra-tooltip">Upload Video</span><i
                                                class="os-icon os-icon-ui-51"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/mainbfdf.js?version=2.3"></script>
<script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42863888-9', 'auto');
    ga('send', 'pageview');</script>
</body>
<!-- Mirrored from light.pinsupreme.com/tables_datatables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:57:09 GMT -->
</html>


<!DOCTYPE html>
<html>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:56:31 GMT -->
<head><title>Admin Dashboard HTML Template</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="favicon.png" rel="shortcut icon">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="../fast.fonts.net/cssapi/175a63a1-3f26-476a-ab32-4e21cbdb8be2.css" rel="stylesheet" type="text/css">
    <link href="bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="css/mainbfdf.css?version=2.3" rel="stylesheet">
</head>
<body>
<div class="all-wrapper menu-side with-side-panel">
    <div class="layout-w">
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
            <div class="mm-logo-buttons-w"><a class="mm-logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
                <div class="mm-buttons">
                    <div class="content-panel-open">
                        <div class="os-icon os-icon-grid-circles"></div>
                    </div>
                    <div class="mobile-menu-trigger">
                        <div class="os-icon os-icon-hamburger-menu-1"></div>
                    </div>
                </div>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Forms</span></a>
                        <ul class="sub-menu">
                            <li><a href="forms_regular.html">Regular Forms</a></li>
                            <li><a href="forms_validation.html">Form Validation</a></li>
                            <li><a href="forms_wizard.html">Form Wizard</a></li>
                            <li><a href="forms_uploads.html">File Uploads</a></li>
                            <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares"></div>
                            </div>
                            <span>Tables</span></a>
                        <ul class="sub-menu">
                            <li><a href="tables_regular.html">Regular Tables</a></li>
                            <li><a href="tables_datatables.html">Data Tables</a></li>
                            <li><a href="tables_editable.html">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-hierarchy-structure-2"></div>
                            </div>
                            <span>Menu Styles</span></a>
                        <ul class="sub-menu">
                            <li><a href="layouts_menu_side.html">Side Menu</a></li>
                            <li><a href="layouts_menu_side_dark.html">Side Menu Dark</a></li>
                            <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                            <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                            <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                            <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                            <li><a href="layouts_menu_top_image.html">Top Menu Image</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-robot-1"></div>
                            </div>
                            <span>Icons</span></a>
                        <ul class="sub-menu">
                            <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                            <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                            <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                            <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                            <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                            <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                            <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                            <li><a href="icon_fonts_ligature_symbols.html">Ligature Symbols</a></li>
                            <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                            <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                            <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                            <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                            <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                            <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_charts.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-donut-chart-2"></div>
                            </div>
                            <span>Charts</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-newspaper"></div>
                            </div>
                            <span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="misc_invoice.html">Invoice</a></li>
                            <li><a href="auth_login.html">Login</a></li>
                            <li><a href="auth_register.html">Register</a></li>
                            <li><a href="auth_lock.html">Lock Screen</a></li>
                            <li><a href="misc_chat.html">Popup Chat</a></li>
                            <li><a href="misc_error_404.html">Error 404</a></li>
                            <li><a href="misc_error_500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_calendar.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-calendar-time"></div>
                            </div>
                            <span>Calendar</span></a></li>
                </ul>
                <div class="mobile-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>
            </div>
        </div>
        <div class="desktop-menu menu-side-w menu-activated-on-click">
            <div class="logo-w"><a class="logo" href="index.html"><img src="img/logo.png"><span>Clean Admin</span></a>
            </div>
            <div class="menu-and-user">
                <div class="logged-user-w">
                    <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                    <div class="logged-user-info-w">
                        <div class="logged-user-name">Maria Gomez</div>
                        <div class="logged-user-role">Administrator</div>
                    </div>
                    <div class="logged-user-menu">
                        <div class="avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                        <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                        <ul>
                            <li><a href="#"><i class="os-icon os-icon-mail-01"></i><span>Incoming Mail</span></a></li>
                            <li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile Details</span></a>
                            </li>
                            <li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing Details</span></a>
                            </li>
                            <li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
                            <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                        </ul>
                    </div>
                </div>
                <ul class="main-menu">
                    <li><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-window-content"></div>
                            </div>
                            <span>Dashboard</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user-male-circle"></div>
                            </div>
                            <span>User Profiles</span></a>
                        <ul class="sub-menu">
                            <li><a href="users_profile_big.html">Big Profile</a></li>
                            <li><a href="users_profile_small.html">Compact Profile</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-tasks-checked"></div>
                            </div>
                            <span>Forms</span></a>
                        <ul class="sub-menu">
                            <li><a href="forms_regular.html">Regular Forms</a></li>
                            <li><a href="forms_validation.html">Form Validation</a></li>
                            <li><a href="forms_wizard.html">Form Wizard</a></li>
                            <li><a href="forms_uploads.html">File Uploads</a></li>
                            <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid-squares"></div>
                            </div>
                            <span>Tables</span></a>
                        <ul class="sub-menu">
                            <li><a href="tables_regular.html">Regular Tables</a></li>
                            <li><a href="tables_datatables.html">Data Tables</a></li>
                            <li><a href="tables_editable.html">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-hierarchy-structure-2"></div>
                            </div>
                            <span>Menu Styles</span></a>
                        <ul class="sub-menu">
                            <li><a href="layouts_menu_side.html">Side Menu</a></li>
                            <li><a href="layouts_menu_side_dark.html">Side Menu Dark</a></li>
                            <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                            <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                            <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                            <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                            <li><a href="layouts_menu_top_image.html">Top Menu Image</a></li>
                        </ul>
                    </li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-robot-1"></div>
                            </div>
                            <span>Icons</span></a>
                        <ul class="sub-menu">
                            <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                            <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                            <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                            <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                            <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                            <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                            <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                            <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                            <li><a href="icon_fonts_ligature_symbols.html">Ligature Symbols</a></li>
                            <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                            <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                            <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                            <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                            <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                            <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_charts.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-donut-chart-2"></div>
                            </div>
                            <span>Charts</span></a></li>
                    <li class="has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-newspaper"></div>
                            </div>
                            <span>Pages</span></a>
                        <ul class="sub-menu">
                            <li><a href="misc_invoice.html">Invoice</a></li>
                            <li><a href="auth_login.html">Login</a></li>
                            <li><a href="auth_register.html">Register</a></li>
                            <li><a href="auth_lock.html">Lock Screen</a></li>
                            <li><a href="misc_chat.html">Popup Chat</a></li>
                            <li><a href="misc_error_404.html">Error 404</a></li>
                            <li><a href="misc_error_500.html">Error 500</a></li>
                        </ul>
                    </li>
                    <li><a href="misc_calendar.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-calendar-time"></div>
                            </div>
                            <span>Calendar</span></a></li>
                </ul>
                <div class="side-menu-magic"><h4>Light Admin</h4>
                    <p>Clean Bootstrap 4 Template</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded"
                                          href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                          target="_blank">Purchase Now</a></div>
                </div>
            </div>
        </div>
        <div class="content-w">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
            </ul>
            <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
            <div class="content-i">
                <div class="content-box">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper">
                                <div class="element-actions">
                                    <form class="form-inline justify-content-sm-end"><select
                                                class="form-control form-control-sm rounded">
                                            <option value="Pending">Today</option>
                                            <option value="Active">Last Week</option>
                                            <option value="Cancelled">Last 30 Days</option>
                                        </select></form>
                                </div>
                                <h6 class="element-header">Sales Dashboard</h6>
                                <div class="element-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">Products Sold</div>
                                                <div class="value">57</div>
                                                <div class="trending trending-up"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-up2"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">Gross Profit</div>
                                                <div class="value">$457</div>
                                                <div class="trending trending-down-basic"><span>12%</span><i
                                                            class="os-icon os-icon-arrow-2-down"></i></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="element-box el-tablo">
                                                <div class="label">New Customers</div>
                                                <div class="value">125</div>
                                                <div class="trending trending-down-basic"><span>9%</span><i
                                                            class="os-icon os-icon-graph-down"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="element-wrapper"><h6 class="element-header">New Orders</h6>
                                <div class="element-box">
                                    <div class="table-responsive">
                                        <table class="table table-lightborder">
                                            <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Products Ordered</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-right">Order Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="nowrap">John Mayers</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio9.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio2.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio12.jpg)"></div>
                                                        <div class="cell-img-more">+ 5 more</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$354</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Kelly Brans</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio14.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio8.jpg)"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill red" data-title="Cancelled"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$94</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Tim Howard</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio16.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio14.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio5.jpg)"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$156</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Joe Trulli</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio1.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio5.jpg)"></div>
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio6.jpg)"></div>
                                                        <div class="cell-img-more">+ 2 more</div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill yellow" data-title="Pending"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$1,120</td>
                                            </tr>
                                            <tr>
                                                <td class="nowrap">Jerry Lingard</td>
                                                <td>
                                                    <div class="cell-image-list">
                                                        <div class="cell-img"
                                                             style="background-image: url(img/portfolio9.jpg)"></div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="text-right">$856</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="element-wrapper"><h6 class="element-header">Top Selling Today</h6>
                                <div class="element-box">
                                    <div class="el-chart-w">
                                        <canvas height="120" id="donutChart" width="120"></canvas>
                                        <div class="inside-donut-chart-label">
                                            <strong>142</strong><span>Total Orders</span></div>
                                    </div>
                                    <div class="el-legend">
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #6896f9;"></div>
                                            <div class="legend-value">Processed</div>
                                        </div>
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #85c751;"></div>
                                            <div class="legend-value">Cancelled</div>
                                        </div>
                                        <div class="legend-value-w">
                                            <div class="legend-pin" style="background-color: #d97b70;"></div>
                                            <div class="legend-value">Pending</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper"><h6 class="element-header">Unique Visitors Graph</h6>
                                <div class="element-box">
                                    <div class="os-tabs-w">
                                        <div class="os-tabs-controls">
                                            <ul class="nav nav-tabs smaller">
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                        href="#tab_overview">Overview</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab"
                                                                        href="#tab_sales">Sales</a></li>
                                            </ul>
                                            <ul class="nav nav-pills smaller hidden-sm-down">
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Today</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                        href="#">7 Days</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">14
                                                        Days</a></li>
                                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Last
                                                        Month</a></li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_overview">
                                                <div class="el-tablo">
                                                    <div class="label">Unique Visitors</div>
                                                    <div class="value">12,537</div>
                                                </div>
                                                <div class="el-chart-w">
                                                    <canvas height="150px" id="lineChart" width="600px"></canvas>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab_sales"></div>
                                            <div class="tab-pane" id="tab_conversion"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="element-wrapper"><h6 class="element-header">Recent Orders</h6>
                                <div class="element-box-tp">
                                    <div class="controls-above-table">
                                        <div class="row">
                                            <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                                                    CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a
                                                        class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                            <div class="col-sm-6">
                                                <form class="form-inline justify-content-sm-end"><input
                                                            class="form-control form-control-sm rounded bright"
                                                            placeholder="Search" type="text"><select
                                                            class="form-control form-control-sm rounded bright">
                                                        <option selected="selected" value="">Select Status</option>
                                                        <option value="Pending">Pending</option>
                                                        <option value="Active">Active</option>
                                                        <option value="Cancelled">Cancelled</option>
                                                    </select></form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-lg table-v2 table-striped">
                                            <thead>
                                            <tr>
                                                <th class="text-center"><input class="form-control" type="checkbox">
                                                </th>
                                                <th>Customer Name</th>
                                                <th>Country</th>
                                                <th>Order Total</th>
                                                <th>Referral</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>John Mayers</td>
                                                <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                                <td class="text-right">$245</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Mike Astone</td>
                                                <td><img alt="" src="img/flags-icons/fr.png" width="25px"></td>
                                                <td class="text-right">$154</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill red" data-title="Cancelled"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Kira Knight</td>
                                                <td><img alt="" src="img/flags-icons/us.png" width="25px"></td>
                                                <td class="text-right">$23</td>
                                                <td>Adwords</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Jessica Bloom</td>
                                                <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                                <td class="text-right">$112</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill green" data-title="Complete"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><input class="form-control" type="checkbox">
                                                </td>
                                                <td>Gary Lineker</td>
                                                <td><img alt="" src="img/flags-icons/ca.png" width="25px"></td>
                                                <td class="text-right">$64</td>
                                                <td>Organic</td>
                                                <td class="text-center">
                                                    <div class="status-pill yellow" data-title="Pending"
                                                         data-toggle="tooltip"></div>
                                                </td>
                                                <td class="row-actions"><a href="#"><i
                                                                class="os-icon os-icon-pencil-2"></i></a><a href="#"><i
                                                                class="os-icon os-icon-link-3"></i></a><a class="danger"
                                                                                                          href="#"><i
                                                                class="os-icon os-icon-database-remove"></i></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="controls-below-table">
                                        <div class="table-records-info">Showing records 1 - 5</div>
                                        <div class="table-records-pages">
                                            <ul>
                                                <li><a href="#">Previous</a></li>
                                                <li><a class="current" href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span></div>
                    <div class="floated-chat-w">
                        <div class="floated-chat-i">
                            <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
                            <div class="chat-head">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">John Mayers</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-messages">
                                <div class="message">
                                    <div class="message-content">Hi, how can I help you?</div>
                                </div>
                                <div class="date-break">Mon 10:20am</div>
                                <div class="message">
                                    <div class="message-content">Hi, my name is Mike, I will be happy to assist you
                                    </div>
                                </div>
                                <div class="message self">
                                    <div class="message-content">Hi, I tried ordering this product and it keeps showing
                                        me error code.
                                    </div>
                                </div>
                            </div>
                            <div class="chat-controls"><input class="message-input"
                                                              placeholder="Type your message here..." type="text">
                                <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                                                class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                                                class="extra-tooltip">Insert Photo</span><i
                                                class="os-icon os-icon-others-29"></i></a><a href="#"><span
                                                class="extra-tooltip">Upload Video</span><i
                                                class="os-icon os-icon-ui-51"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-panel">
                    <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
                    <div class="element-wrapper"><h6 class="element-header">Quick Links</h6>
                        <div class="element-box-tp">
                            <div class="el-buttons-list full-width"><a class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-delivery-box-2"></i><span>Create New Product</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-window-content"></i><span>Customer Comments</span></a><a
                                        class="btn btn-white btn-sm" href="#"><i
                                            class="os-icon os-icon-wallet-loaded"></i><span>Store Settings</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper"><h6 class="element-header">Support Agents</h6>
                        <div class="element-box-tp">
                            <div class="profile-tile">
                                <div class="profile-tile-box">
                                    <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                    <div class="pt-user-name">Mark Parson</div>
                                </div>
                                <div class="profile-tile-meta">
                                    <ul>
                                        <li>Last Login:<strong>Online Now</strong></li>
                                        <li>Tickets:<strong>12</strong></li>
                                        <li>Response Time:<strong>2 hours</strong></li>
                                    </ul>
                                    <div class="pt-btn"><a class="btn btn-success btn-sm" href="#">Send Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-tile">
                                <div class="profile-tile-box">
                                    <div class="pt-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
                                    <div class="pt-user-name">Mark Parson</div>
                                </div>
                                <div class="profile-tile-meta">
                                    <ul>
                                        <li>Last Login:<strong>Online Now</strong></li>
                                        <li>Tickets:<strong>12</strong></li>
                                        <li>Response Time:<strong>2 hours</strong></li>
                                    </ul>
                                    <div class="pt-btn"><a class="btn btn-secondary btn-sm" href="#">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper"><h6 class="element-header">Recent Activity</h6>
                        <div class="element-box-tp">
                            <div class="activity-boxes-w">
                                <div class="activity-box-w">
                                    <div class="activity-time">10 Min</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Mark Pearson</div>
                                            <strong class="activity-title">Opened New Account</strong></div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">2 Hours</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">John Mayers</div>
                                            <strong class="activity-title">Posted Comment</strong></div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">5 Hours</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Kate Wallet</div>
                                            <strong class="activity-title">Opened New Account</strong></div>
                                    </div>
                                </div>
                                <div class="activity-box-w">
                                    <div class="activity-time">2 Days</div>
                                    <div class="activity-box">
                                        <div class="activity-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                        <div class="activity-info">
                                            <div class="activity-role">Monica Bonak</div>
                                            <strong class="activity-title">Uploaded Image</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="element-wrapper"><h6 class="element-header">Team Members</h6>
                        <div class="element-box-tp">
                            <div class="input-search-w"><input class="form-control rounded bright"
                                                               placeholder="Search team members..." type="search"></div>
                            <div class="users-list-w">
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">John Mayers</h6>
                                        <div class="user-role">Account Manager</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">Ben Gossman</h6>
                                        <div class="user-role">Administrator</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-red">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">Phil Nokorin</h6>
                                        <div class="user-role">HR Manger</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                                <div class="user-w with-status status-green">
                                    <div class="user-avatar-w">
                                        <div class="user-avatar"><img alt="" src="img/avatar1.jpg"></div>
                                    </div>
                                    <div class="user-name"><h6 class="user-title">Jenny Miksa</h6>
                                        <div class="user-role">Lead Developer</div>
                                    </div>
                                    <div class="user-action">
                                        <div class="os-icon os-icon-email-forward"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="js/mainbfdf.js?version=2.3"></script>
<script>(function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42863888-9', 'auto');
    ga('send', 'pageview');</script>
</body>
<!-- Mirrored from light.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2017 23:57:06 GMT -->
</html>

