<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Glacial Studio - Modern Web Development & Digital Solutions')] class extends Component {};

?>

<main id="main-content" class="overflow-x-hidden bg-glacier-950" x-data>
    <livewire:header />
    <livewire:hero />
    <livewire:about />
    <livewire:hero2 />
    <livewire:products />
    <livewire:testimonials />
    <livewire:services />
    <livewire:contact />
    <livewire:footer />
</main>
