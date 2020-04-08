<html>
<head>
    <title>CD Rental by Gil</title>
</head>
<body>
    <h2><center>ADD NEW RENT</center></h2>

    <form method="POST" action="/visitor/{{$cd->id}}/createrent">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <center>
        <table border=0 width=500>
            @if(session('errorstock'))
                <font color="red">Please do not rent exceeds than our quantitiy/stocks!</font>
            @endif
            <tr>
                <td>CD's Title</td>
                <td>:</td>
                <td><input type="text" name="title" placeholder="CD's Title" value="{{ $cd->title }}" disabled></td>
            </tr>
            <tr>
                <td>CD's Rate</td>
                <td>:</td>
                <td><input type="text" name="rate" placeholder="CD's Rate/day" value="IDR {{ $cd->rate }}/day"disabled></td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>:</td>
                <td><input type="text" name="name" placeholder="Full Name"></td>
            </tr>
            <tr>
                <td>Days to rent</td>
                <td>:</td>
                <td><input type="text" name="days" placeholder="How many days to rent"></td>
            </tr>
            <tr>
                <td>CDs to rent</td>
                <td>:</td>
                <td><input type="text" name="many_cds" placeholder="How many CDs to rent"></td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan=3 style="text-align:center"><button type="submit">RENT</button> &nbsp; <button type="reset">RESET</button></td>
            </tr>
        </table>
    </form>
</body>
</html>