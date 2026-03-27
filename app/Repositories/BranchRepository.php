<?php
namespace App\Repositories;
use App\Models\Branch;
use App\Repositories\BaseRepo\BaseRepository;

class BranchRepository extends BaseRepository{
    public function model(){
        return Branch::class;
    }

}
