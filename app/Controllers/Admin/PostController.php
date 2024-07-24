<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Post;
use CodeIgniter\API\ResponseTrait;
use Hermawan\DataTables\DataTable;
use Mberecall\CI_Slugify\SlugService;

class PostController extends BaseController
{
    use ResponseTrait;
    protected $model;
    protected $modelCategory;

    public function __construct()
    {
        $this->model = new Post();
        $this->modelCategory = new Category();
    }

    public function index($category)
    {
        $category = $this->modelCategory->where('slug', $category)->first();
        if (!$category) {
            return redirect()->route('category_index')->with('error', 'Category not found');
        }

        if ($this->request->isAJAX()) {
            $builder = $this->model->select('id, title, image, slug')->where('category_id', $category['id']);
            return DataTable::of($builder)
                ->addNumbering('no')
                ->edit('image', function ($row) {
                    return '<img src="' . base_url('uploads/' . $row->image) . '" width="50" height="50">';
                })
                ->edit('description', function ($row) {
                    return mb_strimwidth($row->description, 0, 100, '...');
                })
                ->add('action', function ($row) use ($category) {
                    $actionBtn = "<ul class='action'> 
                        <li class='edit'> 
                            <a href='" . route_to('post_edit', $category['slug'], $row->id) . "' data-toggle='tooltip' data-original-title='Edit' class='btnEdit'><i class='icon-pencil-alt'></i></a>
                        </li>
                        
                        <li class='delete'>
                            <a href='javascript:void(0)' data-toggle='tooltip' data-id='$row->id' data-original-title='Delete' class='btnDelete'><i class='icon-trash'></i></a>
                            </li>
                    </ul>";
                    return $actionBtn;
                })
                ->toJson(true);
        }

        $data = [
            'title' => 'Village Activity Post',
            'breadcrumbs' => [
                'Village Activity Post' => route_to('post_index', $category['slug'])
            ],
            'forms' => ['No', 'Title', 'Image', 'Action'],
            'dataTable' => true,
            'delete' => true,
            'category_slug' => $category['slug']
        ];
        return view('admin/post/index', $data);
    }

    public function create($category)
    {
        $category = $this->modelCategory->where('slug', $category)->first();
        if (!$category) {
            return redirect()->to('post')->with('error', 'Category not found');
        }

        $data = [
            'title' => 'Village Activity Post Create',
            'breadcrumbs' => [
                'Village Activity Post' => route_to('post_index', $category['slug']),
                'Create' => route_to('post_create', $category['slug'])
            ],
            'category_slug' => $category['slug'],
        ];
        return view('admin/post/create', $data);
    }

    public function edit($category, $id)
    {
        $category = $this->modelCategory->where('slug', $category)->first();
        if (!$category) {
            return redirect()->to('post')->with('error', 'Category not found');
        }

        $data = $this->model->find($id);
        if (!$data) {
            return redirect()->to('post')->with('error', 'Data not found');
        }

        $data = [
            'title' => 'Village Activity Post Edit',
            'breadcrumbs' => [
                'Village Activity Post' => route_to('post_index', $category['slug']),
                'Edit' => route_to('post_edit', $category['slug'], $id)
            ],
            'category_slug' => $category['slug'],
            'data' => $data
        ];
        return view('admin/post/edit', $data);
    }


    public function store($category)
    {
        $category = $this->modelCategory->where('slug', $category)->first();
        if (!$category) {
            return $this->failNotFound('Category not found');
        }

        $rules = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]'
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        $image = $this->request->getFile('image');
        $image_name = $image->getRandomName();
        $image->move('uploads', $image_name);

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'image' => $image_name,
            'category_id' => $category['id'],
            'slug' =>  SlugService::model(PostController::class)->make($this->request->getPost('title')),
        ];

        if ($this->model->save($data)) {
            session()->setFlashdata('success', 'Data created successfully');
            return redirect()->route('post_index', [$category['slug']]);
        } else {
            session()->setFlashdata('error', 'Data created failed');
            return redirect()->back()->withInput();
        }
    }

    public function update($category, $id)
    {
        $category = $this->modelCategory->where('slug', $category)->first();
        if (!$category) {
            return $this->failNotFound('Category not found');
        }

        $data = $this->model->find($id);
        if (!$data) {
            return $this->failNotFound('Data not found');
        }

        $rules = [
            'title' => 'required',
            'content' => 'required',
            'image' => 'permit_empty|uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]'
        ];

        if (!$this->validate($rules)) {
            session()->setFlashdata('errors', $this->validator->getErrors());
            return redirect()->back()->withInput();
        }

        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $image_name = $image->getRandomName();
            $image->move('uploads', $image_name);
            unlink('uploads/' . $data['image']);
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'image' => $image_name ?? $data['image'],
            'category_id' => $category['id'],
            'slug' =>  SlugService::model(PostController::class)->make($this->request->getPost('title')),
        ];

        if ($this->model->update($id, $data)) {
            session()->setFlashdata('success', 'Data updated successfully');
            return redirect()->route('post_index', [$category['slug']]);
        } else {
            session()->setFlashdata('error', 'Data updated failed');
            return redirect()->back()->withInput();
        }
    }

    public function destroy($category, $id)
    {
        try {
            $category = $this->modelCategory->where('slug', $category)->first();
            if (!$category) {
                return $this->failNotFound('Category not found');
            }

            $data = $this->model->find($id);
            if (!$data) {
                return $this->failNotFound('Data not found');
            }

            unlink('uploads/' . $data['image']);
            $this->model->delete($id);
            return $this->respondDeleted(['message' => 'Data deleted successfully']);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
