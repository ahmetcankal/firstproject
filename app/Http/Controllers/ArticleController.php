<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //

     // Retrieve function 
     public function index() { 
          
        $articles = Article::all(); 
  
        return view('gfg')->with('articles', $articles); 
  
    } 


    // Insert function 
    public function insert() { 
  
        $article = new Article; 
      
        $article->topic = "i did it"; 
        $article->content = "View is the data display at the user end."; 
      
        $article->save(); 
      
        echo "Insert Successful!"; 
      
        } 
          
        // Update function 
        public function update() { 
      
            $article = Article::find(2); 
      
            $article->topic = "Laravel"; 
      
            $article->save(); 
      
            echo "Update Successful!"; 
      
        } 
          
        // Delete function 
        public function delete() { 
      
            $article = Article::find(2); 
      
            $article->delete(); 
      
            echo "Delete Successful!"; 
      
        } 


-
}
