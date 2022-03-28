<?php

namespace App\Http\Controllers;

use App\Http\Requests\projectRequest;
use App\Models\donors;
use App\Models\project_type;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
public function __construct()
{
    return $this->middleware(['auth','isAdmin']);
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = projects::all()->last()->paginate(8);
        return view('admin.projects', compact('projects'));
    }

    /**
     * ->last()->paginate(8)
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_types = project_type::all();
        return view('admin.add_project', compact('project_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(projectRequest $request)
    {
        $input = $request->all();

        if ($file = $request->file('image')) {
            $image = $file->getClientOriginalName();
            $file->move('backend/assets/img/user', $image);
            $input['image'] = $image;
        }
        if ($file = $request->file('pdf')) {
            $pdf = $file->getClientOriginalName();
            $file->move('backend/assets/img/project', $pdf);
            $input['pdf'] = $pdf;
        }

        Projects::create($input);
        return redirect('project')->with('message', 'Project added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = projects::findOrFail($id);
        return view('admin.project', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = projects::findOrFail($id);
        return view('admin.edit_project', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_project(Request $request, $id)
    {
        $update = projects::findOrFail($id)->update([
            'name' => $request->name,
            'image' => $request->image,
            'pdf' => $request->pdf,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,

        ]);
        return Redirect('project');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=projects::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Project deleted successfully');
    }
}
