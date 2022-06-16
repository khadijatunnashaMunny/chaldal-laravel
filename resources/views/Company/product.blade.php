@extends('Company.master')
@section('company_content')
 <!-- start: Header -->
 <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
             
                <a href="index.html" class="navbar-brand"> 
                 <b>Company Dashboard panel</b>
                </a>
             
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name">
                  <span>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                               
                            </li>
                            <li> 
                              <div >
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                       
                </span>
              </li>
                 
               </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                   
                    <li class="active ripple">
                      <a href="/iscompany" class="tree-toggle nav-header"><span class="fa-home fa"></span> Add category 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                     
                    </li>
                    <li class="active ripple">
                      <a href="/product" class="tree-toggle nav-header"><span class="fa-home fa"></span> Add products 
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                     
                    </li>
                   
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->
         
          <!-- start: content -->
          <div id="content">
                <div class="panel">
                  <div class="panel-body">
                  <form action="product_Submit" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row-fluid sortable">
                        <div class="box span12">
                            <div class="box-header" data-original-title>
                                <h2><i class="halflings-icon edit"></i><span class="break"></span>Add product</h2>

                            </div>

                            <div class="box-content">

                                    <fieldset>
                                        <div class="control-group">
                                            <label class="control-label" for="date01">product Name</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" name="product_name" required>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="date01">product Id</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" name="product_id" required>
                                            </div>
                                        </div>

                                        <div class="control-group hidden-phone">
                                            <label class="control-label" for="textarea2">product price</label>
                                            <div class="controls">
                                                <input type="text" class="cleditor" name="product_price" rows="3" required></input>
                                            </div>

                                        </div>

                                        <div class="control-group hidden-phone">
                                            <label class="control-label" for="textarea2">product Description</label>
                                            <div class="controls">
                                                <textarea class="cleditor" name="product_description" rows="3" required></textarea>
                                            </div>

                                        </div>


                                        <div class="control-group">
                                            <label class="control-label">image Upload</label>
                                            <div class="controls">
                                                <input type="file" name="product_image" required>
                                            </div>
                                        </div>
                                        {{-- {{$categories}} --}}

                                        <div class="form-group">
                                            <label for="cat_id">Category <span class="text-danger">*</span></label>
                                            <div class="controls">
                                                <select name="cat_id" id="cat_id" class="form-control">
                                                    <option value="">--Select any category--</option>
                                                    @foreach($categories as $key=>$cat_data)
                                                    <option value='{{$cat_data->id}}'>{{$cat_data->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>
                                        <div class="control-group hidden-phone">
                                            <label class="control-label" for="textarea2">product quantity</label>
                                            <div class="controls">
                                                <input class="cleditor" type="number" name="product_qauntity" rows="3" required></input>
                                            </div>

                                        </div>


                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-primary">Add product</button>
                                        </div>
                                    </fieldset>
                            

                            </div>
                        </div>
                        <!--/span-->
                    </div>
                  </form>
                   
                  </div>                    
                </div>
      		  </div>
          <!-- end: content -->
                     
      </div>   





@endsection()



