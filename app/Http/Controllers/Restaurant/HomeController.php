<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\RestaurantDetail;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order = [];
        return view('restaurant/home/index',compact('order'));

    }

    public function ProfileSetting()
    {
$data['user']= User::findorfail(auth()->user()->id);

        return view('restaurant.profile.show',$data);
    }


    public function ProfileSettingUpdate(Request $request)
    {
        $restaurant =   User::findorfail(auth()->user()->id)->update(['name'=>$request->name]);

        $data = $request->all();
      $restaurant =   RestaurantDetail::where('user_id',auth()->user()->id)->first();


        if($request->file('image')) {
            $image = $request->file('image');
            $imagefileext = $image->getClientOriginalExtension();
            $imagefile = time() . rand(1000, 14000000000) . '.' . $imagefileext;
            $image->move(public_path('/images/profile'), $imagefile);
        }else{
            $imagefile = $restaurant->image;
        }

        $data['image'] = $imagefile;
        $restaurant->update($data);
        return redirect()->back()->with('success','Profile Updated successfully');
    }
}
