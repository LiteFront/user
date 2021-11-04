<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ Theme::getMetaTitle() }} - {{__('app.name')}}</title>
    <meta name="keyword" content="{{ Theme::getMetaKeyword() }}">
    <meta name="description" content="{{ Theme::getMetaDescription() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">

    {!! Theme::asset()->styles() !!}
    {!! Theme::asset()->scripts() !!}
</head>

<body>
    <div class="site-wrapper">
        {!! Theme::partial('header') !!}
        <div class="user-wrapper">
            <div class="container">
                <div class="row">
                    {!! Theme::partial('aside') !!}
                    {!! Theme::content() !!}
                </div>
            </div>
        </div>
        {!! Theme::partial('footer') !!}
    </div>
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>

</html>