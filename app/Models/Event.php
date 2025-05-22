<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // Specify which fields can be mass-assigned
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'location',
        'status', // e.g., upcoming, completed
        // Add any other relevant fields
    ];

    // Relationships

    // If users join events, assuming a many-to-many relation:
    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id')
            ->withTimestamps()
            ->withPivot('result'); // Example: win/loss or status
    }

    // You can add scopes for filtering events, e.g., upcoming
    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', now());
    }
}
