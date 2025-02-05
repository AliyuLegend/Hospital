<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table ="appointment";
    protected $fillable = [
        'doctor_id',
        'user_id',
        'patient_name',
        'email',
        'phone_number',
        'status',
        'appointment_date',
        
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public $timestamps = true;
}
