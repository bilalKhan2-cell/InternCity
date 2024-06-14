<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DataGrid extends Component
{
    public $tableHeadings;

    public $tableID;

    public $tableClasses;

    public function __construct($headings,$id)
    {
        $this->tableHeadings = $headings;
        $this->tableID = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-grid');
    }
}
