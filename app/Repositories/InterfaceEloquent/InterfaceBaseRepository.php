<?php

namespace App\Repositories\InterfaceEloquent;

use Illuminate\Database\Eloquent\Model;

interface InterfaceBaseRepository
{

    public function all($pageSize);

    public function find($id): ?Model;

    public function create(array $attributes): Model;

    public function update(array $attributes, $id): ?Model;

    public function delete($id);
}
