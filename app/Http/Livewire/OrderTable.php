<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class OrderTable extends Component
{

    use WithPagination;

    public $search;
    public $searchBy = 'status';
    public $sortDirection = "asc";
    public $sortBy = "id";

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortBy = $field;
    }

    public function render()
    {
        sleep(0.5);
        return view('livewire.order-table')->with([
            'orders' => Order::search($this->searchBy, $this->search)
                ->orderBy($this->sortBy, $this->sortDirection)
                ->paginate(18),
        ]);
    }
}
