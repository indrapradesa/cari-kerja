<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Exception;

trait HandlesErrors
{
    /**
     * Handle the given exception.
     *
     * @param \Exception $e
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleException(Exception $e)
    {
        if ($e instanceof ValidationException) {
            // Handle validation errors
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        } elseif ($e instanceof ModelNotFoundException) {
            // Handle model not found errors
            return redirect()->back()
                ->with('error', 'Resource not found!')
                ->withInput();
        } elseif ($e instanceof QueryException) {
            // Handle query errors
            return redirect()->back()
                ->with('error', 'Database query error!')
                ->withInput();
        } else {
            // Handle all other errors
            return redirect()->back()
                ->with('error', $e->getMessage())
                ->withInput();
        }
    }
}
