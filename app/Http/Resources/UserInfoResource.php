<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserInfoResource extends JsonResource
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
            'id' => (string) $this->id,
            'attributes' => [
                'country' => $this->country,
                'province' => $this->province,
                'city' => $this->city,
                'date_accessed' => $this->date_accessed,
                'time_accessed' => $this->time_accessed,
                'user_device' => $this->user_device,
                'user_browser' => $this->user_browser,
                'user_os' => $this->user_os,
                'user_ip' => $this->user_ip,
                'user_screen_res' => $this->user_screen_res,
                'user_type' => $this->user_type,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ]
        ];
    }
}
