@extends('layouts.app')
@section('title', 'Dashboard')
@section('app_content')
@include('partials.header')
<h2>Dashboard Page</h2> 

{{auth()->user()->email}}


<h3>Categories</h3>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Category
  </button>
  
  
<div>
    This is the first Category
</div>








<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      
      <div class="modal-content p-2">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add a New Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
        <!--<h5 class="modal-title">Create New Category</h5>-->
        <div class="modal-body">

        <form action="{{ route('category.post') }}" method="POST">
            @csrf

            <div class="form-floating mb-3">
                <input name='name' class="form-control" id="floatingInput" type="text" value="{{ old('name') }}"
                    required placeholder="Input your Email" />
                <label for="floatingInput">Category Name</label>
            </div>
            <div class="form-floating">
               <!-- <input name='description' class="form-control" id="floatingInput" type="text" value="{{ old('name') }}" minlength="6" required
                    placeholder='Input your Password' />
               -->
               <textarea name='description' rows="6" class="form-control" id="floatingInput" type="text" value="{{ old('name') }}" ></textarea>
                <label for="floatingPassword">Description</label>
            </div>

        </div>
        
        <div class="modal-footer">
            <button  type="button" class="btn btn-md btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-md btn-primary">Create Category</button>
        </div>
    </form>

       <!-- 
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add a New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-success">Create</button>
        </div>
    -->
      </div>
    </div>
  </div>


@endsection
