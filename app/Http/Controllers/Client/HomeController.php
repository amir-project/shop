<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $category=category::query()->where('category_id',null)->get();
        return view(
            'client.Home',[
                'categories'=>$category,
            ]);
        }
}
