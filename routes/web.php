
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
Route::get('/portfolio', 'Frontend\FrontendController@portfolio')->name('portfolio');
Route::get('/contact-us', 'Frontend\FrontendController@contactus')->name('contact.us');
Route::get('/privacy', 'Frontend\FrontendController@privacy')->name('privacy');
Route::get('/terms', 'Frontend\FrontendController@terms')->name('terms');
Route::get('/refund-policy', 'Frontend\FrontendController@refundPolicy')->name('refund.policy');

// Blog
Route::get('/blog', 'Frontend\FrontendController@Blog')->name('blog');
Route::get('/blog/{slug}', 'Frontend\FrontendController@BlogSingle')->name('blog.single');
Route::get('/category/{slug}', 'Frontend\FrontendController@categoryBlogs')->name('category.blog');

// Services
Route::get('/service/{slug}', 'Frontend\FrontendController@singleService')->name('single.service');

// NewsLetter 
Route::post('/newsletter/store', 'Frontend\FrontendController@newsLetterStore')->name('newsletter.store');

// Contact Message Store 
Route::post('/contact/msg/store', 'Frontend\FrontendController@contactMsgStore')->name('contact.msg.store');


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
    Route::get('/subscriber', 'NewsLetterController@subscriber')->name('subscriber');
    Route::delete('/subscriber/delete/{id}', 'NewsLetterController@newsLetterDelete')->name('subscriber.delete');

    // Slider
    Route::get('/slider', 'SliderController@index')->name('slider.index');
    Route::post('/slider/store', 'SliderController@store')->name('slider.store');
    Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit');
    Route::put('/slider/update/{id}', 'SliderController@update')->name('slider.update');
    Route::delete('/slider/delete/{id}', 'SliderController@delete')->name('slider.delete');

    // Services
    Route::get('/services', 'ServiceController@index')->name('service.index');
    Route::get('/service/create', 'ServiceController@create')->name('service.create');
    Route::post('/service/store', 'ServiceController@store')->name('service.store');
    Route::get('/service/view/{id}', 'ServiceController@view')->name('service.view');
    Route::get('/service/edit/{id}', 'ServiceController@edit')->name('service.edit');
    Route::put('/service/update/{id}', 'ServiceController@update')->name('service.update');
    Route::delete('/service/delete/{id}', 'ServiceController@delete')->name('service.delete');


    // Post Route Here =======================
    Route::resource('category', 'CategoryController');
    Route::resource('post', 'PostController');
    Route::get('/post/pending/list','PostController@postPending')->name('post.pending.list');
    Route::put('/post/approve/{id}','PostController@postApprove')->name('post.approve');

    // Home Page Modules ======================

    // Core Features
    Route::get('/core-features', 'CoreFeatureController@index')->name('corefeature.index');
    Route::post('/core-feature/store', 'CoreFeatureController@store')->name('corefeature.store');
    Route::get('/core-feature/edit/{id}', 'CoreFeatureController@edit')->name('corefeature.edit');
    Route::put('/core-feature/update/{id}', 'CoreFeatureController@update')->name('corefeature.update');
    Route::delete('/core-feature/delete/{id}', 'CoreFeatureController@delete')->name('corefeature.delete');

    // countDown
    Route::get('/countdown', 'CountdownController@index')->name('countdown.index');
    Route::post('/countdown/store', 'CountdownController@store')->name('countdown.store');
    Route::get('/countdown/edit/{id}', 'CountdownController@edit')->name('countdown.edit');
    Route::put('/countdown/update/{id}', 'CountdownController@update')->name('countdown.update');
    Route::delete('/countdown/delete/{id}', 'CountdownController@delete')->name('countdown.delete');

    // Customer Review
    Route::get('/customer-reviews', 'ReviewController@index')->name('review.index');
    Route::post('/customer-review/store', 'ReviewController@store')->name('review.store');
    Route::get('/customer-review/edit/{id}', 'ReviewController@edit')->name('review.edit');
    Route::put('/customer-review/update/{id}', 'ReviewController@update')->name('review.update');
    Route::delete('/customer-review/delete/{id}', 'ReviewController@delete')->name('review.delete');

    // Brand Logo
    Route::get('/customer-brands', 'BrandController@index')->name('brand.index');
    Route::post('/customer-brand/store', 'BrandController@store')->name('brand.store');
    Route::delete('/customer-brand/delete/{id}', 'BrandController@delete')->name('brand.delete');


    // About Page Modules ======================
    Route::get('/about-content', 'AboutController@indexContent')->name('about.index');
    Route::put('/about-content/update/{id}', 'AboutController@aboutContentUpdate')->name('about.update');


    // Our Team
    Route::get('/our-team', 'OurTeamController@index')->name('ourteam.index');
    Route::post('/our-team/store', 'OurTeamController@store')->name('ourteam.store');
    Route::get('/our-team/edit/{id}', 'OurTeamController@edit')->name('ourteam.edit');
    Route::put('/our-team/update/{id}', 'OurTeamController@update')->name('ourteam.update');
    Route::delete('/our-team/delete/{id}', 'OurTeamController@delete')->name('ourteam.delete');

    // Contact us Page Modules ======================
    Route::get('/contact-msg', 'ContactUsController@index')->name('contact.msg.index');
    Route::get('/contact-msg/delete/{id}', 'ContactUsController@delete')->name('contact.msg.delete');

    // Security Page Modules ======================
    Route::get('/security', 'SecurityController@index')->name('security.index');
    Route::put('/security/update/{id}', 'SecurityController@update')->name('security.update');
    
});
