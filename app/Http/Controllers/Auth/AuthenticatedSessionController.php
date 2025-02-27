<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // if (!session()->has('url.intended')) {
        //     session()->put('url.intended', url()->previous());
        // }
    
        $request->authenticate();

        $request->session()->regenerate();

        if($request ->user()->role === 'admin'){
            return redirect('admin/dashboard');
        }else if ($request ->user()-> role === 'landlord') {
            return redirect()->intended('/landlord/dashboard');         
            // return redirect('landlord/dashboard');
        }else if ($request ->user()-> role === 'guest'){
            // return redirect('guest/dashboard');   
            return redirect()->intended('/');         
        }

        // return redirect(session()->pull('url.intended', default: '/dashboard'));

        return redirect()->intended('/dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
