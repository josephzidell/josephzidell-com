<template id="post-template">
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
</template>
