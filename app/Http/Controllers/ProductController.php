<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
        $products = DB::table('products')
            ->select('products.*', 'categories.names as category_name', 'users.name as user_name')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->join('users', 'users.id', '=', 'products.user_id_seller')
            ->get();
        $categories = DB::table('categories')->get();
        $users = DB::table('users')->get();

        return view('frmproduct', compact('products', 'categories', 'users'));
    }


    public function product_save(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            //'txtproname' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size

        ]);
        $extension = $request->file('photo')->extension();
        $filename = date("YmdHis") . '.' . $extension;
        $request->file('photo')->move(public_path('photo/'), $filename);

        //Insert Categories
        $categories = DB::table('products')->insert([
            'names' => $request->txtproname,
            'category_id' => $request->txtcatname,
            'price' => $request->txtprice,
            'discount' => $request->txtdiscount,
            'detail' => $request->txtdetail,
            'photo' => $filename, // Save the filename to the database
            'day_warranty' => $request->txtday,
            'status' => $request->txttsatus,

            'user_id_seller' => $request->txtusername
        ]);

        return redirect()->back()->with('success', 'Save successful.');
    }


    public function product_update2(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            //'txtproname' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size

        ]);
        $extension = $request->file('photo')->extension();
        $filename = date("YmdHis") . '.' . $extension;
        $request->file('photo')->move(public_path('photo/'), $filename);

        //Insert Categories
        $products = DB::table('products')->update([
            'names' => $request->txtproname,
            'category_id' => $request->txtcatname,
            'price' => $request->txtprice,
            'discount' => $request->txtdiscount,
            'detail' => $request->txtdetail,
            'photo' => $filename, // Save the filename to the database
            'day_warranty' => $request->txtday,
            'status' => $request->txttsatus,

            'user_id_seller' => $request->txtusername
        ]);

        return redirect()->back()->with('success', 'Save successful.');
    }
    // update categories
    // public function product_update(Request $request)
    // {

    //     // Handle photo update
    //     // if ($request->hasFile('photo')) {
    //     //     $extension = $request->file('photo')->getClientOriginalExtension();
    //     //     $filename = time() . '.' . $extension;
    //     //     $request->file('photo')->move(public_path('photo/'), $filename);
    //     //     $updateData['photo'] = $filename;
    //     // }
    //     // Update categories based on conditions
    //     $categories = DB::table('products')
    //         ->where('id', $request->id) // Assuming 'id' is the primary key column
    //         ->update([
    //             'names' => $request->txtproname,
    //             'category_id' => $request->txtcatname,
    //             'price' => $request->txtprice,
    //             'discount' => $request->txtdiscount,
    //             'detail' => $request->txtdetail,
    //            // 'photo' => $request->filename, // Save the filename to the database
    //             'day_warranty' => $request->txtday,
    //             'status' => $request->txttsatus,
    //             'user_id_seller' => $request->txtusername


    //         ]);

    //     if ($categories > 0) {
    //         return redirect()->back()->with('success', 'Update Successful');
    //     } else {
    //         return redirect()->back()->with('error', 'No records were updated');
    //     }
    // }
    // update categories
    public function product_update(Request $request)
    {
        $products = DB::table('products')
            ->where('id', $request->id) // Assuming 'id' is the primary key column
            ->update([
                'names' => $request->txtproname,
                'category_id' => $request->txtcatname,
                'price' => $request->txtprice,
                'discount' => $request->txtdiscount,
                'detail' => $request->txtdetail,
                'day_warranty' => $request->txtday,
                'status' => $request->txttsatus,
                'user_id_seller' => $request->txtusername
            ]);

        if ($products > 0) {
            return redirect()->back()->with('success', 'Update Successful');
        } else {
            return redirect()->back()->with('error', 'No records were updated');
        }
    }
    // public function product_update1(Request $request)
    // {
    //     // Validate the incoming request
    //     $request->validate([
    //         'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
    //     ]);

    //     // Define the update data
    //     $updateData = [
    //         'names' => $request->txtproname,
    //         'category_id' => $request->txtcatname,
    //         'price' => $request->txtprice,
    //         'discount' => $request->txtdiscount,
    //         'detail' => $request->txtdetail,
    //         'photo' => $request->filename,
    //         'day_warranty' => $request->txtday,
    //         'status' => $request->txttsatus,
    //         'user_id_seller' => $request->txtusername,
    //     ];

    //     // Handle photo update
    //     if ($request->hasFile('photo')) {
    //         $extension = $request->file('photo')->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         $request->file('photo')->move(public_path('photo/'), $filename);
    //         $updateData['photo'] = $filename;
    //     }

    //     // Update the record in the database
    //     $affectedRows = DB::table('products')
    //         ->where('id', $request->id)
    //         ->update($updateData);

    //     if ($affectedRows > 0) {
    //         return redirect()->back()->with('success', 'Update Successful');
    //     } else {
    //         return redirect()->back()->with('error', 'No records were updated');
    //     }
    // }
}
