<?php

namespace App\Http\Controllers;

use App\Models\Kuliah;
use Illuminate\Http\Request;

class KuliahController extends Controller
{
    public function index(){
        return view('kuliah.index');
    }
}
