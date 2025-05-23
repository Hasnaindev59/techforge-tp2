<?php
/********************************
Developer:Anonymous
Anonymous Anonymous
********************************/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table = 'delivery';

    protected $fillable = ['date', 'invoice_id', 'delivery_cost', 'status', 'postcode', 'street', 'city'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }
}
