<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Manufacture;
use DB;
use Image;

class ProductController extends Controller
{
    //protected $imageUrl;
    public function createProduct(){
        $category=Category::where('publicationStatus',1)->get();
        $manufactures=Manufacture::where('publicationStatus',1)->get();
        return view('admin.product.createProduct',['categories'=>$category],['manufacture'=>$manufactures]);
    }





    public function productImageUpload($request){
        $productImage=$request->file('productImage');
        $imageExtension=$productImage->getClientOriginalExtension();
        $uploadPath='public/productImage/';
        $imageName=$request->productName.'.'.$imageExtension;
        $imageUrl=$uploadPath.$imageName;
        Image::make($productImage)->resize(300,200)->save($uploadPath.$imageName);
        return $imageUrl;
    }
    public function saveProductInfo($request,$imageUrl){
        $product=new Product();
        $product->productName=$request->productName;
        $product->categoryId=$request->categoryId;
        $product->manufactureId=$request->manufactureId;
        $product->productPrice=$request->productPrice;
        $product->productQuantity=$request->productQuantity;
        $product->productShortDescription=$request->productShortDescription;
        $product->productLongDescription=$request->productLongDescription;
        $product->productImage=$imageUrl;
        $product->publicationStatus=$request->publicationStatus;
        $product->save();
    }

    public function storeProduct(Request $request){
        $this->validate($request,[
            'productName'=>'required',
            'productPrice'=>'required',
            'productImage'=>'required',
        ]);

        //*********1st way**********
//        $productImage=$request->file('productImage');
//        $name=$productImage->getClientOriginalName();
//        $uploadPath='public/productImage/';
//        $productImage->move($uploadPath,$name);
//        $imageUrl=$uploadPath.$name;
//        $this->saveProductInfo($request,$imageUrl);
//        return redirect('/product/add')->with('message','Product Info Save Successfully');




        //*****2nd way******
        $imageUrl=$this->productImageUpload($request);
        $this->saveProductInfo($request,$imageUrl);
        return redirect('/product/add')->with('message','Product Info Save Successfully');


    }

    //******1st Way*********
//    protected function saveProductInfo($request,$imageUrl){
//        $product=new Product();
//        $product->productName=$request->productName;
//        $product->categoryId=$request->categoryId;
//        $product->manufactureId=$request->manufactureId;
//        $product->productPrice=$request->productPrice;
//        $product->productQuantity=$request->productQuantity;
//        $product->productShortDescription=$request->productShortDescription;
//        $product->productLongDescription=$request->productLongDescription;
//        $product->productImage=$imageUrl;
//        $product->publicationStatus=$request->publicationStatus;
//        $product->save();
//    }






    public function manageProduct(){
        $products=DB::table('products')
            ->join('categories','products.categoryId','=','categories.id')
            ->join('manufactures','products.manufactureId','=','manufactures.id')
            ->select('products.id','products.productName','products.productPrice','products.productQuantity','products.publicationStatus','categories.categoryName','manufactures.manufactureName')
            ->get();
        return view('admin.product.manageProduct',['products'=>$products]);
    }
    public function viewProduct($id){
        $productById=DB::table('products')
            ->join('categories','products.categoryId','=','categories.id')
            ->join('manufactures','products.manufactureId','=','manufactures.id')
            ->select('products.*','categories.categoryName','manufactures.manufactureName')
            ->where('products.id',$id)
            ->first();
        return view('admin.product.viewProduct',['product'=>$productById]);
    }

    public function editProduct($id){
        $category=Category::where('publicationStatus',1)->get();
        $manufactures=Manufacture::where('publicationStatus',1)->get();
        $productById=Product::where('id',$id)->first();
        //dd($category);
//        echo "<pre>";
//        print_r($manufactures);
//        exit();
        //dd($productById);
        return view('admin.product.editProduct',['product'=>$productById,'categories'=>$category,'manufactures'=>$manufactures]);
    }
    public function deleteProduct($id){
        $product=Product::find($id);
        unlink($product->productImage);
        $product->delete();
        return redirect('/product/manage');
    }

    public function updateProduct(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        echo $imageUrl;
        exit();
    }

    private function imageExistStatus($request) {
        $productById = Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {
            unlink($productById->productImage);
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'public/productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $productById->productImage;
        }
        return $imageUrl;
    }
}
