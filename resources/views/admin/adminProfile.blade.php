@extends('admin.layouts.app')

@section('title')
    @lang('title.admin_profile')
@stop

@section('content')

    <!-- CONTENT WRAPPER -->
    <div class="ec-content-wrapper">
        <div class="content">
            <div class="breadcrumb-wrapper breadcrumb-contacts">
                <div>
                    <h1>Admin Profile</h1>
                    <p class="breadcrumbs"><span><a href="{{ route('admin.home') }}">Home</a></span>
                        <span><i class="mdi mdi-chevron-right"></i></span>Profile
                    </p>
                </div>
            </div>
            <div class="card bg-white profile-content">
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <div class="profile-content-left profile-left-spacing">
                            <div class="text-center widget-profile px-0 border-0">
                                <div class="card-img mx-auto rounded-circle">
                                    <img src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"
                                        alt="user image">
                                </div>
                                <div class="card-body">
                                    <h4 class="py-2 text-dark">{{ Auth::user()->name }}</h4>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>

                            <hr class="w-100">

                            <div class="contact-info pt-4">
                                <h5 class="text-dark">Contact Information</h5>
                                <p class="text-dark font-weight-medium pt-24px mb-2">Email address</p>
                                <p>{{ Auth::user()->email }}</p>
                                <p class="text-dark font-weight-medium pt-24px mb-2">Phone Number</p>
                                <p>{{ Auth::user()->phone }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-xl-9">
                        <div class="profile-content-right profile-right-spacing py-5">
                            <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myProfileTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="true">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="settings-tab" data-bs-toggle="tab"
                                        data-bs-target="#settings" type="button" role="tab" aria-controls="settings"
                                        aria-selected="false">Password Settings</button>
                                </li>
                            </ul>
                            <div class="tab-content px-3 px-xl-5" id="myTabContent">

                                <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    <div class="p-3 py-5">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Profile Settings</h4>
                                        </div>
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('admin.profilesave') }}">
                                            {{ csrf_field() }}
                                            <div class="row mt-2">
                                                <input type="hidden" class="form-select1" value="{{ Auth::user()->id }}"
                                                    name="user_id">
                                                <div class="col-md-6"><label class="labels">First Name</label>

                                                    <input type="text" class="form-select1" disabled
                                                        placeholder="First name" value="{{ Auth::user()->name }}"
                                                        name="name" required>
                                                </div>
                                                <div class="col-md-6"><label class="labels">Last
                                                        Name</label><input type="text" class="form-select1" value=""
                                                        placeholder="Last Name" name="last_name" required></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6"><label class="labels">Mobile
                                                        Number</label><input type="text" class="form-select1"
                                                        placeholder="Enter phone number" value="" name="phone" required>
                                                </div>
                                                <div class="col-md-6"><label class="labels">Email
                                                        ID</label><input type="text" disabled class="form-select1"
                                                        placeholder="Enter email" value="{{ Auth::user()->email }}"
                                                        name="email"></div>
                                                <div class="col-md-12"><label
                                                        class="labels">Address</label><input type="text"
                                                        class="form-select1" placeholder="Enter address" value=""
                                                        name="address" required></div>
                                                <div class="col-md-6"><label class="labels">Gender</label>
                                                    <select name="gender" id="gender" class="form-select" required>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6"><label
                                                        class="labels">Postcode</label><input type="text"
                                                        class="form-select1" placeholder="Postcode" value=""
                                                        name="postcode" required></div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6"><label
                                                        class="labels">Country</label><input type="text"
                                                        class="form-select1" placeholder="Country" value="" name="country"
                                                        required></div>
                                                <div class="col-md-6"><label
                                                        class="labels">State/Region</label><input type="text"
                                                        class="form-select1" value="" placeholder="State" name="state"
                                                        required></div>
                                            </div>
                                            <div class="mt-5 text-center"><button class="btn btn-primary profile-button"
                                                    type="submit">Save
                                                    Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                    <div class="tab-pane-content mt-5">
                                        @if (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-right">Password Settings</h4>
                                        </div>
                                        <form class="" method="POST" action="{{ route('changePassword') }}">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="form-group col-md-8">
                                                    <label>Type Your Current Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input class="form-select1" type="password"
                                                            name="current_password" required>
                                                        <div class="input-group-addon">
                                                            <a href=""><i class="fa fa-eye-slash"
                                                                    aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label>Type Your New Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input class="form-select1" type="password" name="new_password"
                                                            required>
                                                        <div class="input-group-addon">
                                                            <a href=""><i class="fa fa-eye-slash"
                                                                    aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-8">
                                                    <label>Type Your Confirm New Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input class="form-select1" type="password"
                                                            name="confirm_password" required>
                                                        <div class="input-group-addon">
                                                            <a href=""><i class="fa fa-eye-slash"
                                                                    aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=" text-center">
                                                    <button type="submit" class="btn btn-primary mb-4">Password
                                                        Change</button>
                                                </div>
                                                <div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- End Content -->
    </div>
    <!-- End Content Wrapper -->

@endsection
