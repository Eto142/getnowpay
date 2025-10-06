<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     */
    public function render($request, Throwable $exception)
    {
        // Redirect to login if user not authenticated
        if ($exception instanceof \Illuminate\Auth\AuthenticationException) {
            return redirect()->route('login');
        }

        // Redirect to login page for any kind of error
        return response()->view('errors.redirect', [], 302);
    }
}
