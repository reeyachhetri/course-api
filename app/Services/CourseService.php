<?php
namespace App\Services;

use App\Models\Course;

class CourseService{
    public function getAllCourses(){
        return Course::get();
    }

    public function createCourse(array $data): Course{
        $course = Course::create($data);
        return $course;
    }

    public function updateCourse(Course $course, array $data): Course{
        $course->update($data);
        return $course;
    }

    public function deleteCourse(Course $course): void{
        $course->delete();
    }
}
