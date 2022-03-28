<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\donorRequest;
use App\Models\Position;
use App\Models\donors;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donors = donors::all()->last()->paginate(8);;
        return view('admin.donors', compact('donors'));
    }

    /**
     *->last()->paginate(8);
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.add_donor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(donorRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('image')) {
            $image = time().$file->getClientOriginalExtension();
            $file->move('backend/assets/img/ourclients', $image);
            $input['image'] = $image;
        }


        donors::create($input);
        return redirect('donor')->with('message', 'Donor added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donor = donors::findOrFail($id);
        return view('admin.donors', compact('donor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor = donors::findOrFail($id);
        return view('admin.donor_edit', compact('donor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_donor(donorRequest $request, $id)
    {
        $input = $request->all();

        if ($file = $request->file('image')) {
            $image = time() . $file->getClientOriginalName();
            $file->move('backend/assets/img/ourclients/', $image);
            $input['image'] = $image;
        }
       

        $donor = donors::findOrFail($id);
        $donor->update($input);
        return redirect()->back()->with('message', 'Donor Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $donor=donors::findOrFail($id)->delete();
    return redirect()->back()->with('message', 'Donor deleted successfully');
    }
}
