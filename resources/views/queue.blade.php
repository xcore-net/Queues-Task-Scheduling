<form method="POST" action="/queue">
    {{csrf_field()}}
    <input type="text" name="text">
    <input type="submit" value="submit">
</form>