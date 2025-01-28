<form method="post"
      action="{{ url('/mycontroller') }}">
    @csrf
    <input type="text" name="myinput">
    <button type="submit">Submit</button>
</form>