<?php
namespace App\Services;

use App\Repositories\ClassRepository;
use App\Services\BaseService\BaseService;

class ClassService extends BaseService{
    public function __construct(protected ClassRepository $repo)
    {
       
    }
    public function getAll(){
         return $this->repo->all();   
    }
    public function create( array $data){
        return $this->repo->create($data);
    }
    public function update($id,array $data){
        return $this->repo->update($id,$data);
    }
    public function find($id){
        return $this->repo->find($id);
    }
    public function delete($id){
        return $this->repo->delete($id);
    }
}