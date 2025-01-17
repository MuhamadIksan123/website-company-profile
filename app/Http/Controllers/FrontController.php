<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\CompanyAbout;
use App\Models\CompanyStatistics;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index() {
        $hero_sections = HeroSection::orderByDesc('id')->take(1)->get();
        $statistics = CompanyStatistics::take(4)->get();
        $principles = OurPrinciple::take(3)->get();
        $products = Product::take(3)->get();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(4)->get();
        return view('front.index', compact('hero_sections', 'statistics', 'principles', 'products', 'testimonials', 'teams'));
    }

    public function team()
    {
        $statistics = CompanyStatistics::take(4)->get();
        $teams = OurTeam::all();
        return view('front.team', compact('statistics', 'teams'));
    }

    public function about()
    {
        $statistics = CompanyStatistics::take(4)->get();
        $abouts = CompanyAbout::take(4)->get();
        return view('front.about', compact('statistics', 'abouts'));
    }

    public function appointment()
    {
        $products = Product::orderBy('name', 'asc')->get();
        $testimonials = Testimonial::take(4)->get();
        return view('front.appointment', compact('products', 'testimonials'));
    }

    public function appointment_store(StoreAppointmentRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            Appointment::create($validated);
        });

        return redirect()->route('front.index');
    }
}
