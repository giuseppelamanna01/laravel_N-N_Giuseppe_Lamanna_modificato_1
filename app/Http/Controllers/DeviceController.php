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
use App\Models\Genre;

class DeviceController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }

    public function dettaglio(Device $device){
        return view('device.dettaglio', ['device'=>$device]);
    }

    public function create(){
        $genres = Genre::all();
        return view('device.create', compact('genres'));
    }

    public function storecrud(DeviceRequest $request){
        $device = Device::create([
            'name'=>$request->name,
            'serialNumber'=>$request->serialNumber,
            'image'=>$request->file('image')->store('images','public'),
            'user_id'=>Auth::user()->id
        ]);
        $device->genres()->attach($request->genres);
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
        if($device->user_id == Auth::user()->id){
            return view('device.edit', compact('device'));
        }else{
            return redirect()->route('home')->with('error', 'Errore di visualizzazione della pagina');
        }
    }

    public function update(Request $request, Device $device)
{
    if($device->user_id == Auth::user()->id){
    $device->name = $request->name;
    $device->category = $request->category;
    $device->serialNumber = $request->serialNumber;
    if($request->image){
        $device->image = $request->file('image')->store('images','public');
    }
    $device->save();
    return redirect()->route('home')->with('success', 'Modifica avvenuta con successo');
    } else {
    return redirect()->route('home')->with('error', 'Errore di visualizzazione della pagina');
    }
}

    public function delete(Device $device){
        if($device->user_id == Auth::user()->id){
        $device->delete();
        return redirect()->route('home')->with('success', 'Eliminazione del device avvenuta con successo');
    }else{
        return redirect()->route('home')->with('error', 'Errore di visualizzazione della pagina');
    }
}
}