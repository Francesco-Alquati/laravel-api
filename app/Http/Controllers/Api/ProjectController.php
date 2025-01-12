<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('type', 'technologies')->paginate(6);
        return response()->json([
            'success' => true,
            'results' => $projects
        ]);
    }

    public function show($slug)
    {
        $projects = Project::with('type', 'technologies')->where('slug', $slug)->first();

        if($projects){
            return response()->json([
                'success' => true,
                'results' => $projects
            ]);
        }

        return response()->json([
            'success' => false
        ]);
    }
}
