<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Categories;

class CategoryController extends Controller
{
    public function index() {
    	$data     = Categories::all();
    	return view('layouts.admin.category',['data'	=> $data]);
    }


    public function form($id = 0)
    {

        if($id == 0)
        {
    	   return view('layouts.admin.category_form');
            
        } 
        else 
        {
            $data  = Categories::find($id);

            return view('layouts.admin.category_form', ['data' => $data]);
        }
    }

    public function store(Request $request) 
    {

        $category = new Categories;

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:tbl_category',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return $message;
        }
        
        $category->title  = $request->title;

        $category->save();
    }


    public function update(Request $request, $id) {

		$category  = Categories::find($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255|unique:tbl_category',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return $message;
        }
        
        $category->title  = $request->title;

        $category->save();
    }
}

?>