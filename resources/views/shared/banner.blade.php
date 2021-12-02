@extends('layouts.master')

<div class="row">
    <div class="p-5 mb-4 bg-white rounded-3">
        <h1>Tom Zielinski</h1>
        <div class="d-flex">
            <div class="m-auto p-0">
                <img class="rounded-circle headshot-portrait bg-primary" src="{{ URL('/images/ProfileIcon.png') }}" alt="Profile pic">
            </div>
            <div class="col-9">
                <div class="col-12">
                    <h2 for="inputAddress" class="form-label">Name</label>
                    <h5>{{ $user->first_name . ' ' . $user->last_name }}</h5>
                </div>
                <div class="col-md-6">
                    <h2 for="inputEmail4" class="form-label">Email</h2>
                    <h5>TomZielinski@google.com</h5>
                </div>
                <div class="col-12">
                    <h2 for="inputAddress" class="form-label">Phone Number</h2>
                    <h5>(905) 123-4567</h5>
                </div>
                <div class="col-12">
                    <h2 for="inputAddress" class="form-label">Address</h2>
                    <h5>123 st Oshawa On l1l 2l2</h5>
                </div>
            </div>
        </div>
        <button class="btn btn-primary btn-lg" type="button">Edit</button>
    </div>
</div>