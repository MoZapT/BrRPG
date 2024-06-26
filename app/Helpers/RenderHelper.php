<?php

use Illuminate\Support\Facades\Blade;

if(!function_exists('livewire')) {
    function livewire(string $view, array $data = []) {
        $content = '<x-app-layout>';
        $content .= '<livewire:'.$view.' view="'.$view.'"/>';
        $content .= '</x-app-layout>';

        return Blade::render($content, $data);
    }
}