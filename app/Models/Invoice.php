<?php
namespace App\Models;
/********************************
Developer:Anonymous, Anonymous, Anonymous
Anonymous Anonymous, Anonymous, Anonymous
********************************/
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';
    protected $primaryKey = 'invoice_id';
    public $incrementing = true;
    protected $keyType = 'int';
    
    protected $fillable = [
        'date',
        'customer_id',
        'invoice_id',
        'invoice_amount',
        'delivery_option',
        'address',
        'postcode',
        'status',
        'deleted',
    ];


    // Relation with Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Relation with Delivery
    public function delivery()
    {
        return $this->hasOne(Delivery::class, 'invoice_id');
    }

    // Relation with Payments
    public function payments()
    {
        return $this->hasOne(Payment::class, 'invoice_id');
    }

    // Relation with Basket
    public function basket()
    {
        return $this->hasOne(Basket::class, 'invoice_id');
    }

    // Relation with InvoiceOrder
    public function invoiceOrders()
    {
        return $this->hasMany(InvoiceOrder::class, 'invoice_id', 'invoice_id');
    }
}
