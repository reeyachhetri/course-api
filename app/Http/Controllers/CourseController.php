<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Models\Course;
use App\Services\CourseService;
use App\Http\Resources\CourseResource;
use App\DTO\CourseDTO;

class CourseController extends Controller
{

    protected $courseService;
    // public function __construct(CourseService $courseService)
    // {
    //     $this->courseService = $courseService;
    // }



    public function index(CourseService $courseService)
    {
        $courses = $courseService->getAllCourses();
        return CourseResource::collection($courses);
    }


    public function store(StoreCourseRequest $request,CourseService $courseService)
    {

        $course = $courseService->create(
            CourseDTO::from($request->all())->toArray()
        );
        return new CourseResource($course);
    }


    public function show(Course $course)
    {
        return new CourseResource($course);
    }




    public function update(UpdateCourseRequest $request, Course $course, CourseService $courseService)
    {
        $course = $courseService->update($course, $request->validated());

        return new CourseResource($course);
    }




    public function destroy(CourseService $courseService, Course $course)
    {
        $course = $courseService->delete($course);

        return new CourseResource($course);
    }
}
