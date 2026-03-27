<?php
namespace App\Repositories;

use App\Models\Teacher;
use App\Repositories\BaseRepo\BaseRepository;

class TeacherRepository extends BaseRepository{
    public function model(){
        return Teacher::class;

    }
    
}