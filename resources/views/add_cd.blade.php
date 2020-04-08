<html>
<head>
    <title>CD Rental by Gil</title>
</head>
<body>
    <h2><center>ADD NEW CD</center></h2>

    <form method="POST" action="/owner/create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <center>
        <table border=0 width=500>
            <tr>
                <td>CD's Title</td>
                <td>:</td>
                <td><input type="text" name="title" placeholder="CD's Title"></td>
            </tr>
            <tr>
                <td>CD's Rate</td>
                <td>:</td>
                <td><input type="number" name="rate" placeholder="CD's Rate/day"></td>
            </tr>
            <tr>
                <td>CD's Category</td>
                <td>:</td>
                <td><input type="text" name="category" placeholder="ex : Pop, Jazz, etc."></td>
            </tr>
            <tr>
                <td>CD's Quantity</td>
                <td>:</td>
                <td><input type="number" name="quantity" placeholder="Actual stock in storage"></td>
            </tr>
            <tr>
                <td colspan="3">&nbsp;</td>
            </tr>
            <tr>
                <td colspan=3 style="text-align:center"><button type="submit">SAVE</button> &nbsp; <button type="reset">RESET</button></td>
            </tr>
        </table>
    </form>
</body>
</html>