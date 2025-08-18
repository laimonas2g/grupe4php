<?php
namespace mano\vardas\toks;
class Matematika extends Atvaizdavimas implements Planas, Planas2
{
    public function sudetiDuSkaicius($a, $b)
    {
        return $a + $b;
    }

    public function atimti($a, $b)
    {
        return $a - $b;
    }

    public function dauginti($a, $b)
    {
        return $a * $b;
    }

    public function dalinti($a, $b)
    {
        if ($b == 0) {
            return 'Negalima dalinti iš 0';
        }
        return $a / $b;
    }
}