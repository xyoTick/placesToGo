<?php

class Place extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'places';

	protected $guarded = ['id'];

	public function users()	
	{
		return $this->belongsTo('User');
	}

}
