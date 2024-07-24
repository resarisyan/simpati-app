<?php

use App\Controllers\Admin\AboutController;
use App\Controllers\Admin\CallCenterController;
use App\Controllers\Admin\HomeController;
use App\Controllers\Admin\ServiceController;
use App\Controllers\Admin\CategoryController;
use App\Controllers\Admin\LapakUmkmController;
use App\Controllers\Admin\PostController;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
service('auth')->routes($routes);
$routes->get('/', [Home::class, 'index'], ['as' => 'home']);
$routes->get('category/(:segment)', [Home::class, 'category'], ['as' => 'home_category']);
$routes->get('umkm', [Home::class, 'umkm'], ['as' => 'home_umkm']);
$routes->get('umkm-create', [Home::class, 'umkm_create'], ['as' => 'home_umkm_create']);
$routes->post('umkm-store', [Home::class, 'umkm_store'], ['as' => 'home_umkm_store']);
$routes->get('(:segment)', [Home::class, 'post'], ['as' => 'home_post']);



$routes->group(
    'admin',
    [
        'filter' => 'session',
    ],
    static function ($routes) {
        $routes->group('home', static function ($routes) {
            $routes->get('/', [HomeController::class, 'index'], ['as' => 'home_index']);
            $routes->put('/', [HomeController::class, 'update'], ['as' => 'home_update']);
        });

        $routes->group('about', static function ($routes) {
            $routes->get('/', [AboutController::class, 'index'], ['as' => 'about_index']);
            $routes->put('/', [AboutController::class, 'update'], ['as' => 'about_update']);
        });

        $routes->group('call-center', static function ($routes) {
            $routes->get('/', [CallCenterController::class, 'index'], ['as' => 'call_center_index']);
            $routes->get('(:num)', [[CallCenterController::class, 'edit'], '$1'], ['as' => 'call_center_edit']);
            $routes->put('(:num)', [[CallCenterController::class, 'update'], '$1'], ['as' => 'call_center_update']);
            $routes->delete('(:num)', [[CallCenterController::class, 'destroy'], '$1'], ['as' => 'call_center_destroy']);
            $routes->post('/', [CallCenterController::class, 'store'], ['as' => 'call_center_store']);
        });

        $routes->group('category', static function ($routes) {
            $routes->get('/', [CategoryController::class, 'index'], ['as' => 'category_index']);
            $routes->get('(:num)', [[CategoryController::class, 'edit'], '$1'], ['as' => 'category_edit']);
            $routes->put('(:num)', [[CategoryController::class, 'update'], '$1'], ['as' => 'category_update']);
            $routes->delete('(:num)', [[CategoryController::class, 'destroy'], '$1'], ['as' => 'category_destroy']);
            $routes->post('/', [CategoryController::class, 'store'], ['as' => 'category_store']);
        });

        $routes->group('post', static function ($routes) {
            $routes->get('(:segment)', [[PostController::class, 'index'], '$1'], ['as' => 'post_index']);
            $routes->get('(:segment)/create', [[PostController::class, 'create'], '$1'], ['as' => 'post_create']);
            $routes->get('(:segment)/(:num)', [[PostController::class, 'edit'], '$1/$2'], ['as' => 'post_edit']);
            $routes->put('(:segment)/(:num)', [[PostController::class, 'update'], '$1/$2'], ['as' => 'post_update']);
            $routes->delete('(:segment)/(:num)', [[PostController::class, 'destroy'], '$1/$2'], ['as' => 'post_destroy']);
            $routes->post('(:segment)', [[PostController::class, 'store'], '$1'], ['as' => 'post_store']);
        });

        $routes->group('service', static function ($routes) {
            $routes->get('/', [ServiceController::class, 'index'], ['as' => 'service_index']);
            $routes->get('(:num)', [[ServiceController::class, 'edit'], '$1'], ['as' => 'service_edit']);
            $routes->put('(:num)', [[ServiceController::class, 'update'], '$1'], ['as' => 'service_update']);
            $routes->delete('(:num)', [[ServiceController::class, 'destroy'], '$1'], ['as' => 'service_destroy']);
            $routes->post('/', [ServiceController::class, 'store'], ['as' => 'service_store']);
        });

        $routes->group('lapak-umkm', static function ($routes) {
            $routes->get('/', [LapakUmkmController::class, 'index'], ['as' => 'lapak_umkm_index']);
            $routes->put('status', [LapakUmkmController::class, 'change_status'], ['as' => 'lapak_umkm_status']);
            $routes->get('(:num)', [[LapakUmkmController::class, 'edit'], '$1'], ['as' => 'lapak_umkm_edit']);
            $routes->put('(:num)', [[LapakUmkmController::class, 'update'], '$1'], ['as' => 'lapak_umkm_update']);
            $routes->delete('(:num)', [[LapakUmkmController::class, 'destroy'], '$1'], ['as' => 'lapak_umkm_destroy']);
            $routes->post('/', [LapakUmkmController::class, 'store'], ['as' => 'lapak_umkm_store']);
        });
    }
);
