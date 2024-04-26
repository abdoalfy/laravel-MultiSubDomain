<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CentralController extends Controller
{
    public function index(){
        return view('central');
    }
   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'domain' => 'required|unique:tenants,id',
        ]);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors(['domain' => 'The domain is not available']);
        }
    
        // Validation passes, proceed with creating the tenant and domain
        $tenant = Tenant::create(['id' => $request->domain]);
        $url = $tenant->domains()->create(['domain' => $request->domain.'.localhost']);
    
        // Redirect to the domain that comes from the request
        return redirect('http://' . $request->domain . '.localhost:8000');
    }
}
