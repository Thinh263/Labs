<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public static $products = [
        [
            "id" => "1",
            "name" => "TV",
            "description" => "Best TV",
            "image" => "TV.jpg",
            "price" => "2000",
        ],
        [
            "id" => "2",
            "name" => "iPhone",
            "description" => "Best iPhone",
            "image" => "iPhone.jpeg",
            "price" => "1500",
        ],
        [
            "id" => "3",
            "name" => "Chromecast",
            "description" => "Best Chromecast",
            "image" => "Chromecast.jpeg",
            "price" => "300",
        ],
        [
            "id" => "4",
            "name" => "Glasses",
            "description" => "Best Glasses",
            "image" => "Glasses.jpeg",
            "price" => "500",
        ],
    ];

    public function index()
    {
        $viewData = [
            "title" => "Products - Online Store",
            "subtitle" => "Danh sách sản phẩm.",
            "products" => self::$products,
        ];

        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $product = collect(self::$products)->firstWhere('id', (string) $id);

        abort_if($product === null, 404);

        $viewData = [
            "title" => $product["name"] . " - Online Store",
            "subtitle" => $product["name"] . " – Thông tin sản phẩm.",
            "product" => $product,
        ];

        return view('product.show')->with("viewData", $viewData);
    }
}
