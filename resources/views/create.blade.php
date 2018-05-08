@extends ('masterpage')

@section ('content')
<div class="container">
<h1>Creat Notebooks</h1>

<form action="/notebookapp" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label>Book's Name</label>
        <input class="form-control" type="text" name="name" required="required">
    </div>
    <div>
        <input class="btn btn-primary" type= "submit" name="Done" value="Create">
    </div>
</form>
</div>
@endsection