<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\VillageActivity;
use CodeIgniter\API\ResponseTrait;
use Hermawan\DataTables\DataTable;
use Mberecall\CI_Slugify\SlugService;

class VillageActivityController extends BaseController
{
    use ResponseTrait;
    protected $model;

    public function __construct()
    {
        $this->model = new VillageActivity();
    }

    public function index()
    {
        if ($this->request->isAJAX()) {
            $builder = $this->model->select('id, title, description, caption, image, video');
            return DataTable::of($builder)
                ->addNumbering('no')
                ->edit('image', function ($row) {
                    return '<img src="' . base_url('uploads/' . $row->image) . '" width="50" height="50">';
                })
                ->add('action', function ($row) {
                    $actionBtn = "<ul class='action'> 
                        <li class='edit'> 
                            <a href='javascript:void(0)' data-toggle='tooltip' data-id='$row->id' data-original-title='Edit' class='btnEdit'><i class='icon-pencil-alt'></i></a>
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
            'title' => 'Village Activity',
            'breadcrumbs' => [
                'Village Activity' => site_url('village-activity')
            ],
            'forms' => ['No', 'Title', 'Description', 'Caption', 'Image', 'Video', 'Action'],
            'dataTable' => true,
            'create' => true,
            'edit' => true,
            'delete' => true
        ];
        return view('admin/villageactivity/index', $data);
    }

    public function edit($id)
    {
        try {
            $data = $this->model->find($id);
            return $this->respond([
                'success' => true,
                'message' => 'Data village activity retrieved successfully',
                'data' => $data
            ]);
        } catch (\Throwable $e) {
            return $this->failNotFound('Data village activity not found');
        }
    }

    public function store()
    {
        try {
            $rules = [
                'title' => 'required|is_unique[village_activities.title]',
                'description' => 'required',
                'caption' => 'required',
                'image' => 'uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]',
                'video' => 'permit_empty|valid_url'
            ];

            if (!$this->validate($rules)) {
                return $this->failValidationErrors($this->validator->getErrors());
            }

            $image = $this->request->getFile('image');
            $data['image'] = $image->getRandomName();
            $image->move('uploads', $data['image']);

            $data['title'] = $this->request->getPost('title');
            $data['description'] = $this->request->getPost('description');
            $data['caption'] = $this->request->getPost('caption');
            $data['video'] = $this->request->getPost('video');
            $data['slug'] = SlugService::model(VillageActivity::class)->make($data['title']);
            $this->model->save($data);
            return $this->respondCreated(['message' => 'Data village activity created successfully']);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function update($id)
    {
        try {
            $data = $this->model->find($id);
            $rules = [
                'title' => 'required|is_unique[village_activities.title,id,' . $id . ']',
                'description' => 'required',
                'caption' => 'required',
                'image' => 'permit_empty|uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]',
                'video' => 'permit_empty|valid_url'
            ];

            if (!$this->validate($rules)) {
                return $this->failValidationErrors($this->validator->getErrors());
            }

            $image = $this->request->getFile('image');
            if ($image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('uploads', $imageName);
                unlink('uploads/' . $data['image']);
            }

            $data['image'] = $imageName;
            $data['title'] = $this->request->getPost('title');
            $data['description'] = $this->request->getPost('description');
            $data['caption'] = $this->request->getPost('caption');
            $data['video'] = $this->request->getPost('video');
            $data['slug'] = SlugService::model(VillageActivity::class)->make($data['title']);
            $this->model->save($data);
            return $this->respondUpdated(['message' => 'Data village activity updated successfully']);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            $this->model->delete($id);
            return $this->respondDeleted(['message' => 'Data village activity deleted successfully']);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
