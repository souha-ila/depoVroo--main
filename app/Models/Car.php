<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function getId()
{
return $this->attributes['id'];
}

public function setId($id)
{
$this->attributes['id'] = $id;
}

public function getName()
{
return $this->attributes['name'];
}

public function setName($name)
{
$this->attributes['name'] = $name;
}

public function getDescription()
{
return $this->attributes['description'];
}

public function setDescription($description)
{
    $this->attributes['description'] = $description;
}

public function getImage()
{
return $this->attributes['image'];
}

public function setImage($image)
{
$this->attributes['image'] = $image;
}

public function getPrice()
{
return $this->attributes['price'];
}

public function setPrice($price)
{
$this->attributes['price'] = $price;
}

public function getCreatedAt()
{
return $this->attributes['created_at'];
}

public function setCreatedAt($createdAt)
{
$this->attributes['created_at'] = $createdAt;
}
public function getUpdatedAt()
{
return $this->attributes['updated_at'];
}
public function setUpdatedAt($updatedAt)
{
$this->attributes['updated_at'] = $updatedAt;
}


public function getModel()
{
return $this->attributes['model'];
}
public function setModel($model)
{
$this->attributes['model'] = $model;
}

public function reservations()
{
    return $this->hasMany(Reservation::class);
}


public function isAvailable($startDate, $endDate)
{
    // Vérifier si la voiture est disponible pour les dates spécifiées

    // Récupérer les réservations en cours pour cette voiture
    $reservations = $this->reservations()->where(function ($query) use ($startDate, $endDate) {
        // Vérifier si les dates se chevauchent avec les réservations existantes
        $query->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate);
    })->get();

    // Si aucune réservation trouvée, la voiture est disponible
    if ($reservations->isEmpty()) {
        return true;
    }

    // Sinon, vérifier si les réservations existantes se chevauchent
    foreach ($reservations as $reservation) {
        if ($reservation->end_date >= $startDate) {
            // La voiture n'est pas disponible pour les dates spécifiées
            return false;
        }
    }

    // La voiture est disponible
    return true;
}


}
