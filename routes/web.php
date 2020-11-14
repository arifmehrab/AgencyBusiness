
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applicatio;;n. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//==================================== Frontent Route Here ===================================================
//==========================================================================================================//
 // Pages
Route::get('/', 'Frontend\FrontendController@index')->name('index');
Route::get('/about-us', 'Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('/blog', 'Frontend\FrontendController@Blog')->name('blog');
Route::get('/contact-us', 'Frontend\FrontendController@contactus')->name('contact.us');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//==================================== Admin Route Here ===================================================
//==========================================================================================================//

Route::get('admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
 // Auth
Route::get('admin', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\Auth\LoginController@login');
Route::get('admin/logout','Admin\DashboardController@logout')->name('admin.logout');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth:admin'], function () {

    // profile
    Route::get('/profile/edit', 'ProfileController@editProfile')->name('edit.profile');
    Route::put('/profile/update', 'ProfileController@updateProfile')->name('update.profile');

    // password change
    Route::get('/password/change', 'ProfileController@PasswordChange')->name('password.change');
    Route::post('/password/update', 'ProfileController@PasswordUpdate')->name('password.update');
     
    // Site Info Setting
    Route::get('/setting', 'SettingController@settings')->name('settings');
    Route::put('/setting/update/{id}', 'SettingController@settingUpdate')->name('setting.update');

    // seo setting
    Route::get('/seo', 'SettingController@seo')->name('seo');
    Route::put('/seo/update/{id}', 'SettingController@seoUpdate')->name('seo.update');

    // Newsletter 
    Route::get('/subscriber', 'HomeSettingController@subscriber')->name('subscriber');
    Route::delete('/subscriber/delete/{id}', 'HomeSettingController@newsLetterDelete')->name('subscriber.delete');

    // Slider
    Route::get('/slider', 'SliderController@index')->name('slider.index');
    Route::post('/slider/store', 'SliderController@store')->name('slider.store');
    Route::put('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
    Route::delete('/slider/delete/{id}', 'SliderController@delete')->name('slider.delete');

    // Post Route Here =======================
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::get('/post/pending/list','PostController@postPending')->name('post.pending.list');
    Route::put('/post/approve/{id}','PostController@postApprove')->name('post.approve');
    
});
