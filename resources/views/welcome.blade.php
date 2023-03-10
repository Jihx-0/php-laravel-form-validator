@extends('app')

@push('style')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: gray; color:#f1f7fa; font-weight:bold;">
                    Data Validator
                </div>

                 <div class="card-body">                    
                    <form class="w-px-500 p-3 p-md-3" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{old('username')}}">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                
                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{old('email')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" value="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @php
                        $object = new stdClass();
                        $object->gender1 = 'Male';
                        $object->gender2 = 'Female';
                        $object->gender3 = 'Non-Binary';
                        $object->gender4 = 'Other';

                        echo '<div class="row mb-3">';
                        echo '<label class="col-sm-3 col-form-label">Gender</label>';
                        echo '<div class="col-sm-9">';
                        echo '<select class="form-select form-control" name="gender">';
                        foreach ($object as $key => $value) {
                            echo "<option value='$value'>$value</option>";
                        }
                        echo '';
                        echo '</select>';
                        echo '</div>';
                        echo '</div>';

                        @endphp

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-success btn-block text-white">Submit</button>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection