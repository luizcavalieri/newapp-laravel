<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use scope;

class Article extends Model{

    protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    protected $dates = ['published_at'];


    // add the TIME to the field published_at, besides of the date that is being passed on the form
    public function setPublishedAtAttribute($date)
    {

        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);

    }

    /* filtering all the articles, showing just the ones that have been published already --
     PUBLISHED function in the ArticleController function index. */

    public function scopePublished($query)
    {

        $query->where('published_at', '<=', Carbon::now());

    }

}


