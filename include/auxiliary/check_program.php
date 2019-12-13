<?php
function check_authorization(){
	$url = "https://xiaoxinyo.github.io/xxtzsq.txt";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);	
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$query_authorization = curl_exec($ch);
	curl_close($ch);
		if(strpos($query_authorization,"|".$_SERVER['HTTP_HOST'])==0 or $query_authorization=="") {
			exit('
			<link rel="stylesheet" href="/layui/css/layui.css"  media="all">
				<script src="/layui/layui.js" charset="utf-8"></script>
				<script>//引用layui选择框
				layui.use(["form", "layedit","laydate"], function(){
				  var form = layui.form
				  ,layer = layui.layer
				  ,layedit = layui.layedit
				  ,laydate = layui.laydate;
				  });
				</script>
			<script>
			layui.use("layer", function(){
			  var layer = layui.layer;
			  
			 layer.open({
			  title: "提示"
			  ,content:"域名未授权，请联系作者进行授权<br>QQ:898836638"
				
					,yes: function(index, layero){
					window.location.href="https://wpa.qq.com/msgrd?v=3&uin=898836638&site=qq&menu=yes";
						layer.close(index);
						 }
					
					,cancel: function(index, layero){ 
					window.location.href="https://wpa.qq.com/msgrd?v=3&uin=898836638&site=qq&menu=yes";
						layer.close(index);
					}  
				
			});     
			 
			}); 						
			</script>');
		}	
}

function check_install(){
	if(file_exists($_SERVER['DOCUMENT_ROOT']."/install/install.lock")==0){
		exit('
		<script>
		layui.use("layer", function(){
			var layer = layui.layer;
			
		layer.open({
			title: "提示"
			,content:"您还未安装程序，点击确定进行安装"
			
				,yes: function(index, layero){
				window.location.href="/install/index.php";
					layer.close(index);
					}
				
				,cancel: function(index, layero){ 
				window.location.href="/install/index.php";
					layer.close(index);
				}  
			
		});     
		
		}); 						
		</script>');
	}
	}
?>
