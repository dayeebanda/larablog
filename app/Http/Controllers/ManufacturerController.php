<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Manufacturer;

// use for Query Builder
//use DB;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createManufacturer()
    {
        //

        return view('admin.manufacturer.createManufacturer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storManufacturer(Request $request)
    {
        //
        $this->validate($request,[
            'manufacturerName'=>'required',
            'manufacturerDescription'=>'required',
        ]);

        Manufacturer::create($request->all());
        //return "Successfully";
        //return view('admin.manufacturer.manageManufacturer');
        return redirect('/manufacturer/add')->with('message','Manufacturer created');

    }

    public function manageManufacturer(){

      $manufacturer =Manufacturer::all();
      return view('admin.manufacturer.manageManufacturer',['manufacturers'=>$manufacturer]);
      //return view (admin.manufacturer.manageManufacturer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editManufacturer($id)
    {
        //
        $manufacturers = Manufacturer::where('id', $id)->first();
        return view ('admin.manufacturer.editmanufacturer',['manufacturerById'=>$manufacturers]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateManufacturer(Request $request)
    {
      $this->validate($request,[
          'manufacturerName'=>'required',
          'manufacturerDescription'=>'required',
          'publicationStatus' =>'required',
      ]);
      $manufacturer = Manufacturer::find($request->id);
      $manufacturer->manufacturerName = $request->manufacturerName;
      $manufacturer->manufacturerDescription = $request->manufacturerDescription;
      $manufacturer->publicationStatus = $request->publicationStatus;
      $manufacturer->save();
      return redirect('/manufacturer/manage/')->with('message', 'Manufacturer info update');

    }
      public function deleteManufacturer($id){
      $manufacturer =Manufacturer::find($id);
      $manufacturer->delete();
      return redirect('/manufacturer/manage/')->with('message', 'Manufacturer info delete');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
