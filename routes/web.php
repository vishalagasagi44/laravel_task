<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaseStudyController;
use Illuminate\Support\Facades\App; 

if (config('features.case_studies_enabled')) {
    Route::get('/case-studies', [CaseStudyController::class, 'index'])->name('case-studies.index');
    Route::get('/case-studies/{caseStudy:slug}', [CaseStudyController::class, 'show'])->name('case-studies.show');
}

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {   // only allow English + Arabic
        App::setLocale($locale);
        session(['locale' => $locale]);
    }
    return redirect()->back();
});