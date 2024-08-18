<!DOCTYPE html>
<html>
<head>
    <title>Contact Information</title>
</head>
<body>
    <p>First Name: {{ $userInfo->first_name }}</p>
    <p>Last Name: {{ $userInfo->last_name }}</p>
    <p>Email: {{ $userInfo->email }}</p>
    <p>Phone Number: {{ $userInfo->phone_number }}</p>
    <p>Service: {{ $userInfo->service }}</p>
    <p>Message: {{ $userInfo->message }}</p>
</body>
</html>