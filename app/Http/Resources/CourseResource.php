<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID' => $this->provider_id,
            'Title' => $this->title,
            'Duration of Course' => $this->duration,
            'Earliest Intake' => $this->earliest_intake,
            'Deadline' => $this->deadline,
            'Tuition ($)' => $this->tuition,
            'Application Fee ($)' => $this->application_fee,
            'Commission ($)' => $this->commission,
            'Description' => $this->description,
            'Admission Requirements' => $this->admission_requirements,
        ];
    }
}
