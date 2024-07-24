<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Service;
use CodeIgniter\API\ResponseTrait;
use Hermawan\DataTables\DataTable;

class ServiceController extends BaseController
{
    use ResponseTrait;
    protected $model;

    public function __construct()
    {
        $this->model = new Service();
    }

    public function index()
    {
        if ($this->request->isAJAX()) {
            $builder = $this->model->select('id, name, link, icon');
            return DataTable::of($builder)
                ->addNumbering('no')
                ->edit('icon', function ($row) {
                    return '<i class="' . $row->icon . ' fa-2x text-primary"></i>';
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
            'title' => 'Service',
            'breadcrumbs' => [
                'Service' => site_url('service')
            ],
            'forms' => ['No', 'Name', 'Link', 'Icon', 'Action'],
            'dataTable' => true,
            'create' => true,
            'edit' => true,
            'delete' => true
        ];

        return view('admin/service/index', $data);
    }
    public function edit($id)
    {
        try {
            $data = $this->model->find($id);
            return $this->respond([
                'success' => true,
                'message' => 'Data service retrieved successfully',
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
                'icon' => 'required'
            ];

            if (!$this->validate($rules)) {
                return $this->fail($this->validator->getErrors());
            }

            $this->model->insert([
                'name' => $this->request->getPost('name'),
                'link' => $this->request->getPost('link'),
                'icon' => $this->request->getPost('icon')
            ]);

            return $this->respondCreated([
                'success' => true,
                'message' => 'Data service created successfully'
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
                'icon' => 'required'
            ];

            if (!$this->validate($rules)) {
                return $this->fail($this->validator->getErrors());
            }

            $this->model->update($id, [
                'name' => $this->request->getPost('name'),
                'link' => $this->request->getPost('link'),
                'icon' => $this->request->getPost('icon')
            ]);

            return $this->respond([
                'success' => true,
                'message' => 'Data service updated successfully',
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
            $this->model->delete($id);
            return $this->respondDeleted([
                'success' => true,
                'message' => 'Data service deleted successfully'
            ]);
        } catch (\Throwable $th) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => $th->getMessage()
            ]);
        }
    }
}
