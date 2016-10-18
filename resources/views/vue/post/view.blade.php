<template id="post-template">
	<div class="row">
		<div class="col-lg-8">
			<div class="blog-post">
				<h1>@{{ post.title }}</h1>
				<img v-bind:src="'img/blog/' + post.slug + '/header.jpg'" class="post-header-image" />
				<article class="post_body">
					@{{{ post.body_html }}}
				</article>

				<hr />
				@include('vue.post.share')
				<br />

				@include('disqus')

				<small>@{{{ post.header_attribution }}}</small>
			</div>
		</div>

		<div class="col-lg-4" id="sidebar">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-heart"></i> Share this post</h3>
				</div>
				<div class="panel-body">
					@include('vue.post.share')
				</div>
			</div>
		</div>
	</div>
</template>
