<?php

namespace App\Controllers;

use App\Models\About;
use App\Models\CallCenter;
use App\Models\Home as ModelsHome;
use App\Models\VillageActivityCategory;
use App\Models\VillageActivityPost;

class Home extends BaseController
{
    private $modelAboout;
    private $modelCallCenter;
    private $modelVillageActivityCategory;
    private $modelVillageActivityPost;
    private $modelHome;
    public function __construct()
    {
        $this->modelAboout = new About();
        $this->modelCallCenter = new CallCenter();
        $this->modelVillageActivityCategory = new VillageActivityCategory();
        $this->modelVillageActivityPost = new VillageActivityPost();
        $this->modelHome = new ModelsHome();
    }

    public function index(): string
    {
        $data = [
            'about' => $this->modelAboout->first(),
            'callCenter' => $this->modelCallCenter->findAll(),
            'villageActivityCategory' => $this->modelVillageActivityCategory->findAll(),
            'home' => $this->modelHome->first(),
        ];

        return view('guest/home', $data);
    }

    public function village_activity_category($slug)
    {
        $villageActivityCategory = $this->modelVillageActivityCategory->where('slug', $slug)->first();
        if (!$villageActivityCategory) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $posts = $this->modelVillageActivityPost->where('category_id', $villageActivityCategory['id'])->paginate(10);


        $data = [
            'category' => $villageActivityCategory,
            'posts' => $posts,
            'pager' => $this->modelVillageActivityPost->pager,
            'breadcrumbs' => [
                'Category' => route_to('home_village_activity_category', $villageActivityCategory['slug'])
            ]
        ];

        return view('guest/village_activity_category', $data);
    }

    public function village_activity_post($postSlug)
    {
        $villageActivityPost = $this->modelVillageActivityPost
            ->select('village_activity_posts.*, village_activity_categories.title as category_title, village_activity_categories.slug as category_slug')
            ->where('village_activity_posts.slug', $postSlug)
            ->join('village_activity_categories', 'village_activity_categories.id = village_activity_posts.category_id')
            ->first();
        if (!$villageActivityPost) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $relatedPosts = $this->modelVillageActivityPost->where('category_id', $villageActivityPost['category_id'])->findAll(3);
        $data = [
            'post' => $villageActivityPost,
            'relatedPosts' => $relatedPosts,
            'breadcrumbs' => [
                'Category' => route_to('home_village_activity_category', $villageActivityPost['category_slug']),
                $villageActivityPost['title'] => route_to('home_village_activity_post', $villageActivityPost['slug'])
            ]
        ];

        return view('guest/village_activity_post', $data);
    }
}
