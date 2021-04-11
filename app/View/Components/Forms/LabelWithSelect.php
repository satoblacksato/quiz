<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class LabelWithSelect extends Component
{
    private $name,$label,$collect;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label,$collect=[])
    {
        $this->name=$name;
        $this->label=$label;
        $this->collect=$collect;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.label-with-select')->with([
            'name'=>$this->name,
            'label'=>$this->label,
            'collect'=>$this->collect
        ]);
    }
}
