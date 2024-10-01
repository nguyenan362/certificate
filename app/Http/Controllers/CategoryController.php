<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Course::all(); 

        return view('admin.category', compact('category'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'courseName' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'required|integer',
        ]);
        $validatedData['course_id'] = 1;
        Course::create($validatedData); 

        return redirect()->route('admin.category.index')->with('success', 'Category added successfully.');
    }

    public function destroy($id)
    {
        Course::destroy($id); 

        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }
}
