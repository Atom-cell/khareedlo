<?php



namespace App\Http\Controllers;

// use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;

class maleController extends Controller
{
    // public function admin(){

    //     return view('admin');
    // }

    public function home(){
        $Record = DB::select('select * from male where gender=?',['male']);
        // $Record2 = DB::select('select * from male where gender=female');  

        return view('home', ["Record"=>$Record]); //,"Record2"=>$Record2
    }

    public function addPage(){
        return view('addProduct');
    }

    public function thankyou(){
        return view('thankyou');
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

     public function orders()
     {
        $ordersU = DB::select('select * from orders where completed=false');
        $ordersC = DB::select('select * from orders where completed=true');

        return view('orders',["ordersU"=>$ordersU,"ordersC"=>$ordersC]);
     }

    // public function PPage(){
    //     // $Record = DB::select('select * from male'); 
    //     $Record = DB::table('male')->paginate(12);    
    //     return view('productPage', ["Record"=>$Record]);
    
    // }

    public function PPage($gender){
        // $Record = DB::select('select * from male')->paginate(12);   
        $Record = DB::table('male')->paginate(12);  
        return view('productPage', ["Record"=>$Record],['gender' => $gender]);
    
    }

    //after selecting pant shirt shoes
    public function main($gender,$category)
    {
        $Record = DB::select('select * from male where gender=? and category=?',[$gender,$category]);
        return view('main',["Record"=>$Record]);

    }

    
    public function view($gender,$category){

        // echo $gender.' - '.$category;
        $Record = DB::select('select * from male, extra where gender=? and category=? and id=id2',[$gender,$category]);    

        // return view('view', ["Record"=>$Record],['gender' => $gender],['category' => $category]);
        return view('view', ["Record"=>$Record]);


    }

    //Edit button pr
    public function viewProduct($id, $size) {
        
        $Record = DB::select('select * from male,extra where size=? and id = ? and id2=?',[$size,$id,$id]);
           
        return view('edit', ["Record"=>$Record, 'id'=>$id]);
    }

    public function descp()
    {
        $id= request('id'); 
        // $Record = DB::select('select * from male where id = ?',[$id]);
        $Record= DB::select('select * from extra,male where id2=id and id=?',[$id]);
        // $Extra = DB::select('select * from extra where id2 = ?',[$id]);


        foreach($Record as $rcd){
            if($rcd->category == 'shirt'){
                $msg="";
                return view('description', ["Record"=>$Record, 'id'=>$id,'msg'=>$msg]);
            }
            elseif($rcd->category == 'pant'){
                $msg="";
                return view('description2', ["Record"=>$Record, 'id'=>$id,'msg'=>$msg]);

            }
            else{
                $msg="";
                return view('description3', ["Record"=>$Record, 'id'=>$id,'msg'=>$msg]);
            }
        }
    }

    //post method of edit
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


    public function cart(Request $request){

        if(session()->has('Uid'))
        {
            echo ("has USER");
            $uid = $request->session()->get('Uid');

            $cartData = DB::select('select * from cart2, male where u_id=? and id=p_id',[$uid]);

            //select * from cart where u_id = ?

            // select * from cart, male where u_id=$uid and id=p_id

            return view('cart',['cartData'=> $cartData]);
        }
        else
        {
            // $Record = DB::select('select * from male where gender=?',['male']);
        // $Record2 = DB::select('select * from male where gender=female');  

            // return view('home', ["Record"=>$Record]);
            return view('login');

        }
    }

    public function checkout(Request $request){
        $id = $request->session()->get('Uid');

        $Record=DB::select('select * from user_table where user_id=?',[$id]);

        return view('checkout',["Record"=>$Record]);
    }

    public function checkout_store(Request $request)
    {
        $address = $request->input('address');
        $city = $request->input('city'); 
        $zip = $request->input('zip');
        $total = $request->input('hide_total');
        $telephone = $request->input('telephone');
        $id = $request->session()->get('Uid');        

        DB::update("update user_table set address=?,city=?,post_code=?,phone=?,total_price=? where user_id=? ",[$address,$city,$zip,$telephone,$total,$id]);  

        $cartData = DB::select('select * from cart2 where u_id=?',[$id]);

        //updating the quanitties in extra
        foreach($cartData as $cd)
        {
            $p_id=$cd->p_id;
            $qty=$cd->quantity2;
            $size=$cd->size;

            $Record = DB::select('select quantity2 from extra where id2=? and size=?',[$p_id,$size]);

            $qty2=($Record[0]->quantity2)-$qty;

            DB::update('update extra set quantity2=? where id2=? and size=?',[$qty2,$p_id,$size]);


        }


        //adding in orders
        $cartData = DB::select('select * from cart2, male where u_id=? and id=p_id',[$id]);
        $Record = DB::select('select * from user_table where user_id=?',[$id]);
        $email = $Record[0]->email;
        foreach($cartData as $cd)
        {
            $email = $Record[0]->email;
            $p_id=$cd->p_id;
            $quantity = $cd->quantity2;
            $size= $cd->size;
            $price=$cd->price;
            date_default_timezone_set("Asia/Karachi");
            $dt = date("Y-m-d H:i:s");
            DB::unprepared("insert into orders (user_id,email,address,post_code,phone,p_id,quantity,size,price,time,completed) values 
            ('$id','$email','$address','$zip','$telephone','$p_id','$quantity','$size','$price','$dt',FALSE)");
        }



        return redirect('thankyou');
    }

    public function deleteItem($id) //AJAX
    {
        DB::delete('delete from cart2 where cart_id= ?', [$id]);
        return response()->json(['success'=>'Record has been deleted']);

    }

    public function addToCart(Request $request)
    {
        $pid= request('id'); 
        // $Record = DB::select('select * from male where id = ?',[$pid]);
        $Record= DB::select('select * from extra,male where id2=id and id=?',[$pid]);

        $request->session()->put('Pid',$pid);

        // $request->session()->forget('Uid');

        $name;
        $price;
        $pic;
        foreach($Record as $rcd){
            $name=$rcd->name;
            $price=$rcd->price;
            $pic=$rcd->picture;
        }

        if(session()->has('Uid'))
        {
            $uid= $request->session()->get('Uid');
            $size =$request->input('size');
            $quantity = $request->input('quantity');

            

            $price=$price*$quantity;
            date_default_timezone_set("Asia/Karachi");
            $dt = date("Y-m-d H:i:s");

            DB::unprepared("insert into cart2 (u_id, p_id,quantity2,size,price2,time) values 
            ('$uid','$pid','$quantity','$size','$price','$dt')"); 

            
            foreach($Record as $rcd)
            {
                if($rcd->category == 'shirt'){
                    $msg='Item Added Successfully';
                    return view('description', ["Record"=>$Record, 'id'=>$pid,'msg'=>$msg]);
                }
                elseif($rcd->category == 'pant'){
                    $msg='Item Added Successfully';
                    return view('description2', ["Record"=>$Record, 'id'=>$pid,'msg'=>$msg]);
    
                }
                else{
                    $msg='Item Added Successfully';
                    return view('description3', ["Record"=>$Record, 'id'=>$pid,'msg'=>$msg]);
                }
            }

            

            // return view('description', ["Record"=>$Record, 'id'=>$pid]);
        }
        else{
            // send product id, row to login view
            return redirect('login'); //["Record"=>$Record, 'pid'=>$pid]
            
        }
    }



    public function login(){
        if(!session()->has('Uid')){
            return view('login');
        }
        else{
            $Record = DB::select('select * from male where gender=?',['male']);
        // $Record2 = DB::select('select * from male where gender=female');  

        return view('home', ["Record"=>$Record]); //,"Record2"=>$Record2

        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $Record = DB::select('select * from male where gender=?',['male']);
        // $Record2 = DB::select('select * from male where gender=female');  

        return view('home', ["Record"=>$Record]);
    }


    public function matchUser(Request $request)
    {

        $pid= $request->session()->get('Pid');
        $email = $request->input('email');
        $password = $request->input('password');
        
    
        $Record = DB::select('select * from user_table where email = ?',[$email]);
        if (count($Record) > 0)
        {
            foreach ($Record as $rcd)
            {
                $id=$rcd->user_id;

                if (($rcd->password) == $password){

                    //when user logs in from account
                    if($pid==""){
                        $request->session()->put('Uid',$id);
                        $Record = DB::select('select * from male where gender=?',['male']);
                        // $Record2 = DB::select('select * from male where gender=female');  

                        return view('home', ["Record"=>$Record]); //,"Record2"=>$Record2
                    }else
                    //when user logs in from cart
                    {

                        $request->session()->put('Uid',$id);

                        $Record= DB::select('select * from extra,male where id2=id and id=?',[$pid]);

                        //
                        foreach($Record as $rcd)
                        {
                            if($rcd->category == 'shirt'){
                                return view('description', ["Record"=>$Record, 'id'=>$pid]);
                            }
                            elseif($rcd->category == 'pant'){
                                return view('description2', ["Record"=>$Record, 'id'=>$pid]);
                
                            }
                            else{
                                return view('description3', ["Record"=>$Record, 'id'=>$pid]);
                            }
                        }

                    // return view('description', ["Record"=>$Record, 'id'=>$pid]);
                    }
                }
                else{
                    $error='Invalid Credentials';
                    return view('login',['error'=> $error]); //'pid'=>$pid
                }
            }
        }
        else
        {
            $error='Invalid Credentials';
            return view('login',['error'=> $error]);
        }


        
    }
    public function signup(){

        return view('signup');
    }

    public function storeUser(Request $request){
        $fname = $request->input('Fname');
        $lname = $request->input('Lname'); 
        $email = $request->input('email');
        $password = $request->input('password');
        $a=null ;$b=null ;$c=null ;$d=null ;


        DB::unprepared("insert into user_table (fname, lname,email,password,address,city,post_code,phone,total_price) values ('$fname','$lname','$email','$password','$a','$b',0,'$d',0)"); 

        return view('login');
    }

    public function forgetPassword(){
        return view("forgetPassword");
    }

    public function resetPassword(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $password2 = $request->input('password2');

        

        $Record = DB::select('select * from user_table where email = ?',[$email]);

        if (count($Record) > 0)
        {
            foreach ($Record as $rcd) {

            if ($password== $password2){
                $id=$rcd->user_id;


                DB::update("update user_table set password=? where user_id=? ",[$password,$id]); 
                
        
                return redirect('login');
                
            }
            else{
                $error='Password Doesnt Match';
                return view('login',['error'=> $error]); //'pid'=>$pid
            }
            }
        }
        else{
            $error='Invalid Credentials';
            return view('login',['error'=> $error]);
        }


        }

        public function account(Request $request)
        {
            if(session()->has('Uid'))
            {
                $id=$request->session()->get('Uid');
                $Record = DB::select('select * from user_table where user_id=?',[$id]);
                $cartData = DB::select('select * from orders, male where user_id=? and id=p_id',[$id]);
                return view('account',["Record"=>$Record,"cartData"=>$cartData]);
            }
            else{
                return redirect('login'); //,"Record2"=>$Record2
    
            }
        }

        public function editAccount(Request $request)
        {
            $id=$request->session()->get('Uid');
            $Record = DB::select('select * from user_table where user_id=?',[$id]);
            return view('editAccount',["Record"=>$Record]);
        }

        public function saveEditAccount(Request $request)
        {
            $address = $request->input('address');
            $city = $request->input('city'); 
            $zip = $request->input('zip');
            $telephone = $request->input('phone');
            $id = $request->session()->get('Uid');        

            DB::update("update user_table set address=?,city=?,post_code=?,phone=? where user_id=? ",[$address,$city,$zip,$telephone,$id]); 

            $Record = DB::select('select * from user_table where user_id=?',[$id]);
                $cartData = DB::select('select * from cart2, male where u_id=? and id=p_id',[$id]);
                return view('account',["Record"=>$Record,"cartData"=>$cartData]);


        }

        public function search()
        {
            $Record = DB::select('select * from male where id=900');
            $error="";
            return view('search',["Record"=>$Record,'error'=> $error]);
        }

        public function searchQ(Request $request)
        {
            $item = $request->input('searchBar');
            if($item=='shirts'){
                $item='shirt'; 
            }           

            // "select terms from ajx where terms like '$searchterm%'"
            $Record = DB::select("select * from male where name like '%$item'");  //,[$item]

            if(count($Record)==0){
                $error= 'Your search for "'.$item.'" did not yield any results. ';
                return view('search',["Record"=>$Record,'error'=> $error]);
            }else{
                $error="";
                return view('search',["Record"=>$Record,'error'=> $error]);
            }
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






    }



// public function view($gender){
    
    //     $Record = DB::select('select * from male');     
    //     return view('view', ["Record"=>$Record]);

    //     // return view("blog", compact("posts")); ,['gender' => $gender]
    // }

    // public function view(){
        
    //     // $Record = DB::table('male')->paginate(3);
    //     $Record = DB::select('select * from male'); 

    //     return view('view', ["Record"=>$Record]);
    // }

// public function addToCart(Request $request)
    // {
        // $id= request('id');
        // $size =$request->input('size');
        // $quantity = $request->input('quantity');
        
        
        // $Record = DB::select('select price from male where id = ?',[$id]);

        // when add to cart button click 
        //     if session has id then add in db
        
        //     else
        //         ask login/create account. store session redirect to description 

        
        // insert into cart table product_id, user_id, qunattiy, size.

        // when view cart check session
        //     if no session empty cart
        //     else get data from cart table




        // $request->session()->put('id',$id);
        // $request->session()->put('size',$size);
        // $request->session()->put('quantity',$quantity);

        // echo session('id');

        // echo session('size');
        // echo session('quantity');

        // session()->pull('size'); //to delete session
        // $request->session()->forget('key');



        // Session::put(['id' => $id,'size' => $size, 'quantity'=>$quantity]);

        // return view('cart');
    // }