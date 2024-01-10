<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postprint extends Model
{
    use HasFactory;

    protected $fillable =[
        'title', 'slug', 'description', 'image_path', 'user_id'
    ];
    public function user (){
        return $this->belongsTo(User::class);
    }

    // protected function image_path(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => url('imageprintpost/'.$value),
    //     );
    // }
}
