<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    // region USER

    /* User Authentication */
    Route::get('user/login', 'Auth\AuthController@getLogin')->name('login');
    Route::post('user/login', 'Auth\AuthController@postLogin');
    Route::get('user/logout', 'Auth\AuthController@getLogout')->name('logout');

    Route::get('/', ['middleware' => 'auth', 'uses' => 'HomeController@index']);

    // endregion USER

    // region ADMIN

    /* Admin Authentication */
    Route::get('systems/login', 'Auth\AdminAuthController@getLogin')->name('systems_login');
    Route::post('systems/login', 'Auth\AdminAuthController@postLogin');
    Route::get('systems/logout', 'Auth\AdminAuthController@getLogout')->name('systems_logout');

    Route::get('systems', ['middleware' => 'admin', 'uses' => 'Admin\DashboardController@index']);

    // Media
    Route::get('systems/media/images', 'Admin\MediaController@getImages')->name('systems_media_images_list');
    Route::post('systems/media/images', 'Admin\MediaController@postImages')->name('systems_post_media_images_list');
    Route::post('systems/media/images/single_delete', 'Admin\MediaController@postDeleteSingleImage')
        ->name('systems_single_delete_image');

    // endregion ADMIN