<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\About;
use App\Models\Service;
use App\Models\ServiceItem;
use App\Models\Portfolio;
use App\Models\PortfolioItem;
use App\Models\Contact;
class HomePageController extends Controller
{
    public function index()
    {
        $home = Home::first();
        $about = About::first();
        $services = Service::first();
        $service_items = ServiceItem::get();
        $portfolios = Portfolio::first();
        $portfolio_items = PortfolioItem::get();
        $contacts = Contact::first();
        return view('index', compact('home', 'about', 'services', 'service_items', 'portfolios', 'portfolio_items', 'contacts'));
    }

}
