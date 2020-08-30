<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  Cart;
use Session;
use AdminHelper;
use URL;
use File;
use Image;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function __construct()
    {

    }
    public function index()
    {
        $user_id = AdminHelper::Admin_user_autherntication();
        $url = URL::current();

        if ($user_id < 1) {
            //  return redirect('admin');
            Redirect::to('vendor/login')->with('redirect', $url)->send();

        }


        $data['main'] = 'Vendors';
        $data['active'] = 'All Products';
        $data['title'] = '  ';
        $products = DB::table('product')->where('vendor_id',Session::get('id'))->orderBy('product_id', 'desc')->paginate(10);

        return view('website.vendor.product_list', compact('products'), $data);
    }

    public function pagination(Request $request)
    {
        if ($request->ajax()) {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $products = DB::table('product')->where('vendor_id',Session::get('id'))->where('sku', 'LIKE', '%' . $query . '%')

                ->orderBy('product_id', 'desc')->paginate(10);
            return view('admin.product.pagination', compact('products'));
        }

    }


    public function sign_up_form()
    {

        $data['seo_title']=get_option('home_seo_title');
        $data['seo_keywords']=get_option('home_seo_keywords');
        $data['seo_description']=get_option('home_seo_content');

         return view('website.customer.sign_up_form',$data);
    }

    public  function login(){
        $data['seo_title']=get_option('home_seo_title');
        $data['seo_keywords']=get_option('home_seo_keywords');
        $data['seo_description']=get_option('home_seo_content');

        return view('website.customer.login_form',$data);
    }
    public function login_check(Request $request)
    {
        $email = $request->email;
        $data['seo_title']=get_option('home_seo_title');
        $data['seo_keywords']=get_option('home_seo_keywords');
        $data['seo_description']=get_option('home_seo_content');

        $password = md5($request->password);
        $result = DB::table('users')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            $id = $result->id;
            $email = $result->email;

            $name = $result->name;

            Session::put('customer_id', $id);
            Session::put('name', $result->name);
            Session::put('phone', $result->phone);
            Session::put('email', $result->email);
            Session::put('address', $result->address);

                return redirect('/');


        } else {
            $data['error']="Your Email Or Password Invalid Try Again";
            return view('website.customer.login_form', $data);
        }

    }


    public function store(Request $request){
        $request->validate([

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
            'address' => 'required',


        ], [

            'name.required' => 'Full Name is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'password.required' => 'Password is required',
            'address.required' => 'Address is required',


        ]);


        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = md5($request->password);
        $data['address'] = $request->address;





        $customer_email=  DB::table('users')->where('email',$request->email)->first();
        $customer_phone=  DB::table('users')->where('phone',$request->phone)->first();
        if($customer_email){
            return redirect('customer/form')
                ->with('error', 'This email all ready registered');
        }
        if($customer_phone){
            return redirect('customer/form')
                ->with('error', 'This Phone number  all ready registered');
        }





        $result = DB::table('users')->insertGetId($data);
        if ($result) {

            Session::put('customer_id', $result);
            Session::put('name', $request->name);
            Session::put('phone', $request->phone);
            Session::put('email', $request->email);
            Session::put('address', $request->address);
            return redirect('/')
                ->with('success', 'created successfully wait for admin approved');
        } else {
            return redirect('vendor/form')
                ->with('error', 'No successfully.');
        }
    }



    public function dashboard(){

        $data['user']=DB::table('users')->where('id',Session::get('customer_id'))->first();
        if($data['user']){
            return view('website.customer.profile',$data);

        } else {
         return  redirect('/customer/login');
        }


    }

    public function orders(){

        $data['orders']=DB::table('order_data')->where('customer_id',Session::get('customer_id'))->get();

            return view('website.customer.orders',$data);




    }

    public function points(){

        $data['points']=DB::table('user_point_history')->where('user_id',Session::get('customer_id'))->orderBy('user_point_history_id','desc')->get();

        return view('website.customer.points',$data);




    }



    public function profile_update(Request $request){
       $data['name']= $request->name;
       $data['email']= $request->email;
       $data['phone']= $request->phone;
       $data['address']= $request->address;

        $image = $request->file('user_picture');
        if ($image) {

            $image_name ="user". time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/uploads/users');

            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(200, 200, function ($constraint) {

            })->save($destinationPath . '/' . $image_name);


            $data['picture'] = $image_name;
        }


        $result = DB::table('users')->where('id',Session::get('customer_id'))->update($data);
        return redirect('customer/dasboard');
    }




    public function logout()
    {
        Session::put('customer_id', '');
        $url = URL::current();
        return redirect('/customer/login')->with('success', 'You are successfully Logout !')->with('current', $url);;
    }

}
