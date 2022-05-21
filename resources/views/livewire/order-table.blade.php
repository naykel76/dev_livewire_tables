<div>
    <table class="fullwidth">

        <div class="flex gg">

            <x-input wire:model="search" for="search" placeholder="Search {{ $searchBy }} ..." />

            <div>
                <x-select wire:model="searchBy" for="searchBy" label="Search By" inline>
                    <option value="status">Status</option>
                    <option value="id">ID</option>
                    <option value="amount">Amount</option>
                </x-select>
            </div>

        </div>

        <thead>
            <tr>
                <th>ID</th>
                <x-table.th sortable wire:click="sortBy('amount')" :direction="$sortBy === 'amount' ? $sortDirection : null" class="cursor-pointer">Amount</x-table.th>
                <x-table.th sortable wire:click="sortBy('order_date')" :direction="$sortBy === 'order_date' ? $sortDirection : null" class="cursor-pointer">Order Date</x-table.th>
                <x-table.th sortable wire:click="sortBy('due_date')" :direction="$sortBy === 'due_date' ? $sortDirection : null" class="cursor-pointer">Due Date</x-table.th>
                <x-table.th sortable wire:click="sortBy('status')" :direction="$sortBy === 'status' ? $sortDirection : null" class="cursor-pointer">Status</x-table.th>
            </tr>
        </thead>

        @forelse($orders as $order)

            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->due_date }}</td>
                <td>{{ $order->status }}</td>
                <td></td>
            </tr>

        @empty

            <tr>
                <td class="tac pxy" colspan="4">There is nothing to be displayed.</td>
            </tr>

        @endforelse

    </table>

    {{ $orders->links('gotime::pagination.livewire') }}

</div>
