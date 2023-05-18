<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class todolist extends Model
{
    use HasFactory;

    //define nama table(?)
    protected $table = 'todolists';

    protected $primaryKey = 'id';

    public $incrementing = true;

    protected $guarded = ['id', '']; //$fillable, opposite of $guarded

    /**
     * Get the user that owns the todolist
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');//defining user_id to id
    }



}
