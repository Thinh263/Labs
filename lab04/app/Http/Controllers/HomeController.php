<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [
            "title" => "Trang chu - Online Store",
            "subtitle" => "Danh sách sản phẩm.",
            "products" => ProductController::$products,
        ];

        return view('product.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $data1 = "Gioi thieu - Online Store";
        $data2 = "Gioi thieu";
        $description = "Day la trang about gioi thieu!";
        $author = "Phat trien boi: OnlyU.";

        return view('home.about')
            ->with("title", $data1)
            ->with("subtitle", $data2)
            ->with("description", $description)
            ->with("author", $author);
    }
}
