<html lang="en">

<head>
@include('includes.head2')
</head>

<body id="page-top">
@if(Auth::user()->id)

@include('includes.sidebar')
@include('includes.header2')



@yield('content')



@include('includes.footer2')
@endif
</body>

</html>
