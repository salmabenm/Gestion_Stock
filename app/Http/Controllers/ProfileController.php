<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    /**
     * Show the user's profile.
     *
     * @param  Request  $request
     * @return \Illuminate\View\View
     */
    public function show()
    {
        // Assuming you are using Laravel's built-in authentication system.
        // You can access the currently authenticated user using the 'auth' helper function.
        $user = auth()->user();

        // If you prefer using the 'Request' parameter, you can use it like this:
        // $user = $request->user();

        // Check if the user is authenticated (logged in).
        if ($user) {
            // If the user is authenticated, load the 'show.blade.php' view and pass the user data.
            return view('profile.show', ['user' => $user]);
        } else {
            // If the user is not authenticated, you can redirect to a login page or any other action.
            // For example:
            return redirect()->route('login'); // Assuming you have a named route for the login page.
        }
    }

    /**
     * Update the user's profile information.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
        ]);

        (new UpdateUserProfileInformation())->update($user, $request->all());

        return back()->with('success', 'Profile information has been updated successfully.');
    }

    /**
     * Update the user's profile photo.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|max:1024',
        ]);

        $user = $request->user();

        $path = $request->file('photo')->store('profile-photos', 'public');

        $user->update([
            'profile_photo_path' => $path
        ]);

        return back()->with('success', 'Profile photo has been updated successfully.');
    }

    /**
     * Update the user's password.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        (new UpdateUserPassword())->update($request->user(), $request->all());

        return back()->with('success', 'Password has been updated successfully.');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}

