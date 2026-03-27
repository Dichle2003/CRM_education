<?php
namespace App\Repositories;

use App\Models\Course;
use App\Repositories\BaseRepo\BaseRepository;

class CourseRepository extends BaseRepository{
    public function model(){
        return Course::class;
    }
}