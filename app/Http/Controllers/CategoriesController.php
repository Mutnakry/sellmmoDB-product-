<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = DB::table('categories')->orderByDesc('id')->paginate(5);;
        return view('frmcategory', compact('categories'));
    }
    //  save categories
    public function categories_save(Request $request)
    {
        //Insert Categories
        $categories = DB::table('categories')->insert([
            'names' => $request->txtname,
            'status' => $request->txtstatus
        ]);
        return redirect()->back()->with('success', 'save Successfull...');
    }

    // update categories
    public function categories_update(Request $request)
    {
        // Update categories based on conditions
        $categories = DB::table('categories')
            ->where('id', $request->id) // Assuming 'id' is the primary key column
            ->update([
                'names' => $request->txtname,
                'status' => $request->txtstatus
            ]);

        if ($categories > 0) {
            return redirect()->back()->with('success', 'Update Successful');
        } else {
            return redirect()->back()->with('error', 'No records were updated');
        }
    }

    // delete categories
    public function delete_category(Request $request)
    {
        // Delete category based on its ID
        $affectedRows = DB::table('categories')
            ->where('id', $request->id) // Assuming 'id' is the primary key column
            ->delete();

        if ($affectedRows > 0) {
            return redirect()->back()->with('success', 'Category deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to delete category');
        }
    }
}
