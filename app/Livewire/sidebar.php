<?php

namespace App\Livewire;
use Livewire\Component;

class sidebar extends Component{

    public $currentMenu = '';

    public function mount()
    {
        $this->currentMenu = session()->get('current_menu') ?? '';
    }

    public function changeMenu($menu)
    {
        $this->currentMenu = $menu;

        session()->put('current_menu', $menu);
        return redirect()->to('/' . $menu);
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}