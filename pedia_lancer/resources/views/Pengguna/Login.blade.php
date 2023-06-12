@extends('main')

@section('content')

    <div class="container p-5 bg-light col-5 shadow mb-5  rounded">
                    
                      <h2 class="text-center text-dark m-4 p-4">Login</h2>
                      
                            
                      <form class= "mx-auto text-dark col-8" action ="{{route('postlogin')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label ">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                        
                        
                    </form>
                          
                      
                    
                
        </div>
    
@endsection