<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Comment extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray( $request): array
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'user_name' => $this->customer->name,
            'created_at' => $this->created_at,
        ];
    }
}
