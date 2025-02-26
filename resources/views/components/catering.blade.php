<div class="container py-5 px-1">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card shadow-lg border-0">
                <div class="card-body p-5">
                    <h2 class="card-title text-center mb-4 fw-bold">Catering Form</h2>
                    <form action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" value="catering">
                        <div class="row mb-3 form-group">
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
                            <select id="num_people" name="pax" class="form-control" required>
                                @for ($i = 10; $i <= 30; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" class="form-control" placeholder="Select a date" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="pickup_time">Pickup Time:</label>
                            <input type="time" id="pickup_time" name="time" class="form-control" placeholder="Select a pickup time" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="occasion">Occasion:</label>
                            <select id="occasion" name="event" class="form-control" required>
                                @foreach ($events as $event)
                                    <option value="{{ $event->slug }}">{{ ucfirst($event->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="special_request">Special Request:</label>
                            <textarea id="special_request" name="note" class="form-control" rows="4" placeholder="Enter any special requests"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold">Submit</button>
                        </div>

                        {{-- Error Handling --}}
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
