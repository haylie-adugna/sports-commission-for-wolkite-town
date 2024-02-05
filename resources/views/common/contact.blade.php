
<section >
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif


      <div class="box-body">


        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="text-center">Contact Us</h3>
            </div>
    <form action="{{ route('contactform') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name" required maxlength="255">
            <small class="form-text text-muted">Your full name, max 255 characters.</small>
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>


        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required maxlength="255">
            <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" rows="4" name="message" placeholder="Enter your message here" required maxlength="500">{{ old('message') }}</textarea>
            <small class="form-text text-muted">Maximum 500 characters</small>
            @error('message')<div class="text-danger">{{ $message }}</div>@enderror
          </div>


        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-info pull-right">Send</button>
        </div>


    </form>
        </div>
    </div>
    </section>

