<?php
namespace App\Services;

use App\Models\Course;
use App\Models\User;

class CourseService
{
    public function getAllCourses()
    {
        return Course::get();
    }

    public function create(array $data): Course
    {

        $course = Course::create($data);
        return $course;
    }

    public function update(Course $course, array $data): Course
    {
        $course->update($data);
        return $course;
    }

    public function delete(Course $course): void
    {
        $course->delete();
    }
}
