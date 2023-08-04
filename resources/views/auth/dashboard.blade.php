<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
        @extends('auth.layouts')
        @section('content')
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        @if (Session::has('success'))
                        <div class="alert alert-success">
                            You are logged in!
                        </div>
                        <a href="{{ route('catImages.index') }}">Cats</a> 
                        <br>
                        <a href="{{ route('makeups.showMakeup') }}">Makeup</a>
                        
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>
