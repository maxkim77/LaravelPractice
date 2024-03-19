<div>
    <h1>{{ $post }}</h1> <!-- 변수 출력 시 $post 사용 -->
    <p>-----구분 줄--------</p>
    <input type="text" wire:model="post">
    <p>-----구분 줄--------</p>
    <h1>{{ $clicked }}</h1>
    <button wire:click="click">Click me</button> <!-- 올바른 wire:click 사용 -->
    <p>-----구분 줄--------</p>
    @if($toggle)
        <h1>Toggle is true</h1>
    @else
        <!-- wire:click에 직접 메서드 호출을 사용 -->
        <button wire:click="toggle">Toggle</button>
    @endif
    <p>-----구분 줄--------</p>
    <form wire:submit.prevent="validation">
        <input type="text" wire:model="name">
        @error('name')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br/>
        <input type="text" wire:model="email">
        @error('email')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br/>
        <input type="password" wire:model="password">
        <br/>
        <button type="submit">Submit</button>
    </form>
</div>
