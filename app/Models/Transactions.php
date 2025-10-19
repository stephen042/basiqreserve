<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'transactions';
    protected $guarded = []; // allows all columns to be mass assigned
}
