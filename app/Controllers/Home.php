<?php

namespace App\Controllers;

use App\Models\About;
use App\Models\CallCenter;
use App\Models\Category;
use App\Models\Home as ModelsHome;
use App\Models\LapakUmkm;
use App\Models\Service;
use App\Models\Post;

class Home extends BaseController
{
    private $modelAboout;
    private $modelCallCenter;
    private $modelCategory;
    private $modelPost;
    private $modelHome;
    private $modelService;
    private $modelUmkm;
    public function __construct()
    {
        $this->modelAboout = new About();
        $this->modelCallCenter = new CallCenter();
        $this->modelCategory = new Category();
        $this->modelPost = new Post();
        $this->modelHome = new ModelsHome();
        $this->modelService = new Service();
        $this->modelUmkm = new LapakUmkm();
    }

    public function index(): string
    {
        $data = [
            'about' => $this->modelAboout->first(),
            'callCenter' => $this->modelCallCenter->findAll(),
            'categories' => $this->modelCategory->where('tag', 'Program Desa')->findAll(),
            'home' => $this->modelHome->first(),
            'services' => $this->modelService->findAll()
        ];

        return view('guest/home', $data);
    }

    public function category($slug)
    {
        $category = $this->modelCategory->where('slug', $slug)->first();
        if (!$category) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $posts = $this->modelPost->where('category_id', $category['id'])->paginate(10);


        $data = [
            'category' => $category,
            'posts' => $posts,
            'pager' => $this->modelPost->pager,
            'breadcrumbs' => [
                'Category' => route_to('home_category', $category['slug'])
            ]
        ];

        return view('guest/category', $data);
    }

    public function post($postSlug)
    {
        $cost = $this->modelPost
            ->select('posts.*, categories.title as category_title, categories.slug as category_slug')
            ->where('posts.slug', $postSlug)
            ->join('categories', 'categories.id = posts.category_id')
            ->first();
        if (!$cost) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        $relatedPosts = $this->modelPost->where('category_id', $cost['category_id'])->findAll(3);
        $data = [
            'post' => $cost,
            'relatedPosts' => $relatedPosts,
            'breadcrumbs' => [
                'Category' => route_to('home_category', $cost['category_slug']),
                $cost['title'] => route_to('home_post', $cost['slug'])
            ]
        ];

        return view('guest/post', $data);
    }

    public function umkm()
    {

        $data = [
            'umkms' =>  $this->modelUmkm->where('status', '1')->paginate(10),
            'pager' => $this->modelUmkm->pager,
            'breadcrumbs' => [
                'UMKM' => route_to('home_umkm')
            ]
        ];

        return view('guest/umkm', $data);
    }

    public function umkm_create()
    {
        $data = [
            'breadcrumbs' => [
                'UMKM' => route_to('home_umkm'),
                'Create' => route_to('home_umkm_create')
            ]
        ];

        return view('guest/umkm_create', $data);
    }

    public function umkm_store()
    {
        $rules = [
            'name' => 'required',
            'link' => 'required|valid_url',
            'image' => 'uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]',
            'harga' => 'required|numeric',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads', $imageName);

        $this->modelUmkm->insert([
            'name' => $this->request->getPost('name'),
            'link' => $this->request->getPost('link'),
            'image' => $imageName,
            'harga' => $this->request->getPost('harga'),
            'status' => false
        ]);

        return redirect()->route('home_umkm')->with('success', 'Data UMKM created successfully');
    }
}
