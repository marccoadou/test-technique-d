<?php

namespace App\Actions\Prize;

use App\Models\Prize;
use App\Models\User;
use App\Models\UserParticipation;
use App\Services\SelectionService;

class PickPrizeForUser
{
    public static function handle(User $user): void
    {
        $prize = SelectionService::randomWeightedElement(Prize::all()->toArray());

        UserParticipation::create([
            'user_id'  => $user->id,
            'prize_id' => $prize->id,
        ]);
    }
}
