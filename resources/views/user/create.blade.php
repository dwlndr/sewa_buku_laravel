@extends('layout.master')
@section('content')
    <div>
        <div class="container">
            <div class="col-md-8">
                <div class="card">
                    <div class="class-header">{{ __('Buat User Baru') }}</div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <div>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Email') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div>
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"  required autocomplete="new-password" >
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div>
                            <label for="level" class="col-md-4 col-form-label text-md-right" name="level"></label>
                            <div class="col-md-6">
                                <select name="level" id="level" class="form-control">
                                    <option value="peminjam">Peminjam</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-0">
                                <button class="btn btn-primary" type="submit">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
