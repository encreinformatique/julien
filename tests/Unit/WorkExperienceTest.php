<?php

namespace Tests\Unit;

use App\Models\WorkExperience;
use PHPUnit\Framework\TestCase;

class WorkExperienceTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_stack_exists(): void
    {
        $experience = new WorkExperience(
            'title',
            ['feat 1', 'feat 2', 'feat 3', 'feat 4', 'feat 5'],
            new \DateTime(),
            stack: ['Laravel', 'Symfony']);

        $this->assertEquals('title', $experience->getJobTitle());
        $this->assertCount(5, $experience->getFeats());
        $this->assertCount(2, $experience->getStack());
    }
}
