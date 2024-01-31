<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
<<<<<<< HEAD
use App\models\Category;
=======
use App\Models\Category;
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
use Illuminate\Support\Str;
use File;
use Image;

class ProductController extends Controller
{
    public function index(){
<<<<<<< HEAD
        $product = Products::orderBy('created_at','desc')->Paginate();
        return view('backend.product.index',compact('product'));
    }

    public function create(){
        $category = Category::all();
        return view('backend.product.create',compact('category'));

    }
    public function insert(Request $request){
        $validated= $request->validate([
            'name'=> 'required|max:255',
            'price'=>'required|max:255',
            'description'=> 'required',
            'image'=> 'mimes:jpg,jpred',

        ],
        [
        'name.required'=> 'กรุณากรอกข้อมูลสินค้า',
        'name.max'=> 'กรอกข้อมูลได้255ตัวอักษร',
        'price.required'=>'กรุณากรอกข้อมูลราคาสินค้า',
        'price.max'=> 'กรอกข้อมูลได้255ตัวอักษร',
        'descrpiton.requireb'=>'กรุณากรอกข้อมูลประเภทสินค้าสินค้า',
        'image.mimes'=> 'อัพโหลดภาพที่มีนามสกุล.jpg.jpeg.pngได้เท่านั้น',
        ]);

        $pro = new Products();
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request-> description;
        $pro->category_id = $request->category_id;

        if($request->hasFile('image')){
         $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path().'/backend/product/upload/',$filename);
         Image::make(public_path().'/backend/product/'.$filename)->resize(200,200)->save(public_path().'/backend/product/resize/'.$filename);
         $pro->image = $filename;
    }else{
        $pro->image = 'no_image.jpg';
=======
        $product = Products::orderBy('created_at','desc')->Paginate(10);
        return view('backend.product.index',compact('product'));
    }
    public function create(){
        $category = Category::all();
        return view('backend.product.create',compact('category'));
    }


    public function insert(Request $request){
        //ป้องกันการกรอกข้อมูลผ่านฟอร์ม
        $validate = $request->validate([
            'name'=>'required|max:255',
            'price'=>'required|max:255',
            'description'=>'required',
            'image'=>'mimes:jpg,jpeg,png',

        ],[
            'name.required'=>'กรุณากรอกข้อมูลสินค้า',
            'name.max'=>'กรุณากรอกข้อมูลสินค้า',
            'price.required'=>'กรุณากรอกข้อมูลราคาสินค้า',
            'description.required'=>'กรุณากรอกข้อมูลรายละเอียดสินค้า',
            'image'=>'อัพโหลดภาพที่มีนามสกุล.jpg,jpeg,png',

        ]);


        $pro = new Products();
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->category_id = $request->category_id;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/backend/product/',$filename);

            Image::make(public_path().'/backend/product/'.$filename)->resize(200,200)->save(public_path().'/backend/product/resize/'.$filename);

            $pro->image = $filename;
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
    }
    $pro->save();
    return redirect('admin/product/index');

<<<<<<< HEAD
}

public function edit($product_id){

    $pro=Produt::find($product_id);
    return view ('backend.product.edit'.compact('pro',));
}

public function update (Request $request,$prouct_id){
    $pro =Product::find($product_id);
    $pro->name = $request->name;
    $pro->price = $request->price;
    $pro->description = $request-> description;
    $pro->category_id = $request->category_id;

        if($request->hasFile('image')){

            if($request->image!='no_image.jpg'){
                File::delete(public_path().'/backend/product/'.$product->image);
                File::delete (public_path().'/backend/prodout/resize/'.$product->imagr);
            }



         $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path().'/backend/product/upload/',$filename);
         Image::make(public_path().'/backend/product/'.$filename)->resize(200,200)->save(public_path().'/backend/product/resize/'.$filename);
         $pro->image = $filename;
    }else{
        $pro->image = 'no_image.jpg';
    }
    $pro->save();
    alert()->success('[บันทึกข้อมูลสำเร็จ','ข้อมูลนี้ถูกบันทึกเเล้ว');
    return redirect('admin/product/index');

}


=======
    }
    public function edit($procduct_id){
        $pro = Products::find($procduct_id);
        $cat = Category::all();
        return view('backend.product.edit', compact('pro','cat'));
}

    public function update(Request $request,$procduct_id)
    {
        $pro = Products::find($procduct_id);
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->description = $request->description;
        $pro->category_id = $request->category_id;

        if($request->hasFile('image')){

            if($pro->image != 'no_image.jpg'){
                File::delete(public_path().
                '/backend/product/'.$pro->image);
                File::delete(public_path().
                '/backend/product/'.$pro->image);
            }

            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path().'/backend/product/',$filename);

            Image::make(public_path().'/backend/product/'.$filename)->resize(200,200)->save(public_path().'/backend/product/resize/'.$filename);

            $pro->image = $filename;
        }
        $pro->update();
        alert()->success('แก้ไขข้อมูลสำเร็จ','ข้อมูลนี้ถูกอัพเดทแล้ว');
        return redirect('admin/product/index ');
    }
        public function delete($procduct_id){
            $pro = Products::find($procduct_id);


                if($pro->image != 'no_image.jpg'){
                    File::delete(public_path().
                    '/backend/product/'.$pro->image);
                    File::delete(public_path().
                    '/backend/product/'.$pro->image);
                }
                    $pro->delete();
                    alert()->success('ลบข้อมูลสำเร็จ','ข้อมูลนี้ถูกลบแล้ว');
                    return redirect('admin/product/index');



    }
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
}
