<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

trait SendsPasswordResetEmails
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\View\View
     */
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email');
    }

    /**
     * Send a reset link to the given user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $response = $this->broker()->sendResetLink(
            $this->credentials($request)
        );

        return $response == Password::RESET_LINK_SENT
                    ? $this->sendResetLinkResponse($request, $response)
                    : $this->sendResetLinkFailedResponse($request, $response);
    }

    /**
     * Validate the email for the given request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

    /**
     * Get the needed authentication credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        return $request->only('email');
    }

    /**
     * Get the response for a successful password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    // protected function sendResetLinkResponse(Request $request, $response)
    // {
    //     return $request->wantsJson()
    //                 ? new JsonResponse(['message' => trans($response)], 200)
    //                 : back()->with('status', trans($response));
    // }

    /**
     * Get the response for a failed password reset link.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // work
    // protected function sendResetLinkFailedResponse(Request $request, $response)
    // {
    //     if ($request->wantsJson()) {
    //         throw ValidationException::withMessages([
    //             'email' => [trans($response)],
    //         ]);
    //     }

    //     return back()
    //             ->withInput($request->only('email'))
    //             ->withErrors(['email' => trans($response)]);
    // }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker();
    }




//     protected function sendResetLinkResponse(Request $request, $response)
// {
//     return $request->wantsJson()
//                 ? new JsonResponse(['message' => trans($response)], 200)
//                 : redirect()->route('password.link')->with('email', $request->only('email'));
// }

// work
// protected function sendResetLinkResponse(Request $request, $response)
// {
//     $message = $request->route()->getName() === 'password.resend'
//         ? 'The password reset email has been resent.'
//         : trans($response);

//     return $request->wantsJson()
//         ? new JsonResponse(['message' => $message], 200)
//         : redirect()->route('password.link')->with('email', $request->input('email'));
// }


// /

// protected function sendResetLinkResponse(Request $request, $response)
// {
    
//     $message = $request->route()->getName() === 'password.resend'
//         ? 'The password reset email has been resent.'
//         : trans($response);

//     return $request->wantsJson()
//         ? new JsonResponse(['message' => $message], 200)
//         : redirect()->route('password.link')->with('email', $request->input('email'));
// }

// protected function sendResetLinkFailedResponse(Request $request, $response)
// {
//     if ($request->wantsJson()) {
//         return new JsonResponse(['email' => [trans($response)]], 422);
//     }

//     return back()
//         ->withInput($request->only('email'))
//         ->withErrors(['email' => trans($response)]);
// }

// protected function sendResetLinkResponse(Request $request, $response)
// {
//     $message = $request->route()->getName() === 'password.resend'
//         ? 'The password reset email has been resent.'
//         : trans($response);

//     return $request->wantsJson()
//         ? new JsonResponse(['message' => $message], 200)
//         : redirect()->route('password.link')->with('email', $request->input('email'));
// }

// protected function sendResetLinkFailedResponse(Request $request, $response)
// {
//     if ($request->wantsJson()) {
//         return new JsonResponse(['email' => [trans($response)]], 422);
//     }

//     return back()
//         ->withInput($request->only('email'))
//         ->withErrors(['email' => trans($response)]);
// }

protected function sendResetLinkResponse(Request $request, $response)
{
    $message = $request->route()->getName() === 'password.resend'
        ? 'The password reset email has been resent.'
        : trans($response);

    return $request->wantsJson()
        ? new JsonResponse(['message' => $message], 200)
        : redirect()->route('password.link')->with('email', $request->input('email'));
}

// protected function sendResetLinkFailedResponse(Request $request, $response)
// {
//     if ($request->wantsJson()) {
//         return new JsonResponse(['email' => [trans($response)]], 422);
//     }

//     return back()
//         ->withInput($request->only('email'))
//         ->withErrors(['email' => trans($response)]);
// }



protected function sendResetLinkFailedResponse(Request $request, $response)
{
    $invalidTokenMessage = trans('passwords.token');
  
    // Check if the response indicates an invalid token
    if ($response === Password::INVALID_TOKEN || $response === $invalidTokenMessage) {
        return redirect()->route('password.expired');
    }

    // Handle JSON response if needed
    if ($request->wantsJson()) {
        return new JsonResponse(['email' => [trans($response)]], 422);
    }

    // Default behavior: show error on the same page
    return back()
        ->withInput($request->only('email'))
        ->withErrors(['email' => trans($response)]);
}




}

