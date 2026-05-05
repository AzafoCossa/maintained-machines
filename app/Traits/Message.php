<?php

namespace App\Traits;

trait Message
{    
    public function showMessage(string $message, ?string $type = 'success'){
        $this->dispatch('show-message', message: $message, type: $type);
    }
}
