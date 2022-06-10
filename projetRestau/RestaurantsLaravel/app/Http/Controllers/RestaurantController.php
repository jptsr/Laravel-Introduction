<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRestaurantRequest;
use App\Models\Restaurant;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restaurants.index', ['restaurants' => Restaurant::orderBy('name', 'asc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'address' => 'required',
            'zipCode' => 'required',
            'town' => 'required',
            'country' => 'required',
            'description' => 'required',
            'review' => 'required|min:0|max:5'
        ]);

        Restaurant::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'zipCode' => $request->input('zipCode'),
            'town' => $request->input('town'),
            'country' => $request->input('country'),
            'description' => $request->input('description'),
            'review' => $request->input('review')
        ]);

        return view('restaurants.index', ['restaurants' => Restaurant::orderBy('id', 'desc')->get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurants.show', compact('restaurant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        return view('restaurants.edit', ['restaurant' => $restaurant]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRestaurantRequest $request)
    {
        $validated = $request->validated();
        $validated = $request->safe()->all();
        Restaurant::create($validated);
 
        // $errors = $validator->errors();
        // echo $errors->first('name');

        return view('restaurants.index', ['restaurants' => Restaurant::orderBy('id', 'desc')->get()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
