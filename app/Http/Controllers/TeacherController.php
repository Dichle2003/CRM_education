<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Services\TeacherService;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct(protected TeacherService $service){}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->getAll();
        return response()->json(
            [
                'message'=>' succes',
                'data'=>$data
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $data = $this->service->create($request);
        return response()->json(
            [
                'message'=>' succes',
                'data'=>$data
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
           $data = $this->service->find($teacher->id);
        return response()->json(
            [
                'message'=>' succes',
                'data'=>$data
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
         $data = $this->service->update($teacher->id,$request);
        return response()->json(
            [
                'message'=>' succes',
                'data'=>$data
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
         $data = $this->service->delete($teacher->id);
        return response()->json(
            [
                'message'=>' succes',
                'data'=>$data
            ]
        );
    }
}
