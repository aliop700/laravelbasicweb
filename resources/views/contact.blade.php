@extends('layouts.app')
@section('content')
<h1>Contact</h1>
<div>
    <form action="/messages/submit" method="post">
        <div class="form-group">
            <label for="name"> Name</label>
            <input id="name" name="name" type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email"> Email</label>
            <input id="email" name="email" type="text" class="form-control" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="message"> Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="your message goes here"></textarea>
        </div>
        <div>
        {{ csrf_field() }}

            <input type="submit" class="btn btn-primary" value="Send"> 
        </div>
    </form>
</div>
@endsection