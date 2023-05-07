<?php
namespace App\DTO;

use Spatie\LaravelData\Data;

class CourseDTO extends Data{
    public int $provider_id;
    public string $title;
    public string $duration;
    public string $earliest_intake;
    public string $deadline;
    public int $tuition;
    public int $application_fee;
    public int $commission;
    public string $description;
    public string $admission_requirements;




}
