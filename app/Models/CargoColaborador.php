<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CargoColaborador extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'cargo_colaborador';
    protected $fillable = ['cargo_id', 'colaborador_id', 'nota_desempenho'];

    public function colaborador()
    {
        return $this->belongsTo(Colaborador::class, 'colaborador_id');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }
}
