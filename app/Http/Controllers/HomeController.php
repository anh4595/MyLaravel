<?php

namespace App\Http\Controllers;


use Request;
use App\Http\Requests;
use DB, Cart, Session;
use App\feedbacks;
use App\Http\Requests\FeedbackRequest;
use App\Http\Requests\CheckoutRequest;
use App\orders;
use App\products;
use App\orderdetails;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function homePage()
    {
        return view('client.index');
    }

    public function listPost()
    {
        return view('client.post.blog');
    }

    public function detailPost($id)
    {
        $post=DB::table('posts')->where('id',$id)->first();
        return view('client.post.blog-detail',compact('post'));
    }

    public function detailProduct($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        $update_view=products::find($id);
        $update_view->viewcount += 1;
        $update_view->save();
        return view('client.detail.detail',compact('product'));
    }
    
    public function listProductCategory($id)
    {
        $product_category=DB::table('products')->where('status',1)->where('category_id',$id)->paginate(9);
        $name_category=DB::table('productcategories')->where('id',$id)->get();
        return view('client.product.category',compact('product_category','name_category'));
    }

    public function listProductSale()
    {
        $product_sale = DB::table('products')->where('promotionflag',1)->where('status',1)->paginate(9);
        return view('client.product.productsale',compact('product_sale'));
    }

    public function contactCompany()
    {
        $contact = DB::table('contacts')->where('status',1)->get();
        return view('client.other.contact',compact('contact'));
    }

    public function aboutCompany()
    {
        $about = DB::table('abouts')->where('status',1)->get();
        return view('client.other.about',compact('about'));
    }

    public function getFeedback()
    {
        return view('client.other.contact');
    }

    public function postFeedback(FeedbackRequest $request)
    {
        $feedback = new Feedbacks();
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->subject = $request->subject;
        $feedback->message = $request->message;
        $feedback->save();
        return redirect()->route('contactCompany');
    }

    public function cartProduct($id)
    {
        $product_by=DB::table('products')->where('id',$id)->first();
        Cart::add(array('id'=>$id,'name'=>$product_by->name,'qty'=>1,'price'=>$product_by->price,'options'=>array('img'=>$product_by->image)));
        $content=Cart::content();
        return redirect()->route('checkoutProduct');
    }

    public function checkoutProduct()
    {
        $content = Cart::content();
        $count_product = Cart::count();
        $total = Cart::subtotal();
        return view('client.cart.order',compact('content','count_product','total'));
    }

    public function listRelatedTag($id)
    {
        $product_tag=DB::table('products')->join('producttags','products.id','=','producttags.product_id')->where('producttags.tag_id',$id)->paginate(9);      
        return view('client.product.producttag',compact('product_tag'));
    }

    public function deleteProduct($id)
    {
        Cart::remove($id);
        return redirect()->route('checkoutProduct');
    }
    
    public function updateCart( )
    {
        if(Request::ajax())
        {
            $id = Request::get('id');
            $qty = Request::get('qty');
            Cart::update($id,$qty);
                echo "oke";
        }   
    }


    public function searchPrice()
    {
        $to=Request::input('to');
        $from=Request::input('from');
        $product=DB::table('products')->where('promotionprice','>=',$from)->where('promotionprice','<=',$to)->paginate(9);
        return view('client.product.productsearch',compact('product'));
    }

    public function getCheckout()
    {
        $content = Cart::content();
        $total = Cart::subtotal(0,",","."); 
            return view('client.cart.checkout',compact('content','total'));

    }

    public function postCheckout(CheckoutRequest $request)
    {
        $count_item = Cart::count();
        $content = Cart::content();
        $order = new orders();
        $order->customername =	$request->name;
        $order->customeraddress = $request->address;
        $order->customeremail =	$request->phone;
        $order->customermobile = $request->email;
        $order->status = 0;
        $order->save();
        $order_id=$order->id;
        foreach($content as $item)
        {
            //order detail
            $orderdetail = new orderdetails();
            $orderdetail->order_id = $order_id;
            $orderdetail->product_id = $item->id;
            $orderdetail->quantity = $item->qty;
            $orderdetail->price = $item->price;
            $orderdetail->save();
        }
        $data2 = Cart::content();
        $namepro="";
        $quantipro="";
        $pricepro="";
        $totalpro="";
        foreach($data2 as $item)
        {
            $namepro = $item->name;
            $quantipro = $item->qty;
            $pricepro = $item->price;
        }
        $date3 = Cart::subtotal(0,",",".");
        $data1 = ['customername' => Request::input('name'), 'customeraddress' => Request::input('address'), 
                    'customeremail' => Request::input('email'), 'customermobile' => Request::input('phone'),
                    'nameProduct'=>$namepro,'quatity'=>$quantipro, 'price'=>$pricepro,'total'=>$date3];
        Mail::send('client.emails.email', $data1, function ($msg) {
            $msg->to('tuananhpro4595@gmail.com')->subject('Thông tin hóa đơn mua hàng');
            $msg->to(Request::input('email'))->subject('Thông tin hóa đơn mua hàng');
        });
        echo "<script>
           alert('Cám ơn bạn đã góp ý .Chúng tôi sẽ liên hệ với bạn trong thời gian ngắn nhất');
            window.location='" . url('/') . "'
               </script>";
        Cart::destroy();
        return redirect()->route('client.index');
    }

}
