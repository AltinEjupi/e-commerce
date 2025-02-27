<?php

namespace App\Repositories;

use App\Repositories\InterfaceEloquent\InterfaceBaseRepository;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements InterfaceBaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all($pageSize = 0)
    {
        if ($pageSize) {
            return $this->model->orderBy('id', 'desc')->paginate($pageSize);
        } else {
            return $this->model->orderBy('id', 'desc')->get();
        }
    }

    public function find($id): ?Model
    {
        return $this->model->where('id', $id)->first();
    }

    public function create(array $atrributes): Model
    {
        return $this->model->create($atrributes);
    }

    public function update(array $atrributes, $id): ?Model
    {
        $model = $this->model->find($id);
        if ($model) {
            $model->fill($atrributes);
            $model->update();
        }
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->find($id);
        if ($model) {
            return $model->delete();
        }
        return false;
    }
}
