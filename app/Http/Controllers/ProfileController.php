<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\MBTIType;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = $request->user()->load('quizResult');
        $customClaims = [
            'mbti_type' => $user->quizResult ? $user->quizResult->mbti_type : null
        ];
        $token = JWTAuth::fromUser($user, $customClaims);

        return view('profile.edit', [
            'user' => $user,
            'token' => $token
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill([
            'name' => $request->name,
            'email' => $request->email,
            'mbti_type_id' => $request->mbti_type_id
        ]);

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
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

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function getMbtiType(Request $request)
    {
        $user = $request->user()->load('quizResult');
        return response()->json([
            'mbti_type' => $user->quizResult ? $user->quizResult->mbti_type : null,
            'status' => 'success'
        ]);
    }
}
