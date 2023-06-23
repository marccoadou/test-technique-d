<?php

namespace App\Services;

use App\Models\Prize;

class SelectionService
{

    /* Explications :
        (Tirée du principe de distribution de probabilité pondérée)
        
        Ici, chaque élément possède un poids exprimé en décimal
        On additionne pour trouver le poids total
        On cherche une variable aléatoire qui match notre décimal

        Dans ce contexte, plus le poids de notre prix est grand,
        plus il a de chance d'être sélectionné
        Admettons un exemple tel que : 0.3, 0.1, 0.5 -> poids total 0.9
        On récupère une variable qui vaudrait : 0.58

        Maintenant, si un item a un poids supérieur à notre random,
        il fait passer la variable en dessous du négatif, nous donnant
        ainsi l'item que nous souhaitions
        Sinon, on continue d'itérer au travers des items en soustrayant
        pour finalement trouver notre item

        https://gist.github.com/irazasyed/f41f8688a2b3b8f7b6df
        (qui m'a mis sur la piste)
    **/
    public static function randomWeightedElement(array $items): Prize
    {
        $totalWeight = 0;
        foreach ($items as $item) {
            $totalWeight += ($item['weight']);
        }

        $randomNumber = mt_rand() / mt_getrandmax() * $totalWeight;

        $selectedItem = null;
        foreach ($items as $item) {
            $randomNumber -= $item['weight'];
            if ($randomNumber <= 0) {
                $selectedItem = $item['id'];
                break;
            }
        }
        return Prize::find($selectedItem);
    }
}
