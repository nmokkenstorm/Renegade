<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>
        <link href="{{mix('css/app.css')}}" type="text/css" rel="stylesheet"/>
    </head>
    <body>
        <div id="react-root"></div>
        <script src="{{mix('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
