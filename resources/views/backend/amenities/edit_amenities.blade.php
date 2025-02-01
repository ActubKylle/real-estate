@extends('admin.admin_dashboard')  
@section('admin')  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>  

<div class="page-content">  
    <div class="row profile-body">  
        <div class="col-md-8 col-xl-8 middle-wrapper">  
            <div class="row">  
                <div class="col-md-12 grid-margin">  
                    <div class="card">  
                        <div class="card-body">  
                            <h6 class="card-title">Edit Property Type</h6>  
                            <form method="POST" action="{{ route('update.amenities') }}" class="forms-sample">  
                                @csrf  

                                <input type="hidden" name="id" value="{{$amenities->id}}">

                                <div class="mb-3">  
                                    <label for="amenities_name" class="form-label">Amenities Name</label>  
                                    <input type="text" name="amenities_name" value="{{ old('amenities_name', $amenities->amenities_name) }}" class="form-control" id="amenities_name" placeholder="Enter Amenities Name" required>  
                                    @error('amenities_name')  
                                        <span class="text-danger">{{ $message }}</span>  
                                    @enderror  
                                </div>   
    
                              
                                <button type="submit" class="btn btn-primary">Update</button>  
                            </form>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  

<script>  
    $(document).ready(function() {  
        @if (session('message'))  
            toastr.success("{{ session('message') }}");  
        @elseif (session('error'))  
            toastr.error("{{ session('error') }}"); // Updated to use 'error' for error messages  
        @endif  
    });  
</script>  
@endsection  