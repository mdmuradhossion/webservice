<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Service login</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('asset/admin/css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('asset/admin/bundles/bootstrap-social/bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('asset/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('asset/admin/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('asset/admin/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('asset/admin/img/favicon.ico')}}" />
</head>

<body>
  <div class="loader"></div>


@yield('content')


<!-- General JS Scripts -->
  <script src="{{asset('asset/admin/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{asset('asset/admin/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('asset/admin/js/custom.js')}}"></script>
</body>
</html>