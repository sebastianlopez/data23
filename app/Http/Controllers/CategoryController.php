<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\InfoCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Muestra una categoría en formato JSON.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     * Created by  <Rhiss.net>
     */
    public function get($id = 0)
    {
        return \Response::json(Category::where('id', $id)->with('info')->first());
    }

    /**
     * Muestra el formulario para editar o agregar una categoría.
     *
     * @param int $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     * Created by  <Rhiss.net>
     */
    public function edit($id = 0, Request $request)
    {
        if ($id > 0) {
            $category  = Category::find($id);
            $parent_id = $category->parent;
            $category->update($request->get('dat'));
            $info = $request->get('info');

            $slug = str_slug($info['name']);
            if ($category->slug != $slug) {
                $category->slug = $slug;
                $category->save();
            }

            InfoCategory::where(['category_id' => $id, 'lang' =>  get_lang_cms()])->update($info);
        } else {
            $dat             = $request->get('dat');
            $dat['position'] = Category::where('parent', $dat['parent'])->count();

            $category  = Category::create($dat);
            $parent_id = $category->parent;

            $info                = $request->get('info');
            $info['category_id'] = $category->id;

            $category->slug = str_slug($info['name']);
            $category->save();

            $info['lang'] =  get_lang_cms();
            InfoCategory::create($info);

            $langs = config('arrays.langs');

            foreach ($langs as $key=>$lang) {
                if ($key !=  get_lang_cms()) {
                    $info['lang'] = $key;
                    InfoCategory::create($info);
                }
            }
        }

        $parent = Category::find($parent_id);
        if ($parent != null) {
            return \Response::json($parent);
        } else {
            return \Response::json(['id' => 0, 'level' => -1]);
        }
    }

    /**
     * Muestra las categorías dado un tipo en formato JSON.
     *
     * @param int $id
     * @param string $type
     *
     * @return \Illuminate\Http\JsonResponse
     * Created by  <Rhiss.net>
     */
    public function index($id = 0, $type = '')
    {
        $categories = Category::where(['parent' => $id, 'type' => $type])->orderBy('position',
            'asc')->with('info')->get();
        $total      = Category::where(['parent' => $id, 'type' => $type])->count();
        $parent     = Category::where('id', $id)->with('info')->first();

        return \Response::json(['data' => $categories, 'total' => $total, 'parent' => $parent]);
    }

    /**
     * Elimina la información de una categoría de la bd.
     *
     * @param $id
     *
     * @return mixed
     * Created by  <Rhiss.net>
     */
    public function delete($id)
    {
        return Category::where('id', $id)->delete();
    }

    /**
     * Ordena las categorías.
     *
     * @param Request $request
     * Created by  <Rhiss.net>
     */
    public function order(Request $request)
    {
        $array = $request->get('data');

        foreach ($array as $key => $item) {
            Category::find($item)->update(['position' => $key]);
        }
    }

}
