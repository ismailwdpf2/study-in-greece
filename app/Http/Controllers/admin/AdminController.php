<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use App\Models\Logo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.template');
    }

    //===========Logo===========
    public function alllogo()
    {
        $logo = Logo::latest()->get();
        return view('admin.logo.all_logo', compact('logo'));
    }

    public function addlogo()
    {
        return view('admin.logo.create');
    }
    public function storelogo(Request $request, Logo $logo)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ], [
            'logo.required' => 'Please upload a logo image.',
            'logo.image' => 'The file must be an image.',
            'logo.mimes' => 'Only JPEG, PNG, JPG, GIF, and SVG formats are allowed.',
        ]);
        $requestData = $request->except('logo');
        $uploadedLogo = $request->file('logo');

        if ($uploadedLogo) {
            $imageName = time() . '.' . $uploadedLogo->getClientOriginalExtension();
            $uploadedLogo->move(public_path('storage'), $imageName);
            $requestData['logo'] = $imageName;
        }
        $logo->create($requestData);

        return redirect('alllogo')->with('message', 'Logo added successfully');
    }
    public function deletelogo($id)
    {

        Logo::findOrFail($id)->delete();

        return redirect()->route('alllogo')->with('message', 'Logo Deleted successfully');
    }
    //==========degrees======
    // public function alldegree(){
    //     $degree = Degree::latest()->get();
    //         return view('admin.degree.degree', compact('degree'));
    // }
    // public function adddegree(){
    //     return view('admin.degree.create');
    // }
    // public function storedegree(Request $request)
    // {
    //     $item = $request->all();
    //     Degree::create($item);
    //     return redirect()->route('alldegree')->with('success', "Successfully added");
    // }

}
