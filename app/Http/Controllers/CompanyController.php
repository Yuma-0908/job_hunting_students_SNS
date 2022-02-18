<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function index(Company $company)
    {
        return view('index')->with(['companies' => $company->getPaginateByLimit()]);
    }
}
