<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>Welcome to boostGrid</title>
	
	<!-- load css -->	
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/bootstrap.css" />
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/grid.css" />	
	<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/style.css" />				 
	
	<!-- load js -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/grid.js"></script>
	
	<title>boostGrid</title>			
	
</head>

<body>
	<div id="wrap">
		<div class="navbar navbar-inverse">
		  <div class="navbar-inner">
		    <div class="container">		 		 		      
		      <a class="brand" href="#">boostGrid</a>
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">contact</a></li>
					<li><a href="#">about</a></li>
				</ul>		 
		    </div>
		  </div>
		</div>
		
		
		<div class="container">				
			<div class="hero-unit">
				<h3 class="title">Users</h3>
				
				<script>	
					$(document).ready(function() {		
					    gridRender('user');
					}); 
				</script>
				
				<div class="grid">										
					<table id="user" action="<?php echo base_url();?>users/ajaxGetUsers" dir="ltr">				
						<tr>																
							<th col="id" type="text">ID</th>
							<th col="name" type="text">User name</th>
							<th col="password"  type="text">Password</th>		
							<th col="email" type="email">Email</th>
						</tr>										
					</table>	
				</div>
			</div>	
			
			<div class="hero-unit">
				<h3 class="title">boostGrid features:</h3>
				<p>
					<span style="color:#059FFF">BoostGrid</span> is a very easy and rich data grid view built with PHP, the main reason to create new
					one from scratch and not to use existing one is the lack of documentations and some of
					them has stopped it's life dev cycle, other reason is that most of grid data work with the
					database like mysql directly so I can't work with other database engine like Oracle.
				</p>
				
				<ul>
					<li>Built for codeIgniter (I will make a general version ASAP).</li>
					<li>Array data source.</li>
					<li>History support via URL for pagination, sorting and search results.</li>
					<li>Live search.</li>
					<li>Sorting for one column (I will make it for multi column ASAP).</li>
					<li>Support right to left RTL.</li>
					<li>Flexible controls button.</li>
					<li>Ajax (no need to tell more).</li>
				</ul>
			</div>
			
			
			
			<div class="hero-unit">	
				
				<h3 class="title">Just 3 steps to go!! are you ready?!!</h3>
				
				<!-- step1 initialization-->
				
				<span class="badge badge-success">1</span>	<span class="label">Load important css and javascript files</span>			
				<div class="code">
					<span class="comment">&lt;!-- load css --&gt;</span>	
					<br />																
					&lt;link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/bootstrap.css" /&gt;
					<br />
					&lt;link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/grid.css" /&gt;
					<br />	
					&lt;link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>css/style.css" /&gt;
					<br />				 					
					<span class="comment">&lt;!-- load js --&gt;</span>	
					<br />
					&lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"&gt;&lt;/script&gt;
					<br />
					&lt;script src="<?php echo base_url();?>js/bootstrap.min.js"&gt;&lt;/script&gt;
					<br />
					&lt;script src="<?php echo base_url();?>js/grid.js"&gt;&lt;/script&gt;
					<br />
				</div>									
				
				
				<span class="badge badge-success">2</span>	<span class="label">HTML side</span>			
				<div class="code">
					
					&lt;script&gt;	
					<br>
						<span class="tab1">$(document).ready(function() {</span>
							<br>		
						    <span class="tab2">gridRender('user');</span>
						    <br>
						<span class="tab1">}); </span>
						<br>
					&lt;/script&gt;
					<br>
					
					
					
					&lt;div class="grid"&gt; 
						<br>
						<span class="tab1">
							&lt;table id="user" class="grid" action="<?php echo base_url();?>users/ajaxGetUsers" dir="ltr"&gt;	
						</span>															
						
						<br>				
							<span class="tab2">&lt;tr&gt;</span>
							<br>															
								<span class="tab3">&lt;th col="id" type="text"&gt;ID&lt;/th&gt;</span>
								<br>
								<span class="tab3">&lt;th col="name" type="text"&gt;User name&lt;/th&gt;</span>
								<br>
								<span class="tab3">&lt;th col="password"  type="text"&gt;Password&lt;/th&gt;</span>
								<br>		
								<span class="tab3">&lt;th col="email" type="email"&gt;Email&lt;/th&gt;</span>
								<br>
							<span class="tab2">&lt;/tr&gt;</span>
							<br>										
						<span class="tab1">&lt;/table&gt;</span>
						<br>	
					&lt;/div&gt;
					<br>															
				</div>
				
				<span class="badge badge-success">3</span>	<span class="label">Server side</span>			
				<div class="code">
					<span class="comment">//Since our grid is ajax based so we need to create a function to get the data and send it back to the ajax function</span>
					<br>					
					public function ajaxGetUsers()
					<br>
					{
						<br>
						<span class="comment tab1">//since our grid data source is array so we have to initialize our user data array first, for example we can use this array</span>
						<br>						
						<span class="tab1">$user_data[] = array('id' => 1 , 'name' => 'مهند شب قلعية' , 'password' => 'this is not my password' , 'email' => 'ms.kaleia@gmail.com');</span>
						<br>
						<span class="tab1">$user_data[] = array('id' => 2 , 'name' => 'Rami aqqad' , 'password' => 'rami password' , 'email' => 'ramiaqqad@gmail.com');</span>
						<br>										
						
						
						<!--load library -->
						<span class="comment tab1">//load grid library</span>
						<br/>
						<span class="tab1">$this->load->library('grid');</span>
						<br>
						
						
						<span class="comment tab1">//grid option</span>
						<br>
						<span class="tab1">$this->grid->option['title'] = "Users";   <span class="comment">//  grid title</span></span>
						<br>
						<span class="tab1">$this->grid->option['id'] = "id";         <span class="comment">// database table id</span></span>		
						<br>
						<span class="tab1">$this->grid->option['page_size'] = 5;    <span class="comment">//records per page</span></span>
						<br>
						<span class="tab1">$this->grid->option['row_number'] = true; <span class="comment">//show the row number</span></span>		
						<br>
						<span class="tab1">$this->grid->option['add_button'] = true; <span class="comment">//show add button</span></span>
						<br>
						<span class="tab1">$this->grid->option['add_url'] = base_url()."users/addUser"; <span class="comment">//add url</span></span>
						<br>
						<span class="tab1">$this->grid->option['add_title'] = "Add new"; <span class="comment">//add title</span></span>
						<br>							
						<span class="tab1">$this->grid->columns = array('id' , 'name' , 'password' , 'email');</span>
						<br>
						<span class="comment tab1">//get the data</span>
						<br>	
						<span class="tab1">$this->grid->data = $user_data;</span>
						<br>
						<span class="comment tab1">//grid controls</span>
						<br>
						<span class="tab1">$this->grid->control = array(</span>
						<br>	
													  <span class="tab2">array("title" => "Edit" , "icon"=>"icon-pencil" , "url"=>base_url()."users/editUser" , "message_type"=>null , "message"=>"") ,</span>
													  	<br> 
													  <span class="tab2">array("title" => "Delete" , "icon"=>"icon-trash" ,"url"=>base_url()."users/deleteUser" , "message_type"=>"confirm" , "message"=>"Are you sure?")</span>
													  	<br>
													<span class="tab1">);</span>
														<br>												
										
						<span class="comment tab1">//render our grid :)</span>
							<br>
						<span class="tab1">echo $this->grid->gridRender();</span>
							<br>
						
						
						
					}					
					<br>
					
				</div>
				
			</div>
			<div id="push"></div> 	
		</div>	
		
	</div>
	
	
	<!-- the footer of the page --> 
	<div id="footer">
	  <div class="container">
	    <p class="muted credit">Powered by <a href="http://www.computech-sy.com" target="_blank">CompuTech Group</a>.</p>
	  </div>
	</div>	
</body>

</html>
