<?php
namespace App\Services;

use App\Repositories\StudentRepository;
use App\Services\BaseService\BaseService;

class StudentService extends BaseService
{
    public function __construct(protected StudentRepository $repo)
    {
        $this->repository = $repo;
    }

    public function getAll()
    {
        return $this->repository->all();
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($id, $data);
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }
}
