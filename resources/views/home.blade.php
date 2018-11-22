@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
            <div class="card">
                <div class="card-header">My websites</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
            
                        <div class="modal fade" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">      
                   
                              <div class="modal-header">
                                <h4 class="modal-title">Enter your birthday data</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>        
                       
                              <div class="modal-body mx-auto">
                                  <input id="input_mm" tpye="text" placeholder="MM" class="form-control" style="width:54px; float:left" onkeypress="return isNumber(event, 'mm')">
                                  <input id="input_dd" tpye="text" placeholder="DD" class="form-control ml-1" style="width:54px; float:left" onkeypress="return isNumber(event, 'dd')">
                                  <input id="input_yyyy" tpye="text" placeholder="YYYY" class="form-control ml-1" style="width:64px; float:left" onkeypress="return isNumber(event, 'yyyy')">
                              </div>        
                          
                              <div class="modal-footer">
                                <button id="sendData" type="button" class="btn btn-info">Enter</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>  
                      </div>

                    <div >
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Key</th>
                                    <th class="text-center">Delete</th>
                                    <th class="text-center">Get code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($websites as $items)                     
                                    <tr>
                                        <td>{{ $items->id }}</td>
                                        <td>{{ $items->name }}</td>
                                        <td>{{ $items->key }}</td>
                                        <td><button class="form-control website_delete btn btn-danger" data="{{ $items->id }}">Delete</button></td>
                                       
                                        <td><v-btn color="info">Get Code</v-btn></td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td></td> 
                                        <td><input id="website_name" type="text" class="form-control"></td> 
                                        <td></td>
                                        <td><button class="form-control website_add btn btn-dark">Add</button></td>
                                        <td></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>   
                    
                    
                  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
