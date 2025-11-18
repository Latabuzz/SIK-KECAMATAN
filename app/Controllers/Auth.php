<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;
    protected $session;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        // Jika sudah login, redirect ke dashboard
        if ($this->session->get('logged_in')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('auth/login');
    }

    public function processLogin()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'username' => 'required',
            'password' => 'required|min_length[6]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Debug logging
        log_message('info', 'Login attempt - Username: ' . $username);
        
        $user = $this->userModel->verifyPassword($username, $password);

        log_message('info', 'User verification result: ' . ($user ? 'SUCCESS' : 'FAILED'));
        
        if ($user) {
            log_message('info', 'User data: ' . json_encode($user));
            
            // Set session
            $sessionData = [
                'user_id' => $user['id'],
                'username' => $user['username'],
                'full_name' => $user['full_name'],
                'role' => $user['role'],
                'logged_in' => true
            ];
            $this->session->set($sessionData);

            return redirect()->to('/admin/dashboard')
                ->with('success', 'Berhasil login! Selamat datang, ' . $user['full_name']);
        }

        log_message('error', 'Login failed for username: ' . $username);
        
        return redirect()->back()
            ->withInput()
            ->with('error', 'Username atau password salah');
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/')
            ->with('success', 'Berhasil logout');
    }
}
