<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacture;
use DB;

class ManufactureController extends Controller
{
   public function createManufacture(){
       return view('admin.manufacture.createManufacture');

   }
   public function storeManufacture(Request $request){
       //dd($request->all());

       $this->validate($request,[
           'manufactureName'=>'required',
           'manufactureDescription'=>'required',
       ]);

       //Process One (Eloquent)
       $manufacture=new Manufacture();
       $manufacture->manufactureName=$request->manufactureName;
       $manufacture->manufactureDescription=$request->manufactureDescription;
       $manufacture->publicationStatus=$request->publicationStatus;
       $manufacture->save();
       return redirect('/manufacture/add')->with('message','Manufacture Info Save Successfully');
   }
    public function manageManufacture(){
        $manufacture=Manufacture::all();
        return view('admin.manufacture.manageManufacture',['manufactures'=>$manufacture]);
    }
    public function editManufacture($id){
        $manufactureById=Manufacture::where('id',$id)->first();
        return view('admin.manufacture.editManufacture',['manufactureById'=>$manufactureById]);
    }
    public function updateManufacture(Request $request){
        $manufacture=Manufacture::find($request->id);
        $manufacture->manufactureName=$request->manufactureName;
        $manufacture->manufactureDescription=$request->manufactureDescription;
        $manufacture->publicationStatus=$request->publicationStatus;
        $manufacture->save();
        return redirect('/manufacture/manage')->with('message','Manufacture Info Update Successfully');
    }
    public function deleteManufacture($id){
        $manufacture=Manufacture::find($id);
        $manufacture->delete();
        return redirect('/manufacture/manage');
    }
}
