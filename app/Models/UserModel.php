<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        'username',
        'email',
        'password',
        'full_name',
        'role'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    // Validation
    protected $validationRules = [
        'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username,id,{id}]',
        'email' => 'required|valid_email|is_unique[users.email,id,{id}]',
        'password' => 'required|min_length[6]',
        'role' => 'required|in_list[admin,staff,user]'
    ];

    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $beforeInsert = ['hashPassword'];
    protected $beforeUpdate = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    public function verifyPassword($username, $password)
    {
        $user = $this->getUserByUsername($username);
        
        log_message('info', 'UserModel::verifyPassword - Username: ' . $username);
        log_message('info', 'UserModel::verifyPassword - User found: ' . ($user ? 'YES' : 'NO'));
        
        if ($user) {
            log_message('info', 'UserModel::verifyPassword - Password hash length: ' . strlen($user['password']));
            $verified = password_verify($password, $user['password']);
            log_message('info', 'UserModel::verifyPassword - Password verified: ' . ($verified ? 'YES' : 'NO'));
            
            if ($verified) {
                return $user;
            }
        }
        
        return false;
    }
}
