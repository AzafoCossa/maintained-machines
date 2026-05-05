<?php

namespace App\Livewire\Forms;

use App\Models\Equipment;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EquipmentForm extends Form
{
    public ?string $name = null;

    public function save()
    {
        $this->validate([
            'name' => 'required|string',
        ]);

        $equipment = new Equipment();
        $equipment->name = $this->name;

        return $equipment->save();
    }
}
