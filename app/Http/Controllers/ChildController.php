<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Father;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function fathersWithChildren()
    {
        $father_1_child = Father::find(1)->child;

        $father_1_name = Child::find(1)->father;

        $fathers = Father::all();
        $allchildren = Child::all();

        return view('index', compact('fathers', 'allchildren', 'father_1_child', 'father_1_name'));
    }
}
