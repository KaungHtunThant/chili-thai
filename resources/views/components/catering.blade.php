<div class="container py-5 px-1">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <h2 class="card-title text-center mb-4 fw-bold">Catering Form</h2>
                    <form action="index.php" method="post">
                        <div class="form-group mb-3">
                            <label for="fullname">Full Name:</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="num_people">Number of People:</label>
                            <select id="num_people" name="num_people" class="form-control" required>
                                <?php for ($i = 10; $i <= 30; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" class="form-control" placeholder="Select a date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pickup_time">Pickup Time:</label>
                            <input type="time" id="pickup_time" name="pickup_time" class="form-control" placeholder="Select a pickup time" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="occasion">Occasion:</label>
                            <select id="occasion" name="occasion" class="form-control" required>
                                <option value="birthday">Birthday</option>
                                <option value="wedding">Wedding</option>
                                <option value="corporate">Corporate Event</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="special_request">Special Request:</label>
                            <textarea id="special_request" name="special_request" class="form-control" rows="4" placeholder="Enter any special requests"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold">Submit</button>
                        </div>

                        <!-- Confirmation Message -->
                        {{-- <div class="alert alert-success text-center mt-4">
                            <strong>Catering Request Submitted!</strong><br>
                            Thank you, {{ $name }}! Your catering request for {{ $person_count }} person(s) has been received.<br>
                            Date: {{ $date }} | Pickup Time: {{ $time }}<br>
                            Occasion: {{ $event }}
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
