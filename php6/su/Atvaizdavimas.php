<?php
namespace Driftas;

class Atvaizdavimas {

    private const NAMES = [
        'Driftink Pats',
        'Drift Taxi',
        'Drift Akademija'
    ];

    const PRICES = [
        '79,99',
        '49,99',
        '299,99'
    ];


    public function paint()
    {
        $html = '<ul>';
        foreach (self::NAMES as $index => $name) {
            $price = self::PRICES[$index];
            $html .= "<li><i>$name</i> <b>$price</b>";
        }
        $html .= '</ul>';
        echo $html;
    }


}