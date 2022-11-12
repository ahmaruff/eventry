<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $events = Event::all()->count();
        $bookings = Booking::all()->count();
        $users = User::all()->count();

        $data = [
            'events' => $events,
            'bookings' => $bookings,
            'users' => $users
        ];
        return view('admin.index', $data);
    }

    public function categoryDashboard()
    {
        $categories = Category::all();

        $event_count = [];
        foreach($categories as $cat){
            $count = DB::table('events')->where('cat_id',$cat->id)->count();
            array_push($event_count,$count);
        }

        $data = [
            'categories' => $categories,
            'event_count' => $event_count
        ];

        return view('admin.categories',$data);
    }

    public function bookingDashboard()
    {
        $bookings = Booking::all();
        $data = [
            'bookings' => $bookings
        ];

        return view('admin.bookings',$data);
    }

    public function eventDashboard()
    {
        $events = Event::all();
        
        $data = [
            'events' => $events,
        ];

        return view('admin.events',$data);
    }

    public function userDashboard()
    {
        $users = User::all();

        $data = [
            'users' => $users
        ];
        return view('admin.users',$data);
    }
}
