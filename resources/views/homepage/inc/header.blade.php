<!DOCTYPE HTML>

<html lang="en-US">
<head>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/icofont.min.css')}}" media="all"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal:300,400,500,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/style.css')}}" media="all"/>


@if (session()->get('locale')=='ar'||session()->get('locale')==null)

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/stylear.css')}}" media="all"/>
@endif
    @php
        $description='description_'.trans('systems.lang2');
    $key='keyword_'.trans('systems.lang2');
    $title='title_'.trans('systems.lang2');

    @endphp
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="{{$data['seo']->$description}}" />
    <meta name="keywords" content="{{$data['seo']->$key}}" />
    <meta name="robots" content="" />
    <title>{{$data['seo']->$title}}</title>
    @yield('style')
   
    
</head>

<body>