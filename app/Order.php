<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    public function elapsedTime()
    {
        $now = Carbon::now();
        return $this->created_at->diffInMinutes($now);
    }

    public function totalFormatted()
    {
        $f =  new \NumberFormatter("es_ES", \NumberFormatter::CURRENCY);
        return $f->formatCurrency($this->total/100, "EUR");
    }

    public function getStatusAttribute($value)
    {
        $statuses = ['Pendiente', 'Aceptado', 'Cocinando', 'Preparando Envío', 'Enviado'];
        return $statuses[$value];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
