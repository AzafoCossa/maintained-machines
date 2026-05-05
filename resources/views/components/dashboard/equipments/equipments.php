<?php

use App\Livewire\Forms\EquipmentForm;
use App\Models\Equipment;
use App\Traits\Message;
use Livewire\Component;

new class extends Component
{
    use Message;
    public $showEquipmentForm = false;

    public $equipments = [];

    public EquipmentForm $equipmentForm;

    public function mount()
    {
        $this->getEquipments();
    }

    public function saveEquipment()
    {
        if($this->equipmentForm->save()){
            $this->showMessage(message:'Equipamento salvo com sucesso.');
            $this->equipmentForm->reset();
            $this->getEquipments();
            $this->showEquipmentForm = false;
            return;
        }

        $this->showMessage(type:'error', message: 'Ocorreu um erro ao tentar salvar equipamento.');
        return;
    }

    private function getEquipments()
    {
        return $this->equipments = Equipment::all();
    }
};