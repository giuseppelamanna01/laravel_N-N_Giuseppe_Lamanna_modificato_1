<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\Device;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DeviceRequest;
use App\Http\Requests\DeviceEditRequest;

class DeviceController extends Controller
{

    public function dettaglio(Device $device){
        return view('device.dettaglio', ['device'=>$device]);
    }

    public function create(){
        return view('device.create');
    }

    public function storecrud(DeviceRequest $request){
        $device = Device::create([
            'name'=>$request->name,
            'category'=>$request->category,
            'serialNumber'=>$request->serialNumber,
            'image'=>$request->file('image')->store('images','public')
        ]);
        return redirect()->route('home')->with('success', 'Device inserito correttamente');
    }

    public function index(){
        $devices = Device::all();
        return view('device.index', compact('devices'));
    }

    public function show(Device $device){
        return view('device.show', compact('device'));
    }

    public function edit(Device $device){
        return view('device.edit', compact('device'));
    }

    public function update(DeviceEditRequest $request, Device $device)
{
    $device->name = $request->name;
    $device->category = $request->category;
    $device->serialNumber = $request->serialNumber;
    if($request->image){
        $device->image = $request->file('image')->store('images','public');
    }
    $device->save();
    return redirect()->route('device.index')->with('success', 'Modifica avvenuta con successo');
}

    public function delete(Device $device){
        $device->delete();
        return redirect()->route('home')->with('success', 'Eliminazione del device avvenuta con successo');
    }
}