<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
      <meta name="viewport" content="width=device-width, initial-scale=1"><!--initial-scale=1.0">-->
      <title>Family Tree Menu</title>
      
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
      <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="styles.css">
      <style> 
        body  {
          /*outline: 2px solid block;*/
          background-image:  url('/educationalalbum/pkr.jpg'), url('educationalalbum/mspr.jpg');
          background-color: powderblue;/*#cccccc;*/
          background-size: cover;
          background-repeat: no-repeat;
          height: 100%;
          width: 100%;   
/*        margin-left: auto;
          margin-right: auto;
          padding-left: 1rem;
          padding-right: 1rem;   */       
          font-family: 'Numans', sans-serif;
        }
        @media(max-width:900px){
        	#main{
        		float:none;
        		width:100%;
        	}
        	#sidebar{
        		float:none;
        		width:100%;
        		height:130px;
        		margin-bottom:20px;
        	}
        }        
      </style>
   </head>    
  <body>
    
  <!--  {background-image:url('');}-->
  <!--{background-image:url('');}-->
	<section id="menu">
	  <div class="container">
	    <div class="menu-area">
		  <!-- Navbar -->
			<div class="navbar navbar-default" role="navigation">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>          
			  </div>
			    <div class="navbar-collapse collapse">
				   <!-- Left nav -->
				  <ul class="nav navbar-nav">
				    <li><a href="index.php">Home</a></li>
					
					<li><a href="#">EducationAlbum<span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="moola.htm">Moola Suryaprakash Reddy</a></li>   
						<!--<li><a href="deepthi.htm">Deepthi</a></li>-->
						<!--</li>                            -->
					</ul>
					</li>                        
					<li><a href="#">Grandkids <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="anvith.htm">Anvith</a></li>  
							<li><a href="adhira.htm">Adhira</a></li> 
																	
							<li><a href="diya.htm">Diya</a></li>                                          
							<li><a href="maya.htm">Maya</a></li>                                          
						</ul>    
					</li>
					<li>
					  <li><a href="#">FamilyTree<span class="caret"></span></a>
					    <!--<a href="#">Keshava|Prameela<span class="caret"></span></a>-->
					    <ul class="dropdown-menu">
						  <a href="#">Keshava|Prameela</a>
						  <li><a href="#">1. Madanmohan|Rani <span class="caret"></span></a>
							<ul class="dropdown-menu">
							  <li><a href="#">1. Subbareddy|Kranthi <span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="#">1. Krisha</a></li>  
								  <li><a href="#">2. Dheera</a></li>
								</ul>    
							  </li>
							  <li><a href="#">2. Shirisha|Pradeep <span class="caret"></span></a>
								<ul class="dropdown-menu">
								  <li><a href="#">1. Varun</a></li>  
								  <li><a href="#">2. Veda</a></li>
								</ul>    
							  </li>
							</ul>
						  </li>

						  <li><a href="#">2. Ravinder|Sulochana <span class="caret"></span></a>
							 <ul class="dropdown-menu">
								<li><a href="#">1. Pareekshith|Chandana <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Aanya</a></li>  
									<li><a href="#">2. Samay</a></li>
								 </ul>    
								 </li>
								<li><a href="#">2. Bhageerath|Swetha <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Bhuvi</a></li>  
									<li><a href="#">2. Shreyan</a></li>
								 </ul>    
								</li>
							 </ul>
						  </li>

						  <li><a href="#">3. Suryaprakash|Uma<span class="caret"></span></a>
							 <ul class="dropdown-menu">
								<li><a href="#">1. Anand|Swathi <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Anvith</a></li>
									<li><a href="#">2. Adhira</a></li>
								 </ul>    
								 </li>
								<li><a href="#">2. Deepthi|Mihir <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Diya</a></li>
									<li><a href="#">2. Maya</a></li>
								 </ul>    
								</li>
							 </ul>
						  </li>
						  
						  <li><a href="#">4. Leela|Sadasiva<span class="caret"></span></a>
							 <ul class="dropdown-menu">
								<li><a href="#">Savitha|Matt <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">Lilly</a></li>  
									<li><a href="#">Anaka</a></li>
									<li><a href="#">Kheera</a></li>
								 </ul>    
								 </li>
								 <li><a href="#">Pavan|Rosy<span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">Ayla</a></li>  
								 </ul>    
								 </li>                                     
							 </ul>
						  </li>

						  <li><a href="#">5. Urmila|Ram <span class="caret"></span></a>
							 <ul class="dropdown-menu">
								<li><a href="#">1. Praneeth|Latha <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Aarya</a></li>  
								 </ul>    
								 </li>
								<li><a href="#">2. Preetham|Lakshmi <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Arjun Devansh</a></li>  
								 </ul>    
								</li>
							 </ul>
						  </li>

						  <li><a href="#">6. Nirmala|Ravinder<span class="caret"></span></a>
							 <ul class="dropdown-menu">
								<li><a href="#">1. Arpitha|Mahender <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Vihaan</a></li>  
									<li><a href="#">2. Arnav</a></li>
								 </ul>    
								</li>
								<li><a href="#">2. Sushmitha|Rajesh <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Smayan</a></li>  
									<li><a href="#">2. Suraj</a></li>
								 </ul>    
								</li>
								<li><a href="#">3. Preethi|Hareesh <span class="caret"></span></a>
								 <ul class="dropdown-menu">
									<li><a href="#">1. Haasya</a></li>  
								 </ul>    
								</li>                                    
							 </ul>
						  </li>
					   </ul>
					</li>
				   
					<li><a href="/login.php">Logout</a></li>     
					<li><a href="#">About</a></li>
						
			  </ul>
		    </div>
		  		  <!--/.nav-collapse -->
		  </div>
	    </div>
	  </div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>  
	<script type="text/javascript" src="js/jquery.smartmenus.js"></script>
	<script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>      
  </body>
</html>
