<?php

use App\Controllers\Admin\AboutController;
use App\Controllers\Admin\CallCenterController;
use App\Controllers\Admin\HomeController;
use App\Controllers\Admin\VillageActivityCategoryController;
use App\Controllers\Admin\VillageActivityPostController;
use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
service('auth')->routes($routes);
$routes->get('/', [Home::class, 'index'], ['as' => 'home']);
$routes->get('category/(:segment)', [Home::class, 'village_activity_category'], ['as' => 'home_village_activity_category']);
$routes->get('(:segment)', [Home::class, 'village_activity_post'], ['as' => 'home_village_activity_post']);


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

        $routes->group('village-activity-category', static function ($routes) {
            $routes->get('/', [VillageActivityCategoryController::class, 'index'], ['as' => 'village_activity_category_index']);
            $routes->get('(:num)', [[VillageActivityCategoryController::class, 'edit'], '$1'], ['as' => 'village_activity_category_edit']);
            $routes->put('(:num)', [[VillageActivityCategoryController::class, 'update'], '$1'], ['as' => 'village_activity_category_update']);
            $routes->delete('(:num)', [[VillageActivityCategoryController::class, 'destroy'], '$1'], ['as' => 'village_activity_category_destroy']);
            $routes->post('/', [VillageActivityCategoryController::class, 'store'], ['as' => 'village_activity_category_store']);
        });

        $routes->group('village-activity-post', static function ($routes) {
            $routes->get('(:segment)', [[VillageActivityPostController::class, 'index'], '$1'], ['as' => 'village_activity_post_index']);
            $routes->get('(:segment)/create', [[VillageActivityPostController::class, 'create'], '$1'], ['as' => 'village_activity_post_create']);
            $routes->get('(:segment)/(:num)', [[VillageActivityPostController::class, 'edit'], '$1/$2'], ['as' => 'village_activity_post_edit']);
            $routes->put('(:segment)/(:num)', [[VillageActivityPostController::class, 'update'], '$1/$2'], ['as' => 'village_activity_post_update']);
            $routes->delete('(:segment)/(:num)', [[VillageActivityPostController::class, 'destroy'], '$1/$2'], ['as' => 'village_activity_post_destroy']);
            $routes->post('(:segment)', [[VillageActivityPostController::class, 'store'], '$1'], ['as' => 'village_activity_post_store']);
        });
    }
);
