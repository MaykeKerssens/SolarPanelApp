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

        // success message
        if( $panel->status == 'active' ){
            session()->flash('message', 'Zonnepaneel #' . $panelId .  ' succesvol geactiveerd');
        } else {
            session()->flash('message', 'Zonnepaneel #' . $panelId .  ' succesvol gedeactiveerd');
        }
    }

    public function switchOffPanels()
    {
        $panels = $this->subscription->panels;

        foreach ($panels as $panel){
            $panel->status = 'inactive';
            $panel->save();
        }

        session()->flash('message', 'Alle zonnepanelen succesvol uitgeschakeld. Klant is op de hoogte gesteld');
    }

    public function render()
    {
        return view('livewire.panel-switcher');
    }
}
