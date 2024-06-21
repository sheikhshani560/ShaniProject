<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
</head>
<body>
    <h1>Recived From Website</h1>
    <h1 style="font-weight: 600; "><b>{{ $details['subject'] }}</b></h1>
    <h2>From : <span style="font-weight: 600"><b>{{$details['firstname'].' ,'.$details['lastname']}}</b></span></h2>
    <h3>Email : <span style="font-weight: 600"><b>{{$details['email']}}</b></span></h3>
    <h2>Message : <span style="font-weight: 600"><b>{{$details['message']}}</b></span></h2>
    <p>Date : <span style="font-weight: 600"><b>{{date('Y-M-D',strtotime($details['created_at']))}}</b></span></p>
</body>
</html>
