@extends("layouts.main")
@section("page_title","Register")
@section("main_content")
<x-bread-crumb :crumb="$crumb='Register'" />
<div class="container mt-3">
  <form action="{{route("user.store")}}" method="POST">
    @csrf
    <div class="row m-0">
      <x-b_input name="name" value="" label="Enter name" type="text" id="name_id" />
      <x-b_input name="email" value="" label="Enter Email" type="email" id="email_id" />
      <x-b_input name="mobile" value="" label="Enter Mobile No." type="text" id="mobile_id" />
      <x-b_input name="date" value="" label="Enter DOB" type="date" id="dob_id" />
      <x-b_textarea name="address" value="" label="Enter Address" id="address_id" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection