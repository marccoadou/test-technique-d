<?php

namespace App\Services;

use App\Models\Prize;

class SelectionService
{
    public static function randomWeightedElement(array $items): Prize
    {
        $totalWeight = 0;
        foreach ($items as $item) {
            $totalWeight += ($item['weight']);
        }

        $randomNumber = mt_rand() / mt_getrandmax() * $totalWeight;

        $selectedItem = null;
        foreach ($items as $item) {
            print_r($item);
            $randomNumber -= $item['weight'];
            if ($randomNumber <= 0) {
                $selectedItem = $item['id'];
                break;
            }
        }
        return Prize::find($selectedItem);
    }
}
