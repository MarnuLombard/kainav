
      <!DOCTYPE html>
<html>
<head>
  <title>
    {{ $title }}
  </title>
  <meta content="{{ $description }}" name="description" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

  <div>
    @yield("page")
  </div>

</body>
</html>