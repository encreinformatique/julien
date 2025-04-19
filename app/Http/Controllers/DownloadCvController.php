<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use function Spatie\LaravelPdf\Support\pdf;

class DownloadCvController extends Controller
{
    public function __invoke(string $locale, Request $request)
    {
        if (! in_array($locale, ['en', 'es', 'fr'])) {
            abort(400);
        }

        App::setLocale($locale);
        Carbon::setLocale($locale);

        $view = 'cv';
        if ($request->query->getBoolean('expanded')) {
            $view = 'cv_expanded';
        }

        if ($request->query->getBoolean('html')) {
            return view($view);
        }

        $fileName = sprintf('jdevergnies-%s.pdf', $locale);
        return pdf()
            ->view($view)
            ->name($fileName)
            ->download($fileName);
    }

    public function seo(string $locale, Request $request)
    {
        if (! in_array($locale, ['en', 'es', 'fr'])) {
            abort(400);
        }

        App::setLocale($locale);

        $view = 'cv_seo';
        if ($request->query->getBoolean('expanded')) {
            $view = 'cv_expanded_seo';
        }

        if ($request->query->getBoolean('html')) {
            return view($view);
        }

        // return view('cv_seo');
        $fileName = sprintf('jdevergnies-%s.pdf', $locale);
        return pdf()
            ->view($view)
            ->name($fileName)
            ->download($fileName);
    }
}
