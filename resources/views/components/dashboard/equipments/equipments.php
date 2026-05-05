<?php

use App\Livewire\Forms\EquipmentForm;
use App\Traits\Message;
use Livewire\Component;

new class extends Component
{
    use Message;
    public $showEquipmentForm = false;

    public EquipmentForm $equipmentForm;

    public function saveEquipment()
    {
        if($this->equipmentForm->save()){
            $this->showMessage(message:'Equipamento salvo com sucesso.');
            $this->equipmentForm->reset();
            return;
        }

        $this->showMessage(type:'error', message: 'Ocorreu um erro ao tentar salvar equipamento.');
        return;
    }
};