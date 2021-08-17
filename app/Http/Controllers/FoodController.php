<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meat;
use App\Category;
use Session;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Resources\MeatResource;
use App\Http\Resources\OrderdetailResource;
use App\Order;
use App\Orderdetail;

class FoodController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend/menu/meat_index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'photo'=>'required|mimes:jpeg,jpg,png'
        ]);
        $file=$request->file('photo');

        if($file){
            $name=uniqid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('storages/'.request('folderName').'/'),$name);
            $filepath='storages/'.request('folderName').'/'.$name;
        }

        $category_id=1;//meat

        Meat::create([
            'name'=>request('name'),
            'price'=>request('price'),
            'photo'=>$filepath,
            'category_id'=>request('category_id')
        ]);
         //Session::flash('success', 'Record is successfully added!');
        return response()->json(['success'=>'Record is successfully added!']);
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
        $meat=Meat::find($id);
         
        return new MeatResource($meat);

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
        // dd($request);
        $filepath='';
        $file=$request->file('ephoto');
        $oldphoto=request('oldphoto');
        if($file){
             unlink(public_path($oldphoto));
            $name=uniqid().'-'.time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('storages/'.request('folderName').'/'),$name);
            $filepath='storages/'.request('folderName').'/'.$name;
        }else{
            $filepath=$oldphoto;
        }

        $meat=Meat::find($id);
        $meat->name=request('ename');
        $meat->price=request('eprice');
        $meat->photo=$filepath;
        $meat->save();
        return response()->json(['success'=>'Record is successfully updated!']);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meat = Meat::find($id); // Can chain this line with the next one
        $meat->delete($id);
        return response()->json(['success'=>'Record is successfully Deleted!']);
    }


    //for the ajax table for data js
    public function getDataBycatID($id){
       // dd($id);
        $alldata=Meat::where('category_id',$id)
        ->orderBy('id','desc')->get();
      //  dd($alldata);
        $alldata=MeatResource::collection($alldata);
        return Datatables::of($alldata)
                ->addIndexColumn()
                ->make(true);

    }

    public function meatPage(){
        return view('backend/menu/meat_index');
    }

    public function seafoodPage(){
        return view('backend/menu/seafood_index');
    }

    public function vegetablePage(){
        return view('backend/menu/vegetable_index');
    }

    public function curryPage(){
        return view('backend/menu/curry_index');
    }


    public function getcountmenu(){
        //dd('helo');
        // $menuCount=Meat::select('created_')
        // ->sortBy(function($item){
        //     return $item->category->id;
        // })
        // ->groupBy(function($item){
        //     return $item->category->name;
        // })
        // ->map
        // ->latest()
        // ->toArray();

        $menuCount=Category::withCount('meats')->get();
        // $menuCount=Category::select('created_at')->get();

        // $meanCount=Meat::with('category')->latest()
        // ->orderBy(function($item){
        //     return $item->category->id;
        // })->get();
       

       // return $menuCount;
        $data=[];

        $category=Category::all();
        foreach($category as $cat){
            $lastDate=MeatResource::collection(Meat::where('category_id',$cat->id)
            ->latest()
            ->limit(1)->get());

            array_push($data, $lastDate);


        }
       
        return response()->json(['data'=>$menuCount,'lastdate'=>$data]);
    }

    public function getOrder(){
        $orders=Order::orderBy('id','desc')->get();
        $data=Datatables::of($orders)
                ->addIndexColumn()
                ->make(true);
        return response()->json($data);
    }

    public function getOrderDetailByV(Request $request){
        $orderDetails=Orderdetail::where('voucher_no','=',request('voucher'))
        ->get();
        $orderDetails=OrderdetailResource::collection($orderDetails);
        return response()->json(['orderDetail'=>$orderDetails]);
    }

    public function orderDestory($id){
        $order=Order::find($id)->first();
        $orderDetails=Orderdetail::where('voucher_no','=',$order)->get();
        foreach($orderDetails as $orderdetail){
           $orderD= Orderdetail::find($orderdetail->id)->first();
           $orderD->delete($orderD->id);
        }
        $order->delete($order->id);

        return response()->json(['success'=>"successfully added"]);

    }
}
