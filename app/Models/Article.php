<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use SoftDeletes;
    use HasSlug;
    use HasFactory;

    protected $fillable = ['category_id', 'gallery_id', 'image', 'date', 'slug','status','author'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at', 'date'];

    /**
     * Info del artículo.
     * @return mixed
     * Created by  <Rhiss.net>
     */
    // public function info()
    // {
    //     if (in_array('locale', request()->route()->middleware())) {
    //         return $this->hasOne(InfoArticle::class)->where('lang', get_lang())->withDefault();
    //     }

    //     return $this->hasOne(InfoArticle::class)->where('lang', get_lang_cms())->withDefault();
    // }

    public function info()
    {
        $lang = get_lang();
        return $this->hasOne(InfoArticle::class)->where('lang', $lang)->withDefault();
    }

     /**
     * @return mixed
     * Created by <Rhiss.net>
     */
     public function getSlugAttribute(){
        // return $this->info->slug;
        return $this->attributes["slug"];
     }


    public function cronologie()
    {
        return $this->hasMany(InfoCronologie::class);
    }

    /**
     * Categoría del artículo.
     * @return mixed
     * Created by  <Rhiss.net>
     */
    public function category()
    {
        return $this->belongsTo(InfoCategory::class, 'category_id', 'category_id')->where('lang', \Lang::locale());
    }

    /**
     * Galería de imágenes.
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     * Created by  <Rhiss.net>
     */
    public function gallery()
    {
        return $this->hasManyThrough(GalleryImage::class, Gallery::class, 'id', 'gallery_id', 'gallery_id');
    }

    /**
     * Tags del artículo.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * Created by <Rhiss.net>
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->where('lang', \Lang::locale());
    }

    /**
     * Devuelve el nombre la categoría padre level=0.
     * @return mixed
     * Created by <Rhiss.net>
     */
    public function mainCategoryName()
    {
        if ($this->category_id != 0) {
            $category = Category::find($this->category_id);

            while ($category->level > 0) {
                $category = Category::find($category->parent);
            }

            return $category->info->name;
        } else {
            return '';
        }
    }

    /**
     * Obtiene el slug de la categoría.
     * @return string
     * Created by <Rhiss.net>
     */
    public function mainCategorySlug()
    {
        $category = Category::find($this->category_id);

        return empty($category) ? '' : $category->slug;
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
                          ->generateSlugsFrom('name')
                          ->saveSlugsTo('slug')
                          ->doNotGenerateSlugsOnCreate()->doNotGenerateSlugsOnUpdate()->slugsShouldBeNoLongerThan(200);
    }

}
