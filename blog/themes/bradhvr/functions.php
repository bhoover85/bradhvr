<?php

function article_previous_title() {
	$page = Registry::get('posts_page');
	$query = Post::where('created', '<', Registry::prop('article', 'created'))
				->where('status', '!=', 'draft');

	if($query->count()) {
		$article = $query->sort('created', 'desc')->fetch();
		$page = Registry::get('posts_page');

		return $article->title;
	}
}

function article_next_title() {
	$page = Registry::get('posts_page');
	$query = Post::where('created', '>', Registry::prop('article', 'created'))
				->where('status', '!=', 'draft');

	if($query->count()) {
		$article = $query->sort('created', 'asc')->fetch();
		$page = Registry::get('posts_page');

		return $article->title;
	}
}

?>