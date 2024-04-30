<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
public function index()
{
    $projects = Project::all();
    return view('admin.projects.index', compact('projects'));
}
public function show(Project $project)
{
    return view('client.projectsdetail', compact('project'));
}
public function asd()
{
    $projects = Project::all();
   return view('client.projects',compact('projects'));
}


public function create()
{
    return view('admin.projects.create');
}

public function store(Request $request)
{
     $request->validate([
        'project_title' => 'required',
        'description' => 'required',
        'image' => 'required',
    ]);

    $dosya = $request->file('image');

    // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
    if (!$dosya || !$dosya->isValid()) {
        return redirect()->back()->with('error', 'Geçerli bir dosya seçin.');
    }

    // Dosyayı yükleme klasörüne kaydetme
    $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
    $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet



    project::create([
        'project_title' => $request->input('project_title'),
        'description' => $request->input('description'),
        'image' => $dosyaAdi,
    ]);

    return redirect()->route('admin.projects.index')
        ->with('success', 'project başarıyla oluşturuldu.');
}

public function edit(Project $project)
{
    return view('admin.projects.edit', compact('project'));
}

public function update(Request $request, Project $project)
{
    $validator = Validator::make($request->all(), [
        'title' => 'required',
        'content' => 'required',
        'short_content' => 'required'
        
    ]);

    if ($validator->fails()) {
        return redirect()->route('admin.projects.edit', $project->id)
            ->withErrors($validator)
            ->withInput();
    }


    $dosya = $request->file('image');
    $dosyaAdi=$project->image;

    // Eğer dosya seçilmediyse veya geçerli bir dosya değilse hata döndür
    if ($dosya) {
         // Dosyayı yükleme klasörüne kaydetme
    $dosyaAdi = $dosya->getClientOriginalName(); // Dosya adını alın
    $dosya->move(public_path('uploads'), $dosyaAdi); // Dosyayı uploads klasörüne kaydet

    }



    $project->update([
        'project_title' => $request->input('project_title'),
        'description' => $request->input('description'),
        'image' => $dosyaAdi
    ]);

    return redirect()->route('admin.projects.index')
        ->with('success', 'project başarıyla güncellendi.');
}

public function destroy(Project $project)
{
    $project->delete();

    return redirect()->route('admin.projects.index')
        ->with('success', 'project başarıyla silindi.');
}
}

