<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Flasher\Toastr\Prime\ToastrInterface;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    protected $toastr;

    public function __construct(ToastrInterface $toastr)
    {
        $this->toastr = $toastr;
    }

    /**
     * Show the user's profile edit page.
     */
    public function edit(): View
    {
        return view('user.profile.edit', [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'name'            => ['required', 'string', 'max:255'],
            'email'           => ['required', 'email', 'unique:users,email,' . Auth::id()],
            'phone'           => ['nullable', 'string', 'max:20'],
            'division'        => ['nullable', 'string', 'max:100'],
            'district'        => ['nullable', 'string', 'max:100'],
            'upazila'         => ['nullable', 'string', 'max:100'],
            'union'           => ['nullable', 'string', 'max:100'],
            'postcode'        => ['nullable', 'numeric'],
            'address_details' => ['nullable', 'string', 'max:500'],
            'image'           => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:2048'],
            'current_password'=> ['required_with:new_password', 'nullable', 'string'],
            'new_password'    => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);

        try {
            User::updateUser($request, Auth::id());
            $this->toastr->success('Profile updated successfully!');
        } catch (\Exception $e) {
            $this->toastr->error($e->getMessage());
        }

        return back();
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        User::deleteUser($user->id);

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}