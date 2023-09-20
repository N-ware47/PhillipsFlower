<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Email</title>
</head>
<body>



<h1> Order Email From: {{$OrderMailData['user']}}</h1>

<p>Firstname: {{$OrderMailData['deliveryName']}}</p>
<p>LastName: {{$OrderMailData['delivery_address']}}</p>
<p>Company Name: {{$OrderMailData['Special_Message']}}</p>

<!--  -->



    
</body>
</html>