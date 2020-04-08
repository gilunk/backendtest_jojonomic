<html>
<head>
    <title>CD Rental by Gil</title>
</head>
<body>
    <h2><center>Welcome to Gil's CD Rental</center></h2>
    <center>
    @if(session('successrent'))
        <font color="green">Congrats! New CD has been added</font>
    @elseif(session('successreturn'))
        <font color="orange">Congrats! CD has been updated</font>
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
            <td style="text-align: center;"><a href="/visitor/addrent">RENT</a></td>
        </tr>
        @endforeach
        <tr>
        </tr>
    </table>
    </center>
</body>
</html>