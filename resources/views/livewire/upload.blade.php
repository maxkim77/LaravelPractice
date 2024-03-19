<div>
    <h1>라라벨 업로드 페이지 구현</h1>
    <div>
        <h2>업로드 미리보기 영역</h2>
        @if ($photo)
            <img src="{{ $photo->temporaryUrl() }}">
        @endif
    </div>
    <div>
        <h2>업로드 폼 영역</h2>
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            <input type="file" wire:model="photo">
            <button> 이미지 저장 </button>
        </form>
        @error('photo')
        <span>{{$message}}</span>
        @enderror
    </div>
    <div>
        <h2>업로드 결과 영역</h2>
        @if ($path)
            <img src="{{ $path }}">
        @endif
    </div>
</div>
