@foreach ($membe$memberships as$membership)
<form action="/api/membe$memberships/{{$membe$membership->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$membe$membership->location}}">
    </div>
</form>
@endforeach