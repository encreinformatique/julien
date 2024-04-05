<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Spatie\LaravelPdf\PdfBuilder;
use function Spatie\LaravelPdf\Support\pdf;

class DownloadCvController extends Controller
{
    public function __invoke(string $locale)//: PdfBuilder
    {
        if (! in_array($locale, ['en', 'es', 'fr'])) {
            abort(400);
        }

        App::setLocale($locale);

        return view('cv');
        $fileName = sprintf('jdevergnies-%s.pdf', $locale);
        return pdf()
            ->view('cv')
            ->name($fileName)
            ->download($fileName);
    }
}
