<?php

namespace App\Http\Controllers;

use App\Models\Students;
use App\Http\Requests\StorestudentsRequest;
use App\Http\Requests\UpdatestudentsRequest;
use App\Services\StudentService;

class StudentsController extends Controller
{
    public function __construct( protected StudentService $service)
    {
        
    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestudentsRequest $request)
    {
        $data = $request->validated();
        $student = $this->service->create($data);
        return response()->json($student, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Students $student)
    {
        $data = $this->service->find($student->id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestudentsRequest $request, Students $student)
    {
        $data = $request->validated();
        $updated = $this->service->update($data, $student->id);
        return response()->json($updated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Students $student)
    {
        $this->service->delete($student->id);
        return response()->json(null, 204);
    }
}
