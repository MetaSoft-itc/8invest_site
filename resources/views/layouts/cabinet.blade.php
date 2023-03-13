<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/cabinet_sheet.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/cabinet.css') }}">
    <link href="{{asset('assets/app.f39ec460.css')}}" rel="preload" as="style">
    <link href="{{asset('assets/app.f39ec460.css')}}" rel="stylesheet">
    @livewireStyles
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Cabinet - @yield('title')</title>
</head>
<body>
<div id="cabinet" class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-xl-1 d-xl-block d-none p-0">
            @include('cabinet.new.sidebar',['user'=>$user])
        </div>
        <div class="col-xl-11 col-lg-12 p-0">
            @yield('content')

        </div>
    </div>
</div>
@include('cabinet.new._mobile-nav', ['user'=>$user])
<div aria-live="polite" aria-atomic="true" style="top: 45%; z-index: 1000; flex-direction: column;" class="position-fixed d-flex justify-content-center align-items-center w-100">
@foreach($user->notifications as $notif)
        <livewire:notification :notification="$notif" :list="false">
@endforeach
</div>
<script src="{{asset('assets/js/vendors.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@livewireScripts
</body>
</html>
