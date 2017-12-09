<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacturer;
use App\Category;
use App\Product;
// use for Query Builder
use DB;



class ProductController extends Controller
{

  //protected $imageUrl;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct()
    {
        //
        $categories = Category::where('publication_status',1)->get();
        $manufacturers = Manufacturer::where('publicationStatus',1)->get();

        return view('admin.product.createProduct',['categories'=>$categories, 'manufacturers'=>$manufacturers]);
    }

    public function storProduct(Request $request){

      $this->validate($request,[
          'productName'=>'required',
          'productPrice'=>'required',
          'productQuantity'=>'required',
          'productSortDescription'=>'required',
          'productLongtDescription'=>'required',
          'productImage'=>'required',
          'publicationStatus'=>'required',

      ]);

       //Product::create($request->all());
      //
       //return "Successfully";
      //return  $request->all();

      $productImage =$request->file('productImage');

      $name= $productImage->getClientOriginalName();
      $uploadPath= 'public/productImage/';
      $productImage->move($uploadPath,$name);
      $imageUrl=$uploadPath.$name;
      $this->savePorductInfo($request ,$imageUrl);
      return redirect('/product/add')->with('message', 'Product created');
}
      protected function savePorductInfo($request, $imageUrl){
            $product =new Product();
            $product->productName = $request->productName;
            $product->categoryId = $request->categoryId;
            $product->manufacturerId = $request->manufacturerId;
            $product->productPrice = $request->productPrice;
            $product->productQuantity = $request->productQuantity;
            $product->productSortDescription = $request->productSortDescription;
            $product->productLongtDescription = $request->productLongtDescription;
            $product->productImage = $imageUrl;
            $product->publicationStatus = $request->publicationStatus;
            $product->save();

    }

//     public function manageProduct(){
//
//       $manufacturer =Manufacturer::all();
//       $category =Category::all();
//       $product =Product::all();
// ;
//       echo "<pre>";
//       print_r($product);
//       exit;
//
//       return view('admin.product.manageProduct',['manufacturers'=>$manufacturer,'categories'=>$category,'products'=>$product]);
//     }

public function manageProduct(){
$products =DB::table('products')
->join('categories','products.categoryId','=','categories.id')
->join('manufacturers','products.manufacturerId','=','manufacturers.id')
->select('products.id','products.productName','categories.category','manufacturers.manufacturerName','products.productPrice','products.productQuantity','products.publicationStatus')
->get();

// echo "<pre>";
//  print_r($products);
// exit;

return view('admin.product.manageProduct',['products'=>$products]);

}

      //return $name;
      // echo '<pre>';
      // print_r($productImage);





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function viewProduct($id)
    {
        //

        $productById =DB::table('products')
        ->join('categories','products.categoryId','=','categories.id')
        ->join('manufacturers','products.manufacturerId','=','manufacturers.id')
        ->select('products.id','products.productName','categories.category','manufacturers.manufacturerName','products.productPrice','products.productQuantity','products.publicationStatus','products.productSortDescription','products.productLongtDescription','products.productImage')
        ->where('products.id',$id)
        ->first();
        return view('admin.product.viewProduct',['product' => $productById]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editProduct($id)
    {
        //

        $categories = Category::where('publication_status',1)->get();
        $manufacturers = Manufacturer::where('publicationStatus',1)->get();
        $productById = Product::where('id', $id)->first();
        return view('admin.product.editProduct',[ 'productById' => $productById,'categories'=>$categories, 'manufacturers'=>$manufacturers]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function updateProduct(Request $request)
    // {
    //     //
    //     $this->validate($request,[
    //         //'productName'=>'required',
    //         'productPrice'=>'required',
    //         'productQuantity' =>'required',
    //         'productSortDescription' =>'required',
    //         'productLongtDescription' =>'required',
    //         'publicationStatus' =>'required',
    //         'productImage' =>'required',
    //     ]);
    //     $product = Product::find($request->id);
    //     $product ->productName = $request->productName;
    //     $product ->productPrice = $request->productPrice;
    //     $product ->productQuantity = $request->productQuantity;
    //     $product ->productSortDescription = $request->productSortDescription;
    //     $product ->productLongtDescription = $request->productLongtDescription;
    //     $product ->publicationStatus = $request->publicationStatus;
    //     $product ->productImage = $request->productImage;
    //     $this->imageExistStatus($request);
    //     $product->save();
    //     return redirect('/product/manage/')->with('message', 'Product info update');
    //
    // }
    //
    // private function imageExistStatus($request) {
    //     $productById = Product::where('id', $request->productId)->first();
    //
    //     $productImage = $request->file('productImage');
    //
    //     if ($productImage) {
    //         $name = $productImage->getClientOriginalName();
    //         $uploaPath = 'public/productImage/';
    //         //$productImage->move($uploaPath, $name)->getFilename();
    //         $productImage->move($uploaPath, $name);
    //         //unlink($productById->productImage);
    //         unlink($uploaPath);
    //
    //         //File::delete($uploaPath);
    //
    //         $imageUrl = $uploaPath . $name;
    //     } else {
    //         $imageUrl = $productById->productImage;
    //     }
    //
    //     return $imageUrl;
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct($id)
    {
        //
        $product =Product::find($id);
        $product->delete();
        return redirect('/product/manage/')->with('message', 'Product info delete');


    }



    public function updateProduct(Request $request){
    $productImage = $request->file('productImage');
    if ($productImage == "") {
    $product = Product::find($request->productId);
    $product->productName = $request->productName;
    $product->categoryId = $request->categoryId;
    $product->manufacturerId = $request->manufacturerId;
    $product->productPrice = $request->productPrice;
    $product->productQuantity = $request->productQuantity;
    $product->productSortDescription = $request->productSortDescription;
    $product->productLongtDescription = $request->productLongtDescription;
    $product->publicationStatus = $request->publicationStatus;
    $product->save();
    return redirect('product/manage')->with('message', 'Product Info Update Successfully');
    } else {
    $oldImage = Product::where('id', $request->productId)->first();
    unlink($oldUrl = $oldImage->productImage);
    $productImage = $request->file('productImage');
    $imageName = $productImage->getClientOriginalName();
    $uploadPath = 'public/productImage/';
    $productImage->move($uploadPath, $imageName);
    $imageUrl = $uploadPath . $imageName;
    $product = Product::find($request->productId);
    $product->productName = $request->productName;
    $product->categoryId = $request->categoryId;
    $product->manufacturerId = $request->manufacturerId;
    $product->productPrice = $request->productPrice;
    $product->productQuantity = $request->productQuantity;
    $product->productSortDescription = $request->productSortDescription;
    $product->productLongtDescription = $request->productLongtDescription;
    $product->ProductImage = $imageUrl;
    $product->publicationStatus = $request->publicationStatus;
    $product->save();
    return redirect('product/manage')->with('message', 'Product Info Update Successfully');
    }
    }

}
