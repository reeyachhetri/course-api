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
    // public function __construct(CourseService $courseservice)
    // {
    //     $this->courseservice = $courseservice;
    // }



    public function index(CourseService $courseService)
    {
        $courses = $courseService->getAllCourses();
        return CourseResource::collection($courses);
    }




    public function store(StoreCourseRequest $request, CourseService $courseService)
    {

        $course = $courseService->create(($request->validated()));
        return response()->json([
            'status' => 'success',
            'data' => $course,
        ]);
    }




    public function show(Course $course)
    {
        return response()->json(['course' => $course]);
    }




    public function update(UpdateCourseRequest $request, Course $course, CourseService $courseService)
    {
        $course = $courseService->update($course, $request->validated());

        return response()->json([
            'status' => 'successful',
            'data' => $course,
        ]);
    }




    public function destroy(CourseService $courseService, Course $course)
    {
        $course = $courseService->delete($course);

        return response()->json([
            'message' => 'Deleted'
        ]);
    }
}
