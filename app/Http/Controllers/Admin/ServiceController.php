<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    // Service Index ==========
    public function index()
    {
        $services = service::all();
        return view('Backend.Admin.service.service_index', compact('services'));
    }

    // service Create ============
    public function create()
    {
        return view('Backend.Admin.service.service_create');
    }

    // slider Store ===========
    public function store(Request $request)
    {
        // validate
        $request->validate([
            'service_title' => 'required',
            'service_body'  => 'required',
        ]);

        $serviceStore = new service();

        // Store
        $serviceStore->service_title  = $request->service_title;
        $serviceStore->service_slug   = Str::slug($request->service_title, '-');
        $serviceStore->service_icon   = $request->service_icon;
        $serviceStore->service_body   = $request->service_body;
        $serviceStore->service_status = '1';
        $serviceStore->save();
        // Notification
        $notification = array(
            'message'    => 'Service Added Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.service.index')->with($notification);
    }

    // Service View ==========
    public function view($id)
    {
        $serviceView = service::findOrFail($id);
        return view('Backend.Admin.service.service_view', compact('serviceView'));
    }
    // Slider Edit ===========
    public function edit($id)
    {
        $serviceEdit = service::findOrFail($id);
        return view('Backend.Admin.service.service_edit', compact('serviceEdit'));
    }

    // Service Update ===========
    public function update(Request $request, $id)
    {
        $serviceUpdate = service::findOrFail($id);

        // UPdate
        $serviceUpdate->service_title  = $request->service_title;
        $serviceUpdate->service_slug   = Str::slug($request->service_title, '-');
        $serviceUpdate->service_icon   = $request->service_icon;
        $serviceUpdate->service_body   = $request->service_body;
        $serviceUpdate->service_status = '1';
        $serviceUpdate->save();
        // Notification
        $notification = array(
            'message'    => 'Service Update Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.service.index')->with($notification);
    }

    // Slider Delete ===========
    public function delete($id)
    {
        $serviceDelete = service::findOrFail($id);
        $serviceDelete->delete();
        // Notification
        $notification = array(
            'message'    => 'service Deleted Successfully',
            'alert-type' => 'success',
        );
        // redirect
        return redirect()->route('admin.service.index')->with($notification);

    }
}
