<?php

namespace App\Http\Controllers;

use App\Services\HomeService;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index()
    {
        $games = $this->homeService->getAllGames();
        $categories = $this->homeService->getCategories();
        $flashSales = $this->homeService->getActiveFlashSales();
        $siteConfig = $this->homeService->getSiteConfig();

        return view('home.index', compact('games', 'categories', 'flashSales', 'siteConfig'));
    }
}
