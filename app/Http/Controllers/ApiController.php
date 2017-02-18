<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Registration;
use App\Transactions;
use App\Billing;
use Validator;
use DB;


class ApiController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $reg = new Registration;

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:tbl_customers',
            'img'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pword' => 'required|max:255|min:7',
            'address' => 'required|max:255',
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'uname' => 'required|max:255|unique:tbl_customers|min:7',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors();
            return $message;
        }


        if( $request->hasFile('img'))
        { 
            $file = $request->file('img'); 
            $unique_code = strtotime(date('Ymd His'));

            $dir = 'users';

            $upload_file = $dir."_".$unique_code.'-img'.".".$file->getClientOriginalExtension();

            $file->move('./uploads/'.$dir.'/',$upload_file);
            $reg->img   = $upload_file;
        }
        
        $reg->fname  = $request->input('fname');
        $reg->lname  = $request->input('lname');
        $reg->email  = $request->input('email');
        $reg->address  = $request->input('address');
        $reg->uname  = $request->input('uname');
        $reg->pword  = bcrypt($request->input('pword'));


        $reg->save();

        if(!$reg) 
        {
            return json_encode([
                'status' => 'failed',
            ]);
        } else {
            return json_encode([
                'status' => 'success',
                'message' => 'Registration Success',
            ]);
        }
    }

    public function userUpdate(Request $request, $id)
    {

        $reg = Registration::find($id);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|unique:tbl_customers',
            'img'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fname' => 'required|max:255',
            'address' => 'required|max:255',
            'lname' => 'required|max:255',
        ]);

        if( $request->hasFile('img'))
        { 
            $file = $request->file('img'); 
            $unique_code = strtotime(date('Ymd His'));

            $dir = 'users';

            $upload_file = $dir."_".$unique_code.'-img'.".".$file->getClientOriginalExtension();

            $file->move('./uploads/'.$dir.'/',$upload_file);
            $reg->img   = $upload_file;
        }


        $reg->fname  = $request->input('fname');
        $reg->lname  = $request->input('lname');
        $reg->email  = $request->input('email');
        $reg->address  = $request->input('address');


        $reg->save();

        if(!$reg) 
        {
            return json_encode([
                'status' => 'failed',
            ]);
        } else {
            return json_encode([
                'status' => 'success',
                'message' => 'User Profile Updated',
            ]);
        }
    }


    public function getTransactions($uid)
    {
        $trans = Transactions::where('user_id', $uid)->get();
        if($trans) 
        {
            return json_encode($trans);
        } else {
            return json_encode(['message' => 'No Records Found']);
        }
    }

    public function insertTransaction(Request $request, $id)
    {
        $trans = new Transactions;

        $trans->first_name     = $request->input('first_name');
        $trans->last_name      = $request->input('last_name');
        $trans->payer_email    = $request->input('payer_email');
        $trans->transaction_id = $request->input('transaction_id');
        $trans->address_street = $request->input('address_street');
        $trans->product        = $request->input('product');
    }


    public function getBills($id)
    {
        $bill = Billing::where('user_id', $id)->get();

        $bill = DB::table('tbl_billing')
            ->join('tbl_category', 'tbl_category.id', '=', 'tbl_billing.category_id')
            ->join('tbl_customers', 'tbl_customers.id', '=', 'tbl_billing.user_id')
            ->select('tbl_billing.*', 'tbl_category.title as category_name', 'tbl_customers.fname', 'tbl_customers.lname')
            ->get();

        if($bill) 
        {
            return json_encode($bill);
        } else {
            return json_encode(['message' => 'No Records Found']);
        }

    } 




    public function login(Request $request)
    {

        $messages  = [
        'uname.required'     => 'Username field is Required',
        'pword.required'     => 'Password field is Required',
            ];

        $validator = Validator::make($request->all(), [
            'uname' => 'required',
            'pword' => 'required',
        ], $messages);

        if ($validator->fails()) {

            $message = $validator->errors();
            return $message;
        }

        $data = Registration::where([
            'uname'     => $request->uname,
        ])->first();


        if(empty($data) || !password_verify($request->pword, $data->pword)){

            return json_encode([
                'status' => 'Username/Password is Incorrect',
            ]);
        }

        return json_encode([
            'status' => 'success',
            'user' => $data
        ]);
    }

}
