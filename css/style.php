<style type="text/css">
*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Muli', sans-serif;
}
html
{
	scroll-behavior: smooth;
}
.nav_style{
	background-color: #b767ff !important;
}
.nav_style a{
	color: #fff !important;
}
.row{
	margin-left: 0 !important; 
	margin-right: 0 !important;
}

/*-----Main Header ---------*/
.main_header{
	height: 450px;
	width: 100%;
}
.rightside img{
	width: 40px;
}
.rightside h1{
	font-size: 3rem;
}

.corona_rotet img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% { transform: rotate(0); }
	100% {transform: rotate(360deg);}
}

.leftside img{
	animation:  heartbeat 5s linear infinite
}
@keyframes heartbeat{
	0%{
		transform: scale(.75);
	}
	20%{
		transform: scale(1);
	}
	40%{
		transform: scale(.75);
	}
	60%{
		transform: scale(1);
	}
	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(.75);
	}
}

/*----Corona Update---------*/
.corona_update{
	margin: 0 0 30px 0;
}
.corona_update h3{
	color: #ff7675;
}
.corona_update h1{
	font-size: 2rem;
	text-align: center;
}

/*About Section*/
.sub_section{
	background-color: #fbfafd;
}

/*footer Section*/
.footer_style{
	background-color: #a29bfe !important;
}
.footer_style p{
	margin-bottom: 0 !important;
}

/*top scroll*/
#myBtn{
	/*display: none;*/
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border:none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
}

#myBtn:hover{
	background-color: #606060;
}


/*Responsive Css*/

@media(max-width: 780px)
{
	.main_header{ height: 700px; text-align: center; }
	.main_header h1{text-align: center; padding: 0; width: 100%; font-size: 30px;}

	.count_style{
		display: inline !important;
	}

	.count_style p{ text-align: center; }
	.about_res{margin-left: 0 !important;}
}
</style>