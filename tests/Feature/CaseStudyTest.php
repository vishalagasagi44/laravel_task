<?php
namespace Tests\Feature;

use Tests\TestCase;

class CaseStudyTest extends TestCase
{
    public function test_case_studies_index_loads()
    {
        $response = $this->get('/case-studies');
        $response->assertStatus(200);
    }
}
