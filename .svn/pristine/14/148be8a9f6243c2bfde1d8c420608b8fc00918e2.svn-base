<?php

if(isset($_GET['event']))
{
	require_once("../../conf/db.php");
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	$ps = $conn->prepare("INSERT INTO guest(event_id, track_code, email, name, address, phone, register_date) VALUES(?,?,?,?,?,?,?)");

	$date = new DateTime();
	$date->setTimezone(new DateTimeZone("Asia/Jakarta"));
	$date = $date->format(DATE_W3C);

	$id = $_GET['event'];
	$code = null;
	$name = null;
	$email = null;
	$address = null;
	$phone = null;

	$ps->bind_param("issssss",$id,$code,$email,$name,$address,$phone,$date);

	foreach($_FILES as $file)
	{
		$header = null;
		$data = array();
		if(($handle = fopen($file['tmp_name'],"r")) !== false)
		{
			while(($row = fgetcsv($handle, 1000, ",")) !== false)
			{
				if(!$header)
				{
					$header = $row;
				} else
				{
					$data[] = array_combine($header, $row);
				}
			}
			fclose($handle);

			foreach($data as $entry)
			{
				$code = md5(uniqid($id));
				$email = $entry['email'];
				$name = $entry['name'];
				$address = $entry['address'];
				$phone = $entry['phone'];
				$ps->execute();
			}
		}

		$ps->close();
		$conn->close();

//		if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
//		{
//			$files[] = $uploaddir .$file['name'];
//		}
	}
}

?>