@extends('layouts.clean')


@section('ChildContent')
    @include('layouts.partials.header')
    @yield('content')
    @hasSection('footerLinks')
        <footer>
            @yield('footerLinks')
        </footer>
    @endif

@endsection



