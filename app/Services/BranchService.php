<?php
namespace App\Services;
use App\Repositories\BranchRepository;
use App\Services\BaseService\BaseService;

class BranchService extends BaseService{
   public function __construct( protected BranchRepository $repo ){}
    public function getAll(){
        return $this->repo->All();
    }
    public function find($id){
        return $this->repo->find($id);
    }
    public function create($data){
        return $this->repo->create($data);
    }
    public function update($id,$data){
        return $this->repo->update($id,$data);
    }
    public function delete($id){
        return $this->repo->delete($id);
    }
}
