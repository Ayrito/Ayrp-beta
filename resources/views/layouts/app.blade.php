@include('inc.head')


    <main class="py-4">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @yield('content')
	<script src="{{ asset('js/app.js') }}" defer></script>
    </main>
		

@include('inc.footer')
