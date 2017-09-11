<?php

namespace App\Http\Controllers;

use App\Model\EstateProject;
use App\Model\ProjectLocation;
use Illuminate\Http\Request;

class MapController extends Controller
{

    public function location()
    {
        $projectId = EstateProject::getCurrentProjectIdFromSession();
        $projectLocation = ProjectLocation::getByProjectID($projectId);
        return view('location', compact('projectLocation'));
    }

    public function save(Request $request)
    {
        $this->validate($request, ['positions' =>'required', 'photo'  => 'mimes:jpeg,jpg|image']);
        $projectId = EstateProject::getCurrentProjectIdFromSession();
        $projectLocation = ProjectLocation::getByProjectID($projectId);
        $projectLocation->map_data = $request->get('positions', '');
        $projectLocation->save();
        $projectLocation->setPhoto($request->file('photo'));

        return redirect()->back()->with('success', 'İşleminiz başarıyla kaydedildi.');
    }
}
