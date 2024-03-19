<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Ordermenu;

class Crud extends Component
{
    public $update;
    public $from, $name, $count;
    public $idToUpdate, $updatedCount;
    public $idToDelete;

    public function mount()
    {
        $this->update = Ordermenu::all();
    }

    public function create()
    {
        Ordermenu::create([
            'from' => $this->from,
            'name' => $this->name,
            'count' => $this->count
        ]);
    }

    public function update()
    {
        Ordermenu::where("id", $this->idToUpdate)->update([
            'count' => $this->updatedCount
        ]);
        $this->update = Ordermenu::all();
    }

    public function delete($id)
    {
        Ordermenu::where("id", $id)->delete();
        $this->update = Ordermenu::all();
    }

    public function render()
    {
        return view('livewire.crud', ['update' => $this->update]);
    }
}