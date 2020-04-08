<html>
<head>
    <title>CD Rental by Gil</title>
</head>
<body>
    <h2><center>Welcome to Gil's CD Rental</center></h2>
    <center>
    @if(session('successrent'))
        <font color="green">Congrats! Your new rent's data has been added</font>
    @elseif(session('successreturn'))
        <font color="blue">Congrats! You've returned the book</font>
    @endif
    <table border="1" width=1000>
        <tr>
            <th colspan="7">LIST OF OUR AVAILABLE COLLECTIONS</th>
        </tr>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Rate</th>
            <th>Category</th>
            <th>Quantity (Stock)</th>
            <th>Action</th>
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
            <td style="text-align: center;"><a href="/visitor/{{$val->id}}/addrent">RENT</a></td>
        </tr>
        @endforeach
        <tr>
        </tr>
    </table>
    <br><br>
    <table border="1" width=1000>
        <tr>
            <th colspan="8">LIST RENTED BOOK</th>
        </tr>
        <tr>
            <th>No.</th>
            <th>CD's Title</th>
            <th>Rate</th>
            <th>Renter's Name</th>
            <th>Total Days</th>
            <th>Many CDs</th>
            <th>CD's Status</th>
            <th>Action</th>
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
            <td style="text-align: center;"><a href="/visitor/{{$val2->id}}/{{$val2->id_cd}}">RETURN THE BOOK</a></td>
        </tr>
        @endforeach
        <tr>
        </tr>
    </table>
    </center>
</body>
</html>