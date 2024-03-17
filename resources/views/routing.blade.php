{{$id}}

@if(isset($data))
    {{$data}}
@endif

<form action="/api/post" method="post">
    @csrf
    <input type="text" name="name">
    <input type="submit" value="테스트해보기">
</form>
