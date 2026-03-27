<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Http\Requests\StoreClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Services\ClassService;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function __construct(protected ClassService $service)
    {
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= $this->service->getAll();
        return response()->json([
            'message'=>'done',
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $data= $this->service->create($request);
        return response()->json([
            'message'=>'done',
            'data'=>$data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $classes)
    {
          $data= $this->service->find($classes->id);
        return response()->json([
            'message'=>'done',
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classes $classes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $classes)
    {
          $data= $this->service->update($request,$classes->id);
        return response()->json([
            'message'=>'done',
            'data'=>$data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classes $classes)
    {
          $data= $this->service->delete($classes->id);
        return response()->json([
            'message'=>'done',
            'data'=>$data
        ]);
    }
}
