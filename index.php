<?php 

    // First we execute our common code to connection to the database and start the session 
    require("admin/common.php"); 

?> 
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
	<meta http-equiv='Content-type' content='text/html; charset=utf-8' />
	<meta content='telephone=no' name='format-detection' />
	<!-- Facebook sharing information tags -->
	<title>SA-Line</title>
	

	<style type='text/css' media='screen'>
		/* Linked Styles */
		body { padding:0 !important; margin:0 !important; display:block !important; -webkit-text-size-adjust:none; background-image:url(http://saline.binghamtonsa.org/images/background.jpg); background-position:0 0; background-repeat:no-repeat repeat-y }
		a { color:#64972f; text-decoration:underline }

		/* Campaign Monitor wraps the text in editor in paragraphs. In order to preserve design spacing we remove the padding/margin */
		p { padding:0 !important; margin:0 !important } 
	</style>
</head>
<body class='body' style='padding:0 !important; margin:0 !important; display:block !important; -webkit-text-size-adjust:none; background-image:url(http://saline.binghamtonsa.org/images/background.jpg); background-position:0 0; background-repeat:no-repeat repeat-y'>

<table width='100%' border='0' cellspacing='0' cellpadding='0' background='http://saline.binghamtonsa.org/images/background.jpg' style='background-image: url(http://saline.binghamtonsa.org/images/background.jpg); background-position: 0 0; background-repeat: no-repeat repeat-y;'>
	<tr>
		<td align='center' valign='top'>
			<!-- Top -->
			<table width='100%' border='0' cellspacing='0' cellpadding='0'>
				<tr>
					<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' valign='top'>
						<div style='font-size:0pt; line-height:0pt; height:27px; background:#f5f5f5; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='27' style='height:27px' alt='' /></div>

						<div style='font-size:0pt; line-height:0pt; height:1px; background:#ffffff; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='1' style='height:1px' alt='' /></div>

						<div style='font-size:0pt; line-height:0pt; height:1px; background:#629032; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='1' style='height:1px' alt='' /></div>

						<div style='font-size:0pt; line-height:0pt; height:1px; background:#699835; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='1' style='height:1px' alt='' /></div>

					</td>
					<td width='646'>
						<table width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#f8f8f8'>
							<tr>
								<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' width='30'><img src='http://saline.binghamtonsa.org/images/top_left.jpg' alt='' border='0' width='22' height='28' /></td>
								<td class='top' style='color:#82837a; font-family:'Trebuchet MS'; font-size:11px; line-height:15px; text-align:center'>
									<div style='font-size:0pt; line-height:0pt; height:5px'><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='5' style='height:5px' alt='' /></div>

									Having trouble viewing this email? <a target='_blank' href='http://saline.binghamtonsa.org'>View it in your browser</a>
								</td>

								<td class='img-right' style='font-size:0pt; line-height:0pt; text-align:right' width='22'><img src='http://saline.binghamtonsa.org/images/top_right.jpg' alt='' border='0' width='22' height='28' /></td>
							</tr>
						</table>
						<div class='img' style='font-size:0pt; line-height:0pt; text-align:left'><img src='http://saline.binghamtonsa.org/images/top_bottom.jpg' alt='' border='0' width='646' height='23' /></div>
					</td>
					<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' valign='top'>
						<div style='font-size:0pt; line-height:0pt; height:27px; background:#f5f5f5; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='27' style='height:27px' alt='' /></div>

						<div style='font-size:0pt; line-height:0pt; height:1px; background:#ffffff; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='1' style='height:1px' alt='' /></div>

						<div style='font-size:0pt; line-height:0pt; height:1px; background:#629032; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='1' style='height:1px' alt='' /></div>

						<div style='font-size:0pt; line-height:0pt; height:1px; background:#699835; '><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='1' style='height:1px' alt='' /></div>

					</td>
				</tr>
			</table>
			<!-- END Top -->

			<!-- Header -->
			<table width='625' border='0' cellspacing='0' cellpadding='0'>
				<tr>
					<!-- logo -->
					<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' valign='top'>
						<div style='font-size:0pt; line-height:0pt; height:6px'><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='6' style='height:6px' alt='' /></div>

						<a href='#' target='_blank'><img src='http://saline.binghamtonsa.org/images/logo.png' alt='' border='0' width='250' height='130' /></a>
						<div style='font-size:0pt; line-height:0pt; height:15px'><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='15' style='height:15px' alt='' /></div>

					</td>
					<!-- end logo -->
					
				</tr>
			</table>

			<?php
			$query = "SELECT COUNT(*) AS count FROM updates"; 
			try 
			{ 
			    // Execute the query against the database 
			    $stmt = $db->prepare($query); 
			    $result = $stmt->execute(); 
			} 
			catch(PDOException $ex) 
			{ 
			    // Note: On a production website, you should not output $ex->getMessage(). 
			    // It may provide an attacker with helpful information about your code.  
			    die("Failed to run query: " . $ex->getMessage()); 
			} 
			$row = $stmt->fetch(); 
			$count = $row['count'];
			for($i=1;$i<=$count;$i++){
			    $query = "SELECT position, message FROM updates WHERE id=$i"; 
			    try 
			    { 
			        // Execute the query against the database 
			        $stmt = $db->prepare($query); 
			        $result = $stmt->execute(); 
			    } 
			    catch(PDOException $ex) 
			    { 
			        // Note: On a production website, you should not output $ex->getMessage(). 
			        // It may provide an attacker with helpful information about your code.  
			        die("Failed to run query: " . $ex->getMessage()); 
			    } 
			    $row = $stmt->fetch(); 
			    $position = $row['position'];
			    $message = $row['message'];
			    echo "
			        <!-- Main Box -->

			<table width='624' border='0' cellspacing='0' cellpadding='0'>
				<tr>
					<td>
						<div class='img' style='font-size:0pt; line-height:0pt; text-align:left'><img src='http://saline.binghamtonsa.org/images/mainbox_top.jpg' alt='' border='0' width='624' height='7' /></div>
						<table width='100%' border='0' cellspacing='0' cellpadding='0'>
							<tr>
								<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' width='1' bgcolor='#5a8e67'></td>
								<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' width='1' bgcolor='#5a8e67'></td>
								<td bgcolor='#ffffff'>
									<table width='100%' border='0' cellspacing='0' cellpadding='0'>
										<tr>
											<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' width='15'></td>
											<td>
												<div class='h1' style='color:#64972f; font-family:\"Trebuchet MS\"; font-size:35px; line-height:56px; text-align:left; font-weight:normal'>
																	<div>$position</div>
															<div style='color:#7f7f7f; font-family:\"Trebuchet MS\"; font-size:12px; line-height:20px; text-align:left'>$message</div>

															<div style='font-size:0pt; line-height:0pt; height:15px'><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='15' style='height:15px' alt='' /></div>
												</div>
												</td>
											<td class='img' style='font-size:0pt; line-height:0pt; text-align:left' width='15'></td>
										</tr>
									</table>
									<div style='font-size:0pt; line-height:0pt; height:40px'><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='40' style='height:40px' alt='' /></div>

							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- END Main Box -->

			<div class='img-center' style='font-size:0pt; line-height:0pt; text-align:center'><img src='http://saline.binghamtonsa.org/images/footer_top.jpg' alt='' border='0' width='625' height='16' /></div>
			<div style='font-size:0pt; line-height:0pt; height:10px'><img src='http://saline.binghamtonsa.org/images/empty.gif' width='1' height='10' style='height:10px' alt='' /></div>

			        ";
			}
			?>
			
		</td>
	</tr>
</table>

</body>
</html>
