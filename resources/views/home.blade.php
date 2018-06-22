@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('String Sort') }}</div>

                <div class="card-body">
                    <p> Given a string, that contains special character together with alphabets (‘a’ to ‘z’ and ‘A’ to ‘Z’), reverse the string in a way that special characters are not affected.</p>
                    <form method="POST" action="{{ url('stringSort-Url') }}" aria-label="{{ __('/stringSort-Url') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="String" class="col-sm-4 col-form-label text-md-right">{{ __('String') }}</label>

                            <div class="col-md-6">
                                <input id="String" type="text" class="form-control{{ $errors->has('String') ? ' is-invalid' : '' }}" name="String" value="{{ old('String') }}" placeholder="Enter the String to Sort" required autofocus>

                                @if ($errors->has('String'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('String') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-xs">
                                    {{ __('Submit') }}
                                </button>

                            </div>
                        </div>
                    </form>

                    <hr>
                    <br>
                    <br>
                    <p> Given an index k, return the kth row of the Pascal's triangle.</p>
                     <form method="POST" action="{{ url('pascalSort-Url') }}" aria-label="{{ __('/pascalSort-Url') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="index" class="col-sm-4 col-form-label text-md-right">{{ __('Index') }}</label>

                            <div class="col-md-6">
                                <input id="index" type="text" class="form-control{{ $errors->has('index') ? ' is-invalid' : '' }}" name="index" value="{{ old('number') }}" placeholder="Enter the index" required autofocus>

                                @if ($errors->has('index'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('index') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-xs">
                                    {{ __('Submit') }}
                                </button>

                            </div>
                        </div>
                    </form>

                    <hr>
                    <br>
                    <br>
                    <p>Given a string containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid. The brackets must close in the correct order, "()" and "()[]{}" are all valid but "(]" and "([)]" are not.</p>
                     <form method="POST" action="{{ url('isvalidString-Url') }}" aria-label="{{ __('/isvalidString-Url') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="String" class="col-sm-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">
                                <input id="String" type="text" class="form-control{{ $errors->has('String') ? ' is-invalid' : '' }}" name="String" value="{{ old('String') }}" placeholder="Enter the String to Sort" required autofocus>

                                @if ($errors->has('String'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('String') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-xs">
                                    {{ __('Submit') }}
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
