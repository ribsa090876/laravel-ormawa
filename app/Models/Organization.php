<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'generation'
    ];

    protected $table = 'organizations';

    /**
     * Get all of the student for the Organization
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function student(): HasMany
    {
        return $this->hasMany(Student::class, 'id', 'id_organization');
    }
}
