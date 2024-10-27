<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
     /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $member = TeamMember::where('slug', $slug)->first();
        
        return view('pages.team.detail', [
            'member' => $member
        ]);
    }
}
