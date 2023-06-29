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
                    <div class="col-lg-9 col-md-7">
                        @if(isset($mode) && $mode == 'list')
                        <div class="page-title-container mb-20">
                            <div class="row w-100 no-gutters align-items-center">
                                <div class="col-auto mb-3 mb-lg-0 mr-auto col">
                                    <div class="header-tabs">
                                    @if(isset($modules))
                                        @foreach($modules as $module)
                                        <a href="{{$module['url']}}" class="{{$module['status']}}"><i
                                        class="{{$module['icon'] ?? 'las la-ellipsis-h'}}"></i><span>{{$module['name']}}</span> </a>
                                        @endforeach
                                    @else
                                        <a href="{{url('/')}}" class="active"><i class="las la-server"></i><span>List</span></a>
                                    @endif
                                    </div>
                                </div>
                                <div
                                    class="d-flex align-items-end justify-content-md-end mb-2 mb-sm-0 order-sm-3 col-lg-8 col-12">
                                    <div class="header-search mr-10">                               
                                         {!!Theme::partial('search', compact('form'))!!}
                                    </div>
                                    <a href="{{$form['urls']['create']['url'] ?? ''}}" class="btn btn-theme-outline d-flex align-items-center"><i
                                            class="las la-plus-circle mr-5"></i> <span>Add</span></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        {!! Theme::content() !!}
                    </div>
                </div>
            </div>
        </div>
        {!! Theme::partial('footer') !!}
    </div>
    {!! Theme::asset()->container('footer')->scripts() !!}
</body>

</html>