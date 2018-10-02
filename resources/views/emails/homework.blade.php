<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Hi,</h3>

	<strong>Do following homework and submit timely.</strong>
	<br><br>
	<!-- <div><strong>Class</strong> : {{$homeworkDetails['standard_id']}}</div>
	<div><strong>Section</strong> : {{$homeworkDetails['section_id']}}</div> -->
	<div><strong>Subject</strong> : {{@$homeworkDetails['subject']}}</div><br>
	<div><strong>Title</strong> : {{$homeworkDetails['title']}}</div><br>
	<div><strong>Homework</strong> : {{$homeworkDetails['description']}}</div>
	<br><br>
	<p>-------------</p>
	<h3>Thanks</h3>
	<div>{{$loggedinUserData['fname']}} {{$loggedinUserData['lname']}}</div>
</body>
</html>