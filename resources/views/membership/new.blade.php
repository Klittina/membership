<form action="/api/memberships" , method="post">
    {{csrf_field()}}
    {{method_field('POST')}}
    <label for="establishment">club_id:</label><br>
    <input type="date" id="establishment" name="establishment" value=""><br>
    <label for="location">location:</label><br>
    <input type="text" id="location" name="location" value=""><br><br>
    <label for="max_number">max_number:</label><br>
    <input type="number" id="max_number" name="max_number" value=""><br><br>
    <input type="submit" value="Submit">
</form>