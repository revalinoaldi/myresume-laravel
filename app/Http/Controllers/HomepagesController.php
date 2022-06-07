<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomepagesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Curriculum Vitae | Farhan Afif Aldiansyah",
            'project' => Project::all()
        ];
        // dd($data);
        return view('main', $data);
    }
}
