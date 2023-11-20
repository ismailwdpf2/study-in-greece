<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use Illuminate\Http\Request;

class DegreeController extends Controller
{

    public function index()
    {
        $degree = Degree::all();
        return view('admin.degree.degree', compact('degree'));
    }

    public function create()
    {
        return view('admin.degree.create');
    }

    public function store(Request $request)
    {
      
        $degree = $request->all();
        Degree::create($degree);

        return redirect()->route('degree.index')->with('success', 'Successfully added');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(Degree $degree)
    {
        $degree->delete();
        return redirect()->route('degree.index')->with('danger', 'Student information deleted');
    }
}
