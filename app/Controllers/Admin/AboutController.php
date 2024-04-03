<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\About;

class AboutController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new About();
    }

    public function index()
    {
        $data = [
            'data' => $this->model->first(),
            'title' => 'About',
            'breadcrumbs' => [
                'About' => site_url('about')
            ],
        ];
        return view('admin/about/index', $data);
    }

    public function update()
    {
        $data = $this->model->first();

        $rules = [
            'description' => 'required',
            'image' => 'permit_empty|uploaded[image]|max_size[image,1024]|ext_in[image,jpg,jpeg,png]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator->getErrors());
        }

        $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move('uploads', $imageName);
            unlink('uploads/' . $data['image']);
        }

        $data['image'] = $imageName;
        $data['description'] = $this->request->getPost('description');
        $this->model->update($data['id'], $data);

        session()->setFlashdata('success', 'Data updated successfully');
        return redirect()->back();
    }
}
