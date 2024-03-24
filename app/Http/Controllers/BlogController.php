<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Lieberten;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(){
        
        return Inertia::render("Blog",['users'=>Lieberten::paginate(8)->through(fn($user)=>[
            'title' => $user->title,
            'id' => $user->id,
        ]
        

        )]);
    }

    public function trending(){
        return Inertia::render("Trending",['users'=>Lieberten::paginate(28)->through(fn($user)=>[
            'title' => $user->title,
            'id'=> $user->id,
        ]
        

        )]);}


            public function blog($id){
                $content = Storage::get("json/".$id.".json");
                $data = json_decode($content);
                
               
                return Inertia::render('Blogpage',['blogs'=>Lieberten::find($id),'jsons'=>$data]);
               }
   
    }
