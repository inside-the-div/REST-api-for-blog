<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\post;
class seederController extends Controller
{
    public function index(){

    	// $catId = [];

    	// for($i=1;$i<=100;$i++){
    	// 	$post = post::find($i);

    	// 	for($j=0;$j<7;$j++){
    	// 		$category_id = category::all()->random()->id;
    	// 		array_push($catId, $category_id);
    	// 	}
    	// 	$post->categories()->sync($catId);
    	// 	$catId = [];
    	// }
    }
}
