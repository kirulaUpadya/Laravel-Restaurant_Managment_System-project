<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Food;

class AdminController extends Controller
{
    public function add_food()
    {
        return view('admin.add_food');
    }

    public function upload_food(Request $request)
    {
        $data = new Food();
        $data->title = $request->title;

        $data->detail = $request->details;

        $data->price = $request->price;

        $image = $request->img;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->img->move('food_img', $imagename);
        $data->image = $imagename;

        $data->save();

        return redirect()->back();
    }

    public function view_food()
    {
        $data = Food::all();
        return view('admin.show_food', compact('data'));
    }

    public function delete_food($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }
}
