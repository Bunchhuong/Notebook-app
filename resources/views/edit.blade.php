@extends ('masterpage')

@section ('content')
<div class="container">
<h1>Edit Your Notebooks</h1>

<form action="/notebookapp/{{$notebook->id}}" method="POST">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <div class="form-group">
        <label>Book's Name </label>
        <input class="form-control" type="text" name="name" required="required">
    </div>
    <div>
        <input class="btn btn-primary" type= "submit" value="Update">
    </div>
</form>    
</div>
@endsection