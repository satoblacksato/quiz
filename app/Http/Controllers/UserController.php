<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\CreateRequest;
use App\Http\Requests\Users\UpdateRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        if(!auth()->user()->is_admin){
            return redirect(RouteServiceProvider::HOME);
        }
        return view('users.index')->with([
            'users'=>User::select('users.*')
                ->where('is_admin',0)
                ->with('city.state.country')
                ->leftJoin('cities', 'cities.id', '=', 'users.city_id')
                ->leftJoin('states', 'states.id', '=', 'cities.state_id')
                ->leftJoin('countries', 'countries.id', '=', 'states.country_id')
                ->filtersOrder()
                ->filtersFields()
                ->paginate(config('app.pagination'))
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!auth()->user()->is_admin){
            abort(403);
        }
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateRequest $request)
    {
        $user=new User($request->validated());
        $user->password=bcrypt($user->password);
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if($user->id!==auth()->id()){
            abort(403);
        }
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
       $user->name=$request->name;
       $user->phone=$request->phone;
       $user->birthdate=$request->birthdate;
       $user->city_id=$request->city_id;
       $user->save();
       return response()->json('OK');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
