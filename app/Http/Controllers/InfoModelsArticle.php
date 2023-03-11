<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InfoArticle extends Model
{
    use SoftDeletes;
    protected $fillable = ['article_id', 'title', 'description', 'content', 'lang', 'title_meta', 'description_meta','keywords_meta','alt','recommended','views'];

    /**
     * Artículo asociado a la info.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Created by  <Rhiss.net>
     */
    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
