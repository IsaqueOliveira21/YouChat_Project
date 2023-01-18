<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;

    protected $table = 'mensagens';

    protected $fillable = [
        'remetente_id',
        'destinatario_id',
        'mensagem',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function user() {
        $this->belongsTo(User::class);
    }
}
