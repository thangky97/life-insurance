<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            if ($request->is('admin/*')) {
                // Nếu URL bắt đầu bằng 'admin/', hiển thị view lỗi 404 cho phần quản trị
                return response()->view('admin.errors.404', [], 404);
            } else {
                // Nếu không, hiển thị view lỗi 404 cho phía người dùng
                return response()->view('client.errors.404', [], 404);
            }
        }

        return parent::render($request, $exception);
    }
}
