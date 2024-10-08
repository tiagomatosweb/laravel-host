<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>AdminLTE v4 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    @vite('resources/scss/app.scss')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
                <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
                <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"> <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i class="bi bi-search"></i> </a> </li>
                <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"> <img src="{{ Vite::asset('resources/images/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                    </h3>
                                    <p class="fs-7">Call me whenever you can...</p>
                                    <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"> <img src="{{ Vite::asset('resources/images/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i> </span>
                                    </h3>
                                    <p class="fs-7">I got your message bro</p>
                                    <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0"> <img src="{{ Vite::asset('resources/images/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
                                <div class="flex-grow-1">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i> </span>
                                    </h3>
                                    <p class="fs-7">The subject goes here</p>
                                    <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                    </p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                            <span class="float-end text-secondary fs-7">3 mins</span> </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                            <span class="float-end text-secondary fs-7">12 hours</span> </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                            <span class="float-end text-secondary fs-7">2 days</span> </a>
                        <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
                            See All Notifications
                        </a>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li>
                <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ Vite::asset('resources/images/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image">
                        <span class="d-none d-md-inline">Alexander Pierce</span> </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                        <li class="user-header text-bg-primary"> <img src="{{ Vite::asset('resources/images/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image">
                            <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2023</small>
                            </p>
                        </li>
                        <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                            </div>
                        </li>
                        <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand"> <a href="./index.html" class="brand-link">  <img src="{{ Vite::asset('resources/images/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">  <span class="brand-text fw-light">AdminLTE 4</span>  </a>  </div>
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open"> <a href="#" class="nav-link active"> <i class="nav-icon bi bi-speedometer"></i>
                            <p>
                                Dashboard
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./index.html" class="nav-link active"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Dashboard v1</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Dashboard v2</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./index3.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Dashboard v3</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="./generate/theme.html" class="nav-link"> <i class="nav-icon bi bi-palette"></i>
                            <p>Theme Generate</p>
                        </a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-seam-fill"></i>
                            <p>
                                Widgets
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./widgets/small-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Small Box</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./widgets/info-box.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>info Box</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./widgets/cards.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Cards</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-clipboard-fill"></i>
                            <p>
                                Layout Options
                                <span class="nav-badge badge text-bg-secondary me-3">6</span> <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./layout/unfixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Default Sidebar</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./layout/fixed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Fixed Sidebar</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./layout/layout-custom-area.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Layout <small>+ Custom Area </small></p>
                                </a> </li>
                            <li class="nav-item"> <a href="./layout/sidebar-mini.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Sidebar Mini</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./layout/collapsed-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Sidebar Mini <small>+ Collapsed</small></p>
                                </a> </li>
                            <li class="nav-item"> <a href="./layout/logo-switch.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Sidebar Mini <small>+ Logo Switch</small></p>
                                </a> </li>
                            <li class="nav-item"> <a href="./layout/layout-rtl.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Layout RTL</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-tree-fill"></i>
                            <p>
                                UI Elements
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./UI/general.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>General</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./UI/icons.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Icons</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./UI/timeline.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Timeline</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-pencil-square"></i>
                            <p>
                                Forms
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./forms/general.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>General Elements</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-table"></i>
                            <p>
                                Tables
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./tables/simple.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Simple Tables</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-header">EXAMPLES</li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                            <p>
                                Auth
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                    <p>
                                        Version 1
                                        <i class="nav-arrow bi bi-chevron-right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item"> <a href="./examples/login.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                            <p>Login</p>
                                        </a> </li>
                                    <li class="nav-item"> <a href="./examples/register.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                            <p>Register</p>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-box-arrow-in-right"></i>
                                    <p>
                                        Version 2
                                        <i class="nav-arrow bi bi-chevron-right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item"> <a href="./examples/login-v2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                            <p>Login</p>
                                        </a> </li>
                                    <li class="nav-item"> <a href="./examples/register-v2.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                            <p>Register</p>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a href="./examples/lockscreen.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Lockscreen</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-header">DOCUMENTATIONS</li>
                    <li class="nav-item"> <a href="./docs/introduction.html" class="nav-link"> <i class="nav-icon bi bi-download"></i>
                            <p>Installation</p>
                        </a> </li>
                    <li class="nav-item"> <a href="./docs/layout.html" class="nav-link"> <i class="nav-icon bi bi-grip-horizontal"></i>
                            <p>Layout</p>
                        </a> </li>
                    <li class="nav-item"> <a href="./docs/color-mode.html" class="nav-link"> <i class="nav-icon bi bi-star-half"></i>
                            <p>Color Mode</p>
                        </a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-ui-checks-grid"></i>
                            <p>
                                Components
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./docs/components/main-header.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Main Header</p>
                                </a> </li>
                            <li class="nav-item"> <a href="./docs/components/main-sidebar.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Main Sidebar</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-filetype-js"></i>
                            <p>
                                Javascript
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="./docs/javascript/treeview.html" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Treeview</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="./docs/browser-support.html" class="nav-link"> <i class="nav-icon bi bi-browser-edge"></i>
                            <p>Browser Support</p>
                        </a> </li>
                    <li class="nav-item"> <a href="./docs/how-to-contribute.html" class="nav-link"> <i class="nav-icon bi bi-hand-thumbs-up-fill"></i>
                            <p>How To Contribute</p>
                        </a> </li>
                    <li class="nav-item"> <a href="./docs/faq.html" class="nav-link"> <i class="nav-icon bi bi-question-circle-fill"></i>
                            <p>FAQ</p>
                        </a> </li>
                    <li class="nav-item"> <a href="./docs/license.html" class="nav-link"> <i class="nav-icon bi bi-patch-check-fill"></i>
                            <p>License</p>
                        </a> </li>
                    <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                            <p>Level 1</p>
                        </a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                            <p>
                                Level 1
                                <i class="nav-arrow bi bi-chevron-right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Level 2</p>
                                </a> </li>
                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>
                                        Level 2
                                        <i class="nav-arrow bi bi-chevron-right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                            <p>Level 3</p>
                                        </a> </li>
                                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                            <p>Level 3</p>
                                        </a> </li>
                                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                            <p>Level 3</p>
                                        </a> </li>
                                </ul>
                            </li>
                            <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                    <p>Level 2</p>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                            <p>Level 1</p>
                        </a> </li>
                    <li class="nav-header">LABELS</li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-danger"></i>
                            <p class="text">Important</p>
                        </a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-warning"></i>
                            <p>Warning</p>
                        </a> </li>
                    <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle text-info"></i>
                            <p>Informational</p>
                        </a> </li>
                </ul>
            </nav>
        </div>
    </aside>
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Dashboard</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-primary">
                            <div class="inner">
                                <h3>150</h3>
                                <p>New Orders</p>
                            </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"></path>
                            </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                More info <i class="bi bi-link-45deg"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-success">
                            <div class="inner">
                                <h3>53<sup class="fs-5">%</sup></h3>
                                <p>Bounce Rate</p>
                            </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z"></path>
                            </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                More info <i class="bi bi-link-45deg"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-warning">
                            <div class="inner">
                                <h3>44</h3>
                                <p>User Registrations</p>
                            </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"></path>
                            </svg> <a href="#" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                                More info <i class="bi bi-link-45deg"></i> </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box text-bg-danger">
                            <div class="inner">
                                <h3>65</h3>
                                <p>Unique Visitors</p>
                            </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"></path>
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"></path>
                            </svg> <a href="#" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                                More info <i class="bi bi-link-45deg"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 connectedSortable">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Sales Value</h3>
                            </div>
                            <div class="card-body">
                                <div id="revenue-chart"></div>
                            </div>
                        </div>
                        <div class="card direct-chat direct-chat-primary mb-4">
                            <div class="card-header">
                                <h3 class="card-title">Direct Chat</h3>
                                <div class="card-tools"> <span title="3 New Messages" class="badge text-bg-primary">
                                            3
                                        </span> <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> <button type="button" class="btn btn-tool" title="Contacts" data-lte-toggle="chat-pane"> <i class="bi bi-chat-text-fill"></i> </button> <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> <i class="bi bi-x-lg"></i> </button> </div>
                            </div>
                            <div class="card-body">
                                <div class="direct-chat-messages">
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-start">
                                                    Alexander Pierce
                                                </span> <span class="direct-chat-timestamp float-end">
                                                    23 Jan 2:00 pm
                                                </span> </div>  <img class="direct-chat-img" src="{{ Vite::asset('resources/images/user1-128x128.jpg') }}" alt="message user image">
                                        <div class="direct-chat-text">
                                            Is this template really for free? That's unbelievable!
                                        </div>
                                    </div>
                                    <div class="direct-chat-msg end">
                                        <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-end">
                                                    Sarah Bullock
                                                </span> <span class="direct-chat-timestamp float-start">
                                                    23 Jan 2:05 pm
                                                </span> </div>  <img class="direct-chat-img" src="{{ Vite::asset('resources/images/user3-128x128.jpg') }}" alt="message user image">
                                        <div class="direct-chat-text">
                                            You better believe it!
                                        </div>
                                    </div>
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-start">
                                                    Alexander Pierce
                                                </span> <span class="direct-chat-timestamp float-end">
                                                    23 Jan 5:37 pm
                                                </span> </div>  <img class="direct-chat-img" src="{{ Vite::asset('resources/images/user1-128x128.jpg') }}" alt="message user image">
                                        <div class="direct-chat-text">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div>
                                    </div>
                                    <div class="direct-chat-msg end">
                                        <div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-end">
                                                    Sarah Bullock
                                                </span> <span class="direct-chat-timestamp float-start">
                                                    23 Jan 6:10 pm
                                                </span> </div>  <img class="direct-chat-img" src="{{ Vite::asset('resources/images/user3-128x128.jpg') }}" alt="message user image">
                                        <div class="direct-chat-text">I would love to.</div>
                                    </div>
                                </div>
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li> <a href="#"> <img class="contacts-list-img" src="{{ Vite::asset('resources/images/user1-128x128.jpg') }}" alt="User Avatar">
                                                <div class="contacts-list-info"> <span class="contacts-list-name">
                                                            Count Dracula
                                                            <small class="contacts-list-date float-end">
                                                                2/28/2023
                                                            </small> </span> <span class="contacts-list-msg">
                                                            How have you been? I was...
                                                        </span> </div>
                                            </a> </li>
                                        <li> <a href="#"> <img class="contacts-list-img" src="{{ Vite::asset('resources/images/user7-128x128.jpg') }}" alt="User Avatar">
                                                <div class="contacts-list-info"> <span class="contacts-list-name">
                                                            Sarah Doe
                                                            <small class="contacts-list-date float-end">
                                                                2/23/2023
                                                            </small> </span> <span class="contacts-list-msg">
                                                            I will be waiting for...
                                                        </span> </div>
                                            </a> </li>
                                        <li> <a href="#"> <img class="contacts-list-img" src="{{ Vite::asset('resources/images/user3-128x128.jpg') }}" alt="User Avatar">
                                                <div class="contacts-list-info"> <span class="contacts-list-name">
                                                            Nadia Jolie
                                                            <small class="contacts-list-date float-end">
                                                                2/20/2023
                                                            </small> </span> <span class="contacts-list-msg">
                                                            I'll call you back at...
                                                        </span> </div>
                                            </a> </li>
                                        <li> <a href="#"> <img class="contacts-list-img" src="{{ Vite::asset('resources/images/user5-128x128.jpg') }}" alt="User Avatar">
                                                <div class="contacts-list-info"> <span class="contacts-list-name">
                                                            Nora S. Vans
                                                            <small class="contacts-list-date float-end">
                                                                2/10/2023
                                                            </small> </span> <span class="contacts-list-msg">
                                                            Where is your new...
                                                        </span> </div>
                                            </a> </li>
                                        <li> <a href="#"> <img class="contacts-list-img" src="{{ Vite::asset('resources/images/user6-128x128.jpg') }}" alt="User Avatar">
                                                <div class="contacts-list-info"> <span class="contacts-list-name">
                                                            John K.
                                                            <small class="contacts-list-date float-end">
                                                                1/27/2023
                                                            </small> </span> <span class="contacts-list-msg">
                                                            Can I take a look at...
                                                        </span> </div>
                                            </a> </li>
                                        <li> <a href="#"> <img class="contacts-list-img" src="{{ Vite::asset('resources/images/user8-128x128.jpg') }}" alt="User Avatar">
                                                <div class="contacts-list-info"> <span class="contacts-list-name">
                                                            Kenneth M.
                                                            <small class="contacts-list-date float-end">
                                                                1/4/2023
                                                            </small> </span> <span class="contacts-list-msg">
                                                            Never mind I found...
                                                        </span> </div>
                                            </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group"> <input type="text" name="message" placeholder="Type Message ..." class="form-control"> <span class="input-group-append"> <button type="button" class="btn btn-primary">
                                                    Send
                                                </button> </span> </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 connectedSortable">
                        <div class="card text-white bg-primary bg-gradient border-primary mb-4">
                            <div class="card-header border-0">
                                <h3 class="card-title">Sales Value</h3>
                                <div class="card-tools"> <button type="button" class="btn btn-primary btn-sm" data-lte-toggle="card-collapse"> <i data-lte-icon="expand" class="bi bi-plus-lg"></i> <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> </button> </div>
                            </div>
                            <div class="card-body">
                                <div id="world-map" style="height: 220px"></div>
                            </div>
                            <div class="card-footer border-0">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div id="sparkline-1" class="text-dark"></div>
                                        <div class="text-white">Visitors</div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div id="sparkline-2" class="text-dark"></div>
                                        <div class="text-white">Online</div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div id="sparkline-3" class="text-dark"></div>
                                        <div class="text-white">Sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">Anything you want</div>  <strong>
            Copyright &copy; 2014-2024&nbsp;
            <a href="https://adminlte.io" class="text-decoration-none">AdminLTE.io</a>.
        </strong>
        All rights reserved.
    </footer>
</div>
@vite('resources/js/app.js')
</body>

</html>
