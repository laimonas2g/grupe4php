<?php

class Zveris {
  
    public $kasTu = 'Žvėris';
    private $realiaiKasTu1 = 'MI6';
    private $realiaiKasTu2 = 'SIA';
    private $realiaiKasTu3 = 'Turku zvalgyba';
    public $uodega;

    public function __construct($uodega) // kai panaudojam new - pasileidzia
    { 
        $this->uodega = $uodega;
    }

    public function __get($prop) { // kai bandom paiimti savybe kurios nera
        
        if($prop == 'realiaiKasTu2') {
            return 'Zveriukas su uodega';
        }

        return $this->$prop;
    }

    public function __set($prop, $value) // kai bandom irasyti i savye kurios nera
    { 
        if($prop == 'realiaiKasTu2') {
        return 'Zveriukas su uodega';
        }
        $this->$prop = $value;
    }

}


