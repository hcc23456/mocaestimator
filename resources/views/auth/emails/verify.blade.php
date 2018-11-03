<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Verify Your Email Address</h2>

<div>
    Thanks for creating an account with MOCA.
    Please follow the link below to verify your email address <br/>
    Or input the link into the address bar <br/>
    {{ URL::to('register/verification/' . $confirmation_code) }}<br/>

</div>

</body>
</html>