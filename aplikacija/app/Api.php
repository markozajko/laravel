<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Api extends Model {

		protected $fillable = [
		'title',
		'category',
		'content',
		'imageUrl'
	];


}
