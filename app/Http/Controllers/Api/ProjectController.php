<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::paginate(3);
        return response()->json($projects);
    }

    public function show(string $id)
    {
        $project = Project::find($id);
    
        if (!$project) {
            return response()->json(['error' => 'Progetto non trovato'], 404);
        }
    
        return response()->json($project);
    }
    
}
