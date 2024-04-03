<?php

namespace App\Controllers;

use App\Models\About;
use App\Models\CallCenter;
use App\Models\Home as ModelsHome;
use App\Models\VillageActivity;

class Home extends BaseController
{
    private $modelAboout;
    private $modelCallCenter;
    private $modelVillageActivity;
    private $modelHome;
    public function __construct()
    {
        $this->modelAboout = new About();
        $this->modelCallCenter = new CallCenter();
        $this->modelVillageActivity = new VillageActivity();
        $this->modelHome = new ModelsHome();
    }

    public function index(): string
    {
        $data = [
            'about' => $this->modelAboout->first(),
            'callCenter' => $this->modelCallCenter->findAll(),
            'villageActivity' => $this->modelVillageActivity->findAll(),
            'home' => $this->modelHome->first(),
        ];
        return view('guest/home', $data);
    }

    public function villageActivity($slug)
    {
        $villageActivity = $this->modelVillageActivity->where('slug', $slug)->first();
        if (!$villageActivity) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('guest/village_activity', ['villageActivity' => $villageActivity]);
    }
}
