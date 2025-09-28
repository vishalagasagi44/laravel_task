<?php
namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = CaseStudy::latest()->paginate(10);
        return view('case-studies.index', compact('caseStudies'));
    }

    public function show(CaseStudy $caseStudy)
    {
        return view('case-studies.show', compact('caseStudy'));
    }
}
