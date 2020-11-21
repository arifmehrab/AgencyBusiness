<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\homecorefeature;
use Illuminate\Http\Request;

class CoreFeatureController extends Controller
{
    // Home Core Features Index ==========
    public function index()
    {
        $coreFeatures = homecorefeature::all();
        return view('Backend.Admin.homecorefeature.core_index', compact('coreFeatures'));
    }


    // Home Core Features Store ===========
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'core_title'        => 'required',
            'short_description' => 'required',
        ]);
        $coreFeatureStore = new homecorefeature();
        // Store
        $coreFeatureStore->core_title        = $request->core_title;
        $coreFeatureStore->short_description = $request->short_description;
        $coreFeatureStore->save();
        // Notification
        $notification = array(
            'message'    => 'CoreFeature Added Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.corefeature.index')->with($notification);
    }


    // Home Core Features Edit ===========
    public function edit($id)
    {
        $coreFeaturesEdit = homecorefeature::findOrFail($id);
        return view('Backend.Admin.homecorefeature.core_edit', compact('coreFeaturesEdit'));
    }

    
    // Home Core Features Update ===========
    public function update(Request $request, $id)
    {
         $coreFeatureUpdate = homecorefeature::findOrFail($id);
         // Update
         $coreFeatureUpdate->core_title        = $request->core_title;
         $coreFeatureUpdate->short_description = $request->short_description;
         $coreFeatureUpdate->save();
         // Notification
         $notification = array(
             'message'    => 'CoreFeature Updated Successfully',
             'alert-type' => 'success',
         );
         // redirect
         return redirect()->route('admin.corefeature.index')->with($notification);
    }


    // Home Core Features Delete ===========
    public function delete($id)
    {
        $coreFeatureDelete = homecorefeature::findOrFail($id);
        $coreFeatureDelete->delete();
        // Notification
        $notification = array(
            'message'    => 'CoreFeature Deleted Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.corefeature.index')->with($notification);
    }
}
