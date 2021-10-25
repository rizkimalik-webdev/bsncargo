@php
	$uri = Route::current()->uri;   
@endphp
<section class="page-title text-center">
    <div class="container">
        <div class="title-text">
            <h1>{{ $slot }}</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="{{ url('/home') }}">Beranda &nbsp;/</a>
                </li>
                <li>{{ $uri }}</li>
            </ul>
        </div>
    </div>
</section>