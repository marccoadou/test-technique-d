<?php

namespace App\Http\Controllers;


use App\Actions\User\CreateUser;
use App\Http\Requests\UserSubscribeRequest;
use App\Models\UserParticipation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function welcome(): View
    {
        return view('user-submit-form');
    }

    /**
     * @return View
     */
    public function login(): View
    {
        return view('login');
    }

    /**
     * @param UserSubscribeRequest $request
     * @return RedirectResponse
     */
    public function register(UserSubscribeRequest $request): RedirectResponse
    {
        // Dans une vraie application, il aurait fallu faire un DTO pour transformer la request
        CreateUser::make($request->toArray());
        return redirect()->route('user-login');
    }

    /**
     * @return View
     */
    public function myPrize(): View
    {
        $myPrize = UserParticipation::query()
                                    ->with('user', 'prize')
                                    ->where('user_id', Auth::user()->id)
                                    ->first();

        return view('my-prize', compact('myPrize'));
    }
}
