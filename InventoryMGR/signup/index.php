<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
	
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script>
    <script type="text/javascript" src="js/jquery.main.js"></script>
</head>
<body>
	
	<div id="container">
        <form action="#" method="post">
	
            <!-- #first_step -->
            <div id="first_step">
                <h1>ACADEMIC TECHNOLOGY<br /><span>INVENTORY MANAGER</span><br /> EQUIPMENT RESERVATION SIGN-UP</h1>

                <div class="form">
                    <input type="text" name="username" id="username" placeholder="Student ID Number" />
                    <label for="username">Please enter your Endicott College student ID number</label>
                    
                    <input type="password" name="password" id="password" value="password" />
                    <label for="password">At least 6 characters. Use a mix of upper and lowercase for a strong password</label>
                    
                    <input type="password" name="cpassword" id="cpassword" value="password" />
                    <label for="cpassword">If your passwords aren’t equal, you won’t be able to continue with signup</label>
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_first" id="submit_first" value="" />
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


            <!-- #second_step -->
            <div id="second_step">
                <h1>ACADEMIC TECHNOLOGY<br /><span>INVENTORY MANAGER</span><br /> EQUIPMENT RESERVATION SIGN-UP</h1>

                <div class="form">
                    <input type="text" name="firstname" id="firstname" value="first name" />
                    <label for="firstname">Your First Name. </label>
                    <input type="text" name="lastname" id="lastname" value="last name" />
                    <label for="lastname">Your Last Name. </label>
                    <input type="text" name="email" id="email" value="email address" />
                    <label for="email">Your email address. We send important administration notices to this address. </label>                    
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_second" id="submit_second" value="" />
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


            <!-- #third_step -->
            <div id="third_step">
                <h1>ACADEMIC TECHNOLOGY<br /><span>INVENTORY MANAGER</span><br /> EQUIPMENT RESERVATION SIGN-UP</h1>


                <div class="form">
                    <select id="age" name="Class">
                        <option>Freshman</option>
                        <option>Sophomore</option>
                        <option>Junior</option>
                        <option>Senior</option>
                    </select>
                    <label for="age">Your current class</label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

                    <select id="gender" name="Major">
                        <option>Communications</option>
                        <option>Computer Science</option>
                        <option>Business</option>
                        <option>Nursing</option>
                        <option>Hospitality</option>
                        <option>Interior Design</option>
                        <option>Athletic Training</option>
                        <option>Visual Communications</option>
                        <option>Education</option>
                        <option>Sports Management</option>
                        <option>Physical Education</option>
                        <option>History</option>
                        <option>Biotech</option>
                        <option>Criminal Justice</option>
                        <option>English</option>
                        <option>Psychology</option>
                        <option>Liberal Arts</option>
                    </select>
                    <label for="gender">Your Major of Study</label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                    
                   
                    
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_third" id="submit_third" value="" />
                
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
            
            
            <!-- #fourth_step -->
            <div id="fourth_step">
                <h1>ACADEMIC TECHNOLOGY<br /><span>INVENTORY MANAGER</span><br /> EQUIPMENT RESERVATION SIGN-UP</h1>

                <div class="form">
                    <h2>Summary</h2>
                    
                    <table>
                        <tr><td>Student ID</td><td></td></tr>
                        <tr><td>Email</td><td></td></tr>
                        <tr><td>Name</td><td></td></tr>
                        <tr><td>Class</td><td></td></tr>
                        <tr><td>Major</td><td></td></tr>
                    </table>
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="send submit" type="submit" name="submit_fourth" id="submit_fourth" value="" />            
            </div>
            
        </form>
	</div>
	<div id="progress_bar">
        <div id="progress"></div>
        <div id="progress_text">0% Complete</div>
	</div>
	
</body>
</html>