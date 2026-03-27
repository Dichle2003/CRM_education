<?php
namespace App\Repositories;

use App\Models\Classes;
use App\Repositories\BaseRepo\BaseRepository;

class ClassRepository extends BaseRepository{
    public function model(){
        return Classes::class;
    }
}