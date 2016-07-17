<div class="container">

	<h1 class="hero" >Joseph Zidell</h1>
	<h2 class="hero"><i>Optimizing The Efficiency Of Your Business</i></h2>

	<br />

	<div>
		<div class="row">
			<div class="col-md-6" id="about_gravatar">
				<?= Html::image('img/joseph-zidell-photo.jpeg', 'Joseph Zidell', ['class' => "gravatar"]); ?>
			</div>
			<div class="col-md-6">
				<h3 class="hero">Take advantage of my unique skills as a Business Analyst &amp; Software Engineer to optimize the efficiency of your business.</h3>
				<?= Html::image('img/venn.png', "Combining Business Analysis And Software Engineering To Improve The Efficiency Of Your Business", ['class' => "img-responsive", 'style' => "margin:0 auto;"]); ?>
			</div>

		</div>
	</div>
	<div style="clear:both; height:50px;"><br></div>
	<div class="row">
		<div class="container text-center">
			<h2 class="happycustomers">Some Of My Happy Customers</h2>
			@include('logos')
		</div>
	</div>

</div>
