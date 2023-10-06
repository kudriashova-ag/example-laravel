@extends('templates.main')

@section('content') 
  <h1>Contacts</h1>

  <form action="" method="POST">

    <div>
      <label for="name">Name: </label>
      <input type="text" name="name" id="name" class="form-control">
    </div>

    <div>
      <label for="email">Email: </label>
      <input type="text" name="email" id="email" class="form-control">
    </div>

    <div>
      <label for="message">Message: </label>
      <textarea name="message" id="message" class="form-control"></textarea>
    </div>

    <button class="btn btn-primary">Send</button>

  </form>
@endsection