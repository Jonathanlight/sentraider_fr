<?php

namespace App\Services;

use Spatie\Browsershot\Browsershot;
use Spatie\Image\Manipulations;
use Twig\Environment;

class BrowsershotService
{
    /**
     * @var string
     */
    public $pathName;

    /**
     * @var Environment
     */
    private $twig;

    /**
     * @param Environment $twig
     */
    public function __construct(Environment $twig)
    {
        $this->pathName = 'public/uploads/screenshot/'. mb_strtolower(uniqid('screen_', false)).'.png';
        $this->twig = $twig;
    }

    /**
     * @throws \Spatie\Browsershot\Exceptions\CouldNotTakeBrowsershot
     * @throws \Spatie\Image\Exceptions\InvalidManipulation
     */
    public function screenshot()
    {
        $delayInMilliseconds = 500;

        Browsershot::url('https://localhost:9200/')

            ->setScreenshotType('jpeg', 100)
            ->windowSize(1920, 1080)


            ->deviceScaleFactor(2)
            ->select('.box-block-screen')


            /*

            ->bodyHtml();


            ->fullPage()
            ->greyscale()
            ->clip(1, 10, 200, 200)
            ->fit(Manipulations::FIT_CONTAIN, 200, 200)

            ->hideBackground()
            ->dismissDialogs()
            ->disableJavascript()
            ->disableImages()
            ->waitUntilNetworkIdle()
            ->setDelay($delayInMilliseconds)

            ->userAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1')
            ->windowSize(375, 812)
            ->deviceScaleFactor(3)
            ->mobile()
            ->touch()
            ->landscape(false)
            */

            ->save($this->pathName);
    }

    /**
     * @throws \Spatie\Browsershot\Exceptions\CouldNotTakeBrowsershot
     */
    public function screenshotHtml()
    {
        $html = $this->twig->render('default/index.html.twig', []);

        Browsershot::html($html)
            ->fullPage()
            ->save($this->pathName);
    }
}