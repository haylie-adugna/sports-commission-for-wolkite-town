@extends('layouts.app')

@section('content')
<div class="post-inner-content">
    <section class="error-404 not-found">
    <div class="page-content">
    <div class="row">
        <div>
                    @include('backend.profile.partials.update-profile-information-form')
            </div>

                <div>
                    @include('backend.profile.partials.update-password-form')
                </div>

            <div>
                    @include('backend.profile.partials.delete-user-form')
            </div>
</div>
</div>
    </section>
</div>
    @endsection
