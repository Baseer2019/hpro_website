<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use App\Http\Requests\positionRequest;

class positionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = position::all();
        return view('admin.position', compact('positions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('admin.add_position');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(positionRequest $request)
    {
        $input = $request->all();
        position::create($input);
        return redirect('positions')->with('message', 'Position added successfuly');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $positions = position::findOrFail($id);
        return view('admin.position', compact('positions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $positions = position::findOrFail($id);
        return view('admin.position_edit', compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_positions(positionRequest $request, $id)
    {
        $input = $request->all();
        $positions = position::findOrFail($id);
        $positions->update($input);
        return redirect()->back('positions')->with('message', 'Position  Updated successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $positions=position::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Position deleted successfully');
    }
}
