<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InstitutionController extends Controller
{
    public function create()
    {
        return view('institutions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|string|min:8|confirmed',
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|email|max:255',
            'admin_user_id' => 'required|exists:users,id',
            'school_number' => 'required|string|max:50',
            'address_number' => 'required|string|max:50',
        ]);

        $institution = new Institution();
        $institution->name = $request->name;
        $institution->address = $request->address;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $institution->logo = $logoPath;
        }

        $institution->password = Hash::make($request->password);
        $institution->admin_name = $request->admin_name;
        $institution->admin_email = $request->admin_email;
        $institution->admin_user_id = $request->admin_user_id;
        $institution->school_number = $request->school_number;
        $institution->address_number = $request->address_number;

        $institution->save();

        return redirect()->route('institutions.create')->with('success', 'Institución registrada con éxito.');
    }
}

