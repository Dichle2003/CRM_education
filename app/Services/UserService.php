<?php
namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\BaseService\BaseService;

class UserService extends BaseService
{
    public function __construct(protected UserRepository $repo)
    {
        $this->repository = $repo;
    }

    public function getData()
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
