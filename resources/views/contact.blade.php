<div class="nextSection"></div>
<div class="container">

	<h1>Contact</h1>

	<div class="row">
		<!-- div class="col-md-4">
			<?php if ( isset( $_GET['error'] ) ) : ?>
				<div class="alert alert-danger">Please fill out all of the fields.</div>
			<?php elseif ( isset( $_GET['thankyou'] ) ) : ?>
				<div class="alert alert-success">Thanks for contacting me. I'll be in touch shortly.</div>
			<?php endif; ?>

			<form id="contactForm" role="form" action="<?= URL::route('message.store'); ?>" method="post" autocomplete="off" novalidate>
				{{ method_field('POST') }}
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="Name (required):" required />
				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="title" placeholder="Title &amp; Company:" />
				</div>
				<div class="form-group">
					<input type="email" class="form-control" name="email" placeholder="Email (required):" required />
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" placeholder="Please include a short description of your business and the best time to get back to you (required):" rows="5" required></textarea>
				</div>
				<div class="form-group">
				<button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
				</div>
			</form>
		</div -->

		<div class="col-md-6">
			<img src="img/joseph-zidell-photo.jpeg" alt="Joseph Zidell" class="gravatar" />
		</div>

		<div class="col-md-6 contact-list">
			<a href="tel:+14435999327" title="Contact Joseph Zidell By Phone" class="btn btn-default btn-lg btn-block">
				<i class="fa fa-fw fa-phone pull-left"></i> 1 (443) 599-9327
			</a>
			<a href="mailto:404-Not-Found@example.com?subject=Hi!&amp;body=Either type the email address or use the form. Thanks!" title="Email Joseph Zidell" class="btn btn-default btn-lg btn-block" id="contact_email">
				<span>404 Not Found</span>
			</a>
			<a href="http://www.linkedin.com/in/josephzidell" title="Joseph Zidell's LinkedIn Profile" target="_blank" class="btn btn-default btn-lg btn-block">
				<i class="fa fa-fw fa-linkedin-square pull-left"></i> linkedin.com/in/josephzidell/
			</a>
			<a href="https://twitter.com/JosephZidell" title="Joseph Zidell's Twitter Account" target="_blank" class="btn btn-default btn-lg btn-block">
				<i class="fa fa-fw fa-twitter pull-left"></i> @JosephZidell
			</a>
			<!-- <a href="" title=""><i class="fa fa-skype"></i> j</a> -->

		</div>
	</div>


</div>
