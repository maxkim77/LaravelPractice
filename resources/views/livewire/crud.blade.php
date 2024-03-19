<div>
    <div>
        <h2>데이터조회</h2>
        @foreach($update as $item)
            <p>{{ $item->from }}</p>
            <p>{{ $item->name }}</p>
            <p>{{ $item->count }}</p>
        @endforeach
    </div>

    <div>
        <h2>데이터입력</h2>
        <input type="text" wire:model="from" placeholder="from">
        <input type="text" wire:model="name" placeholder="name">
        <input type="text" wire:model="count" placeholder="count">
        <button wire:click="create">추가하기</button>
    </div>
    <div>
        <h2>데이터수정</h2>
        <input type="text" wire:model="idToUpdate" placeholder="ID">
        <input type="text" wire:model="updatedCount" placeholder="count">
        <button wire:click="update">수정하기</button>
    </div>
    <div>
        <h2>데이터삭제</h2>
        <input type="text" wire:model="idToDelete" placeholder="ID">
        <button wire:click="delete($idToDelete)">삭제하기</button>
    </div>
</div>
