<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vacuum</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic|Material+Icons">
</head>

<body>
<div id="app" v-cloak class="vacuum_main">

    {{--@if(A::check())--}}
        <main-body>
            <div v-if="$route.name">
                <transition name="">
                    <router-view></router-view>
                </transition>
            </div>
            <div v-else>
                @yield('content')
            </div>
        </main-body>
    {{--@else--}}
        {{--<div class="">--}}
            {{--@yield('content')--}}
        {{--</div>--}}

    {{--@endif--}}
</div>

<script language="JavaScript" type="text/javascript" src="/js/app.js"></script>

<script language="JavaScript" type="text/javascript">
    window.Laravel = {csrfToken: '{{ csrf_token() }}'};
</script>

<script language="JavaScript" type="text/javascript">
    $(document).foundation();
</script>

</body>
</html>



