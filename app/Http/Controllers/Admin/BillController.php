<?php 

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Customers;
use App\Categories;
use App\Billing;
use DB;

class BillController extends Controller
{
    public function index() 
    {
    	$data   = DB::table('tbl_billing')
    				->select('tbl_billing.id as billing_id', 'tbl_customers.email as user_email',
    						 'tbl_customers.fname', 'tbl_customers.lname', 'tbl_customers.id as user_id',
    						 'tbl_billing.status', 'tbl_billing.deleted', 'date_issued', 'due_date')
		            ->leftJoin('tbl_customers', 'tbl_customers.id', '=', 'tbl_billing.user_id')
		            ->orderBy('due_date', 'desc')
		            ->get();


    	return view('layouts.admin.bill',['data' => $data]);
    }

    public function form($id = 0)
    {

        if($id == 0)
        {
	       $users = Customers::all();
	       $categories = Categories::all();


    	   return view('layouts.admin.billing_form',['users' => $users,
    	   											 'categories' => $categories]);
            
        } 
        else 
        {
            $data  = Billing::find($id);

	        $users = Customers::all();            
            $categories = Categories::all();

            return view('layouts.admin.billing_form', ['data' => $data,
            										   'users' => $users,
            										   'categories' => $categories]);
        }
    }


    public function store(Request $request)
    {
        $bill = new Billing;

        $this->validate($request, [
            'category_id' 	=> 'required|max:255',
            'user_id' 		=> 'required|max:255',
            'address' 		=> 'required|max:255',
            'date_issued' 	=> 'required|max:255',
            'due_date' 		=> 'required|max:255',
            'prev_bal' 		=> 'required|max:255',
            'total_price' 	=> 'required|max:255',
            'usage_range' 	=> 'required|max:255',
            'subtotal' 		=> 'required|max:255',
            'tax' 			=> 'required|max:255',
            'paypal_price'  => 'required|max:255',
        ]);

        $bill->category_id  = $request->category_id;
        $bill->user_id  	= $request->user_id;
        $bill->address  	= $request->address;
        $bill->date_issued  = $request->date_issued;
        $bill->due_date  	= $request->due_date;
        $bill->prev_bal  	= $request->prev_bal;
        $bill->total_price  = $request->total_price;
        $bill->usage_range  = $request->usage_range;
        $bill->subtotal  	= $request->subtotal;
        $bill->tax  		= $request->tax;
        $bill->paypal_price = $request->paypal_price;

        $bill->save();
    }


    public function update(Request $request, $id)
    {
        $bill =  Billing::find($id);

        $this->validate($request, [
            'category_id' 	=> 'required|max:255',
            'user_id' 		=> 'required|max:255',
            'address' 		=> 'required|max:255',
            'date_issued' 	=> 'required|max:255',
            'due_date' 		=> 'required|max:255',
            'prev_bal' 		=> 'required|max:255',
            'total_price' 	=> 'required|max:255',
            'usage_range' 	=> 'required|max:255',
            'subtotal' 		=> 'required|max:255',
            'tax' 			=> 'required|max:255',
            'paypal_price'  => 'required|max:255',
        ]);

        $bill->category_id  = $request->category_id;
        $bill->user_id  	= $request->user_id;
        $bill->address  	= $request->address;
        $bill->date_issued  = $request->date_issued;
        $bill->due_date  	= $request->due_date;
        $bill->prev_bal  	= $request->prev_bal;
        $bill->total_price  = $request->total_price;
        $bill->usage_range  = $request->usage_range;
        $bill->subtotal  	= $request->subtotal;
        $bill->tax  		= $request->tax;
        $bill->paypal_price = $request->paypal_price;

        $bill->save();
    }


    public function getAddress($id) 
    {
       $user = Customers::find($id);

       return $user->address;
    }
}

?>