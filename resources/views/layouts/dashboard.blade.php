<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Simbibot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simbi Bot">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="{{ asset('assets/dashboard-assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet" />

</head>
<body class="light-edition">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white">
            <div class="logo">
            <a href="#" class="simple-text logo-normal">
                Simbibot
            </a>
            </div>
            <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active  ">
                    <a class="nav-link" href="./dashboard.html">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
            </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example"> 
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/dashboard-assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard-assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard-assets/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="{{ asset('assets/dashboard-assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('assets/dashboard-assets/js/plugins/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard-assets/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('assets/dashboard-assets/js/material-dashboard.js?v=2.1.0') }}"></script>
</body>
  
</html>