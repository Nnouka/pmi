<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = TeamMember::all();
        return view('pages.team.members', [
            'members' => $members,
        ]);
    }
   
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
