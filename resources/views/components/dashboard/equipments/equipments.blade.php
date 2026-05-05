<x-layouts.dashboard>
    <div x-data="{showEquipmentForm: @entangle('showEquipmentForm')}">
        <h4 class="py-3 mb-4">Equipamentos</h4>

        <div x-show="!showEquipmentForm">
            <button @click="showEquipmentForm = true" class="btn btn-primary">Adicionar equipamento</button>
        </div>

        <form wire:submit.prevent="saveEquipment" x-show="showEquipmentForm">
            <div>
                <label for="equipment" class="form-label">Nome do equipamento</label>
                <input wire:model="equipmentForm.name" type="text" class="form-control @error('equipmentForm.name') is-invalid @enderror" id="equipment" placeholder="Forklift" aria-describedby="defaultFormControlHelp">
                @error('equipmentForm.name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="pt-4">
                <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                <button @click="showEquipmentForm = false" type="button" class="btn btn-label-secondary waves-effect">Cancel</button>
            </div>
        </form>
    </div>
</x-layouts.dashboard>