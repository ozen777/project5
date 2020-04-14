<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wishlist;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlist =  Wishlist::orderBy('created_at','asc')->paginate(10);
        return view('wishlist.index')->with('wishlist',$wishlist);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wishlist = Wishlist::all();
        return view('wishlist.create')->with('wishlist',$wishlist);
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
            'name' => 'required',
            'itemName' =>  'required',
            'phonenumber' =>  'required|integer'

        ]);

        $wishlist = new Wishlist;
        $wishlist->name = $request->input('name');
        $wishlist->itemName = $request->input('itemName');
        $wishlist->phonenumber = $request->input('phonenumber');
        $wishlist->user_id = auth()->user()->id;
        $wishlist->save();
        return redirect('wishlist')->with('success','wish created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wishlist = Wishlist::all();
        return view('wishlist.show')->with('wishlist',$wishlist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wishlist =  Wishlist::find($id);
        if(auth()->user()->id !== $wishlist->user_id){
            return redirect('/wishlist')->with('error','unauthorized page');
        }
        return view('/wishlist.edit')->with('wishlist',$wishlist);
     

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
            'name' => 'required',
            'itemName' =>  'required',
            'phonenumber' =>  'required|integer'

        ]);

        $wishlist = Wishlist::find($id);
        $wishlist->name = $request->input('name');
        $wishlist->itemName = $request->input('itemName');
        $wishlist->phonenumber = $request->input('phonenumber');
        $wishlist->save();
        return redirect('wishlist')->with('success','wish updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wishlist =  Wishlist::find($id);
        if(auth()->user()->id !== $wishlist->user_id){
            return redirect('/wishlist')->with('error','unauthorized page');
        }
        $wishlist->delete();
        return redirect('/wishlist')->with('success','wish removed');

    }
}
