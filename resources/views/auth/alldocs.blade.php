<div class="table-responsive">
<table id="zero_config" class="table table-striped table-bordered" style="margin-top:20px">
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
            @foreach($data as $d)
                <tr>
                    <td>{{$loop -> index+1 }}</td>
                    <td>{{$d->name }}</td>
                    <td>{{$d->email }}</td>
                    <td>{{$d->phone_no}}</td>
                    <td>{{$d->timing_slot}}</td>
                    @if($d->status==1)
                    <td><p>Booked</p></td>
                    @else
                    <td><a href="/home/selectdoc/doccategory/{{$d->id}}" class="btn btn-success">Book</a></td>
                    @endif
                            
                </tr>
            @endforeach
        </tbody>
</table>
</div>