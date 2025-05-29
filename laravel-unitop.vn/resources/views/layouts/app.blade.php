<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div id="warpper">
        <div id="header">
            <h1>Header</h1>
        </div>
        <div id="wp-content">
            <div id="content">
                <h1>Contentn</h1>
                @yield('content')
            </div>
        </div>
        <div id="sidebar">
            <h1>Sidebar</h1>
            @yield('sidebar')
        </div>
        <div id="footer">
            <h1>Footer</h1>
            @section('footer')
                <p>Day la noi dung footer</p>
                <p>test1</p>
                <p>test3</p>
            @show
    </div>
</body>
</html>