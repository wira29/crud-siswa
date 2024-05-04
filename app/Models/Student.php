<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $fillable = ['name', 'email', 'address', 'asal_sekolah', 'jenis_kelamin', 'jurusan_id'];


    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }
}
