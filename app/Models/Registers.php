<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'registers';
    protected $primaryKey = 'id';

    private const STATUS_AUTORIZADO = 'A';
    private const STATUS_SOLICITADO = 'S';
    private const STATUS_REJEITADO = 'R';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'register_time',
        'type',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
