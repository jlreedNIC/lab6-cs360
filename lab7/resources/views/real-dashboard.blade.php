@extends('layout')

@section('content')
@if (session('success'))
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                </div>
        </div>
    </div>
</div>
@endif

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} - User Table</div>
                    <div>
                        <div class="container-fluid">
                            <!-- <h2 style="text-align: center">User Table</h2> -->
                            <form action="{{ route('delete.post') }}" method="POST">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    
                                    foreach ($users as $user)
                                    {
                                        echo "<tr>". 
                                        "<td>{$user->username}</td>". 
                                        "<td>{$user->email}</td>".
                                        "<td>{$user->password}</td>".
                                        "<td> ".
                                            "<button class='btn' value='".$user->id."'> <span class='fa fa-minus-circle' style='color:rgb(202, 0, 0)'></span> </button>".
                                        "</td>".
                                    "</tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection