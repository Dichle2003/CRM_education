<?php
namespace App\Services\BaseService;
use App\Repositories\Support\AbstractRepository as BaseRepository;
class BaseService{
    protected $repository;
    
    public function getAll(){
        return $this->repository->all();
    }
    public function find($id){
        return $this->repository->find($id);
    }
}