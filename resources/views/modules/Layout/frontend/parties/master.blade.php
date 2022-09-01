<!DOCTYPE html>
<html lang="en">

<head>
    @include('modules.Layout.frontend.parties.head')

    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'> -->
</head>

<body>
    @include('modules.Layout.frontend.parties.header')
    @yield('content')


    @include('modules.Layout.frontend.parties.footer')
    @include('modules.Layout.frontend.parties.scripts')

</body>

</html>
