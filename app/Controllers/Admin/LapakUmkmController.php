<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LapakUmkm;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use Hermawan\DataTables\DataTable;

class LapakUmkmController extends BaseController
{
    use ResponseTrait;
    protected $model;

    public function __construct()
    {
        $this->model = new LapakUmkm();
    }

    public function index()
    {
        if ($this->request->isAJAX()) {
            $builder = $this->model->select('id, name, image, harga, link, status');
            return DataTable::of($builder)
                ->addNumbering('no')
                ->edit('image', function ($row) {
                    return '<img src="' . base_url('uploads/' . $row->image) . '" width="50" height="50">';
                })
                ->edit('link', function ($row) {
                    return "<a href='$row->link' target='_blank'>" . mb_strimwidth($row->link, 0, 50, '...') . "</a>";
                })
                ->edit('status', function ($row) {
                    $label = $row->status == 1 ? 'checked' : '';
                    return "<div class='form-check form-switch'>
                    <input style='height:15px' class='toggle-class form-check-input' type='checkbox' data-id='{$row->id}' role='switch' id='{$row->id}-switch' {$label} />
                    <label class='form-check-label d-none' for='{$row->id}-switch'>Switch Checkbox</label>
                    </div>";
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
            'title' => 'Lapak UMKM',
            'breadcrumbs' => [
                'Lapak UMKM' => site_url('lapak-umkm')
            ],
            'forms' => ['No', 'Name', 'Image', 'Harga', 'Link', 'Status', 'Action'],
            'dataTable' => true,
            'create' => true,
            'edit' => true,
            'delete' => true,
            'status' => true
        ];
        return view('admin/lapak-umkm/index', $data);
    }

    public function change_status()
    {
        try {
            $data = $this->request->getRawInput();
            $rules = [
                'id' => 'required|numeric',
            ];
            if (!$this->validate($rules)) {
                return $this->fail($this->validator->getErrors());
            }

            $record = $this->model->find($data['id']);
            if (!$record) {
                return $this->failNotFound('Data tidak ditemukan');
            }

            $status = $record['status'] ? false : true;
            $this->model->update($data['id'], ['status' => $status]);

            return $this->respond([
                'success' => true,
                'message' => 'Data lapak umkm status changed successfully',
            ]);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }


    public function edit($id)
    {
        try {
            $data = $this->model->find($id);
            return $this->respond([
                'success' => true,
                'message' => 'Data lapak umkm retrieved successfully',
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
                'link' => 'required|valid_url',
                'image' => 'uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]',
                'harga' => 'required|numeric',
            ];

            if (!$this->validate($rules)) {
                return $this->fail($this->validator->getErrors());
            }

            $image = $this->request->getFile('image');
            $imageName = $image->getRandomName();
            $image->move('uploads', $imageName);

            $this->model->insert([
                'name' => $this->request->getPost('name'),
                'link' => $this->request->getPost('link'),
                'image' => $imageName,
                'harga' => $this->request->getPost('harga'),
                'status' => true
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
                'link' => 'required|valid_url',
                'image' => 'max_size[image,1024]|ext_in[image,jpg,jpeg,png]',
                'harga' => 'required|numeric',
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
                'link' => $this->request->getPost('link'),
                'image' => $imageName,
                'harga' => $this->request->getPost('harga'),
            ]);

            return $this->respond([
                'success' => true,
                'message' => 'Data lapak umkm updated successfully',
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
                'message' => 'Data lapak umkm deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
