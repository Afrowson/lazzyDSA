<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateData;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($model, Request $request = null)
    {
    
        $model = $this->getModel($model);
    
        $data = $model::all();
    
        return $data;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($model)
    {
        $model = $this->getModel($model);
        // @Todo add View
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($model, UpdateData $request)
    {
        $model = $this->getModel($model);
        $fields = $model::$fields;
        $data = [];
        foreach ($fields as $field) {
            $data[$field['key']] = request()->{$field['key']};
        }
        $model = $model::create($data);
    
        return $model->id;
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($selected, $id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateData $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateData $request, $selected, $id)
    {
        $model = $this->getModel($selected);
        $fields = $model::$fields;
        $data = $model::find($id);
    
        foreach ($fields as $field) {
            $data->{$field['key']} = request()->{$field['key']};
        }
        $data->save();
    
        return $data;
    
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($model, $id)
    {
        $model = $this->getModel($model);
        $model::find($id)->delete();
    }
    
    
    public function getModel($model)
    {
        return $model = '\\App\\' . $model;
    }
    
    public function fields(Request $request)
    {
        $fields = [];
        $models = $request->except('_token');
        foreach ($models as $model) {
            $model = $this->getModel($model);
            array_push($fields, $model::$fields);
    
        }
    
        return $fields;
    
    }
}
