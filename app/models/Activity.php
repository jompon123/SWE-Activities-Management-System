<?php
class Activity extends Eloquent {
	protected $table = 'activity';

	public function coverTime($pattern, $date)
	{
		return date($pattern,strtotime($date)));
	}
}
