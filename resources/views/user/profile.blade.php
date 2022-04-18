@extends('user.layouts.app')

@section('title')
    @lang('title.profile')
@stop

@section('content')
    <!-- CONTENT WRAPPER -->
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-4 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold"><strong>
                            <h5>Name: {{ Auth::user()->name }}</h5>
                        </strong></span><span class="text-black-50"><strong>
                            <h4>Username: {{ Auth::user()->email }}</h4>
                        </strong></span><span>
                    </span></div>
            </div>
            <div class="col-md-8 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    @include('component.alert')
                    <form method="POST" action="{{ route('profilesave') }}">
                        {{ csrf_field() }}
                        <div class="row mt-2">
                            <input type="hidden" class="form-select1" value="{{ Auth::user()->id }}" name="user_id">
                            <div class="col-md-6"><label class="labels">First Name</label>

                                <input type="text" class="form-select1" disabled placeholder="First name"
                                    value="{{ Auth::user()->name }}" name="name" required>
                            </div>
                            <div class="col-md-6"><label class="labels">Last Name</label><input type="text"
                                    class="form-select1" value="{{ $user->last_name }}" placeholder="Last Name"
                                    name="last_name" required></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Mobile Number</label><input
                                    type="text" class="form-select1" placeholder="Enter phone number"
                                    value="{{ $user->phone }}" name="phone" >
                                    <!-- @error('phone')
                                        <span class="alert alert-danger">{{ $message }}</span>
                                    @enderror -->
                            </div>
                            <div class="col-md-12"><label class="labels">Email ID</label><input type="text"
                                    disabled class="form-select1" placeholder="Enter email"
                                    value="{{ Auth::user()->email }}" name="email"></div>
                            <div class="col-md-12"><label class="labels">Address</label><input type="text"
                                    class="form-select1" placeholder="Enter address" value="{{ $user->address }}"
                                    name="address" >
                            </div>
                            <div class="col-md-6"><label class="labels">Gender</label>
                                <select name="gender" id="gender" class="form-select" >
                                    @if (!$user->gender)
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    @else
                                        <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                    @endif
                                </select>
                            </div>
                            <div class="col-md-6"><label class="labels">Postcode</label><input type="text"
                                    class="form-select1" placeholder="Postcode" value="{{ $user->postcode }}" name="postcode" ></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Country</label><input type="text"
                                    class="form-select1" placeholder="Country" value="{{ $user->country }}" name="country" ></div>
                            <div class="col-md-6"><label class="labels">State/Region</label><input type="text"
                                    class="form-select1" value="{{ $user->state }}" placeholder="State" name="state" ></div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save
                                Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Wrapper -->
@endsection
