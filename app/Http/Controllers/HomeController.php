<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Blog;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data = Activity::all();
        return view('home.index', ['data'=>$data]);
    } 
    public function iletisim()
    {
        return view('home.iletisim');
    }
    public function komiteler()
    {
        return view('home.komiteler');
    }
    public function etkinlik()
    {
        $data = Activity::all();
        return view('home.etkinliklerimiz', ['data'=>$data]);
    }
    public function blog()
    {
        $bloglist = Blog::limit(5)->get();
        return view('home.blog',['bloglist'=>$bloglist]);
    }
    public function blogpage($id)
   {
        $data = Blog::find($id);
        $lastblogs = Blog::limit(10)->get();
        return view('home.blogpage', ['data'=>$data, 'lastblogs'=>$lastblogs]);
    } 
    public function ieee()
    {
        return view('home.hakkimizda.ieee');
    }
    public function yonetim()
    {
        return view('home.hakkimizda.yonetim');
    }
    public function idari()
    {
        return view('home.hakkimizda.idari');
    }
    public function denetleme()
    {
        return view('home.hakkimizda.denetim');
    }
   public function üyelik()
    {
        return view('home.uyeol');
    } 
    public function cs()
    {
        return view('home.komiteler.cs');
    } 
    public function comsoc()
    {
        return view('home.komiteler.comsoc');
    } 
    public function wie()
    {
        return view('home.komiteler.wie');
    } 
    public function robotic()
    {
        return view('home.komiteler.robotic');
    } 


}
