@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <div class="page-content">


        <div class="row profile-body">

            <!-- middle wrapper start -->
            <div class="col-md-8 col-xl-8 middle-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">

                        <div class="card">
                            <div class="card-body">

                                <h6 class="card-title">Add Amenities</h6>
                                <form id="myForm" method="POST" action="{{ route('store.amenitie') }}" class="forms-sample">
                                    @csrf
                                    <div  class="form-group mb-3">
                                        <label for="add_amenities" class="form-label">Add Amenities</label>
                                        <input type="text" name="amenities_name" class="form-control" id="amenities_name"
                                            placeholder="Enter Property Name" required>

                                    </div>




                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- right wrapper end -->
        </div>

    </div>



    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    amenities_name: {
                        required: true,
                    },

                },
                messages: {
                    amenities_name: {
                        required: 'Please Enter Amenities Name',
                    },


                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>


<script>  
    $(document).ready(function() {  
        @if (session('message'))  
            toastr.success("{{ session('message') }}");  
        @elseif (session('error'))  
            toastr.error("{{ session('message') }}"); // Using 'message' for error as well  
        @endif  
    });  
</script>  
@endsection
