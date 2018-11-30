@extends('layouts.app')

@section('title', 'Education')

@section('content')

<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Popular Courses
				</h1>
				<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="courses.html">
						Popular Courses</a></p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start popular-courses Area -->
<section class="popular-courses-area section-gap courses-page">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Popular Courses we offer</h1>
					<p>There is a moment in the life of any aspiring.</p>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
			$courses = App\Course::all();
		?>
			@foreach ($courses as $course)
				@component('layouts/course-card')
					@slot('adherents')
						355
					@endslot

					@slot('comments')
						35
					@endslot
					
					@slot('price')
						{{$course->price}}
					@endslot

					@slot('title')
						{{$course->name}}
					@endslot

					@slot('icon')
						{{$course->icon}}
					@endslot

					@slot('description')
						{{$course->description}}
					@endslot
				@endcomponent
			@endforeach
		</div>
		<div class="row">
			<a href="#" class="primary-btn text-uppercase mx-auto">Load More Courses</a>
		</div>
	</div>
</section>
<!-- End popular-courses Area -->

<!-- Start search-course Area -->

@component('layouts/search-course')

@endcomponent

<!-- End search-course Area -->

<!-- Start upcoming-event Area -->

@component('layouts/upcoming-events')

@endcomponent

<!-- End upcoming-event Area -->

@endsection