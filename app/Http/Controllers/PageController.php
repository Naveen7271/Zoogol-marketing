<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    /**
     * Show the application homepage.
     */
    public function home(): View
    {
        return view('pages.home');
    }

    /**
     * Show the "What is Zoogol" explanatory page.
     */
    public function whatIsZoogol(): View
    {
        return view('pages.what-is-zoogol');
    }

    /**
     * Show the "Why Zoogol" advantages and comparison page.
     */
    public function whyZoogol(): View
    {
        return view('pages.why-zoogol');
    }

    /**
     * Show the "How to Start" step-by-step onboarding guide.
     */
    public function howToStart(): View
    {
        return view('pages.how-to-start');
    }

    /**
     * Show the "How Zoogol Works" page.
     */
    public function howZoogolWorks(): View
    {
        return view('pages.how-zoogol-works', [
            'reasonsImagePath' => $this->findExistingPublicImage('images/how-zoogol-works-reasons'),
            'partnersImagePath' => $this->findExistingPublicImage('images/how-zoogol-works-partners'),
        ]);
    }

    /**
     * Resolve the first existing image path for a public relative basename.
     */
    private function findExistingPublicImage(string $baseRelativePath): ?string
    {
        foreach (['png', 'jpg', 'jpeg', 'webp'] as $extension) {
            $candidatePath = "{$baseRelativePath}.{$extension}";
            if (file_exists(public_path($candidatePath))) {
                return $candidatePath;
            }
        }

        return null;
    }

    /**
     * Show the "Refer and Earn" program page.
     */
    public function referAndEarn(): View
    {
        return view('pages.refer-and-earn');
    }
}
