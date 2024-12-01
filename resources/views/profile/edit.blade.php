@extends('layouts.landing-layout')

@section('content')
<div class="container mt-5">

    <!-- Profile Information -->
    @include('profile.partials.update-profile-information-form')

    <!-- Update Password -->
    @include('profile.partials.update-password-form')

    <!-- Delete Account -->
    @include('profile.partials.delete-user-form')

</div>
@endsection
