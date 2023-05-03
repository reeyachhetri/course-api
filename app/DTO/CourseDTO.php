<?php
namespace App\DTO;

class CourseDTO
{
    public int $provider_id;
    public string $title;
    public string $duration;
    public string $earliest_intake;
    public string $deadline;
    public int $tuition;
    public int $application_fee;
    public int $commission;
    public string $description;
    public array $admission_requirements;

    public function __construct(int $provider_id, string $title,
    string $duration, string $earliest_intake, string $deadline,
    int $tuition, int $application_fee, int $commission, string $description,
    array $admission_requirements )
    {
        $this->provider_id = $provider_id;
        $this->title = $title;
        $this->duration = $duration;
        $this->earliest_intake = $earliest_intake;
        $this->deadline = $deadline;
        $this->tuition = $tuition;
        $this->application_fee = $application_fee;
        $this->commission = $commission;
        $this->description = $description;
        $this->admission_requirements = $admission_requirements;
    }

}
