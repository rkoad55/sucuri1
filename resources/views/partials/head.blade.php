<meta charset="utf-8">
<title>
    BlockDos
</title>

<meta http-equiv="X-UA-Compatible"
      content="IE=edge">
<meta content="width=device-width, initial-scale=1.0"
      name="viewport"/>
<meta http-equiv="Content-type"
      content="text/html; charset=utf-8">

<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Font Awesome -->
<link href="{{ url('css/fontawesome.min.css') }}" rel="stylesheet">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet"
      href="{{ url('adminlte/css') }}/select2.min.css"/>

<link href="{{ url('easypiechart/jquery.easy-pie-chart.css') }}" rel="stylesheet">
<link href="{{ url('css/jquery.circliful.css') }}" rel="stylesheet">
<link href="{{ url('css/custom.css') }}" rel="stylesheet">
<link href="{{ url('css/bootstrap-editable.css') }}" rel="stylesheet">
<link href="{{ url('css/sweetalert.css') }}" rel="stylesheet">
<link href="{{ url('noty/noty.css') }}" rel="stylesheet">
<link href="{{ url('jmspinner/jm.spinner.css') }}" rel="stylesheet">
<link rel="stylesheet"
      href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet"
      href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
<link rel="stylesheet"
      href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css"/>
<link rel="stylesheet"
      href="//cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css"/>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.css"/>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.standalone.min.css"/>
      <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

      <script src="{{ url('js/jquery-1.9.1.min.js') }}"></script>

      @cannot('users_manage')
      <style type="text/css">
.content-wrapper, .right-side, .main-footer{
      margin: 0 auto;
}
.main-header .navbar
{
  margin: 0 auto;
  
}
</style>

@endcannot

