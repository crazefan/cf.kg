<?php
 
class Project extends Eloquent {

	 public static $types = array(
	    'art' => 'Art',
		'crafts' => 'Crafts',
	    'dance' => 'Dance',
	    'comics' => 'Comics',
	    'design' => 'Design',
	    'fashion' => 'Fashion',
	    'video' => 'Video',
	    'food' => 'Food',
	    'games' => 'Games',
	    'journalism' => 'Journalism',
	    'music' => 'Music',
	    'photography' => 'Photography',
	    'technology' => 'Technology',
	    'publishing' => 'Publishing',
	    'other' => 'Other',
    );



	  protected $fillable = array(
        'type',
        'title',
		'country',
		'image',
		'comment',
		'duration',
		'goal',
		'video',
    );

	public function author()
	{
		return $this->belongsTo('User', 'user_id');
	}
 
}