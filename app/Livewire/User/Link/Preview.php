<?php

namespace App\Livewire\User\Link;

use Livewire\Component;
use Livewire\Attributes\On;

class Preview extends Component
{
    #[On('link-updated')]
    #[On('link-deleted')]
    public function render()
    {
        return view('livewire.user.link.preview',[
            'links' => auth()->user()->links()->select('id','title','url','is_icon')->where('is_active', true)->orderBy('updated_at')->get(),
        ]);
    }
}
