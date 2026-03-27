<?php
namespace App\Services;

use App\Repositories\RegionRepository;
use App\Services\BaseService\BaseService;

class RegionService extends BaseService{
    public function __construct( protected RegionRepository $repo )
    {
        $this->repository = $repo;
       
    }
    public function getAll()
    {
        return $this->repo->all();
    }
    public function create(array $data){
        return $this->repo->create($data);
    }
    public function update($id,array $data){
        return $this->repo->update($id,$data);
    }
    public function find($id)
    {
        return $this->repo->find($id);
    }
    public function delete($id){
        return $this->repo->delete($id);
    }
}