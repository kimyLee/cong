<?php

class Comment extends \Eloquent {
	protected $fillable = array(
			'product_id',
			'title',
			'content',
			'user_id'
		);
	protected $hidden = array(
			'created_at',
			'updated_at'
		);
}