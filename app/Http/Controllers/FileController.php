<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
class FileController extends Controller
{
 
       public function index()
        {
            $files = File::all();
            return view('web.admin', compact('files'));
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);
    
            File::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);
    
            return redirect()->route('admin.index');
        }
    
        public function edit($id)
        {
            $file = File::findOrFail($id);
            return view('web.edit', compact('file'));
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
            ]);
    
            $file = File::findOrFail($id);
            $file->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
    
            return redirect()->route('admin.index');
        }
    
        public function destroy($id)
        {
            $file = File::findOrFail($id);
            $file->delete();
            return redirect()->route('admin.index');
        }
    
}