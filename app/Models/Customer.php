<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'customer';

    /**
     * الحقول القابلة للملء.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'password',
        'phone',
    ];

    /**
     * تحويل كلمة المرور إلى hash تلقائيًا عند حفظها.
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }


    public function orders()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    }
    public function comments()
    {
        return $this->hasMany(Customer::class);
    }

    public function likes()
    {
        return $this->belongsToMany(FoodItem::class, 'likes');
    }
}
