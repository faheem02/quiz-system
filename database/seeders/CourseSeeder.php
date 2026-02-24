<!-- 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        Course::create([
            'name' => 'PHP Basic Quiz',
            'description' => 'Test your PHP basic knowledge',
            'price' => 10.00,
            'total_questions' => 20,
            'duration_minutes' => 30,
        ]);

        Course::create([
            'name' => 'Laravel Advanced Quiz',
            'description' => 'Test your Laravel advanced skills',
            'price' => 20.00,
            'total_questions' => 30,
            'duration_minutes' => 45,
        ]);

        Course::create([
            'name' => 'JavaScript Quiz',
            'description' => 'Test your JavaScript knowledge',
            'price' => 15.00,
            'total_questions' => 25,
            'duration_minutes' => 40,
        ]);
    }
} -->
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Medway Hackney Carriage Knowledge Test',
                'description' => 'Comprehensive preparation for Medway council licensing. Includes local byelaws, safeguarding, and professional driving standards.',
                'council' => 'Medway',
                'price' => 24.99,
                'image' => 'medway-hackney.jpg', // Make sure this image exists in public/frontend/img/
                'rating' => 4.9,
            ],
            [
                'title' => 'Thanet Private Hire Policy Exam',
                'description' => 'Complete guide for Thanet new applicants. Covers council policy, passenger safety, and essential Highway Code rules.',
                'council' => 'Thanet',
                'price' => 24.99,
                'image' => 'thanet-ph.jpg',
                'rating' => 4.8,
            ],
            [
                'title' => 'UK Highway Code - Professional Driver Standard',
                'description' => 'Master the official Highway Code. Essential for all new taxi and private hire drivers to pass their council assessment.',
                'council' => 'General',
                'price' => 19.99,
                'image' => 'highway-code.jpg',
                'rating' => 5.0,
            ],
            [
                'title' => 'Medway Private Hire Knowledge Prep',
                'description' => 'Focused training for Medway Private Hire badge applicants. Includes local geography and licensing conditions.',
                'council' => 'Medway',
                'price' => 24.99,
                'image' => 'medway-ph.jpg',
                'rating' => 4.7,
            ]
        ];

        foreach ($courses as $course) {
            Course::updateOrCreate(['title' => $course['title']], $course);
        }
    }
}