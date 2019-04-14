<?php

namespace App\Repositorios;
use GuzzleHttp\Client;

class Posts extends GuzzleHttpRequest
{
    

   
    
    public function all()
    {   
        return $this->get('posts');
    }

    public function find($id)
    {          
        return $this->get("posts/{$id}");    
    }
    
}

 