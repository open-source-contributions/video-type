<?php

namespace Selective\VideoType\Provider;

use Selective\VideoType\Detector\AviDetector;
use Selective\VideoType\Detector\MpegDetector;
use Selective\VideoType\Detector\Mpeg4Detector;
use Selective\VideoType\Detector\MkvDetector;
use Selective\VideoType\Detector\WebMDetector;

/**
 * All videos formats.
 */
class DefaultVideoProvider implements ProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDetectors(): array
    {
        return [
            new AviDetector(),
            new MpegDetector(),
            new Mpeg4Detector(),
            new MkvDetector(),
            new WebMDetector(),
        ];
    }
}
