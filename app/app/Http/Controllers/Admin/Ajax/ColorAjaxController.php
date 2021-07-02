<?php

namespace App\Http\Controllers\Admin\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorAjaxController extends Controller
{
    public function palette(Request $request)
    {
    	$query = Color::query();
    	if($request->has('brand_id'))
    		$query->where('brand_id', $request->get('brand_id'));
    	$colors = $query->get();

    	return response()->json([
    		'title' => 'Палитра цветов',
    		'view' => view('admin.color.color_cells', compact('colors'))->render(),
    		'success' => true
    	]);
    }
}
