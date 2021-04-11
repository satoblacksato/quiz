<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class HrefOrderBy extends Component
{
    public $label;
    public $link;
    public $page;
    public $key;
    
    /**
     * HrefOrderBy constructor.
     * @param $label
     * @param string $link
     */
    public function __construct($label,$key,$link='#')
    {
        $this->label=$label;
        $this->link=$link;
        $this->key=$key;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->page='';
        if(request()->has('page')){
            $this->page='&page='.request()->get('page');
        }
        return <<<'blade'
    <th class="py-3 px-4 text-left">
        {{$label}}<br/>
        <a href="{{$link}}?orderBy=desc&orderField={{$key}}{{$page}}">↓</a>
        <a href="{{$link}}?orderBy=asc&orderField={{$key}}{{$page}}">↑</a>
    </th>
    blade;
    }
}
