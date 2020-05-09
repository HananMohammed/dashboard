<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('command/{com}', function ($com) {
	
	/* php artisan migrate */
    \Artisan::call($com);
    dd("Done");
});


Route::get('/branderror','BrandNameController@destroy');
Route::get('getBrandClasses/{id}','getBrandClasses@index');
Route::get('GetCars/{id}','GetCars@index');
Route::resource('/formcompany','FormCompaniesController');
Route::resource('/formcompanycash','FormCompaniesController');
Route::resource('/formindividual','FormIndividualsController');
Route::resource('/formindividualcash','FormIndividualsController');
Route::resource('/formgovernment','FormGovernmentController');

Route::get('/single-features', 'SingleFeatures@index');
Route::get('/about-us','SingleAboutUs@index');
Route::get('/car-gallery/{id}','carGallery@index');
Route::get('/all-products','allProducts@index');
Route::get('/form','formView@index');
Route::get('seasons','Seasone@index')->name('season');
Route::get('offer','FormController@index')->name('offer');
Route::post('offer','FormController@store')->name('sendmail');
//Route::get('/all-products','ShowProudcts@index')->name('foo_en');
// Route::get('/جميع-المنتجات','ShowProudcts@index')->name('foo_ar');
//Route::get('{name}/{id}-{slug}','ShowProudcts@show')->name('singelProduct');
Route::get('/', 'footer@index')->name('homepage');
Route::get('/all-News', 'ShowNews@index')->name('allnews');
Route::get('news/{id}-{slug}', 'ShowNews@show')->name('singlnews_en');
Route::get('اخبار/{id}-{slug}', 'ShowNews@show')->name('singlnews_ar');

Route::post('/phpmails','PhpMailr@store')->name('phpmails');
//Route::get('/all-products','ShowProudcts@index')->name('allproducts');
Route::get('/dservice/{id}-{slug}','ShowServices@index')->name('s_en');
Route::get('/خدمه/{id}-{slug}','ShowServices@index')->name('s_ar');
Route::get('lang/{locale}', 'langcontroller@lang')->name('lang');
Route::resource('/subscriber','SubscriberController');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'DashboardController@index')->name('home');
    //Route::get('/dslider','SliderController@index')->name('dslider');
    Route::resource('/dslider','SliderController');
    Route::resource('/dabout','AboutController');
    Route::resource('/dmission','MissionController');
    Route::resource('/dcertificates','CertificatesController');
    Route::resource('/dphone','PhonesController');
    Route::resource('/dmail','EmailsController');
    Route::resource('/daddress','AddressController');
    Route::resource('/dsocial','SocialDataController');
    Route::resource('/dwhatsAndWe','WahatsAndWeChateController');
    Route::resource('/dqrcode','QrCodeController');
    Route::resource('/dnews','NewsController');
    Route::resource('/dproducts','FruitsController');
    Route::resource('/dseo','SeoController');

    Route::resource('/dsale','SaleController');
    Route::resource('/dgallary','GallaryController');
    Route::resource('/dpartners','PartnerController');
    Route::resource('/dservices','OurServicesController');
    Route::resource('/dbrand','BrandNameController');
    Route::resource('/dbrandclass','BrandClass2Controller');
    Route::resource('/dmap','MapController');
    Route::resource('/dfeatures','FeaturesController');
    Route::resource('/dforms','FormsViewController');
    Route::resource('/dcompanyforms','FormsCompanyViewController');
    Route::resource('/dgovforms','FormGovernmentView');
});
Auth::routes();


