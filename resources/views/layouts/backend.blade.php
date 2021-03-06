<!DOCTYPE html>
<html>
<head>
    <title>Langata Monthly Meeting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="{{url('backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- styles -->
    <link href="{{url('backend/css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="index.html">Lang'ata</a></h1>
                </div>
            </div>
            <div class="col-md-2 pull-right">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b
                                            class="caret"></b></a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

@yield('content')

<footer>
    <div class="container">

        <div class="copy text-center">
            Copyright 2017 <a href='#'>Lang'ata Church</a>
        </div>

    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{url('backend/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('backend/js/custom.js')}}"></script>
<script src="{{url('js/tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>
    tinymce.init({ selector:'#tinymce_basic' });
    $( function() {
        $( "#serviceDate" ).datepicker();
    } );
    $( function() {
        $( "#monthDate" ).datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'MM yy',
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    } );$( function() {
        $( "#yearDate" ).datepicker({
            changeMonth: false,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy',
            onClose: function(dateText, inst) {
                $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
            }
        });
    } );
    var services;
    var quoteDay;
    var monthlyTheme;
    var yearlyTheme;
    function showRelevant() {
        var type = $('#type').find(':selected').text();
        console.log(type);
        if (type == 'Service') {
            console.log('service');
            removeAll();
            services.appendTo('data')
        }
        if (type == 'Quote of the day') {
            console.log('quote');
            removeAll();
            quoteDay.appendTo('data');
        }
        if (type == 'Monthly Theme') {
            console.log('month');
            removeAll();
            monthlyTheme.appendTo('data');
        }
        if (type == 'Yearly Theme') {
            console.log('year');
            removeAll();
            yearlyTheme.appendTo('data');
        }
    }
    function removeAll() {
        $('data').empty();
    }
    $(document).ready(function () {
        services = $('.service').detach();
        quoteDay = $('.quote').detach();
        monthlyTheme = $('.monthly').detach();
        yearlyTheme = $('.yearly').detach();
        }
    )
</script>
</body>
</html>