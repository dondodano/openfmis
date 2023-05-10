<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

        <title>{{ config('app.name') }}</title>

        <meta name="description" content="Financial Management System for Government SUC" />
        <meta name="description" content="FiMS" />
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <link rel="icon" type="image/x-icon" href="/storage/images/spamast.png">

        @vite(['resources/css/app.css','resources/js/app.js'])

        @stack('level-0')
    </head>
    <body class="bg-white dark:bg-gray-900 antialiased ">

        @include('includes.navbar')

        @include('includes.sidebar-drawer')

        <div class="p-4 sm:ml-64">
            <div class="p-4 rounded-lg dark:border-gray-700 mt-14">

                @include('includes.breadcrumb')

                @yield('content')

            </div>
        </div>

        <!-- drawer content here-->


        @stack('level-1')
    </body>
</html>
