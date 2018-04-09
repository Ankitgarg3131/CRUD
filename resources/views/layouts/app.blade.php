<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Experimental Application</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    @include('includes.header')
    @yield('xyz')
    @include('includes.footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script>
        $(document).ready(function(){ 
            var id;  
            var name; 
            var email; 
            var ids;
            $(".edit").click(function(){
                
                        id = $(this).attr('id');
                        var data = JSON.parse(id);
                         name = data.name;
                         email = data.email;
                       ids = data.id;
                    document.getElementById('formname').value = name;
                    document.getElementById('formemail').value = email;    
                   document.getElementById('ids').value = ids;  
            });
            $(".update").click(function(){
                 var fname = document.getElementById('formname').value;
                 var femail = document.getElementById('formemail').value ;
                 var ids = document.getElementById('ids').value ;
            console.log(ids);
               // this.get('product/{product}/edit',ids);
                $.post('api2/product',
                    {id: ids, email: femail, name: fname},
                function(){
                    
                    });  
                        
            });
               

        });
       
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>