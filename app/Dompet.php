<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dompet extends Model
{
    private $saldo;
    private $bonus;

    public function __construct($saldo = 100, $bonus = 500)
    {
        $this->saldo = $saldo;
        $this->bonus = $bonus;
    }

    public function cekIsi()
    {
        return $this->saldo;
    }

    public function cekBonus()
    {
        return $this->bonus;
    }
}
