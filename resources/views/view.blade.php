<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <form action="{{url('Product')}}" method="post">
        @csrf
        <tr>
            <td><label for="name">Name</label></td>
            <td><input type="text" name="p_name" id="name"></td>
        </tr>
        
        <tr>
            <td><label for="des">Price</label></td>
            <td><input type="number" name="price" id="des"></td>
        </tr>

        <tr>
            <td><label for="type">Quantity</label></td>
            <td><input type="number" name="quantity" id="type"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Submit"></td>
        </tr>

    </form>
    </table>
    
</body>
</html>