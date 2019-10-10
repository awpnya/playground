<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravolt\Suitable\AutoFilter;
use Laravolt\Suitable\AutoSort;

class ContactForm extends Model
{
    // protected $fillable = ['name', 'email', 'message'];

    protected $guarded = [];

    use Notifiable;
    use AutoSort, AutoFilter;
}
