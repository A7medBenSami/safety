<!DOCTYPE html>
<html>
<head>
    <title>رسالـــة جديــدة</title>
</head>
<body>
    <h1>{رسالـــة جديــدة}</h1>
    <p>[يانـــات الرسالـــة]:</p>
    <ul>
        <li>الاسـم: {{ $contact->name }}</li>
        <li>الايميــل: {{ $contact->email }}</li>
       <li>الرسالـــة: {{ $contact->message }}</li>
    </ul>
</body>
</html>
