<?php

// Crear demos desde paginas externas

if(!function_exists('parseLocale')) {
    function parseLocale()
    {
        $locale = request()->segment(1);
        if (array_key_exists($locale, config('arrays.langs'))) {
            app()->setLocale($locale);
            return $locale;
        }else{
            app()->setLocale('es');  // this default locale
            return '/';
        }
    }
}

Route::prefix(parseLocale())->group(function () {
// Clear caché
Route::get('/clear-cache', function () {
    echo Artisan::call('config:clear');
    echo Artisan::call('config:cache');
    echo Artisan::call('cache:clear');
    echo Artisan::call('route:clear');
    echo Artisan::call('view:clear');
});

//rutas blog
Route::post('addCronologie','CronologieController@addCronologie')->name('addCronologie');
Route::get('getCronologies','CronologieController@getCronologies')->name('getCronologies');
Route::delete('deleteCronologie','CronologieController@deleteCronologie')->name('deleteCronologie');
Route::post('editCronologie','CronologieController@editCronologie')->name('editCronologie');

//pagination
Route::get('pagination','CronologieController@getCronologies')->name('pagination');

Route::post('extern/create-demo-ext', 'DemoController@create')->name('create-demo-ext');
Route::get('extern/create-demo-ext-landing', 'DemoController@create_crm')->name('create-demo-ext-landing');
Route::get('extern/company-demoname', 'DemoController@transformDemoNameFromExtern');

//Cambios Nov 2021
Route::get('/', 'HomeController@index')->name('home');


Route::get('change-lang/{langs}', 'HomeController@changeLang')->name('lang.switch.front');

Route::get('crm-colombia/', 'HomeController@indexPaises')->name('Colombia');
Route::get('crm-mexico/', 'HomeController@indexPaises')->name('Mexico');
Route::get('crm-chile/', 'HomeController@indexPaises')->name('Chile');
Route::get('crm-costarica/', 'HomeController@indexPaises')->name('Costarica');
Route::get('crm-panama/', 'HomeController@indexPaises')->name('Panama');
Route::get('crm-peru/', 'HomeController@indexPaises')->name('Peru');
Route::get('crm-ecuador/', 'HomeController@indexPaises')->name('Ecuador');


//Blog Front
Route::group(['prefix' => 'blog'], function () {
    Route::get('/', 'HomeController@blog')->name('blog');
    Route::get('category/{slug}', 'HomeController@blogCategory')->name('blog_category');
    Route::get('tag/{slug}', 'HomeController@blogTag')->name('blog_tag');
    Route::get('{slug}', 'HomeController@getArticle')->name('article');
});
//Others
Route::get('iniciar-sesion', 'HomeController@customPage')->name('login_datacrm');
Route::get('nosotros', 'HomeController@customPage')->name('about_us');
Route::get('proximos-webinars', 'HomeController@customPage')->name('webinars');
Route::get('contactenos', 'HomeController@customPage')->name('contact');
Route::get('precios', 'HomeController@customPage')->name('plans');
Route::get('software-crm', 'HomeController@customPage')->name('functions');
Route::get('crm-movil', 'HomeController@customPage')->name('mobile');
Route::get('partners', 'HomeController@customPage')->name('partners');
Route::get('sector', 'HomeController@customPage')->name('sector');



Auth::routes();
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('loginCrm', 'HomeController@loginCrm')->name('login-crm');
Route::post('verificationEmailSent', 'HomeController@verificationEmailSent');
Route::post('recoverPasswordFromWebsite', 'HomeController@recoverPasswordFromWebsite');
Route::get('recover-crm/{name?}/{crm?}/{token?}', 'HomeController@customPage')->name('recover-crm');
Route::get('change-pass-crm', 'HomeController@changePassCrm')->name('change-pass-crm');
Route::get('request-pass', 'HomeController@requestPass')->name('request-pass');


// Route::get('proximos-webinars', 'HomeController@customPage')->name('webinars');
//  Route::get('precios', 'HomeController@customPage')->name('plans');

Route::get('getData', 'ConfigsiteController@sendData')->name('getDataLoginRigth');

//$url = action('CronologieController@getCronologies');

//Routas de contratos
Route::get('contrato-co', 'HomeController@customPage')->name('contrato-co');
Route::get('contrato-mx', 'HomeController@customPage')->name('contrato-mx');
//Route politicas
Route::get('politicas', 'HomeController@customPage')->name('politicas');
Route::get('terminos', 'HomeController@customPage')->name('terminos');
Route::get('ans', 'HomeController@customPage')->name('ans');
Route::get('cookies', 'HomeController@customPage')->name('cookies');

//Demos
Route::post('find-demo', 'DemoController@findDemo')->name('find-demo');
Route::get('create-demo-view', 'DemoController@createDemoView')->name('create-demo-view');
Route::get('create-demo', 'DemoController@createDemo')->name('create-demo');
Route::get('validate-mandatory-popup', 'DemoController@validateMandatoryPopup2')->name('validate-mandatory-popup');
Route::get('save-demo-info', 'DemoController@saveDemoInfo')->name('save-demo-info');
Route::post('save-demo-rdstation', 'DemoController@saveDemoRd')->name('save-demo-rdstation');
Route::post('save-lead-rdstation', 'DemoController@saveLeadRd')->name('save-lead-rdstation');

Route::get('send-email', 'ContactController@sendEmailPaymentProcess')->name('send-email');
Route::get('send-contact', 'ContactController@SendContact')->name('send-contact');

//Error 404
Route::get('not-found','HomeController@notFound')->name('not-found');

//Pagina en mantenimientof
Route::get('page-in-maintenance','HomeController@pageInMaintenance')->name('page-in-maintenance');

//Blog Front
// Route::group(['prefix' => 'blog'], function () {
//     Route::get('/', 'HomeController@blog')->name('blog');
//     Route::get('category/{slug}', 'HomeController@blogCategory')->name('blog_category');
//     Route::get('tag/{slug}', 'HomeController@blogTag')->name('blog_tag');
//     Route::get('{slug}', 'HomeController@getArticle')->name('article');
// });

//Routes Landings
/*Route::get('landings/SCRM', 'LandingController@customLanding')->name('landign_SCRM');
Route::get('landings/CRM', 'LandingController@customLanding')->name('landign_CRM');
Route::get('landings/Whatsapp', 'LandingController@customLanding')->name('landign_Whatsapp');
Route::get('landings/CRM2', 'LandingController@customLanding')->name('landign_CRM2');*/
Route::get('landings/Mobile', 'LandingController@mobileLanding');
Route::get('landings/{campaign}/{type}', 'LandingController@customLanding');

//Route campaign
Route::get('campaigns/{landing}', 'CampaignsController@deletedLandings');

//Route Sitemap
Route::get('/sitemap/index', 'SitemapController@index')->name('sitemap-index');
Route::get('/sitemap/posts', 'SitemapController@posts')->name('sitemap-posts');
Route::get('/sitemap/categories', 'SitemapController@categories')->name('sitemap-categories');
//Route Sitemap

//payU
Route::post('send-payu', 'PayUController@SendPayu')->name('send-payu');
Route::get('response-payu', 'PayUController@ResponsePayu')->name('response-payu');
Route::get('refer-payu/{name?}', 'PayUController@ReferPayu')->name('refer-payu');
Route::get('refer-payu-whatsapp', 'PayUController@ReferPayuWhatsApp')->name('refer-payu-whatsapp');

//DataMKT
Route::get('DataMKT/{country?}', 'PayUDataMKTController@ReferPayu')->name('DataMKT');
Route::post('DataMKT-payu', 'PayUDataMKTController@SendPayu')->name('DataMKT-payu');

});

Route::group(['middleware' => ['auth']], function () {
 //   Route::group(['middleware' => ['role:admin']], function () {
        //Configsite
        Route::get('/dashboard', function () {
            return redirect()->route('configsite');
        })->name('dashboard');


        Route::get('lang/{langs}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

        //mis rutas

        Route::get('configsite/edit', 'ConfigsiteController@edit')->name('configsite');
        Route::post('configsite/edit', 'ConfigsiteController@update')->name('configsite.edit');
        //Events
        Route::get('event/list', 'EventController@index')->name('event_list');
        Route::get('event/edit/{id}', 'EventController@edit')->name('event_edit');
        Route::post('event/edit/{id}', 'EventController@updateOrCreate');
        Route::get('event/delete/{id}', 'EventController@delete')->name('event_delete');
        //User
        Route::get('user/edit', 'UserController@edit')->name('user_edit');
        Route::post('user/edit', 'UserController@update');
        //Category
        Route::get('category/get/{id?}', 'CategoryController@get')->name('category_get');
        Route::post('category/edit/{id?}', 'CategoryController@edit')->name('category_edit');
        Route::get('category/list/{id?}/{type?}', 'CategoryController@index')->name('category_list');
        Route::delete('category/delete/{id?}', 'CategoryController@delete')->name('category_delete');
        Route::post('category/order', 'CategoryController@order')->name('category_order');
        //Tags
        Route::get('tags/get/{id?}', 'TagController@get')->name('tag_get');
        Route::post('tags/edit/{id?}', 'TagController@edit')->name('tag_edit');
        Route::get('tags/list/{id?}', 'TagController@index')->name('tag_list');
        Route::delete('tags/delete/{id?}', 'TagController@delete')->name('tag_delete');
        //Blog
       
        Route::get('article/list', 'ArticleController@index')->name('article_list');
        Route::get('article/edit/{id}', 'ArticleController@edit')->name('article_edit');
        Route::post('article/edit/{id}', 'ArticleController@updateOrCreate');
        Route::get('article/json-list', 'ArticleController@jsonList');
        Route::get('article/categories', 'ArticleController@categories')->name('article_categories');
        Route::get('article/tags', 'ArticleController@tags')->name('article_tags');
        Route::delete('article/delete/{id}', 'ArticleController@delete');
        Route::post('article/change-status', 'ArticleController@changeStatus');

        //Gallery
        Route::group(['prefix' => 'galleries'], function () {
            Route::post('upload-image/{id?}', 'GalleryController@uploadImage')->name('galleries.upload');
            Route::post('edit-image', 'GalleryController@editImage')->name('galleries.edit');
            Route::delete('delete-image/{id?}', 'GalleryController@deleteImage')->name('galleries.delete');
            Route::get('get-image/{id?}', 'GalleryController@getImage')->name('galleries.get');
            Route::post('order', 'GalleryController@orderImages')->name('galleries.order');
        });

        Route::group(['prefix' => 'videos'], function () {
            Route::any('upload-video/{id?}', 'VideoController@upload')->name('videos.upload');
            Route::post('edit-video', 'VideoController@edit')->name('videos.edit');
            Route::delete('delete-video/{id?}', 'VideoController@delete')->name('videos.delete');
            Route::get('get-video/{id?}', 'VideoController@get')->name('videos.get');
            Route::post('order', 'VideoController@order')->name('videos.order');
        });

  //  });
});

Route::resource('infoCronology','infoCronologyController');

Route::get('MyLocation', function () {
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $localization = Location::get($user_ip);
    dd($localization);
})->name('MyLocation');
Route::resource('infoCronology', 'infoCronologyController');


use App\Model\Article;
use App\Model\InfoArticle;

Route::get('MyArticle', function () {
    

    $articulos2        = Article::
    join('info_articles', 'articles.id', '=', 'info_articles.article_id')->
    where('info_articles.lang', 'en')->
    orderBy('info_articles.views', 'desc')->
    with('info', 'category')->
    paginate(8);
    //
    ;

\Log::info('*** wep -> myarticle -> articulos2 : ' . json_encode($articulos2[0]));



    dd(json_encode($articulos2[0]));
})->name('MyArticle');

