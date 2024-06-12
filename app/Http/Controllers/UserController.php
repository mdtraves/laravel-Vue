<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all()->map(fn($user) => [
        //     'name' => $user->name,
        //     'email' => $user->email,
        //     'password' => $user->password,
        //     'created' => $user->created_at,
        // ]);

        
           
      

        $time = date('d/m/Y H:i');

        return Inertia::render('Users', [

            'users' => User::query()
            ->when(Request::input('filter'), function( $query, $filter){
                $query->where( 'name' , 'like', '%' . $filter . '%');
            })
            ->paginate(15)
            ->appends(Request::all()),
            'filters' => Request::only(['filter'])

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
