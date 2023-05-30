<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wetness;
use App\Http\Resources\WetnessResource;

class WetnessController extends Controller
{
    public $data;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wetness=Wetness::orderBy('id', 'DESC')->get();
        return WetnessResource::collection($wetness);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'lat' => 'required',
            'lon' => 'required',
            'wetness' => 'required'
        ]);

        $humidity = Wetness::create($request->all());

        return WetnessResource::make($humidity);
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
