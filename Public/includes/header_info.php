	<style type="text/css">
        		.settings-menu{
	position: absolute;
	width: 90%;
	max-width: 350px;
	background:var(--bg-color);
	box-shadow: 0 0 10px rgba(0,0,0,0.4);
	border-radius: 4px;
	overflow:hidden;
	top:108%;
	right:5%;
	max-height: 0;
	transition:max-height 0.3s;
}
.settings-menu-height{
	max-height:450px;
}

.user-profile a{
	font-size: 12px;
	color:#1876f2;
	text-decoration: none;
}
.settings-menu-inner{
	padding:20px;
}
.settings-menu hr{
	border:0;
	height:1px;
	background:#9a9a9a;
	margin:15px 0;
}
.settings-links{
	display: flex;
	align-items: center;
	margin:15px 0;
}
.settings-links .settings-icon{
	width: 38px;
	margin-right: 10px;
	border-radius: 50%;
}
.settings-links a{
	text-decoration: none;
	display: flex;
	flex:1;
	align-items: center;
	justify-content: space-between;
	color:#626262;
}
#dark-btn{
	position: absolute;
	top:20px;
	right:20px;
	background:#ddd;
	width:45px;
	border-radius:15px;
	padding:2px 3px;
	cursor: pointer;
	display: flex;
	transition: padding-left 0.5s, background 0.5s;
}
#dark-btn span{
	height:18px;
	width:18px;
	background:#fff;
	border-radius: 50%;
	display: inline-block;
}
#dark-btn.dark-btn-on{
	padding-left:23px;
	background:#666;
}

        	</style>