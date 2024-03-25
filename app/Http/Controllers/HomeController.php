<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Paketwisata;
use Illuminate\Support\Str;
use App\Models\Penginapan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $berita = Berita::all()->take(3);
        // $berita = Str::limit($berita->berita,10);
        $paket = Paketwisata::all();
        return view('homepage', compact('berita','paket')
        );
    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }



    public function show($id)
{

    $blog = Berita::find($id);
    
    return view('blog.berita', compact('blog'));
}




public function blogs()
{

    $berita = Berita::all();
    
   
    return view('blog.blogs', compact('berita')
    );
}




public function paket()
{

   
    $penginapan = Penginapan::all();
    $paket = Paketwisata::all();
    return view('travel.index', compact('paket','penginapan')
    );
}


public function paketshow($id){
    
    $paket = Paketwisata::find($id);
    
    return view('travel.show', compact('paket'));
} 


public function penginapanshow($id){
    
    $penginapan = Penginapan::find($id);
    
    return view('penginapan', compact('penginapan'));
} 

}