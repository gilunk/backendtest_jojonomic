<html>
<head>
    <title>CD Rental by Gil - Owner's page</title>
</head>
<body>
    <h2><center>Welcome to Gil's CD Rental</center></h2>
    <center>
    @if(session('successadd'))
        <font color="green">Congrats! New CD has been added</font>
    @elseif(session('successupdate'))
        <font color="orange">Congrats! CD has been updated</font>
    @elseif(session('successdelete'))
        <font color="blue">CD has been deleted</font>
    @endif
    <table border="1" width=1000>
        <tr>
            <th colspan="7">LIST OF OUR COLLECTIONS</th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Rate</th>
            <th>Category</th>
            <th>Quantity (Stock)</th>
            <th colspan="2">Action</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach($data as $val)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $val->title }}</td>
            <td>IDR {{ $val->rate }}/day</td>
            <td>{{ $val->category }}</td>
            <td>{{ $val->quantity }}</td>
            <td><a href="/owner/{{ $val->id }}/edit">Update Stock</a></td>
            <td><a href="/owner/{{ $val->id }}/delete">Delete CD</a></td>
        </tr>
        @endforeach
        <tr>
            <td colspan="7" style="text-align: center;">
                <a href="/owner/add">Add New CD</a>
            </td>
        </tr>
    </table>
    <br><br>
    <table border="1" width=1000>
        <tr>
            <th colspan="8">LIST RENTED COLLECTIONS</th>
        </tr>
        <tr>
            <th>No.</th>
            <th>CD's Title</th>
            <th>Rate</th>
            <th>Renter's Name</th>
            <th>Total Days</th>
            <th>Many CDs</th>
            <th>CD's Status</th>
            <th>Total Price</th>
        </tr>
        @php
            $no2 = 1;
        @endphp
        @foreach($rented as $val2)
        <tr>
            <td>{{ $no2++ }}</td>
            <td>{{ $val2->collection->title }}</td>
            <td>IDR {{ $val2->collection->rate }}/day</td>
            <td>{{ $val2->name }}</td>
            <td style="text-align: center;">{{ $val2->days }}</td>
            <td style="text-align: center;">{{ $val2->many_cds}}</td>
            <td>{{ $val2->status_rent }}</td>
            <td>{{ $val2->total_price }}</td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>