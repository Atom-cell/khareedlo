<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;


class adminController extends Controller
{
    public function admin(){

        return view('admin');
    }


    public function orders()
    {
    $ordersU = DB::select('select * from orders where completed=false');
    $ordersC = DB::select('select * from orders where completed=true');

    return view('orders',["ordersU"=>$ordersU,"ordersC"=>$ordersC]);
    }

    public function completeOrders($id)
    {

        DB::update('update orders set completed=? where order_id=?',[true,$id]);

        $ordersU = DB::select('select * from orders where completed=false');
        $ordersC = DB::select('select * from orders where completed=true');

        return view('orders',["ordersU"=>$ordersU,"ordersC"=>$ordersC]);

        // $ordersU = DB::select('select * from orders');
        // return view('orders',["ordersU"=>$ordersU]);

    }
    public function customerdisplay()
    {
        $usr = DB::select('select * from user_table');
        return view('customerManage',["usr"=>$usr]);
    }

    public function sort(Request $request)
    {
        $date = $request->input('sort');

        $ordersU = DB::select("select * from orders where time like '%$date%' and completed=false");
        $ordersC = DB::select("select * from orders where time like '%$date%' and completed=true");

        return view('orders',["ordersU"=>$ordersU,"ordersC"=>$ordersC]);


    }
    public function addPage(){
        return view('addProduct');
    }


    public function addProduct(Request $request)
    {
        $name = $request->input('name'); 
        $category = $request->input('Category');
        $description = $request->input('descp'); 
        $qty1 = $request->input('qty1'); 
        $size1 = $request->input('size1');

        $qty2 = $request->input('qty2'); 
        $size2 = $request->input('size2');

        $qty3 = $request->input('qty3'); 
        $size3 = $request->input('size3');

        $qty4 = $request->input('qty4'); 
        $size4 = $request->input('size4');

        $price = $request->input('price');
        $gender = $request->input('gender'); 
        $pic = $request->file('pic'); 
        $picName = $pic->getClientOriginalName(); 
        $picType = $pic->getClientOriginalExtension(); 
        $picSize = $pic->getSize(); 
        $pic->move('uploads',$picName); 
        $destination = 'uploads/'.$picName; 

        DB::unprepared("insert into male (name,category,details,quantity,price,gender,picture) values ('$name','$category','$description','$qty1','$price','$gender','$destination')"); 

        $Record = DB::select('select * from male where id = ( select max( id ) from male)');

        

        foreach($Record as $rcd)
        {    
            $id=$rcd->id; 
        }

        DB::unprepared("insert into extra (id2,size,quantity2) values ('$id','$size1','$qty1'),('$id','$size2','$qty2'),
        ('$id','$size3','$qty3'),('$id','$size4','$qty4')"); 


        return redirect('/admin');
    }

    public function view($gender,$category){

        // echo $gender.' - '.$category;
        $Record = DB::select('select * from male, extra where gender=? and category=? and id=id2',[$gender,$category]);
            

        // return view('view', ["Record"=>$Record],['gender' => $gender],['category' => $category]);
        return view('view', ["Record"=>$Record]);


    }

    public function viewShoes($category){

        // echo $gender.' - '.$category;
        $Record = DB::select('select * from male, extra where category=? and id=id2',[$category]);    

        // return view('view', ["Record"=>$Record],['gender' => $gender],['category' => $category]);
        return view('view', ["Record"=>$Record]);


    }



    //Edit button pr
    public function viewProduct($id, $size) {
        
        $Record = DB::select('select * from male,extra where size=? and id = ? and id2=?',[$size,$id,$id]);
           
        return view('edit', ["Record"=>$Record, 'id'=>$id]);
    }

    public function delete($id,$size)
    {

        $Record = DB::select('select * from extra where id2 = ?',[$id]);   

        if(count($Record) == 1)
        {
            DB::delete('delete from male where id= ?', [$id]);
            DB::delete('delete from extra where id2=? and size=?', [$id,$size]);
        }
        else{
            DB::delete('delete from extra where id2=? and size=?', [$id,$size]);
        }
        return redirect()->back();
    }

    public function updateProduct($id, Request $request){
        $name = $request->input('name'); 
        $quantity = $request->input('qty'); 
        $price = $request->input('price');
        $size = $request->input('size');
        $pic = $request->file('pic'); 
        $picName = $pic->getClientOriginalName(); 
        $picType = $pic->getClientOriginalExtension(); 
        $picSize = $pic->getSize(); 
        $pic->move('uploads',$picName); 
        $destination = 'uploads/'.$picName; 

        DB::update("update male set name=?, quantity=?,  price=?,  picture=? where id=? ",[$name,$quantity,$price,$destination,$id]); 

        DB::update("update extra set quantity2=? where id2=? and size=? ",[$quantity,$id,$size]); 

        
        // DB::update('update table_users set user_Email=?, user_Telephone=?, user_Picture=? where user_id=?', [$email,$tel,$destination,$id]);

        return redirect()->back();
    }




}