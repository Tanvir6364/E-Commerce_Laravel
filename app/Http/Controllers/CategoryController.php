<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;

class CategoryController extends Controller
{
    public function createCategory(){
        return view('admin.category.createCategory');
    }
    public function storeCategory(Request $request){
        //return $request->all();

        $this->validate($request,[
            'categoryName'=>'required',
            'categoryDescription'=>'required',
        ]);



        //Process One (Eloquent)
        $category=new Category();
        $category->categoryName=$request->categoryName;
        $category->categoryDescription=$request->categoryDescription;
        $category->publicationStatus=$request->publicationStatus;
        $category->save();
        return redirect('/category/add')->with('message','Category Info Save Successfully');

        //Process Two (Eloquent)
//        Category::create($request->all());
//        return 'Category Info Save Successfully';

        //process three(Query Builder)
//        DB::table('categories')->insert([
//            'categoryName'=>$request->categoryName,
//            'categoryDescription'=>$request->categoryDescription,
//            'publicationStatus'=>$request->publicationStatus,
//        ]);
//        return 'Category Info Save Successfully';
    }
    public function manageCategory(){
        $categories=Category::all();
        return view('admin.category.manageCategory',['categories'=>$categories]);
    }
    public function editCategory($id){
        $categoryById=Category::where('id',$id)->first();
        return view('admin.category.editCategory',['categoryById'=>$categoryById]);
    }
    public function updateCategory(Request $request){
        //for view array
        //dd($request->all());


        $category=Category::find($request->id);
        $category->categoryName=$request->categoryName;
        $category->categoryDescription=$request->categoryDescription;
        $category->publicationStatus=$request->publicationStatus;
        $category->save();
        return redirect('/category/manage')->with('message','Category Info Update Successfully');
    }
    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/category/manage');
    }
}
