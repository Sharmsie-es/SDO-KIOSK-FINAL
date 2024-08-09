<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Background;

class BackgroundController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'background' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->file('background')) {
            $path = $request->file('background')->store('backgrounds', 'public');

            // Save the path in the database
            Background::updateOrCreate(
                ['id' => 1], // Assuming you only want one background image
                ['path' => $path]
            );

            return back()->with('success', 'Background image uploaded successfully.');
        }

        return back()->withErrors(['background' => 'Please select a valid image file.']);
    }
}
