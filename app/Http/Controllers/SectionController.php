<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function manage()
    {
        $sections = Section::all();
        return view('sections.manage', compact('sections'));
    }

    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return view('sections.edit', compact('section'));
    }
    public function update(Request $request, Section $section)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $section->update([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('sections.manage')->with('status', ucfirst($section->section) . ' section updated successfully.');
    }
}
