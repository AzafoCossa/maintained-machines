<x-layouts.dashboard>
    <div x-data="{showEquipmentForm: @entangle('showEquipmentForm')}">
        <h4 class="py-3 mb-4">Equipamentos</h4>

        <div x-show="!showEquipmentForm">
            <button @click="showEquipmentForm = true" class="btn btn-primary">Adicionar equipamento</button>
        </div>

        <div x-show="!showEquipmentForm" class="card mt-7">
            <h5 class="card-header">Listagem de equipamentos</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead>
                    <tr class="text-nowrap">
                    <th>#</th>
                    <th>Nome do equipamento</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($equipments as $equipment)
                    <tr>
                        <th scope="row">{{$loop->index++}}</th>
                        <td>{{$equipment->name}}</td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
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