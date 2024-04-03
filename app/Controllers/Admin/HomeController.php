<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Home;

class HomeController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new Home();
    }

    public function index()
    {
        $data = [
            'data' => $this->model->first(),
            'title' => 'Home',
            'breadcrumbs' => [
                'Home' => site_url('home')
            ]
        ];
        return view('admin/home/index', $data);
    }

    public function update()
    {
        $data = $this->model->first();

        $rules = [
            'title' => 'required',
            'caption' => 'required',
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
        $data['caption'] = $this->request->getPost('caption');
        $data['description'] = $this->request->getPost('description');
        $data['title'] = $this->request->getPost('title');
        $this->model->update($data['id'], $data);

        session()->setFlashdata('success', 'Data updated successfully');
        return redirect()->back();
    }
}
