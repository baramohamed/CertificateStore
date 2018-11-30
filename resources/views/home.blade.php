@extends('layouts.app')

@section('title', 'Education')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-between">
			<div class="banner-content col-lg-9 col-md-12">
				<h1 class="text-uppercase">
					Nous assurons une meilleure formation
					pour un monde meilleur
				</h1>
				<p class="pt-10 pb-10">
					In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of
					the space telescope known as the Hubble.
				</p>
				<a href="#" class="primary-btn text-uppercase">Get Started</a>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start feature Area -->

@component('layouts/features')
    
@endcomponent

<!-- End feature Area -->

<!-- Start popular-course Area -->

@component('layouts/popular-courses')
    
@endcomponent

<!-- End popular-course Area -->


<!-- Start search-course Area -->

@component('layouts/search-course')

@endcomponent
<!-- End search-course Area -->


<!-- Start upcoming-event Area -->

@component('layouts/upcoming-events')

@endcomponent

<!-- End upcoming-event Area -->

<!-- Start review Area -->

@component('layouts/reviews')

@endcomponent

<!-- End review Area -->
@endsection