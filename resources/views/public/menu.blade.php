@extends('layouts.index')

@section('content')
    <main class="bd-content p-3 bg-black text-light">
        <div class="accordion" id="accordionPanelsStayOpen">
            @foreach ($categories as $category)
                <div class="accordion-item bg-black text-light border-dark">
                    <h2 class="accordion-header" id="panelsStayOpen-headingCurry">
                        <button class="accordion-button bg-black text-light " type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseCurry" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseCurry">
                            <h2>{{ $category->name }}</h2>
                            <hr />
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseCurry" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingCurry">
                        <div class="accordion-body row mb-3">
                            @foreach ($category->items as $item)
                                <div class="col-sm-12 col-md-4 col-lg-3 col-xl-3 p-1">
                                    <div class="card bg-dark text-light border-light h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <h4 class="card-title col-9">{{ $loop->iteration. '. ' .$item->name }}</h4>
                                                <p class="col-3 text-success">{{ $item->price }}</p>
                                            </div>
                                            <p class="card-text">{{ Str::limit($item->description, 100).'...' }}</p>
                                            <a href="#" class="btn btn-primary" target="_blank">Order Online</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
