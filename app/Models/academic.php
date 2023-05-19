<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academic extends Model
{
    use HasFactory;
    /**
     * Summary of applicant
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function applicant()
    {
        return $this->belongsTo(applicant::class, 'applicant_id', 'id');
    }
}
