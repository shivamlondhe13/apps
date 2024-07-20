@extends("layouts.main")
@section("page_title","Login")
@section("main_content")
<x-bread-crumb :crumb="$crumb='Login'" />
<div class="container">
  <form>
    <div>
      <x-b_input name="name" type="text" label="Username/email"/>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection