<div class="nextSection"></div>
<div class="container">

	<h1>Portfolio / Testimonials</h1>
	<div id="case-studies-slider" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			@foreach ($allBusinesses as $key => $business )
				<li data-target="#case-studies-slider" data-slide-to="{{ $key }}" {{ $key == 0 ? 'class="active"' : '' }}></li>
			@endforeach
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			@foreach ($allBusinesses as $key => $business)
				<div class="item {{ $key == 0 ? 'active' : '' }}">
					<div class="carousel-caption">
						<h3>{{ $business->name }}</h3>
						<h4 class="text-center">
							{{ Html::link(
								URL::route('business.index') . "#{$business->slug}-case-study",
								'Read the Case Study',
								['title' => "Read more about the businesses I helped optimize", 'class' => "btn btn-primary"]
							) }}
						</h4>
					</div>
					<div class="testimonial">
						<blockquote>
							<p>{{ $business->testimonial }}</p>
							<small>{{ $business->owner }}</small>
						</blockquote>
					</div>
				</div>
			@endforeach
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#case-studies-slider" data-slide="prev">
			<i class="fa fa-chevron-left fa-3x"></i>
		</a>
		<a class="right carousel-control" href="#case-studies-slider" data-slide="next">
			<i class="fa fa-chevron-right fa-3x"></i>
		</a>
	</div>

	<!-- <a href="#process" title="My Process" class="btn btn-primary btn-lg centerize expandable">Explore My Process</a> -->
</div>
