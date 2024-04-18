<div>
    <form wire:submit.prevent="submit">

    <input wire:model="search" type="search">
    <button type="submit">Save Contact</button>

    @if (!empty($search))
        <h1>Hey You Search about "{{ $search }}"</h1>
    @endif
    </form>
</div>
