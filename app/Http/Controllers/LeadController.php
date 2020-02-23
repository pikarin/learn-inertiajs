<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Inertia\Inertia;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function create()
    {
        return Inertia::render('Leads/LeadAdd');
    }

    public function store(Request $request)
    {
        $postData = $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'dob' => ['required', 'date'],
            'phone' => ['required'],
            'package' => ['required'],
        ]);

        $package = '';
        if ($request->has('package')) {
            $package = $request->input('package');
        }

        Lead::create([
            'name' => $postData['name'],
            'email' => $postData['email'],
            'dob' => $postData['dob'],
            'phone' => $postData['phone'],
            'interested_package' => $package,
            'branch_id' => 1,
            'age' => 1,
            'added_by' => auth()->id(),
        ]);

        return redirect()->route('dashboard');
    }
}
