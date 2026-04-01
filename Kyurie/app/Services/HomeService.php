<?php

namespace App\Services;

use App\Models\FlashSale;
use App\Models\Game;
use App\Models\Utility;

class HomeService
{
    public function getAllGames()
    {
        return Game::all();
    }

    public function getGamesByCategory($category)
    {
        if ($category === 'all') {
            return $this->getAllGames();
        }
        return Game::where('category', $category)->get();
    }

    public function getCategories()
    {
        return Game::select('category')->distinct()->pluck('category');
    }

    public function getActiveFlashSales()
    {
        return FlashSale::active()->get();
    }

    public function getUtility($key, $default = null)
    {
        return Utility::getValue($key, $default);
    }

    public function getSiteConfig()
    {
        return [
            'title' => $this->getUtility('site_title', 'TopUpGames'),
            'subtitle' => $this->getUtility('site_subtitle', 'Top up kredit game cepat, aman, dan murah'),
            'description' => $this->getUtility('site_description', 'Platform top up games modern'),
            'flashsale_expiry_message' => $this->getUtility('flashsale_expiry_message', 'Flash sale berakhir dalam %s')
        ];
    }
}