<?php
namespace App\Repositories;

use App\Models\Region;
use App\Repositories\BaseRepo\BaseRepository;

class RegionRepository extends BaseRepository{
    public function model(){
        return Region::class; 
    }
}