<?php

namespace App\Livewire;

use App\Models\Panel;
use Livewire\Component;

class PanelSwitcher extends Component
{
    public $subscription;

    public function togglePanel($panelId) {

        $panel = Panel::find($panelId);
        $panel->status = $panel->status == 'active' ? 'inactive' : 'active';
        $panel->save();

    }

    public function render()
    {
        return view('livewire.panel-switcher');
    }
}
