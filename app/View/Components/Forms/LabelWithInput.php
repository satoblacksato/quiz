<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class LabelWithInput extends Component
{
    private $name,$label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label)
    {
        $this->name=$name;
        $this->label=$label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.label-with-input')->with([
            'name'=>$this->name,
            'label'=>$this->label
        ]);
    }
}
