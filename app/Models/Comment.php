<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use News;

class Comment extends Model
{
    protected $table = 'comment';

	public function news()
	{
		return $this->belongsTo(News::class);
	}
}