<?php

require 'bootstrap/autoload.php';

require 'bootstrap/app.php';

use App\Models\News;

$newsCollection = News::with('comments')->get();

foreach ($newsCollection as $news) {
	echo("############ NEWS " . $news->title . " ############\n");
	echo($news->body . "\n");
	foreach ($news->comments as $comment) {
		echo("Comment " . $comment->id . " : " . $comment->body . "\n");
	}
}
