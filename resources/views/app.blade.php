<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials._head')
</head>
<body>
	
	    @include('partials._nav')
	    @include('partials._messages')
	    <main class="">
	        @yield('content')
	    </main>
	    @include('partials._footer')
	    @include('partials._javascript')
	    @yield('scripts')

</body>
</html>
