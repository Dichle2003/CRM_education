<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Http\Requests\StoreBranchRequest;
use App\Http\Requests\UpdateBranchRequest;
use App\Repositories\BranchRepository;
use app\Services\BranchService;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function __construct( protected BranchService $service ){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= $this->service->getAll();
        return response()->json([
            'message'=>'success',
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
    public function store(StoreBranchRequest $request)
    {
        $data= $this->service->create($request);
        return response()->json([
            'message'=>'success',
            'data'=>$data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch)
    {
        $data = $this->service->find($branch->id);
        return response()->json([
            'message'=>'success',
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        $data = $this->service->update($branch->id, $request);
        return response()->json([
            'message'=>'success',
            'data'=>$data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $data = $this->service->delete($branch->id);
        return response()->json([
            'message'=>'success',
            'data'=>$data
        ]);
    }
}
