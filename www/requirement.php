<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Publish Requirements</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
    	$("input[type=submit]").click(function(){
        	var flag=true;
    		$("input[type=text]").each(function(index) {
    			var str=$(this).val();
    			if(!str){
        			flag=false;
    				alert("Fill all the Fields..!!");				
    				return false;
    			}
    		});
    		return flag;        		
    	});
 	});
    </script>
</head>
<body>
<div id="art-page-background-glare">
    <div id="art-page-background-glare-image"> </div>
</div>
<div id="art-main">
	<div class="art-nav">
		<div class="art-nav-l"></div>
		<div class="art-nav-r"></div>
	</div>
	<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
	<ul class="art-hmenu">
		<li>
			<a href="./requirement.php" class="active"><span class="l"></span><span class="r"></span><span class="t">Submit Requirement</span></a>
		</li>	
		<li>
			<a href="./provider.php"><span class="l"></span><span class="r"></span><span class="t">Fulfill Requirements</span></a>
		</li>	
	</ul>
</div>
</div>
</div>
</div>
	<div class="cleared reset-box"></div>
	<div class="art-header">
			<div class="art-header-clip">
				<div class="art-header-center">
					<div class="art-header-png"></div>
					<div class="art-header-jpeg"></div>
				</div>
			</div>
		<div class="art-header-wrapper">
			<div class="art-header-inner">
				<div class="art-headerobject"></div>
				<div class="art-logo">
						 <h1 class="art-logo-name"><a href="./index.php">EasySaas Runtime</a></h1>
						 <h2 class="art-logo-text">Making SaaS Easier.....</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="cleared reset-box"></div>
	<div class="art-sheet">
			<div class="art-sheet-tl"></div>
			<div class="art-sheet-tr"></div>
			<div class="art-sheet-bl"></div>
			<div class="art-sheet-br"></div>
			<div class="art-sheet-tc"></div>
			<div class="art-sheet-bc"></div>
			<div class="art-sheet-cl"></div>
			<div class="art-sheet-cr"></div>
			<div class="art-sheet-cc"></div>
			<div class="art-sheet-body">
				<div class="art-content-layout">
					<div class="art-content-layout-row">
						<div class="art-layout-cell art-content">
							<div class="art-post">
								<div class="art-post-tl"></div>
								<div class="art-post-tr"></div>
								<div class="art-post-bl"></div>
								<div class="art-post-br"></div>
								<div class="art-post-tc"></div>
								<div class="art-post-bc"></div>
								<div class="art-post-cl"></div>
								<div class="art-post-cr"></div>
								<div class="art-post-cc"></div>
								<div class="art-post-body">
											<div class="art-post-inner art-article">
												<h2 class="art-postheader">
													   <img src="./images/postheadericon.png" width="22" height="21" alt="" />Publish Requirements
												</h2>
												<div class="cleared"></div>
												<div class="art-postcontent">
													<form method="post" action="requirementServer.php">
														<table align="center">
															<tr>
																<td>
																	<label for = "typeOfService">Type of Service:</label>
																</td>
																<td>
																	<Select name = "typeOfService">
																		<option  value="Financial">Financial</option>
																		<option  value="Insurance">Insurance</option>
																		<option  value="Web Site Development">Web Site Development</option>
																		<option  value="Other">Other</option>							
																	</Select>
																</td>
															</tr>
															<tr>
																<td>
																	<label for = "serviceKeywords">Service Keywords</label>
																</td>
																<td>
																	<input type = "text" name = "serviceKeywords"/>
																</td>
															</tr>
															<tr>
																<td>
																	<label for = "catOfService">Category of Service:</label>
																</td>
																<td>
																	<Select name = "catOfService">
																		<option  value="Workflow">Workflow</option>
																		<option  value="GUI">GUI</option>
																		<option  value="Data">Data</option>																						
																	</Select>
																</td>
															</tr>
															<tr>
																<td>
																	<label for = "priority">Priority :</label>
																</td>
																<td>
																	<Select name = "priority">
																		<option  value="High">High</option>
																		<option  value="Medium">Medium</option>
																		<option  value="Low">Low</option>																						
																	</Select>
																</td>
															</tr>															
															<tr>
																<td rowspan="2">						
																	<input type = "submit" value="Submit" checked/>
																</td>															
															</tr>
														</table>
													</form>
												</div>
												<div class="cleared"></div>
											</div>

									<div class="cleared"></div>
								</div>
							</div>

						  <div class="cleared"></div>
						</div>
						<div class="art-layout-cell art-sidebar1">
						<div class="art-block">
							<div class="art-block-body">
								<div class="cleared"></div>
							</div>
						</div>

						  <div class="cleared"></div>
						</div>
					</div>
				</div>
				<div class="cleared"></div>
				<div class="art-footer">
					<div class="art-footer-t"></div>
					<div class="art-footer-l"></div>
					<div class="art-footer-b"></div>
					<div class="art-footer-r"></div>
					<div class="art-footer-body">
								<div class="art-footer-text">
									<p>All Rights Reserved.</p>
								</div>
						<div class="cleared"></div>
					</div>
				</div>
				<div class="cleared"></div>
			</div>
	</div>
<div class="cleared"></div>
</div>
</body>
</html>
