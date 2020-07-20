<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    private $dompet;

    public function __construct(Dompet $dompet)
    {
        $this->dompet = $dompet;
    }

    public function cekDompet()
    {
        return $this->dompet->cekIsi();
    }

    public function cekUang()
    {
        return $this->dompet->cekBonus();
    }
}
