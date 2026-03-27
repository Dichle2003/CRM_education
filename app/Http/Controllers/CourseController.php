<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Services\CourseService;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function __construct(protected CourseService $service){}
   
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->getAll();
        return response()->json($data);
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
         $data = $this->service->getAll( $request);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
         $data = $this->service->find($course->id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Course $course,Request $request)
    {
         $data = $this->service->update($course->id ,$request);
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $data = $this->service->delete($course->id);
        return response()->json($data);
    }
}
