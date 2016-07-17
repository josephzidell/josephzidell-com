<?php

// Home
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->push('Joseph Zidell\'s Blog', route('post.index'));
});

// Blog > [post]
Breadcrumbs::register('post', function($breadcrumbs, $post)
{
    $breadcrumbs->parent('blog');
    $breadcrumbs->push($post->title, route('post', $post->slug));
});