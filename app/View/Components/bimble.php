<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class bimble extends Component
{
    public $title;
    public $info;

    /**
     * 
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $info)
    {
        $this->title = $title;
        $this->info = $info;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {

        return view('components.bimble', [
            'list' => $this->list(),
            'data' => $this->dataMovie(),
        ]);
    }

    public function list()
    {
        return [
            'nama' => 'Mohamad Hafid Masruri',
            'nim' => 17010197,
            'alamat' => 'Konoha'
        ];
    }

    public function dataMovie()
    {
        $data = DB::table('articles')->get();
        return $data;
    }
}
