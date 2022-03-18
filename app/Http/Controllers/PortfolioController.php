<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index($project) {

        $projectId = Project::
              where('name', '=', $project)
            ->get()[0]
            ->id;

        $projectDetails = Project::
              where('id', '=', $projectId)
            ->get()[0];

        $tags = explode(",", $projectDetails["tags"]);

        // Catch when there are no tags at all
        if ( (sizeof($tags) == 1) && ($tags[0] == "") ) {
            $tags = [];
        }

        return view('portfolioProject', [
            'page' => 'portfolio',
            'project' => $project,
            'projectDetails' => $projectDetails,
            'tags' => $tags,
        ]);
    }

}
