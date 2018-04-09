<html>
    <head>
        <title>edit screen</title>
    </head>
    <body>
        <div class="container">
                <table>
                        <tr>
                            <th>Name:</th>
                            <th><strong>Email:</strong> </th>
                        </tr>
                       
                        <tr>
                            <td>{{ $products->name }}</td>
                            <td>{{ $products->email }}</td>
                            
                        </tr>
                      
                    </table>
        </div>
    </body>
</html>