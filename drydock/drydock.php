<?php
	$db=new ThornDBI();
	//Drop them out right now if they are banned! - tyam

				//Are we using reCAPTCHA?
				if(THvc==1)
				{
					require_once('recaptchalib.php');
					$sm->assign('captcha', recaptcha_get_html(reCAPTCHAPublic));
				}
				if($db->head == null)

				$sm->display($threadtpl,$cid);
				if(($_SESSION['admin'] ==1) || ($_SESSION['moderator'] ==1) || ($modvar)) 
				$sm->display("bottombar.tpl", null);
			if (isset($_GET['tlist'])==true) //For anonBBS thread list, but could be used for any template
			{
				$sm->register_object("it",$db,array("getallthreads","binfo"));
				$sm->display("threadlist.tpl",$cid);
				$sm->display("bottombar.tpl", null);

			//Are we using reCAPTCHA?
			if(THvc==1)
			{
				require_once('recaptchalib.php');
				$sm->assign('captcha', recaptcha_get_html(reCAPTCHAPublic));
			}


			$sm->display($tpl,$cid);
			if(($_SESSION['admin'] == 1) || ($_SESSION['moderator'] == 1) || ($modvar)) 
			$sm->display("bottombar.tpl", null);

			//$sm->display($tpl,$cid);
			include("news.php");
		}//no argument given after index