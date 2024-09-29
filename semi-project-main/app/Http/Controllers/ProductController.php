<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductPage(Request $request)
    {
        // Lấy dữ liệu từ session (được gửi từ Admin Controller)

          // Lấy dữ liệu sản phẩm từ database (sử dụng dữ liệu của bạn)
          $products = Product::all();

        // Hiển thị trang sản phẩm với dữ liệu
        return view('layout.product',compact('products') );
    }
}
