<?php
namespace App\Repositories;

use App\Models\Students;
use App\Repositories\BaseRepo\BaseRepository;

class StudentRepository extends BaseRepository
{
    public function model()
    {
        return Students::class;
    }
}
