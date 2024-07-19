<?php

namespace App\Services;

use Dompdf\Dompdf;
use Dompdf\Options;

class DompdfService
{
    public function getDompdf()
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        return new Dompdf($options);
    }
}
