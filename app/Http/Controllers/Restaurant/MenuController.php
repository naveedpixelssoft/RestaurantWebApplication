<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['menu'] = Menu::get();
        return view('restaurant.menu.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['category'] = Category::get();

        return view('restaurant.menu.create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        //Validate
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
        ]);
        //Image Upload
        if($request->file('image')) {
            $image = $request->file('image');
            $imagefileext = $image->getClientOriginalExtension();
            $imagefile = time() . rand(1000, 14000000000) . '.' . $imagefileext;
            $image->move(public_path('/images/menu/'), $imagefile);
        }else{
            $imagefile = null;
        }
        //Inserting  Upload
        $data = $request->all();
        $data['image'] = $imagefile;
        $data['user_id'] = auth()->user()->id;
        Menu::create($data);
        return redirect('/restaurant/menu')->with('success','Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['category'] = Category::get();

        $data['menu'] = Menu::findorfail($id);
        return view('restaurant.menu.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Menu::findorfail($id);

        //Validate
        $this->validate($request, [
            'name' => 'required',
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
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
