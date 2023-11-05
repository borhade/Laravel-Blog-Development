<?php
namespace App\Repositories;
abstract class BaseRepository{
    abstract public function create(array $attributes);
    abstract public function update(array $attributes);
    abstract public function delete($id);
}
?>