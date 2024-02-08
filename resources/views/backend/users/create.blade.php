@extends('layouts.app')

@section('content')
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form class="row g-3 needs-validation" novalidate method="post" action="{{ route('users.register') }}">        @csrf
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">First name</label>
          <input type="text" class="form-control" id="validationCustom01" name="first_name" value="haylie" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Last name</label>
          <input type="text" class="form-control" id="validationCustom02"  name="last_name" value="adugna" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="validationCustom02" value="@gmail.com" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">User Type</label>
            <select class="form-select" name="user_type" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                @if (Auth::user()->user_type === 'clubmanager')
                    <option value="coach">Coach</option>
                    <option value="player">Player</option>
                @endif
                @if (Auth::user()->user_type === 'commissioner')
                    <option value="gameofficer">Game Officer</option>
                    <option value="projectmanager">Project Manager</option>
                @endif
                @if (Auth::user()->user_type === 'gameofficer')
                    <option value="clubmanager">Club Manager</option>
                    <option value="referee">Referee</option>
                @endif
            </select>
            <div class="invalid-feedback">
                Please select a valid user type.
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="validationCustom03" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">retype Password</label>
            <input type="password" class="form-control" name="password" id="validationCustom03" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Preferred Language</label>
            <select class="form-select" name="preferred_language" id="validationCustom04" required>
                <option selected disabled value="">Choose...</option>
                <option value="english">English</option>
                <option value="english">Edglish</option>
                <option value="english">Esnglish</option>
                <option value="english">Ernglish</option>
                <option value="english">Eknglish</option>
                <option value="english">Esnglish</option>
                <option value="english">English</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
                <!-- Add more language options as needed -->
            </select>
            <div class="invalid-feedback">
                Please select a preferred language.
            </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">City</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">State</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Zip</label>
          <input type="text" class="form-control" id="validationCustom05" required>
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Register</button>
        </div>
      </form>
      <script>
        (function() {
            'use strict';

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation');

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }

                        form.classList.add('was-validated');
                    }, false);
                });

            // Password Match Validation
            $('#validationCustom03, #validationCustom04').on('input', function() {
                var password = $('#validationCustom03').val();
                var retypePassword = $('#validationCustom04').val();

                if (password === retypePassword) {
                    $('#validationCustom04').removeClass('is-invalid').addClass('is-valid');
                    $('.invalid-feedback').hide();
                } else {
                    $('#validationCustom04').removeClass('is-valid').addClass('is-invalid');
                    $('.invalid-feedback').show();
                }
            });
        })();
    </script>

@endsection
    </div>
</div>




