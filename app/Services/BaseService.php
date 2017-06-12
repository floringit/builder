<?php

namespace App\Services;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BaseService
{
    /**
     * Model Class for service
     * @var string
     */
    protected $model;

    /**
     * Path used in getAll method
     * @var string
     */
    protected $path;

    /**
     * @var array
     */
    protected $rules;

    /**
     * Should check authorization
     * @var boolean
     */
    protected $checkAuth = true;

    /**
     * Variable for pagination - how many per page
     * @var int
     */
    protected $perPage = 15;

    /**
     * Check authorization for $action
     * @param $this->model $object instance
     * @param string $action Action name
     */
    protected function checkAuthorization($object, $action) {}

    protected function beforeDelete($object) {}
    protected function afterDelete($object) {}

    protected function beforeCreate($object) {}
    protected function afterCreate($object) {}

    protected function beforeUpdate($object) {}
    protected function afterUpdate($object) {}

    /**
     * @param $this->model $object
     * @return $this->model
     */
    protected function fillExtra($object)
    {
        return $object;
    }

    protected function authorizeAction($object, $action)
    {
        if ($this->checkAuth)
        {
            $this->checkAuthorization($object, 'delete');
        }
    }

    /**
     * @param int $perPage
     * @return mixed
     */
    public function getAll($perPage = 10)
    {
        if ($perPage < 1)
        {
            $perPage = $this->perPage;
        }

        $data = $this->model::paginate($perPage);
        $data->withPath($this->path . "?per_page={$perPage}");
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($column, $value, $with = null)
    {
        if (empty($with))
        {
            return $this->model::where($column, $value)->firstOrFail();
        }
        else
        {
            return $this->model::where($column, $value)->with($with)->firstOrFail();
        }
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        $object = $this->model::findOrFail($id);
        $this->authorizeAction($object, 'delete');

        $this->beforeDelete($object);

        $object->delete();

        $this->afterDelete($object);

        return $object;
    }

    /**
     * @param $task
     * @param null $taskId
     * @return mixed
     */
    public function validator($object, $id = null)
    {
        return Validator::make($object, $this->rules);
    }

    /**
     * Create or update an object
     *
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function store($data, $id = null)
    {
        if ( ! is_null($id))
        {
            $this->model::findOrFail($id);
        }

        DB::beginTransaction();

        $object = $this->createUpdate($data, $id);

        if (empty($object->id)) {
            /**
             * Rollback transaction
             */
            DB::rollBack();

            throw new Exception($this->customMessages['createEditFail'], 500);
        }

        /**
         * Commit the transaction
         */
        DB::commit();

        return $object;
    }

    /**
     * Method to create or updated a database entry
     *
     * @param array $data a request object
     * @param int $id positive integer
     * @return $this->model object
     */
    private function createUpdate($data, $id)
    {
        if (is_null($id)) {
            $object = new $this->model();
        } else {
            $object = $this->model::where('id', $id)->firstOrFail();
        }

        $object->fill($data);
        $object = $this->fillExtra($object);
        $this->authorizeAction($object, is_null($id) ? 'create' : 'update');

        if (is_null($id)) {
            $this->beforeCreate($object);
        } else {
            $this->beforeUpdate($object);
        }

        $object->save();

        if (is_null($id)) {
            $this->afterCreate($object);
        } else {
            $this->beforeCreate($object);
        }

        return $object;
    }
}
