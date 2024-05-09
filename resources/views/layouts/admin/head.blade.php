<?php $page = Route::current()->getName(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="token" content="{{ csrf_token() }}">

        @if ($page == 'admin.profile')
            <title>Profile | Buy Guns</title>
            <!-- Favicons -->
            <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon">
            <!-- Select 2 -->
            <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
            <!-- Bootstrap CSS -->
            <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
            <!-- Fontawesome CSS -->
            <link href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
            <!-- Datatable CSS -->
            <link href="{{ asset('assets/plugins/datatables/datatables.min.css') }}" rel="stylesheet">
            <!-- Feather CSS -->
            <link href="{{ asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">
            <!-- Main CSS -->
            <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
            <!-- Croppie CSS -->
            <link href="{{ asset('assets/css/croppie.css') }}" rel="stylesheet">
            
        @endif

        @if ($page == 'admin.categories')
            <title>Ads Category | Buy Guns</title>
            <!-- Favicons -->
            <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon">
            <!-- Select 2 -->
            <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
            <!-- Bootstrap CSS -->
            <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
            <!-- Fontawesome CSS -->
            <link href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet">
            <link href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}" rel="stylesheet">
            <!-- Datatable CSS -->
            <link href="{{ asset('assets/plugins/datatables/datatables.min.css') }}" rel="stylesheet">
            <!-- Feather CSS -->
            <link href="{{ asset('assets/plugins/feather/feather.css') }}" rel="stylesheet">
            <!-- Main CSS -->
            <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        @endif
    </head>
