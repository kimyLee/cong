<?php

class Indent extends \Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'indents';

	protected $fillable = array(
			'user_id',
			'product_id',
			'task_id',
			'status'
		);

	protected $hidden = array(
			'created_at',
			'updated_at'
		);

	public function task()
	{
	        return $this->belongsTo('Task', 'task_id', 'id');
	}

	public function Product()
	{
		return $this->belongsTo('Product');
	}
}
