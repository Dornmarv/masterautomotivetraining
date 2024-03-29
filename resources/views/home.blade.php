@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Nos of Users: {{ $count }}

                </div>

                <div class="container-fluid">
                <div class="row">
                    <div class=" col-sm-12">
                        <div class="card card-shadow mb-4">
                         
                            <div class="card-body">
                                <table id="bs4-table" class="table  " cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                    </tr>
                                    </thead>

                  
                                  
                                    <tbody>
                                        @foreach($members as $member)
                                    <tr>
                                            
                                        <td>{{ $member->name }}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{ $member->phone }} 
                                           </td>
                            
                                    </tr>
                                   @endforeach
                                
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>


            </div>
            </div>
        </div>
    </div>
</div>
@endsection
