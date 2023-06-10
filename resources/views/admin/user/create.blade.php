@extends('layouts.admin.master')

@section('title', 'Thêm quản trị viên')

@section('content')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Validation type</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p>

                                <form class="custom-validation" action="#">
                                    <div class="mb-3">
                                        <label class="form-label">Required</label>
                                        <input type="text" class="form-control" required placeholder="Type something">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Equal To</label>
                                        <div>
                                            <input type="password" id="pass2" class="form-control" required
                                                placeholder="Password">
                                        </div>
                                        <div class="mt-2">
                                            <input type="password" class="form-control" required
                                                data-parsley-equalto="#pass2" placeholder="Re-Type Password">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">E-Mail</label>
                                        <div>
                                            <input type="email" class="form-control" required parsley-type="email"
                                                placeholder="Enter a valid email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">URL</label>
                                        <div>
                                            <input parsley-type="url" type="url" class="form-control" required
                                                placeholder="URL">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Digits</label>
                                        <div>
                                            <input data-parsley-type="digits" type="text" class="form-control" required
                                                placeholder="Enter only digits">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Number</label>
                                        <div>
                                            <input data-parsley-type="number" type="text" class="form-control" required
                                                placeholder="Enter only numbers">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alphanumeric</label>
                                        <div>
                                            <input data-parsley-type="alphanum" type="text" class="form-control" required
                                                placeholder="Enter alphanumeric value">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Textarea</label>
                                        <div>
                                            <textarea required class="form-control" rows="5" placeholder="Type here"></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- end form -->
                            </div><!-- end cardbody -->
                        </div><!-- end card -->
                    </div> <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Range validation</h4>
                                <p class="card-title-desc">Parsley is a javascript form validation
                                    library. It helps you provide your users with feedback on their form
                                    submission before sending it to your server.</p>

                                <form action="#" class="custom-validation">

                                    <div class="mb-3">
                                        <label class="form-label">Min Length</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-minlength="6"
                                                placeholder="Min 6 chars.">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Max Length</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-maxlength="6"
                                                placeholder="Max 6 chars.">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Range Length</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-length="[5,10]"
                                                placeholder="Text between 5 - 10 chars length">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Min Value</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-min="6"
                                                placeholder="Min value is 6">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Max Value</label>
                                        <div>
                                            <input type="text" class="form-control" required data-parsley-max="6"
                                                placeholder="Max value is 6">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Range Value</label>
                                        <div>
                                            <input class="form-control" required type="text range" min="6"
                                                max="100" placeholder="Number between 6 - 100">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Regular Exp</label>
                                        <div>
                                            <input type="text" class="form-control" required
                                                data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hex. Color">
                                        </div>
                                    </div>

                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </div>

@endsection
