import './bootstrap';
import './../../vendor/power-components/livewire-powergrid/dist/powergrid'

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus'
Alpine.plugin(focus)
window.Alpine = Alpine;
Alpine.start();
