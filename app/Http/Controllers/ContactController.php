<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ContactController extends Controller
{
    public function save(Request $request)
    {
        // ✅ Validate incoming form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // ✅ Prepare the data
        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'submitted_at' => now()->toDateTimeString(),
        ];

        // ✅ Define the file path
        $filePath = storage_path('app/contact_submissions.json');

        // ✅ Read existing data or initialize empty array
        $existingData = File::exists($filePath)
            ? json_decode(File::get($filePath), true)
            : [];

        // ✅ Append new data
        $existingData[] = $data;

        // ✅ Save updated data back to file
        File::put($filePath, json_encode($existingData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        // ✅ Redirect back with a success message
        return redirect()->back()->with('success', 'Your message has been saved successfully!');
    }
    public function showSavedMessages()
    {
    $filePath = storage_path('app/contact_submissions.json');
    
    $messages = \Illuminate\Support\Facades\File::exists($filePath)
        ? json_decode(\Illuminate\Support\Facades\File::get($filePath), true)
        : [];

    return view('save', ['messages' => $messages]);
}
    

}