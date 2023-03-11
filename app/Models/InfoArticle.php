<?php

namespace App\Models;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InfoArticle extends Model
{
    use Translatable;

    use SoftDeletes;
    protected $fillable = ['article_id', 'title', 'description', 'content', 'lang', 'title_meta', 'description_meta','keywords_meta','alt','recommended','views'];
    protected $foregeinKey = 'article_id';

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
