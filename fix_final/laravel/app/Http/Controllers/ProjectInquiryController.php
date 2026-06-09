<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectInquiry;

class ProjectInquiryController extends Controller
{
    public function store(Request $request, $shotId)
    {
        $request->validate([
            'message' => 'required|string|min:50',
            'target_date' => 'required|string',
            'budget' => 'nullable|numeric|min:0',
            'recommend_budget' => 'nullable',
            'contact_person' => 'required|string|max:255',
        ]);

        ProjectInquiry::create([
            'user_id' => auth()->id(),
            'shots_id' => $shotId,      
            'project_details' => $request->message,
            'target_date' => $request->target_date,
            'project_budget' => $request->budget,
            'recommend_budget' => $request->has('recommend_budget'), 
            'contact_person' => $request->contact_person, 
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pesan Project Inquiry berhasil dikirim!'
        ]);
    }

    public function index()
    {
        $inquiries = \App\Models\ProjectInquiry::whereHas('shot', function($query) {
            $query->where('user_id', auth()->id());
        })->with(['shot', 'user'])->latest()->get();

        return view('inquiries.index', compact('inquiries'));
    }
}