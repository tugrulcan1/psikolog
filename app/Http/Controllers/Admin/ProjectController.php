<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HousingStatus;
use App\Models\HousingType;
use App\Models\Project;
use App\Models\ProjectHousings;
use Illuminate\Http\Request;
use Darryldecode\Cart\Validators\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Project::orderBy("created_at","desc")->get();
        return view('admin.projects.index' , compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $housing_types = HousingType::all();
        $housing_status = HousingStatus::all();
        return view('admin.projects.create', ['housing_types' => $housing_types, 'housing_status' => $housing_status]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $allDatas = $request->all();
    //     $vData = $request->validate([
    //         'project_title' => 'required|string',
    //         'description' => 'required|string|max:128',
    //         'image' => 'required',
    //     ]);
    //     $projectId = Project::create($vData);
      
    //     return redirect()->route('admin.projects.create')->with('success', 'Project and housings created successfully');
    // }



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



        Project::create([
            'project_title' => $request->input('project_title'),
            'description' => $request->input('description'),
            'image' => $dosyaAdi,
        ]);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proje başarıyla oluşturuldu.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('client.projectsdetail', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            'project_title' => 'required',
            'description' => 'required'
            
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
            ->with('success', 'Proje başarıyla güncellendi.');
    }

    /**
     * Remove the specified resource from storage.
     */


    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proje başarıyla silindi.');
    }

 
}