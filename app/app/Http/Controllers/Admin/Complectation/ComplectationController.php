<?php

namespace App\Http\Controllers\Admin\Complectation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complectation;
use App\Models\Brand;

class ComplectationController extends Controller
{
    public function index()
    {
    	$complectations = Complectation::get();
    	return view('admin.complectation.index', compact('complectations'));
    }

    public function create()
    {
    	return view('admin.complectation.add');
    }

    public function store(Request $request)
    {

    }

    public function edit(Complectation $complectation)
    {

    }

    public function update(Complectation $complectation, Request $request)
    {

    }

    public function delete(Complectation $complectation)
    {

    }
}
