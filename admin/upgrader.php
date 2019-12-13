<?php include_once("../include/backstage/header.php"); ?>
<?php
if($admin_login!="true"){
include_once("../include/backstage/footer.php");
exit('<script>
		layui.use("layer", function(){
			var layer = layui.layer;
			
		layer.open({
			title: "提示"
			,content:"您还未登录"
			
				,yes: function(index, layero){
				window.location.href="/admin/login.php";
					layer.close(index);
					}
				
				,cancel: function(index, layero){ 
				window.location.href="/admin/login.php";
					layer.close(index);
				}  
			
		});     
		
		}); 						
		</script>');
}
?>
<fieldset class="layui-elem-field">
  <legend>升级程序</legend>
	<div class="layui-field-box">
	<div style="padding: 10px; background-color: #F2F2F2;">
	
	<div class="layui-row layui-col-space15">
	
	<div class="layui-col-md6">
	  <div class="layui-card">
	    <div class="layui-card-header">当前版本</div>
	    <div class="layui-card-body">
	     <?php echo now_version_number(); ?>
	    </div>
	  </div>
	</div>
	
	<div class="layui-col-md6">
	  <div class="layui-card">
	    <div class="layui-card-header">最新版本</div>
	    <div class="layui-card-body">
	      <?php echo latest_version_number(); ?>
	    </div>
	  </div>
	</div>
	
	<div class="layui-col-md12">
	  <div class="layui-card">
	    <div class="layui-card-header">最新版本说明</div>
	    <div class="layui-card-body">
			<?php
			$latest_version_number_help=explode("\n",latest_version_number_help());
			
			foreach($latest_version_number_help as $latest_version_number_help){
			echo $latest_version_number_help."<br>";
			}
			?>
			<a href="https://github.com/xiaoxinyo">Tips:点击我下载最新版本</a>
	    </div>
	  </div>
	</div>
	
	
	</div>
	
	</div>
	
		
</div>
</fieldset>
<?php include_once("../include/backstage/footer.php"); ?>