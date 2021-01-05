<?php

namespace App\Http\Controllers\UserSettings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;


class CurrencyController extends Controller
{
    public function setCurrency(Request $request)
    {
        if (auth()->check())
        {
            $userId = auth()->id();
            $user = User::find($userId);
            $user->currency_type = $request->currency_type;
            $user->save();
            return redirect()->back()->withCookie(cookie('currency_type', $request->currency_type));
        }
        else{
            return redirect()->back()->withCookie(cookie('currency_type', $request->currency_type));
        }

    }
}
