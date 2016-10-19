<template id="post-list-template">
	<div class="row">
		<div class="col-lg-8">
			<div class="row posts-list">
				<div v-for="post in list" class="col-lg-12 well">
					<h1><a v-link="{ path: 'post/' + post.slug }">@{{ post.title }}</a></h1>
					<img v-bind:src="'img/blog/' + post.slug + '/header.jpg'" class="post-header-image" />
					@{{{ truncate(post) }}}
				</div>
				<div v-show="list.length == 0" class="col-lg-12">
					<div class="alert alert-info">Posts coming soon</div>
				</div>
			</div>
		</div>

		<div class="col-lg-4" id="sidebar">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Follow Joseph Zidell</h3>
				</div>
				<div class="panel-body">
					<a href="https://twitter.com/JosephZidell" target="_blank" title="Follow me on Twitter for the newest updates">
						<i class="fa fa-twitter fa-2x"></i>
					</a>
					&nbsp;
					<a href="http://www.linkedin.com/in/josephzidell" target="_blank" title="Follow me on LinkedIn for the newest updates">
						<i class="fa fa-linkedin-square fa-2x"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</template>