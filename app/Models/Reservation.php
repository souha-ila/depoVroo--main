<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        // autres attributs de réservation
    ];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getUserId()
    {
        return $this->attributes['user_id'];
    }

    public function setUserId($userId)
    {
        $this->attributes['user_id'] = $userId;
    }

    public function getCarId()
    {
        return $this->attributes['car_id'];
    }

    public function setCarId($carId)
    {
        $this->attributes['car_id'] = $carId;
    }

    public function getStartDate()
    {
        return $this->attributes['start_date'];
    }

    public function setStartDate($startDate)
    {
        $this->attributes['start_date'] = $startDate;
    }

    public function getEndDate()
    {
        return $this->attributes['end_date'];
    }

    public function setEndDate($endDate)
    {
        $this->attributes['end_date'] = $endDate;
    }

    // Ajoutez ici les getters et setters pour les autres attributs de réservation

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
