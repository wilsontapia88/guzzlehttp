<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositorios\Posts;

class PostController extends Controller
{
    //------METODO CONSTRUCTOR--------------
    private $posts;    

    public function __construct(Posts $posts)
    {
       
        $this->posts = $posts;
        
    }

    //-------------------------------------------

    public function index()
    {
       
        $posts = $this->posts->all();
    
      
        return view('postsindex', compact('posts'));
    }

    public function show($id)
    {
        $post = $this->posts->find($id);    
        return view('postshow', compact('post'));
    }
}
