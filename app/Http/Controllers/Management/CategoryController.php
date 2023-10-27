<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['category'] = Category::get();
        return view('management.categories.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('management.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
        ]);
        //Image Upload
        if($request->file('image')) {
            $image = $request->file('image');
            $imagefileext = $image->getClientOriginalExtension();
            $imagefile = time() . rand(1000, 14000000000) . '.' . $imagefileext;
            $image->move(public_path('/images/category'), $imagefile);
        }else{
            $imagefile = null;
        }
        //Inserting  Upload
        $data = $request->all();
        $data['image'] = $imagefile;
        Category::create($data);
        return redirect('/admin/category')->with('success','Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['category'] = Category::findorfail($id);
        return view('management.categories.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findorfail($id);

        //Validate
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
        ]);

        //Image Upload
        if($request->file('image')) {
            $image = $request->file('image');
            $imagefileext = $image->getClientOriginalExtension();
            $imagefile = time() . rand(1000, 14000000000) . '.' . $imagefileext;
            $image->move(public_path('/images/category'), $imagefile);
        }else{
            $imagefile = $category->image;
        }
        //Inserting  Upload
        $data = $request->all();
        $data['image'] = $imagefile;
        $category->update($data);
        return redirect()->back()->with('success','Category Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
