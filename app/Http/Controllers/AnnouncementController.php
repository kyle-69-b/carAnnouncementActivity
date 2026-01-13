<?php
namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Mail\AnnouncementMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AnnouncementController extends Controller
{
    public function create()
    {
        return view('announcements.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to Database
        $announcement = Announcement::create([
            'title' => $data['title'],
            'message' => $data['message'],
            'date_sent' => now(),
        ]);

        // Send Email (Update with your actual email)
        Mail::to('reggieninozafrapelesores@gmail.com')->send(new AnnouncementMail($data));

        return back()->with('success', 'Announcement sent and saved successfully!');
    }
}
