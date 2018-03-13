<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="title" content="@yield('title', '百草100')" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', '百草100')</title>

    @section('css')
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/h5/common.css') }}">
    @show

    <script type="text/javascript">
    //<![CDATA[
        var _global = {};
    //]]>
    </script>
</head>

<body>

    <div class="content">
    @section('content')
    @show
    </div>

    @section('javascript')
    <script type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
    @show
</body>
</html>
