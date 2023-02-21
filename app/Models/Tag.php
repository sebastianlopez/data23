<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tag extends Model
{
    use SoftDeletes;
    //use App\Model\HasSlug;

    protected $fillable = ['id', 'name', 'lang', 'slug'];

    /**
     * Artículos relacionados al tag.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * Created by <Rhiss.net>
     */
    public function articles()
    {
        return $this->belongsToMany(Article::class)->with('category', 'info');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
                          ->generateSlugsFrom('name')
                          ->saveSlugsTo('slug')
                          ->slugsShouldBeNoLongerThan(200);
    }
}
