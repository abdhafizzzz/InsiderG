<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applicant extends Model
{
    use HasFactory;
    /**
     * Get all of the comments for the applicant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function academics()
    {
        return $this->hasMany(academic::class, 'applicant_id', 'id');
    }
}
