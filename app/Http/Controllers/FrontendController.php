<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meat;
use App\Counter;
use App\Order;
use App\Orderdetail;
use App\Http\Resources\OrderdetailResource;

class FrontendController extends Controller
{
    public function homepage(){

    	$meats=Meat::where('category_id',1)
        ->orderBy('id','desc')->get();

        $currys=Meat::where('category_id',4)
        ->orderBy('id','desc')->get();

        $vegetables=Meat::where('category_id',3)
        ->orderBy('id','desc')->get();

        $seafoods=Meat::where('category_id',2)
        ->orderBy('id','desc')->get();

    	return view('frontend.homepage',compact('meats','currys','seafoods','vegetables'));
    }
    public function meat(){

        $alldata=Meat::where('category_id',4)
        ->orderBy('id','desc')->get();
        return view('frontend.meat',compact('alldata'));
    }

    public function curry(){

        $alldata=Meat::where('category_id',4)
        ->orderBy('id','desc')->get();
        return view('frontend.curry',compact('alldata'));
    }

    public function getCounter(){
    	$counters=Counter::all();
    	return $counters;
    	//return response()->json($counters);
    }

    public function checkout(Request $request){
        // dd($request);
        $array=json_decode(request('data'));
        $total=request('total');
        $counter=request('counter');

        $order_date=date('Y:m:d h:i:m');
        // dd($order_date);

        $characters = '0123456789';
        $string = '';
         $max = strlen($characters) - 1;

         for ($i = 0; $i < 5; $i++){
              $string .= $characters[mt_rand(0, $max)];
         }
         $voucher_no='SKT-'.$string;
         // dd($voucher_no);

         $cno=Counter::where('name','=',$counter)->first();
        // dd($cno);

         $order=Order::create([
            'date'=>$order_date,
            'voucher_no'=>$voucher_no,
            'counter_id'=>$cno->id,
            'total'=>$total
         ]);

         foreach($array as $data){
            //echo $data->id;
            Orderdetail::create([
                'voucher_no'=>$voucher_no,
                'meat_id'=>$data->id,
                'qty'=>$data->qty
            ]);
         }
         $data=Orderdetail::where('voucher_no','=',$voucher_no)->get();
         $orderdetail=OrderdetailResource::collection($data);
         //return $orderdetail;

         return response()->json([
            'success'=>'successfully checkouted!',
            'order'=>$order,
            'orderdetail'=>$orderdetail
        ]);
        
    }


}
