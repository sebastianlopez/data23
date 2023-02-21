<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Pagination\LengthAwarePaginator;

class InfoCronologie extends Model
{
    use SoftDeletes;
    protected $fillable = ['publicationDate', 'release', 'description', 'article_id'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public static function getCronologiesPaginate($id, $current_page = 1, $pages = 5){
        $default_page = 1;
        $cronologies = InfoCronologie::where('article_id', $id)->orderBy('publicationDate','DESC')->get();
        $pagination = $cronologies->forPage($current_page, $pages);
        if ($pagination->isEmpty()) {
            return new LengthAwarePaginator(
                $cronologies->forPage($default_page, $pages),
                $cronologies->count(),
                $pages,
                $default_page,
                ['path' => '']
            );
        }else{
            return new LengthAwarePaginator(
                $pagination,
                $cronologies->count(),
                $pages,
                $current_page,
                ['path' => '']
            );
        }
    }

    public static function getCronologies($id){
        return InfoCronologie::where('article_id', $id)->orderBy('publicationDate','DESC')->get();
    }
}
