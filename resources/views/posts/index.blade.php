@extends('layouts.app')

@section('content')

	{!! Breadcrumbs::render('blog') !!}

	@section('header')
		Joseph's Blog
	@stop

	<div class="row posts-list">
		<?php foreach ($posts as $post): ?>
			<div class="col-lg-12 well">
				<h1>
					<?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', 'slug' => $post['Post']['slug'])); ?>
				</h1>
				<?= $this->Html->image("blog/{$post['Post']['slug']}/header.jpg", ['class' => 'post-header-image']); ?>
				<?= $this->Text->truncate(
					$post['Post']['body_html'],
					500,
					['ellipsis' => '...(' . $this->Html->link('read more', array('action' => 'view', 'slug' => $post['Post']['slug'])) . ')',
					'html' => true]); ?>
			</div>
		<?php endforeach; ?>
	</div>

	@section('sidebar')
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
	@stop

@endsection
