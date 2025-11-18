<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Redirect to public controller
        return redirect()->to('/');
    }
}
