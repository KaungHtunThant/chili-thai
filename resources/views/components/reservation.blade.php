<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <h2 class="card-title text-center mb-4 fw-bold">Make a Reservation</h2>
                    <form action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" value="reservation">
                        <!-- Name Input -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name"
                                    placeholder="First Name" required aria-required="true">
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name"
                                    placeholder="Last Name" required aria-required="true">
                            </div>
                        </div>

                        <!-- Email Input -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" required aria-required="true">
                        </div>

                        <!-- Phone Input -->
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="Enter your phone number" required aria-required="true">
                        </div>

                        <!-- Date and Time Selection -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required
                                    aria-required="true" placeholder="Select Date">
                            </div>
                            <div class="col-md-6">
                                <label for="time" class="form-label">Time</label>
                                <select class="form-select" id="time" name="time" required aria-required="true">
                                    <option value="" selected>Select Time</option>
                                </select>
                            </div>
                        </div>

                        <!-- Party Size Selection -->
                        <div class="mb-3">
                            <label for="partySize" class="form-label">Party Size</label>
                            <select class="form-select" id="partySize" name="pax" required aria-required="true">
                                <option value="" disabled selected>Select number of guests</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                        </div>

                        <!-- Special Requests -->
                        <div class="mb-4">
                            <label for="requests" class="form-label">Special Requests</label>
                            <textarea class="form-control" id="requests" rows="3"
                                placeholder="Any dietary restrictions or seating preferences?" name="note"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold">Reserve Now</button>
                        </div>

                        @if (session('status'))
                            @if (session('status') === 200)
                                <div class="alert alert-success text-center mt-4">
                                    <strong>{{ session('message') }}</strong><br>
                                    {{ session('details') }}
                                    <br>
                                    {{ session('datetime') }}
                                </div>
                            @else
                                <div class="alert alert-danger text-center mt-4">
                                    <strong>{{ session('message') }}</strong>
                                </div>
                                @if(config('app.debug') && config('app.env') !== 'production')
                                    <script>
                                        console.log({{ session('details') }});
                                    </script>
                                @endif
                            @endif
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        flatpickr("#date", {
            dateFormat: "m-d-Y", // Customize the date format
            minDate: "today", // Disable past dates
            maxDate: new Date().fp_incr(100),
            theme: "black",
            disable: [
                function(date) {
                    // Disable Sundays
                    return date.getDay() === 0;
                }
            ]

        });
    });

    function timeDropDown() {
        const selectTime = document.getElementById("time");
        const businessHour = {
            start: 11,
            end: 19,
            interval: 30
        };

        try {
            selectTime.innerHTML = '<option value="" disabled selected>Select Time</option>';
            for (let hours = businessHour.start; hours <= businessHour.end; hours++) {
                for (let minutes = 0; minutes < 60; minutes += businessHour.interval) {
                    const time = hours >= 12 ? "PM" : "AM";
                    const formattedHours = hours > 12 ? hours - 12 : hours;
                    const formattedMinutes = minutes.toString().padStart(2, "0");
                    const timeString = `${formattedHours}:${formattedMinutes} ${time}`

                    const option = document.createElement("option");
                    option.value = timeString;
                    option.textContent = timeString;
                    selectTime.appendChild(option);
                }
            }
        } catch (error) {
            console.error("Error generating time options", error);
        }
    };
    document.addEventListener('DOMContentLoaded', timeDropDown);
</script>
