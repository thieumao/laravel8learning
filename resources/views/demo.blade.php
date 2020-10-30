<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Demo Component View</title>
        <link rel="stylesheet" type="text/css" href="./style.css"/>
    </head>
    <body>
        <div class="top">
            <x-menu class="x-menu"></x-menu>
        </div>
        <div class="left"><h2>LEFT</h2></div>
        <div class="center"><h2>CENTER</h2></div>
        <div class="right"><h2>RIGHT</h2></div>
        <div class="footer"><h2>FOOTER</h2></div>
    </body>
</html>
