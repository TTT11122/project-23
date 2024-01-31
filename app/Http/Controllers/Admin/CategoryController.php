<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
    {
        public function index(){
            $category = Category::orderBy('category_id','desc')->Paginate(5);
            return view('backend.category.index',compact('category'));
        }
    
        public function create(){
            return view('backend.category.create');
    }
    public function insert(Request $request){
        //dd($request->name);

       //ป้องกันการกรอกข้อมูล
       $validated = $request->validate([
        'name' => 'required|unique:categories|max:255',//unique=กรอกได้ห้ามซ้ำกัน //required=ไม่กรอกไม่ให้ผ่าน
    ],
    [
        'name.required'=>"กรุณากรอกชื่อประเภทสินค้า",
        'name.unique'=>"ชื่อนี้มีอยู่แล้ว",
        'name.mex'=>"คุณสามารถกรอกข้อมูลได้ไม่เกิน 255 ตัวอักษร",
    ]);

        $cat = new Category();
        $cat->name = $request->name;
        $cat->save();
        toast('บันทึกแล้วจ้าาาาา😁','info');
        return redirect()->route('c.index');
}

    
public function edit($category_id){
    $cat = Category ::find($category_id);
    return view('backend.category.edit',compact('cat'));
}
public function updat(Request $request,$category_id){
$category = Category::find($category_id);
$category->name = $request->name;
$category->update();
alert()->success('อัพเดทแว้ววววว😎','บันทึกแล้วจ้าาาาา😁');
return redirect()->route('c.index');

}
<<<<<<< HEAD

public function delete($category_id){
$categor =Category::find($category_id);
$categor->delete();
alert()->success('ลบแว้ววววว😒','ลบแล้วจ้าาาาา');
return redirect()->route('c.index');

    }
}
=======
public function delete($category_id){
    $category = Category::find($category_id);
    $category->delete();
    alert()->success('ลบแว้ววววว😣','ลบแล้วจ้าาาาา😒');
    return redirect()->route('c.index');
    }
    }
>>>>>>> 5d86b96a27a11a5f53fb5123f1877cf80fbc9f8c
