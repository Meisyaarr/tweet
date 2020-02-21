@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div class="card border-0">
                <div class="card-body">
                    <div class="d-flex">
                    <img src="{{asset('images/pics.jpg')}}" width="50" height="50" class="rounded-circle" alt="">
                                <div class="ml-3">
                            <h6 class="text-dark">
                                Meisya
                                <small class="text-muted">@meisyaarr
                                </small>
                            </h6>
                            <h6 class="text-primary">@mei,
                                <span class="text-muted">
                                Lorem ipsum dolor sit amet,
                                consectetur adipisching elit,
                                sed do.
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</div>
@endsection
