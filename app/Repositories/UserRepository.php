<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepo\BaseRepository;

class UserRepository extends BaseRepository{
    public function model()
    {
        return User::class;
    }
    public function all(){
        return $this->model->all();
    }
}