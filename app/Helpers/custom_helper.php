<?php

use App\Models\VillageActivityCategory;

if (!function_exists('get_categories')) {
    function get_categories()
    {
        $categoryModel = new VillageActivityCategory();
        return $categoryModel->findAll();
    }
}

if (!function_exists('short_description')) {
    function short_description($text, $word_limit = 50)
    {
        $text = strip_tags($text);

        $text = preg_replace('/\s+/', ' ', $text);

        $words = explode(' ', $text);

        $short_description = implode(' ', array_slice($words, 0, $word_limit));

        if (count($words) > $word_limit) {
            $short_description .= '...';
        }

        return $short_description;
    }
}
