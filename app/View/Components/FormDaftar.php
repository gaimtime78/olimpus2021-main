<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormDaftar extends Component
{
    public $type;
    public $name;
    public $required;
    public function __construct($type = "", $name = "", $required = false)
    {
        $this->$type = $type;
        $this->$name = $name;
        $this->$required = $required;
    }
    public function render()
    {
        return view('components.form-daftar');
    }
}
