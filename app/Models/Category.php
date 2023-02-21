<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Category extends Model
{
    use SoftDeletes;
    use HasSlug;

    protected $fillable = ['id', 'parent', 'type', 'show_delete', 'position', 'level','slug'];

    /**
     * Genera un menú completo de categorías según el tipo.
     *
     * @param $type
     * @param $parent
     *
     * @return string
     * Created by  <Rhiss.net>
     */
    public static function menu($type, $parent)
    {
        $html = '';
        $list = self::where(['parent' => $parent, 'type' => $type])->orderBy('position', 'asc')->with('info')->get();

        foreach ($list as $item) {
            switch ($type) {
                case 'content':
                    $content = Content::where('category_id', $item->id)->with('info')->first();
                    $route   = ($content != null) ? route('Content',
                        ['id' => $content->id, 'title' => chstr($content->info->title)]) : '#';
                    break;
                case 'article':
                    $route = route('blog', ['id' => $item->id, 'title' => chstr($item->info->name)]);
                    break;
                default:
                    break;
            }

            $html .= '<li><a href="' . $route . '">' . $item->info->name . '</a>';

            if (self::where(['parent' => $item->id, 'type' => $type])->count() > 0) {
                $html .= '<ul class="drop-down one-column hover-fade">' . self::menu($type, $item->id) . '</ul>';
            }

            $html .= '</li>';

        }

        return $html;
    }

    /**
     * List a array with categories to print on select html element
     *
     * @param int $parent
     * @param $response
     * @param $type
     *
     * @return mixed
     * Created by  <Rhiss.net>
     */
    public static function selectArray($parent = 0, $response, $type, $content_id = 0)
    {
        self::where(['parent' => $parent, 'type' => $type])->with('info')->orderBy('position')->get()->map(function ($item) use (
            $response,
            $parent,
            $type,
            $content_id
        ) {

            $response->put($item->id, str_repeat(' · ', $item->level) . $item->info->name);
            /*
            if ($type == 'content') {
                $contents = Content::where('category_id', $item->id)->get();
                if (!empty($contents->first()) && $contents->first()->id == $content_id) {
                    $response->put($item->id, str_repeat(' · ', $item->level) . $item->info->name . ' (actual)');
                }
                if (count($contents) == 0) {
                    $response->put($item->id, str_repeat(' · ', $item->level) . $item->info->name);
                }
            } else {
                $response->put($item->id, str_repeat(' · ', $item->level) . $item->info->name);
            }
            */
            $response->put($item->id, str_repeat(' · ', $item->level) . $item->info->name);
            self::selectArray($item->id, $response, $type, $content_id);
        });

        return $response->all();
    }

    /**
     * Info de la categoría.
     * @return mixed
     * Created by  <Rhiss.net>
     */
    public function info()
    {
        if (in_array('locale', request()->route()->middleware())) {
            return $this->hasOne(InfoCategory::class)->where('lang', get_lang())->withDefault();
        }

        return $this->hasOne(InfoCategory::class)->where('lang', get_lang_cms())->withDefault();
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
