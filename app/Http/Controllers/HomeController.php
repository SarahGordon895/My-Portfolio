<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
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

    public function downloadCv()
    {
        $cvPath = public_path('cv/CurriculumnVitae.pdf');

        if (!file_exists($cvPath)) {
            abort(404, 'CV file not found.');
        }

        return response()->download($cvPath, 'Sarah_Gordon_CV.pdf');
    }

}
