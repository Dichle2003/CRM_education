<?php
namespace App\Repositories\BaseRepo;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
abstract class BaseRepository implements InterfaceRepository{
      const PAGE_SIZE = 30;

    /**
     * @var App
     */
    private $app;


    /**
     * @var
     */
    protected $model;

    /**
     * AbstractRepository constructor.
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->model = $this->makeModel();
    }
    public function makeModel(){
        $model = $this->app->make($this->model());
        if (!$model instanceof Model) {
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        return $model;
    }
    public function all(){
        return $this->model->all();
    }
    public function find($id){
        return $this->model->find($id);
    }
    public function create(array $data){
        return $this->model->create($data);
    }
    public function update($id, array $data){
        $record = $this->find($id);
        if ($record) {
            $record->update($data);
            return $record;
        }
        return null;
    }
    public function delete($id){
        $record = $this->find($id);
        if ($record) {
            return $record->delete();
        }
        return false;
    }
    public function findBy($field, $value){
        return $this->model->where($field, $value)->first();
    }
}
