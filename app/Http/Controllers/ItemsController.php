<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\item;
use App\Category;
use App\ItemColor;
use App\coverImage2;
use App\coverImage3;
use App\coverImage4;



class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','showcat']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $items =  item::orderBy('created_at','desc')->paginate(10);
        return view('pages.item')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.create')->with('categories',$categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'itemID' =>  'required',
            'cover_image' =>'image|nullable|max:5000',
            'cover_image2' =>'image|nullable|max:5000',
            'cover_image3' =>'image|nullable|max:5000',
            'cover_image4' =>'image|nullable|max:5000',
            'category_id' =>  'required',
            'price' =>  'required|integer'

        ]);
//handle file upload
         
//handle file upload 2 
if($request->hasFile('cover_image') ){
    //get file name with extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
    //get just file name 
        $filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
    //get just extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore = $filename.'_'.time().'.'.$extension;
    //upload the image
        $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);

}else {
    $fileNameToStore = 'noimage.jpg';
}
          


//handle file upload 2 
if($request->hasFile('cover_image2') ){
    //get file name with extension
        $filenameWithExt2 = $request->file('cover_image2')->getClientOriginalName();
    //get just file name 
        $filename2 = pathInfo($filenameWithExt2,PATHINFO_FILENAME);
    //get just extension
        $extension2 = $request->file('cover_image2')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore2 = $filename2.'_'.time().'.'.$extension2;
    //upload the image
        $path2 = $request->file('cover_image2')->storeAs('public/cover_images2',$fileNameToStore2);

}
else {
    $fileNameToStore2 = 'noimage.jpg';
}

//handle file upload 3 
if($request->hasFile('cover_image3') ){
    //get file name with extension
        $filenameWithExt3 = $request->file('cover_image3')->getClientOriginalName();
    //get just file name 
        $filename3 = pathInfo($filenameWithExt3,PATHINFO_FILENAME);
    //get just extension
        $extension3 = $request->file('cover_image3')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore3 = $filename3.'_'.time().'.'.$extension3;
    //upload the image
        $path3 = $request->file('cover_image3')->storeAs('public/cover_images3',$fileNameToStore3);

}
else {
    $fileNameToStore3 = 'noimage.jpg';
}
//handle file upload 4 
if($request->hasFile('cover_image4') ){
    //get file name with extension
        $filenameWithExt4 = $request->file('cover_image4')->getClientOriginalName();
    //get just file name 
        $filename4 = pathInfo($filenameWithExt4,PATHINFO_FILENAME);
    //get just extension
        $extension4 = $request->file('cover_image4')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore4 = $filename4.'_'.time().'.'.$extension4;
    //upload the image
        $path4 = $request->file('cover_image4')->storeAs('public/cover_images4',$fileNameToStore4);

}
else {
    $fileNameToStore4 = 'noimage.jpg';
}
//image section 2/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($request->hasFile('cover_imageb1') ){
    //get file name with extension
        $filenameWithExtb = $request->file('cover_imageb1')->getClientOriginalName();
    //get just file name 
        $filenameb = pathInfo($filenameWithExtb,PATHINFO_FILENAME);
    //get just extension
        $extensionb = $request->file('cover_imageb1')->getClientOriginalExtension();
    //file name to store
    $fileNameToStoreb = $filenameb.'_'.time().'.'.$extensionb;
    //upload the image
        $pathb = $request->file('cover_imageb1')->storeAs('public/cover_imagesb',$fileNameToStoreb);

}else {
    $fileNameToStoreb = 'noimage.jpg';
}
          


//handle file upload 2 
if($request->hasFile('cover_image2b2') ){
    //get file name with extension
        $filenameWithExt2b2 = $request->file('cover_image2b2')->getClientOriginalName();
    //get just file name 
        $filename2b2 = pathInfo($filenameWithExt2b2,PATHINFO_FILENAME);
    //get just extension
        $extension2b2 = $request->file('cover_image2b2')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore2b2 = $filename2b2.'_'.time().'.'.$extension2b2;
    //upload the image
        $path2b2 = $request->file('cover_image2b2')->storeAs('public/cover_images2b2',$fileNameToStore2b2);

}
else {
    $fileNameToStore2b2 = 'noimage.jpg';
}

//handle file upload 3 
if($request->hasFile('cover_image3b3') ){
    //get file name with extension
        $filenameWithExt3b3 = $request->file('cover_image3b3')->getClientOriginalName();
    //get just file name 
        $filename3b3 = pathInfo($filenameWithExt3b3,PATHINFO_FILENAME);
    //get just extension
        $extension3b3 = $request->file('cover_image3b3')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore3b3 = $filename3b3.'_'.time().'.'.$extension3b3;
    //upload the image
        $path3b3 = $request->file('cover_image3b3')->storeAs('public/cover_images3b3',$fileNameToStore3b3);

}
else {
    $fileNameToStore3b3 = 'noimage.jpg';
}
//handle file upload 4 
if($request->hasFile('cover_image4b4') ){
    //get file name with extension
        $filenameWithExt4b4 = $request->file('cover_image4b4')->getClientOriginalName();
    //get just file name 
        $filename4b4 = pathInfo($filenameWithExt4b4,PATHINFO_FILENAME);
    //get just extension
        $extension4b4 = $request->file('cover_image4b4')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore4b4 = $filename4b4.'_'.time().'.'.$extension4b4;
    //upload the image
        $path4b4 = $request->file('cover_image4b4')->storeAs('public/cover_images4b4',$fileNameToStore4b4);

}
else {
    $fileNameToStore4b4 = 'noimage.jpg';
}
//end image section 2////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//image section 3

if($request->hasFile('cover_imagec1') ){
    //get file name with extension
        $filenameWithExtc = $request->file('cover_imagec1')->getClientOriginalName();
    //get just file name 
        $filenamec = pathInfo($filenameWithExtc,PATHINFO_FILENAME);
    //get just extension
        $extensionc = $request->file('cover_imagec1')->getClientOriginalExtension();
    //file name to store
    $fileNameToStorec = $filenamec.'_'.time().'.'.$extensionc;
    //upload the image
        $pathc = $request->file('cover_imagec1')->storeAs('public/cover_imagesc',$fileNameToStorec);

}else {
    $fileNameToStorec = 'noimage.jpg';
}
          


//handle file upload 2 
if($request->hasFile('cover_image2c2') ){
    //get file name with extension
        $filenameWithExt2c2 = $request->file('cover_image2c2')->getClientOriginalName();
    //get just file name 
        $filename2c2 = pathInfo($filenameWithExt2c2,PATHINFO_FILENAME);
    //get just extension
        $extension2c2 = $request->file('cover_image2c2')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore2c2 = $filename2c2.'_'.time().'.'.$extension2c2;
    //upload the image
        $path2c2 = $request->file('cover_image2c2')->storeAs('public/cover_images2c2',$fileNameToStore2c2);

}
else {
    $fileNameToStore2c2 = 'noimage.jpg';
}

//handle file upload 3 
if($request->hasFile('cover_image3c3') ){
    //get file name with extension
        $filenameWithExt3c3 = $request->file('cover_image3c3')->getClientOriginalName();
    //get just file name 
        $filename3c3 = pathInfo($filenameWithExt3c3,PATHINFO_FILENAME);
    //get just extension
        $extension3c3 = $request->file('cover_image3c3')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore3c3 = $filename3c3.'_'.time().'.'.$extension3c3;
    //upload the image
        $path3c3 = $request->file('cover_image3c3')->storeAs('public/cover_images3c3',$fileNameToStore3c3);

}
else {
    $fileNameToStore3c3 = 'noimage.jpg';
}
//handle file upload 4 
if($request->hasFile('cover_image4c4') ){
    //get file name with extension
        $filenameWithExt4c4 = $request->file('cover_image4c4')->getClientOriginalName();
    //get just file name 
        $filename4c4 = pathInfo($filenameWithExt4c4,PATHINFO_FILENAME);
    //get just extension
        $extension4c4 = $request->file('cover_image4c4')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore4c4 = $filename4c4.'_'.time().'.'.$extension4c4;
    //upload the image
        $path4c4 = $request->file('cover_image4c4')->storeAs('public/cover_images4c4',$fileNameToStore4c4);

}
else {
    $fileNameToStore4c4 = 'noimage.jpg';
}
//end image section 3
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//image section 4

if($request->hasFile('cover_imaged1') ){
    //get file name with extension
        $filenameWithExtd = $request->file('cover_imaged1')->getClientOriginalName();
    //get just file name 
        $filenamed = pathInfo($filenameWithExtd,PATHINFO_FILENAME);
    //get just extension
        $extensiond = $request->file('cover_imaged1')->getClientOriginalExtension();
    //file name to store
    $fileNameToStored = $filenamed.'_'.time().'.'.$extensiond;
    //upload the image
        $pathd = $request->file('cover_imaged1')->storeAs('public/cover_imagesd',$fileNameToStored);
}else {
    $fileNameToStored = 'noimage.jpg';
}
          


//handle file upload 2 
if($request->hasFile('cover_image2d2') ){
    //get file name with extension
        $filenameWithExt2d2 = $request->file('cover_image2d2')->getClientOriginalName();
    //get just file name 
        $filename2d2 = pathInfo($filenameWithExt2d2,PATHINFO_FILENAME);
    //get just extension
        $extension2d2 = $request->file('cover_image2d2')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore2d2 = $filename2d2.'_'.time().'.'.$extension2d2;
    //upload the image
        $path2d2 = $request->file('cover_image2d2')->storeAs('public/cover_images2d2',$fileNameToStore2d2);

}
else {
    $fileNameToStore2d2 = 'noimage.jpg';
}

//handle file upload 3 
if($request->hasFile('cover_image3d3') ){
    //get file name with extension
        $filenameWithExt3d3 = $request->file('cover_image3d3')->getClientOriginalName();
    //get just file name 
        $filename3d3 = pathInfo($filenameWithExt3d3,PATHINFO_FILENAME);
    //get just extension
        $extension3d3 = $request->file('cover_image3d3')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore3d3 = $filename3d3.'_'.time().'.'.$extension3d3;
    //upload the image
        $path3d3 = $request->file('cover_image3d3')->storeAs('public/cover_images3d3',$fileNameToStore3d3);

}
else {
    $fileNameToStore3d3 = 'noimage.jpg';
}
//handle file upload 4 
if($request->hasFile('cover_image4d4') ){
    //get file name with extension
        $filenameWithExt4d4 = $request->file('cover_image4d4')->getClientOriginalName();
    //get just file name 
        $filename4d4 = pathInfo($filenameWithExt4d4,PATHINFO_FILENAME);
    //get just extension
        $extension4d4 = $request->file('cover_image4d4')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore4d4 = $filename4d4.'_'.time().'.'.$extension4d4;
    //upload the image
        $path4d4 = $request->file('cover_image4d4')->storeAs('public/cover_images4d4',$fileNameToStore4d4);

}
else {
    $fileNameToStore4d4 = 'noimage.jpg';
}
//end image section 4
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

            

//end handle file upload
        $items = new item;
        $itemColor = new itemColor;
        $coverImage2 = new coverImage2;
        $coverImage3 = new coverImage3;
        $coverImage4 = new coverImage4;

        $items->title = $request->input('title');
        $items->description = $request->input('description');
        $items->itemID = $request->input('itemID');
        $items->category_id = $request->input('category_id');
        $items->category_sub = $request->input('category_sub');

        $itemColor->id = $items->id;
        $itemColor->itemid = $request->input('itemID');
        //color1 with images
        $itemColor->color1 = $request->input('itemcolor_id');
        $items->cover_image = $fileNameToStore;
        $items->cover_image2 = $fileNameToStore2;
        $items->cover_image3 = $fileNameToStore3;
        $items->cover_image4 = $fileNameToStore4;   
        //color1 with images

        //color2 with images
        $itemColor->color2 = $request->input('itemcolor_id2');
        $coverImage2->cover_imageb1 = $fileNameToStoreb;
        $coverImage2->itemID = $request->input('itemID');
        $coverImage2->cover_imageb2 = $fileNameToStore2b2;
        $coverImage2->cover_imageb3 = $fileNameToStore3b3;
        $coverImage2->cover_imageb4 = $fileNameToStore4b4; 
        //color2 with images
       
        //color3 with images
        $itemColor->color3 =$request->input('itemcolor_id3');
        $coverImage3->itemID = $request->input('itemID');
        $coverImage3->cover_imagec1 = $fileNameToStorec;
        $coverImage3->cover_imagec2 = $fileNameToStore2c2;
        $coverImage3->cover_imagec3 = $fileNameToStore3c3;
        $coverImage3->cover_imagec4 = $fileNameToStore4c4; 
          //color3 with images

          //color4 with images
       $itemColor->color4 = $request->input('itemcolor_id4');
       $coverImage4->itemID = $request->input('itemID');
       $coverImage4->cover_imaged1 = $fileNameToStored;
       $coverImage4->cover_imaged2 = $fileNameToStore2d2;
       $coverImage4->cover_imaged3 = $fileNameToStore3d3;
       $coverImage4->cover_imaged4 = $fileNameToStore4d4; 
        //color4 with images
 
 
        $items->user_id = auth()->user()->id;
     
        $items->price = $request->input('price');
        $items->save();
        $itemColor->save();
        $coverImage2->save();
        $coverImage3->save();
        $coverImage4->save();
        

        return redirect('/')->with('success','post created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items =  item::find($id);
        $itemcolor1 = ItemColor::where('itemID',$items->itemID)->get();
        $coverImage2 = coverImage2::where('itemID',$items->itemID)->get();
        $coverImage3 = coverImage3::where('itemID',$items->itemID)->get();
        $coverImage4 = coverImage4::where('itemID',$items->itemID)->get();

  
      
    foreach($itemcolor1 as $itemcolors1){
      foreach($coverImage2 as $coverImages2){
        foreach($coverImage3 as $coverImages3){
             foreach($coverImage4 as $coverImages4){

        return view('/pages.show')
       ->with('items',$items)
       ->with('itemcolors1',$itemcolors1)
       ->with('coverImages2',$coverImages2)
       ->with('coverImages3',$coverImages3)
       ->with('coverImages4',$coverImages4);
        
  }//end first for 
   }//end second for 
     }   //end third for 
       }  //end 4th for 
    }    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $items =  item::find($id);
        $categories=  Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id]= $category->name;
        }

        //check for correct user
        if(auth()->user()->id !== $items->user_id){
            return redirect('/pages')->with('error','unauthorized page');
        }
        return view('/pages.edit')->with('items',$items)->with('categories',$cats);
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'itemID' =>  'required',
            'category_id' =>'required|integer',
            'price' =>'required|integer'
        ]);

        if($request->hasFile('cover_image') ){
            //get file name with extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name 
                $filename = pathInfo($filenameWithExt,PATHINFO_FILENAME);
            //get just extension
                $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
                $filenameToStore = $filename.'_'.time().'.'.$extension;
            //upload the image
                $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);

        }
        //handle file upload 2 
if($request->hasFile('cover_image2') ){
    //get file name with extension
        $filenameWithExt2 = $request->file('cover_image2')->getClientOriginalName();
    //get just file name 
        $filename2 = pathInfo($filenameWithExt2,PATHINFO_FILENAME);
    //get just extension
        $extension2 = $request->file('cover_image2')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore2 = $filename2.'_'.time().'.'.$extension2;
    //upload the image
        $path2 = $request->file('cover_image2')->storeAs('public/cover_images2',$fileNameToStore2);

}

//handle file upload 3 
if($request->hasFile('cover_image3') ){
    //get file name with extension
        $filenameWithExt3 = $request->file('cover_image3')->getClientOriginalName();
    //get just file name 
        $filename3 = pathInfo($filenameWithExt3,PATHINFO_FILENAME);
    //get just extension
        $extension3 = $request->file('cover_image3')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore3 = $filename3.'_'.time().'.'.$extension3;
    //upload the image
        $path3 = $request->file('cover_image3')->storeAs('public/cover_images3',$fileNameToStore3);

}

//handle file upload 4 
if($request->hasFile('cover_image4') ){
    //get file name with extension
        $filenameWithExt4 = $request->file('cover_image4')->getClientOriginalName();
    //get just file name 
        $filename4 = pathInfo($filenameWithExt4,PATHINFO_FILENAME);
    //get just extension
        $extension4 = $request->file('cover_image4')->getClientOriginalExtension();
    //file name to store
    $fileNameToStore4 = $filename4.'_'.time().'.'.$extension4;
    //upload the image
        $path4 = $request->file('cover_image4')->storeAs('public/cover_images4',$fileNameToStore4);

}


        
        $items = item::find($id);
        $items->title = $request->input('title');
        $items->itemID = $request->input('itemID');
        $items->description = $request->input('description');
        $items->category_id = $request->input('category_id');
        $items->price = $request->input('price');
        if($request->hasFile('cover_image')){
            $items->cover_image = $filenameToStore; 
        }
        if($request->hasFile('cover_image2')){
            $items->cover_image2 =    $fileNameToStore2; 
        }
        if($request->hasFile('cover_image3')){
            $items->cover_image3 = $fileNameToStore3; 
        }
        if($request->hasFile('cover_image4')){
            $items->cover_image4 = $fileNameToStore4; 
        }
        $items->save();

        return redirect('item')->with('success','item updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = item::find($id);
        if(auth()->user()->id !== $items->user_id){
            return redirect('/pages')->with('error','unauthorized page');
        }

        if($items->cover_image !='noimage.jpg'){
            Storage::delete('public/cover_images/'.$items->cover_image);
        }
        
        if($items->cover_image2 !='noimage.jpg'){
            Storage::delete('public/cover_images2/'.$items->cover_image2);
        }
        
        if($items->cover_image3 !='noimage.jpg'){
            Storage::delete('public/cover_images3/'.$items->cover_image3);
        }
        
        if($items->cover_image4 !='noimage.jpg'){
            Storage::delete('public/cover_images4/'.$items->cover_image4);
        }

        $items->delete();
        return redirect('item')->with('success','item removed');
    }

    public function showcat($showcat1)
    {
       $showcat =  item::orderBy('created_at','asc')->paginate(30);
        return view('/items/showcat')->with('showcat',$showcat)->with('showcat1',$showcat1);
    }
    public function showSubCat($showcat1,$subcat)
    {
       $showcat =  item::orderBy('created_at','asc')->paginate(30);
        return view('/items/subcat')->with('showcat',$showcat)->with('showcat1',$showcat1)->with('subcat',$subcat);
    }
}
