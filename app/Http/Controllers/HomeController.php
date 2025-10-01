<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class HomeController extends Controller
{
    public function index()
    {
        // Fetch skills and projects from database
        $skills = Skill::all();      // Returns all skills
        $projects = Project::all();  // Returns all projects

        return view('home', compact('skills', 'projects'));
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Mail::to('gordonsarah2404@gmail.com')->send(new ContactMail($data));

        return back()->with('success', 'Message sent successfully!');
    }

}
