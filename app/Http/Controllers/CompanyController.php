<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Comment;

class CompanyController extends Controller
{
    public function index(Company $company)
    {
        return view('index')->with(['companies' => $company->getPaginateByLimit()]);
    }
    
    public function show(Company $company)
    {
        return view('show')->with(['company' => $company]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function tweet(Comment $comment)
    {
        return view('tweet')->with(['comments' => $comment->getPaginateByLimit()]);
    }
}
