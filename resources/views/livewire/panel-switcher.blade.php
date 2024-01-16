<div>
    <h4>Aantal actief: {{ $subscription->panels()->where('status', 'active')->count()  }}</h4>
    <button class="btn btn-danger" wire:click="switchOffPanels">Systeem stopzetten</button>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="panels d-flex flex-wrap">
        @foreach($subscription->panels as $panel)
            <div
                wire:click="togglePanel({{$panel->id}})"
                class="panel m-2 p-2"
                style="
                width: 100px;
                height: 100px;
                background-color:   @if($panel->status == 'active')
                                        lightgreen
                                    @else
                                        red
                                    @endif">
            </div>
        @endforeach
    </div>
</div>
