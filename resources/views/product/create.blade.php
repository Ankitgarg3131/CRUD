<html>

<head>
    <title>
        creting products
    </title>
</head>
<body>
    <div class="container">
        
        <h1>add products here:</h1>
    <form  action="{{ route('product.store') }}" method="post" >
        {{ csrf_field() }}
        Enter Your Name:
        <input type="text" name="name" placeholder="your name">

        Your Email:
        <input type="email" name="email" placeholder="abc@gmail.com">
        <input type="submit" value="create">
        </form>
    </div>
</body>
</html>