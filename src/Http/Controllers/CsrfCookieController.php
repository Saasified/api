<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CsrfCookieController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->expectsJson()) {
            return new JsonResponse(null, Response::HTTP_NO_CONTENT);
        }

        return new Response('', Response::HTTP_NO_CONTENT);
    }
}
