<?php

// app/Http/Controllers/ProficiencyController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proficiency;

class ProficiencyController extends Controller
{
    public function index()
    {
        $proficiency = Proficiency::all();
        return view('proficiency.index', compact('proficiency'));
    }

    public function create()
    {
        return view('proficiency.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for your fields here
        ]);

        Proficiency::create($request->all());

        return redirect()->route('proficiency.index')
            ->with('success', 'Proficiency record created successfully.');
    }

    public function show($id)
    {
        $proficiency = Proficiency::findOrFail($id);
        return view('proficiency.show', compact('proficiency'));
    }

    public function edit($id)
    {
        $proficiency = Proficiency::findOrFail($id);
        return view('proficiency.edit', compact('proficiency'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Add validation rules for your fields here
        ]);

        $proficiency = Proficiency::findOrFail($id);
        $proficiency->update($request->all());

        return redirect()->route('proficiency.index')
            ->with('success', 'Proficiency record updated successfully.');
    }

    public function destroy($id)
    {
        $proficiency = Proficiency::findOrFail($id);
        $proficiency->delete();

        return redirect()->route('proficiency.index')
            ->with('success', 'Proficiency record deleted successfully.');
    }
}
