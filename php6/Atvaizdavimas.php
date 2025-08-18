<?php
namespace mano\vardas\toks;

abstract class Atvaizdavimas implements Planas, Planas2
{
    const ATV = 'Tipo atvaizdavimas';
    
    public function atvaizduotiSuma($a, $b)
    {
        $suma = $this->sudetiDuSkaicius($a, $b);
        echo '<h2>Suma: ' . $suma . '</h2>';
    }

        public function atvaizduotiSkirtuma($a, $b)
    {
        $suma = $this->atimti($a, $b);
        echo '<h2>Suma: ' . $suma . '</h2>';
    }

    public abstract function sudetiDuSkaicius($a, $b);

    public abstract function atimti($a, $b);
}