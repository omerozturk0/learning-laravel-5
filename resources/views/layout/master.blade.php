<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

    <style>
        body {
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">

        @include('layout.header')

        @include('flash::message')

        @yield('content')

    </div>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script>
        $('#flash-overlay-modal').modal();
        $('#tag_list').select2({
            placeholder: "Choose a Tag",
            tags: true
        });
    </script>
</body>
</html>
