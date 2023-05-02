<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Services\CourseService;
use App\Http\Resources\CourseResource;

class CourseController extends Controller
{

    protected $courseservice;
    public function __construct(CourseService $courseservice)
    {
        $this->courseservice = $courseservice;
    }



    public function index()
    {
        $courses = $this->courseservice->getAllCourses();
        return CourseResource::collection($courses);
    }




    public function store(StoreCourseRequest $request, CourseService $courseservice)
    {

        $course = $this->courseservice->createCourse(($request->validated()));
        return response()->json([
            'status' => 'success',
            'data' => $course,
        ]);
    }




    public function show(Course $course)
    {
        return response()->json(['course' => $course]);
    }




    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course = $this->courseservice->updateCourse($course, $request->validated());

        return response()->json([
            'status' => 'successful',
            'data' => $course,
        ]);
    }




    public function destroy(Course $course)
    {
        $course = $this->courseservice->deleteCourse($course);

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
