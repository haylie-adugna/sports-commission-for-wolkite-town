@include('common.style')
@include('frontend.nav')
@include('common.script')

<section class="pull-bottom">


    <div class="col-md-6">
        <!-- Event Form -->
        <div class="box box-defualt">
            <div class="box-header">
                <h3 class="box-title">Event Form</h3>
            </div>
            <div class="box-body">
                <div class="col-lg-12 col-xl-6">

                    <div class="card">
                    <div class="card-header">
                    <h5>Street View</h5>
                    <span>Map shows view of street</span>
                    </div>
                    <div class="card-block">
                    <div id="mapStreet" class="set-map"></div>
                    </div>
                    </div>

                    </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <!-- Contact Form -->
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-envelope"></i>

                    <h3 class="box-title">Contact Us</h3>
                </div>

                <div class="box-body">

                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                Swal.fire({
                                    position: "center",
                                    icon: "success",
                                    title: "{{ session('success') }}",
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            });
                        </script>
                    @endif

                    <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control" placeholder="Email"
                                        value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Phone:</strong>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone"
                                        value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Subject:</strong>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"
                                        value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea name="message" rows="3" class="form-control" placeholder="write message here...">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center pull-right">
                            <button class="btn btn-success btn-submit" id="sendEmail">Submit
                            <i class="fa fa-arrow-circle-right"></i></button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
