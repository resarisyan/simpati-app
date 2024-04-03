<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CallCenter;
use CodeIgniter\API\ResponseTrait;
use Hermawan\DataTables\DataTable;

class CallCenterController extends BaseController
{
    use ResponseTrait;
    protected $model;

    public function __construct()
    {
        $this->model = new CallCenter();
    }

    public function index()
    {
        if ($this->request->isAJAX()) {
            $builder = $this->model->select('id, name, caption, link, image');
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
            'title' => 'Call Center',
            'breadcrumbs' => [
                'Call Center' => site_url('call-center')
            ],
            'forms' => ['No', 'Name', 'Caption', 'Link', 'Image', 'Action'],
            'dataTable' => true,
            'create' => true,
            'edit' => true,
            'delete' => true
        ];
        return view('admin/callcenter/index', $data);
    }

    public function edit($id)
    {
        try {
            $data = $this->model->find($id);
            return $this->respond([
                'success' => true,
                'message' => 'Data call center retrieved successfully',
                'data' => $data
            ]);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }

    public function store()
    {
        try {
            $rules = [
                'name' => 'required',
                'caption' => 'required',
                'link' => 'required|valid_url',
                'image' => 'uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]'
            ];

            if (!$this->validate($rules)) {
                return $this->fail($this->validator->getErrors());
            }

            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();
            $image->move('uploads', $imageName);

            $this->model->insert([
                'name' => $this->request->getPost('name'),
                'caption' => $this->request->getPost('caption'),
                'link' => $this->request->getPost('link'),
                'image' => $imageName,
            ]);

            return $this->respondCreated([
                'success' => true,
                'message' => 'Data call center created successfully'
            ]);
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
            $rules = [
                'name' => 'required',
                'caption' => 'required',
                'link' => 'required|valid_url',
                'image' => 'max_size[image,1024]|ext_in[image,jpg,jpeg,png]'
            ];

            if (!$this->validate($rules)) {
                return $this->fail($this->validator->getErrors());
            }

            $data = $this->model->find($id);
            $imageName = $data['image'];

            $image = $this->request->getFile('image');
            if ($image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move('uploads', $imageName);
                unlink('uploads/' . $data['image']);
            }

            $this->model->update($id, [
                'name' => $this->request->getPost('name'),
                'caption' => $this->request->getPost('caption'),
                'link' => $this->request->getPost('link'),
                'image' => $imageName,
            ]);

            return $this->respond([
                'success' => true,
                'message' => 'Data call center updated successfully'
            ]);
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
            $data = $this->model->find($id);
            unlink('uploads/' . $data['image']);
            $this->model->delete($id);
            return $this->respondDeleted([
                'success' => true,
                'message' => 'Data call center deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
