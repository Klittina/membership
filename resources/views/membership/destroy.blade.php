@foreach ($memberships as $membership)
<form action="/api/memberships/{{$membership->id}}" method="post">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <div class="form-group">
        <input type="submit" value="{{$membership->location}}">
    </div>
</form>
@endforeach