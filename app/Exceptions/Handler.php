<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        if ($request->expectsJson()) {
            if ($exception instanceof ModelNotFoundException) {
                Log::error($exception->getMessage() . '. WHEN: path: ' . $request->path() . '; Method: ' . $request->getMethod());
                return response()->apiError(config('constants.ERROR_NOT_FOUND'), __('error.resource_not_found'), 404);
            }

            if ($exception instanceof NotFoundHttpException) {
                return response()->apiError(config('constants.ERROR_NOT_FOUND'), __('error.not_found'), 404);
            }

            if ($exception instanceof AuthorizationException) {
                return response()->apiError(config('constants.ERROR_AUTHORIZATION'), $exception->getMessage(), 400);
            }

            if ($exception instanceof MethodNotAllowedHttpException) {
                return response()->apiError(config('constants.ERROR_METHOD'), __('error.not_allowed'), 405);
            }

            if ($exception instanceof FatalThrowableError OR $exception instanceof \ErrorException OR $exception instanceof \Exception) {
                Log::error($exception->getMessage() . '. WHEN: path: ' . $request->path() . '; Method: ' . $request->getMethod());
                return response()->apiError(config('constants.ERROR_SERVER'), __('error.server'), 500);
            }
        }

        return parent::render($request, $exception);
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->apiError(config('constants.ERROR_AUTHENTICATION'), __('error.authentication'), 401);
        }

        return redirect()->guest(route('login'));
    }
}
