
<section >


    <div class="col-md-6">
        <!-- Event Form -->
        <div class="box box-defualt">
            <div class="box-header">
                <h3 class="box-title">Event Form</h3>
            </div>
            <div class="box-body">
                <!-- Your event form code goes here -->
                <form>
                    <!-- Add your event form fields and elements here -->
                </form>
            </div>
        </div>
    </div>
</div>


    <div class="row">
        <div class="col-md-6">
            <!-- Contact Form -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Contact Form</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="contact_name">Name:</label>
                            <input type="text" class="form-control" id="contact_name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="contact_email">Email:</label>
                            <input type="email" class="form-control" id="contact_email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="contact_message">Message:</label>
                            <textarea class="form-control" id="contact_message" name="message" rows="4" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>



    </section>

