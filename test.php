
<!DOCTYPE HTML><html><head><meta charset="UTF-8">
<title>jQuery Validation Plugin Demo</title>
<script type="text/javascript" src="javascript/jquery.js"></script>
<script type="text/javascript" src="javascript/jquery_validation.js"></script>
<script type="text/javascript">
/* Fire Valaidate */
	$(document).ready(function(){
		$.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      );
		$(".form.a").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "",
					email: "",
					comments: ""
				}
			});
		$(".form.b").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					comments: "Required Field + No URL's"
				}
			});
		$(".form.c").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					comments: "Required Field + No URL's"
				}
		  });
		$(".form.d").validate({
				rules: {
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					comments: {
					required: true,
					minlength: 5,
					nourl: true
					}
				},
				messages: {
					name: "Required Field",
					email: "Valid Email Required",
					comments: "Required Field + No URL's"
				}
		  });				
	});
</script>
<style type="text/css">
h1, h2 {
text-align:center;
line-height:20px;
}
/* ----------------- Form ----------------- */
.form {
width:310px;
margin:50px auto;
border:1px solid #333;
padding:15px 70px 45px;
position:relative;
background:#C8E8FB;
}
* html .form {
padding-top:45px;
}
*+html .form {
padding-top:45px;
}
.form h3 {
position:absolute;
top:-11px;
left:35px;
padding:0 8px;
background:#fff;
margin:0;
border:1px solid #333;
}
.form input {
display:block;
padding:6px 4px;
width:300px;
outline:0;
border:1px solid #333;
background:#fff;
}
.form label {
display:block;
margin:30px 0 4px;
}
.form textarea {
display:block;
width:308px;
height:100px;
outline:0;
border:1px solid #333;
overflow:auto;
}
.form input.submit {
width:100px;
cursor:pointer;
margin:40px 0 0;
}
/* ----------- jQuery Validation ----------- */
/* --- Form A --- */
.form.a input.error {
border:1px solid red;
}
.form.a textarea.error {
border:1px solid red;
}
/* --- Form B --- */
.form.b label.error {
float:left;
margin:0;
color:red;
}
/* --- Form C --- */
.form.c p {
position:relative;
margin:0;
width:310px; /* IE6 Fix */
}
.form.c label.error {
position:absolute;
top:5px;
right:4px;
margin:0;
background:#fff;
opacity:.7;
filter:alpha(opacity=70);
color:red;
}
/* --- Form D --- */
.form.d p {
position:relative;
margin:0;
width:310px; /* IE6 Fix */
}
.form.d label.error {
position:absolute;
top:-48px;
right:-60px;
margin:0;
background:red;
opacity:.7;
filter:alpha(opacity=70);
color:#fff;
-moz-border-radius:7px;
-webkit-border-radius:7px;
border-radius:7px;
-moz-box-shadow:0 0 7px #000;
-webkit-box-shadow:0 0 7px #000;
box-shadow:0 0 7px #000;
border:2px solid #fff;
padding:5px 10px;
}
.form.d label.error:before {
content:url(../images/triangle.png);
position:absolute;
bottom:-36px;
height:36px;
}
</style>
<!--[if IE]>
<style type="text/css">
.form.d label.error {top:-38px;}
.form.d label.error:before {content:"";}
</style>
<![endif]-->
</head>
<body>
<h1>jQuery Validation Plugin Demo</h1>
<p style="text-align:center"><a href="jquery-validation.php">&laquo; Back To Tutorial</a></p>
<form class="form a" method="post" action="">
	<h3>Form A</h3>
	<label for="name">Name</label>
	<input type="text" id="name" name="name">
	<label for="email">Email</label>
	<input type="text" id="email" name="email">
	<label for="comments">Comments</label>
	<textarea id="comments" name="comments" rows="3" cols="35"></textarea>
	<input type="submit" class="submit" value="Submit">
</form>
<form class="form b" method="post" action="">
	<h3>Form B</h3>
	<label for="name">Name</label>
	<input type="text" id="name" name="name">
	<label for="email">Email</label>
	<input type="text" id="email" name="email">
	<label for="comments">Comments</label>
	<textarea id="comments" name="comments" rows="3" cols="35"></textarea>
	<input type="submit" class="submit" value="Submit">
</form>
<form class="form c" method="post" action="">
	<h3>Form C</h3>
	<label for="name">Name</label>
	<p>
		<input type="text" id="name" name="name">
	</p>
	<label for="email">Email</label>
	<p>
		<input type="text" id="email" name="email">
	</p>
	<label for="comments">Comments</label>
	<p>
		<textarea id="comments" name="comments" rows="3" cols="35"></textarea>
	</p>
	<input type="submit" class="submit" value="Submit">
</form>
<form class="form d" method="post" action="">
	<h3>Form D</h3>
	<label for="name">Name</label>
	<p>
		<input type="text" id="name" name="name">
	</p>
	<label for="email">Email</label>
	<p>
		<input type="text" id="email" name="email">
	</p>
	<label for="comments">Comments</label>
	<p>
		<textarea id="comments" name="comments" rows="3" cols="35"></textarea>
	</p>
	<input type="submit" class="submit" value="Submit">
</form>
</body>
</html>



		<!--JQUERY VALIDATION PLUGIN-->
		<script type="text/javascript" src="javascript/jquery.js"></script>
		<script type="text/javascript" src="javascript/jquery_validation.js"></script>

		<!--JQUERY FIRE VALIDATOR-->
		<script type="text/javascript">
		$(document).ready(function(){
		$.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      	);
		$("#resrv_form").validate({
				rules: {
					cus_name: {
						required: true
					},
					cus_email: {
						required: true
					},
					cus_number: {
						required: true
					},
					res_branch: {
						required: true
					},
					checkin: {
						required: true
					},
					checkout: {
						required: true
					},
					res_rmtype: {
						required: true
					},
					cus_people: {
						required: true
					},
					cus_rooms: {
						required: true
					},
					cus_message: {
						required: true
					}
				},
				messages: {
					cus_name: "",
					cus_email: "",
					cus_number: "",
					res_branch: "",
					checkin: "",
					checkout: "",
					res_rmtype: "",
					cus_people: "",
					cus_rooms: "",
					cus_message: ""
				}
			});
		});
		</script>
