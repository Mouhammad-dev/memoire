<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'symptomes',
        'medicament_prescrits',
        'historique_maladie',
        'tension_arterielle',
        'temperature',
        'pouls',
        'frequence_respiratoire',
        'type_consultations',
        'created_at',
        'update_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_id' => 'integer',
        'document_id' => 'integer',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
