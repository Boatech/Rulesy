<?php 



//Set the Content-Security-Policy header with PHP.
header("Content-Security-Policy: frame-ancestors 'none'");
?>
<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); 
?>
<?php
ob_start("compress_code");

function compress_code($code) 
{
 $search = array(
  '/\>[^\S ]+/s',  // remove whitespaces after tags
  '/[^\S ]+\</s',  // remove whitespaces before tags
  '/(\s)+/s'       // remove multiple whitespace sequences
 );

 $replace = array('>','<','\\1');
 $code = preg_replace($search, $replace, $code);
 return $code;
}

?>



	<style type="text/css">
.wrapper{
  position: absolute;
  top: 20px;
  left: 20px;
  animation: show_toast 1s ease forwards;
}
@keyframes show_toast {
  0%{
    transform: translateX(-100%);
  }
  40%{
    transform: translateX(10%);
  }
  80%, 100%{
    transform: translateX(20px);
  }
}
.wrapper.hide{
  animation: hide_toast 1s ease forwards;
}
@keyframes hide_toast {
  0%{
    transform: translateX(20px);
  }
  40%{
    transform: translateX(10%);
  }
  80%, 100%{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
  }
}
.wrapper .toast{
  background: #fff;
  padding: 20px 15px 20px 20px;
  border-radius: 10px;
  border-left: 5px solid #2ecc71;
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  width: 430px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.wrapper .toast.offline{
  border-color: #ccc;
}
.toast .content{
  display: flex;
  align-items: center;
}
.content .icon{
  font-size: 25px;
  color: #fff;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  border-radius: 50%;
  background: #2ecc71;
}
.toast.offline .content .icon{
  background: #ccc;
}
.content .details{
  margin-left: 15px;
}
.details span{
  font-size: 20px;
  font-weight: 500;
}
.details p{
  color: #878787;
}
.toast .close-icon{
  color: #878787;
  font-size: 23px;
  cursor: pointer;
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  background: #f2f2f2;
  transition: all 0.3s ease;
}
.close-icon:hover{
  background: #efefef;
}
    	</style>
