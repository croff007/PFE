@extends('layouts.app')

@section('content')

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                    <script>window.location = "/{{Auth::user()->role}}/index";</script>
     
                    

@endsection
