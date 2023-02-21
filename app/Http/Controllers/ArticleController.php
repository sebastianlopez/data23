<?php

namespace App\Http\Controllers;


use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Models\GalleryImage;
use App\Models\InfoArticle;
use App\Models\InfoCronologie;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    private $article;
    private $info;

    /**
     * ArticleController constructor.
     *
     * @param Article $article
     */
    public function __construct(Article $article, InfoArticle $info)
    {
        $this->article = $article;
        $this->info    = $info;

    }

    /**
     * Muestra la lista de artículos en el CMS del rol:admin.
     * @return \Illuminate\Http\Response
     * Created by  <Rhiss.net>
     */
    public function index()
    {
        return view('admin.article.list');
    }


    /**
     * Muestra el formulario para editar o agregar un artículo.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Created by <Rhiss.net>
     */
    public function edit($id)
    {$reg['option']        = 'Agregar';
        $reg['gallery_class'] = 'col-xl-12';
        $reg['path']          = 'article';
        $reg['tags_selected'] = [];
        if ($id > 0) {
            $reg['reg']           = Article::find($id);
            $reg['images']        = GalleryImage::getGallery($reg['reg']->gallery_id);
            $reg['option']        = 'Editar';
            $reg['tags_selected'] = $reg['reg']->tags()->pluck('id')->toArray();
            $reg['cronologies'] = InfoCronologie::getCronologiesPaginate($reg['reg']->id);
        }
        $reg['categories'] = Category::selectArray(0, collect([]), 'article');
        $reg['tags']       = Tag::where(['lang' => \Lang::locale()])->get();
        $reg['message'] = \Session::get('message');
        return view('admin.article.edit', $reg);
    }

    /**
     * Crea o actualiza la información de un artículo.
     *
     * @param int $id
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     * Created by  <Rhiss.net>
     */
    public function updateOrCreate($id = 0, Request $request)
    {
        $dat         = $request->dat;
        $info        = $request->info;
        $dat['date'] = empty($dat['date']) ? Carbon::now()->toDateString() : $dat['date'];

        if ($request->file('image')) {
            $sizes        = ['s' => [450, 350]];
            $dat['image'] = $this->article->uploadImage($request->file('image'), $sizes, 70);
        }
        if ($request->file('image_seo')) {
            $sizes        = ['s' => [600, 315]];
            $dat['image_seo'] = $this->article->uploadImage($request->file('image_seo'), $sizes, 70);
        }
        if ($id > 0) {
            $article = $this->article->find($id);
            if ($request->get('delimg')) {
                $sizes        = ['s'];
                $dat['image'] = $this->article->deleteImage($article->image, $sizes);
            }
            if ($request->get('delimg_seo')) {
                $sizes        = ['s'];
                $dat['image_seo'] = $this->article->deleteImage($article->image_seo, $sizes);
            }
            $article->update($dat);
            $info['article_id'] = $id;
            $this->info->updateLang($info);
        } else {
            $article            = $this->article->create($dat);
            $id                 = $article->id;
            $info['article_id'] = $id;
            $this->info->createLang($info);
        }
        session()->flash('message', 'Información guardada.');

        return redirect()->route('articles.edit', ['id' => $id]);
    }

    /**
     * Lista los artículos en formato JSON para mostrar con Datatable.
     * @return mixed
     * @throws \Exception
     * Created by <Rhiss.net>
     */
    public function jsonList()
    {
        $articles = Article::join('info_articles', 'info_articles.article_id', '=', 'articles.id')
        ->leftJoin('info_categories', 'info_categories.category_id', '=', 'articles.category_id')
        ->where(['info_articles.lang' => get_lang_cms(), 'info_categories.lang' => get_lang_cms()])
        ->select([
            'articles.id',
            'info_articles.title as info_articles.title',
            'info_categories.name as info_categories.name',
            'articles.date',
            'articles.status',
            'articles.slug'
        ]);

        return DataTables::of($articles)
                         ->addColumn('options', function ($article) {
                             return '<a class="btn btn-sm btn-outline btn-primary" href="' . route('article',
                             ['slug'   => $article->slug,
                              'locale' => get_lang_cms()
                             ]) . '" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> Ver</a>
                        <a class="btn btn-sm btn-outline-main" href="' . route('article_edit',
                                     ['id' => $article->id]) . '"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                        <a class="btn btn-sm btn-outline-danger" href="javascript:deleteRow(' . $article->id . ')"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</a>';
                         })
                         ->editColumn('date', function ($section) {

                             return formatDate($section->date);
                         })
                         ->rawColumns(['options'])
                         ->make();
    }

    /**
     * Muestra la vista para manejar las categorías de los artículos.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Created by  <Rhiss.net>
     */
    public function categories()
    {
        $reg['parents']      = Category::where([
            'type'   => 'article',
            'parent' => 0,
         
        ])->with('info')->orderBy('position',
            'asc')->get();
        $reg['type']         = 'article';
        $reg['title_page']   = 'Categorías blog';
        $reg['title_parent'] = 'Blog';
        $reg['route_parent'] = route('article_list');
        $reg['level_limit']  = 0;

        return view('admin.manage-categories', $reg);
    }

    /**
     * Elimina la información de un artículo de la bd.
     *
     * @param $id
     * Created by  <Rhiss.net>
     */
    public function delete($id)
    {
        echo $this->article->find($id)->delete();
    }



    public function tags()
    {
        $reg['parents']      = Tag::orderBy('name', 'asc')->get();
        $reg['title_page']   = 'Tags blog';
        $reg['title_parent'] = 'Blog';
        $reg['route_parent'] = route('article_list');
        $reg['level_limit']  = 0;

        return view('admin.manage_tag', $reg);
    }
}
