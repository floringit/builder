<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    protected $service;

    protected function beforeCreate(Request &$request) {}
    protected function beforeUpdate(Request &$request) {}
    protected function beforeDelete() {}

    protected function afterCreate($entity) {}
    protected function afterUpdate($entity) {}
    protected function afterDelete($entity) {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->api($this->service->getAll());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        $this->beforeCreate($request);

        // validate request data
        $validator = $this->service->validator($request->all());

        if ($validator->fails()) {
            DB::rollback();
            return response()->apiError(config('constants.ERROR_VALIDATION'), __('validation.error'), 422, $validator->errors());
        }

        $entity = $this->service->store($request->all());
        $this->afterCreate($entity);
        DB::commit();

        return response()->api($entity);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($column = 'id', $value)
    {
        return response()->api($this->service->get($column, $value));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->beforeUpdate($request);

        // validate request data
        $validator = $this->service->validator($request->all());

        if ($validator->fails()) {
            return response()->apiError(config('constants.ERROR_VALIDATION'), __('validation.error'), 422, $validator->errors());
        }

        $entity = $this->service->store($request->all(), $id);
        $this->afterUpdate($entity);

        return response()->api($entity);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->beforeDelete();
        $entity = $this->service->delete($id);
        $this->afterDelete($entity);

        return response()->api(['ok' => true]);
    }
}
