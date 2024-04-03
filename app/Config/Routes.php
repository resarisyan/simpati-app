<?php

use App\Controllers\Admin\AboutController;
use App\Controllers\Admin\CallCenterController;
use App\Controllers\Admin\HomeController;
use App\Controllers\Admin\VillageActivityController;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index'], ['as' => 'home']);
$routes->get('village-activity/(:segment)', [Home::class, 'villageActivity'], ['as' => 'village_activity']);

service('auth')->routes($routes);

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

        $routes->group('village-activity', static function ($routes) {
            $routes->get('/', [VillageActivityController::class, 'index'], ['as' => 'village_activity_index']);
            $routes->get('(:num)', [[VillageActivityController::class, 'edit'], '$1'], ['as' => 'village_activity_edit']);
            $routes->put('(:num)', [[VillageActivityController::class, 'update'], '$1'], ['as' => 'village_activity_update']);
            $routes->delete('(:num)', [[VillageActivityController::class, 'destroy'], '$1'], ['as' => 'village_activity_destroy']);
            $routes->post('/', [VillageActivityController::class, 'store'], ['as' => 'village_activity_store']);
        });
    }
);
