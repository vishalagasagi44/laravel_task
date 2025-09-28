<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $fillable = [
        'title', 'slug', 'summary', 'content',
        'seo_title', 'seo_description', 'locale'
    ];
}
