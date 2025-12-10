<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public bool $mobileMenuOpen = false;

    public function toggleMobileMenu(): void
    {
        $this->mobileMenuOpen = !$this->mobileMenuOpen;
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
