<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(protected UserService $service)
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = $this->service->create($data);
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $data = $this->service->find($user->id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        if (isset($data['password']) && $data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $updated = $this->service->update($data, $user->id);
        return response()->json($updated);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $data = $this->service->delete($user->id);
        return response()->json($data);
    }
}
