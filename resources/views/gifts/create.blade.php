@extends('layouts.app')
@section('content')

<div class="container-sm">
<form action="{{route('gifts.store')}}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="text" id="description" name="description" class="d-block w-100"></textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Image Url</label>
    <input type="text" class="form-control" id="image" name="image">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Gift Type</label>
    <input type="text" class="form-control" id="type" name="type">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="surname" class="form-label">Surname</label>
    <input type="text" class="form-control" id="surname" name="surname">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div>
@endsection

