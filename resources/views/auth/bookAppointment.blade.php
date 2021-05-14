@extends('layouts.app2')

<style>
    label{
        font-size: 20px;
    }
</style>
@section('content')

<div class="container">
    <h2  style="margin-top:100px">What Kind of Doctor are you looking for?</h2>
    <hr style="border:2px solid #00bcd5;">
    <div class="row">
        <div class="col-md-4">
            <label>Select Category:</label>
        </div>
        <div class="col-md-6">
            <select name="" id="cat" class="form-control">
                <option value="">Select Type</option>
                @foreach($roles as $role)
            <option value = "{{$role->id}}" id="cat{{$role->id}}" >{{$role->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div id="doctorData">
    <div class="row" style="margin-top:20px">
    
    <div class="table-responsive">
        <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Doctor Name</th>
                    <th>E-mail</th>
                    <th>Contact no</th>
                    <th>Timing Slot</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                </tbody>
        </table>
    </div>
    </div>
    </div>


</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#cat").change(function(){
            var catID=$('option:selected').val();
            // alert(catID);
            $.ajax({
                type:'post',
                dataType:'html',
                url:'{{url('/home/selectdoc/doccategory')}}',
                data:{'_token': '{!! csrf_token() !!}','cat_id':catID },
                
                success:function(response){
                    $("#doctorData").html(response);

                }
            })
            
        });
      
    });

</script>


@endsection