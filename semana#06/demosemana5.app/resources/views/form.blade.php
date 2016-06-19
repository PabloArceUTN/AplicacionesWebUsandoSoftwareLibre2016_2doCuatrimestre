<form action="{{ url('/post') }}?car=nissan&model=sentra" method="post">
  {{ csrf_field() }}
  <input type="text" name="name" value="Pablo">
  <input type="text" name="lastname" value="Arce">
  <input type="submit" value="Send">
</form>
