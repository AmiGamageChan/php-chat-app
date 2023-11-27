<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sending Process</title>
</head>

<body>
    <h1>Email Sending Process</h1>

    <p>Recipient Email:</p>
    <input type="email" id="recipient">

    <p>Subject:</p>
    <input type="text" id="subject">

    <p>Message:</p>
    <textarea cols="30" rows="10" id="content"></textarea>
    <br>
    <br>
    <button onclick="send();">Send</button>
    
    <script src="script.js"></script>
</body>

</html>