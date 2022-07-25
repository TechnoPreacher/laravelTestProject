<html>
<head>
    <style>
        h3 {
            color: red;
            border: black;
        }
    </style>
</head>
<body>

@section('main menu')
   "MAIN MENU" LINE FOR EVERY PAGE IN APPLICATION
@show


<div class="container">
    @yield('content')
</div>

</body>
</html>

