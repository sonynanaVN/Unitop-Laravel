<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function show($id){
        $price = 2000;
        // return "admin danh sách sản phẩm có id: $id";
        // return view('product.show',array('id' => $id,'price' => $price));
        $color=['red','blue','green'];
        return view('product.show',compact('id','price','color'));
    }
    function create(){
        // return "admin thêm sản phẩm";
        return view('product.create');
    }
    function update($id){
        return "Update sản phẩm có id: $id" ;
    }
    function delete($id){
        return "Xóa sản phẩm có id: $id" ;
    }
}
