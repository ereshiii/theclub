<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Sample stats calculation, adjust with your actual logic and relationships
        $eventsJoined = $user->events()->count();

        $wins = $user->events()->wherePivot('result', 'win')->count();
        $losses = $user->events()->wherePivot('result', 'loss')->count();

        $notifications = [
            'You have 3 upcoming events.',
            'Your last game win ratio improved by 5%.',
            'New tournament available for registration.'
        ]; // Replace with actual notifications if stored in DB

        $membershipStatus = $user->membership_status ?? 'Standard'; // example attribute

        $stats = [
            'events_joined' => $eventsJoined,
            'wins' => $wins,
            'losses' => $losses,
            'notifications' => $notifications,
            'membership_status' => $membershipStatus,
        ];

        return view('user.dashboard', compact('user', 'stats'));
    }
}
