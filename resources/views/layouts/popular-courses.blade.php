<section class="popular-course-area section-gap">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Formations populaires que nous offrons</h1>
					<p>Il y a un moment dans la vie de tout aspirant.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="active-popular-carusel">
			<?php
				$courses = App\Course::all();
			?>
				@foreach ($courses as $course)
					@component('components/carousel-course-card')
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

						@slot('id')
							{{$course->id}}
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
		</div>
	</div>
</section>