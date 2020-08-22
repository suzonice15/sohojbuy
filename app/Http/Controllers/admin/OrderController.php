<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use  Session;
use Image;
use AdminHelper;
use URL;
use Illuminate\Support\Facades\Redirect;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id=AdminHelper::Admin_user_autherntication();
        $url=  URL::current();

        if($user_id < 1){
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect',$url)->send();

        }

        $data['main'] = 'Orders';
        $data['active'] = 'All Orders';
        $data['title'] = '  ';
        $orders= DB::table('order_data')->orderBy('order_id', 'desc')->paginate(10);
        return view('admin.order.index', compact('orders'),$data);
    }
    public  function  pagination(Request $request){
        if($request->ajax())
        {

            $query = $request->get('query');
            $query = str_replace(" ", "%", $query);
            $orders = DB::table('order_data')->where('order_id','LIKE','%'.$query.'%')
                ->orWhere('customer_phone','LIKE','%'.$query.'%')->orderBy('order_id', 'desc')
                ->paginate(10);
            return view('admin.order.pagination', compact('orders'));
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id=AdminHelper::Admin_user_autherntication();
        $url=  URL::current();

        if($user_id < 1){
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect',$url)->send();

        }

        $data['main'] = 'Orders';
        $data['active'] = 'All orders';
        $data['title'] = '  ';
        $data['order']=DB::table('order_data')->where('order_id',268)->first();


        $data['couriers']=DB::table('courier')->get();
        $data['products']=DB::table('product')->select('product_id', 'product_title','sku')->orderby('product_id','desc')->get();


        return view('admin.order.create', $data);

    }
    public function store(Request $request)
    {
        $data['order_status'] = $request->order_status;
        $order_status = $request->order_status;
        $data['shipping_charge'] = $request->shipping_charge;
        $data['created_time'] = date("Y-m-d H:i:s");
        $data['created_by'] =  Session::get('name') ;
        $data['modified_time'] = date("Y-m-d H:i:s");
        $data['order_date'] = date("Y-m-d");
        $data['order_total'] =$request->order_total;
        $data['products'] = serialize($request->products);
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_address'] = $request->customer_address;
        $data['courier_service'] = $request->courier_service;
        $data['staff_id'] =  Session::get('id');
        //$data['delevery_address'] = $request->delevery;
          $data['shipping_charge'] = $request->shipping_charge;
          $data['discount_price'] = $request->discount_price;
          $data['advabced_price'] = $request->advabced_price;
        $data['order_note'] = $request->order_note;
        //   $data['payment_type'] = $request->payment_type;
        // $data['city'] = $request->city');
        //$row_data['order_remark'] = $request->order_remark');




        if ($order_status == 'delivered') {

        }


        // $customer_name = $data['customer_name'];
        // $customer_email = $data['customer_email'];
        // $site_title = get_option('site_title');
        // $site_email = get_option('email');



        if($request->shipment_time) {

            $data['shipment_time'] = date('Y-m-d H:i:s', strtotime($request->shipment_time));
        }


        $order_data=DB::table('order_data')->insertGetId($data);

        echo $order_data;



        if ($order_data) {


            return  redirect('admin/orders')->with('success', 'Created successfully.');
        } else {

            return redirect('admin/orders/')->with('error', 'Error to Create this order');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id=AdminHelper::Admin_user_autherntication();
        $url=  URL::current();

        if($user_id < 1){
            //  return redirect('admin');
            Redirect::to('admin')->with('redirect',$url)->send();

        }


        $data['main'] = 'Orders';
        $data['active'] = 'Update Orders';
        $data['title'] = 'Update Orders Data';
        $data['order']=DB::table('order_data')->where('order_id',$id)->first();


        $data['couriers']=DB::table('courier')->get();
        $data['products']=DB::table('product')->select('product_id', 'product_title','sku')->orderby('product_id','desc')->get();



        return view('admin.order.edit', $data);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $order_number = $id;
        $data['order_status'] = $request->order_status;

        $order_status = $request->order_status;
        $data['shipping_charge'] = $request->shipping_charge;
        $data['discount_price'] = $request->discount_price;
        $data['advabced_price'] = $request->advabced_price;
        $data['modified_time'] = date("Y-m-d H:i:s");
        $data['order_total'] =$request->order_total;
        $data['products'] = serialize($request->products);
        $data['customer_name'] = $request->customer_name;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_email'] = $request->customer_email;
        $data['customer_address'] = $request->customer_address;
        $data['courier_service'] = $request->courier_service;

        $data['order_note'] = $request->order_note;
        //   $data['payment_type'] = $request->payment_type;
        // $data['city'] = $request->city');
        //$row_data['order_remark'] = $request->order_remark');







        // $customer_name = $data['customer_name'];
        // $customer_email = $data['customer_email'];
        // $site_title = get_option('site_title');
        // $site_email = get_option('email');



        if($request->shipment_time) {

            $data['shipment_time'] = date('Y-m-d H:i:s', strtotime($request->shipment_time));
        }



        $order_data=DB::table('order_data')->where('order_id',$order_number)->update($data);


        /// Commision calcution
        if ($order_status == 'completed') {


            $this->commisionDistribution($order_number);

        }


        if ($order_data) {

            return  redirect('admin/orders')
                ->with('success', 'Updated successfully.');
        } else {

            return redirect('admin/order/'.$order_number)
                ->with('success', 'Error to update this order');
        }


    }

    function commisionDistribution($order_id)
    {

        $order_details = DB::table('order_data')->where('order_id', $order_id)->first();
        if($order_details->user_id > 0) {


            if (!empty($order_details)) {

                $order_id = $order_details->order_id;
                $baseID = $order_details->user_id; // order korse je tar userid
                $order_items = unserialize($order_details->products);
                if (is_array($order_items['items'])) {
                    $single_product_profit = 0;
                    $single_product_point = 0;
                    foreach ($order_items['items'] as $product_id => $item) {

                        $single_product = DB::table('product')->select('product_profite', 'product_point')->where('product_id', $product_id)->first();
                        //print_r($single_product);
                        $single_product_profit += $single_product->product_profite * $item['qty'];
                        $single_product_point += $single_product->product_point * $item['qty'];

                    }


                    // money for son

                    $commistion = DB::table('affilite_commission_lavel')->where('user_id', $baseID)->orderBy('commision_lavel_id','desc')->first();
                    if(empty($commistion)){
                        $comission_3 = 10;

                    } else {

                        $comission_3 = $commistion->commision;
                    }



                    $pointvalue = 0;
//                        comission_3=son
//                        comission_3=father
//                        comission_3=Grand fater

                    //$comission_5 = $this->Public_model->getValueStore('commission_level_5');
                    //  $comission_4 = $this->Public_model->getValueStore('commission_level_4');

//                $comission_2 = $this->Public_model->getValueStore('commission_level_2');
//                $comission_1 = $this->Public_model->getValueStore('commission_level_1');


                    $comission_price_3 = (($single_product_profit * $comission_3) / 100);


                    $son = DB::table('users_public')->where('id', $baseID)->first();
                    if ($son) {
                        $base_name = $son->name;
                        $data_principalblance_3['earning_balance'] = $son->earning_balance + $comission_price_3;
                        $data_principalblance_3['shopping_point'] = $son->shopping_point + $single_product_point;

                        $father_id = $son->parent_id; // got parent id for base user.

                        if ($father_id) {
                            $comission_price_2 = ($comission_price_3 * 10) / 100;
                            $father = DB::table('users_public')->where('id', $father_id)->first();
                            $earning_history_2['earner_name'] = $father->name;
                            $data_principalblance_2['earning_balance'] = $father->earning_balance + $comission_price_2;
                            // $data_principalblance_2['shopping_point']= $father->shopping_point+50;
                            $grand_father_id = $father->parent_id; // got parent id for base user.
                        }

//                if($grand_father_id){
//                    $comission_price_1=($comission_price_2*1)/100;
//                    $grand_father=  DB::table('users_public')->where('id',$grand_father_id)->first();
//                    $earning_history_1['earner_name'] = $grand_father->name;
//                    $data_principalblance_1['earning_balance']= $grand_father->earning_balance+$comission_price_1;
//                    $data_principalblance_1['points_balance']= $grand_father->points_balance+50;
//                  //  $grand_father_id = $father->parent_id; // got parent id for base user.
//                }


                    }


                    if (!empty($baseID)) {

                        DB::table('users_public')->where('id', $baseID)->update($data_principalblance_3);

                    }
                    if (!empty($father_id)) {

                        DB::table('users_public')->where('id', $father_id)->update($data_principalblance_2);

                    }
//                if (!empty($grand_father)) {
//
//                    DB::table('users_public')->where('id',$grand_father_id)->update($data_principalblance_1);
//
//                }


                    //all insert query start from here.
                    if (!empty($baseID)) {
                        $earning_history_3['order_id'] = $order_id;
                        $earning_history_3['earner_name'] = $base_name;
                        $earning_history_3['earner_id'] = $baseID;
                        $earning_history_3['commision'] = $comission_price_3;
                        $earning_history_3['earning_for_id'] = $baseID;
                        DB::table('earning_history')->insert($earning_history_3);

                    }
                    if (!empty($father_id)) {
                        $earning_history_2['order_id'] = $order_id;
                        $earning_history_2['earner_name'] = $base_name;
                        $earning_history_2['earner_id'] = $baseID;
                        $earning_history_2['commision'] = $comission_price_2;
                        $earning_history_2['earning_for_id'] = $father_id;
                        DB::table('earning_history')->insert($earning_history_2);

                    }
//                if (!empty($grand_father_id)) {
//                    $earning_history_1['order_id']=$order_id;
//                    $earning_history_1['earner_name']=$base_name;
//                    $earning_history_1['earner_id']=$baseID;
//                    $earning_history_1['commision']=$comission_price_1;
//                    $earning_history_1['earning_for_id']=$grand_father_id;
//                    DB::table('earning_history')->insert($earning_history_1);
//
//                }


                }


            }


        }
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function invoicePrint($id){

        $data['order']=DB::table('order_data')->where('order_id',$id)->first();


        return view('admin.order.invoice_view', $data);
    }
    public function destroy($id)
    {
        //
    }
}
