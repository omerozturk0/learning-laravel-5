<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Articles
 * @package App
 */
class Articles extends Model
{
    /**
     * Articles table fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'user_id'
    ];

    /**
     * published_at must be date like created_at, updated_at
     *
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * Defined published function for $article->published()->latest();
     *
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    /**
     * Defined unpublished function for $article->unpublished()->latest();
     *
     * @param $query
     */
    public function scopeUnpublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }

    /**
     * Set the published at attribute
     *
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * Get the published at attribute
     *
     * @param $date
     * @return string
     */
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }

    /**
     * Articles table relations for user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Articles table relations for tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    /**
     * list tag.id for view.articles.form.tag_list select element
     *
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags()->lists('id')->all();
    }

}
