	<?php 
	$name=$_GET["name"];	
	?> 
	<title>helo</title>
	<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
	<!-- include ar.js for A-Frame -->
	<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
	<body style='margin : 0px'>
	<a-scene embedded arjs="debugUIEnabled: false;">
		<a-assets>
		        <a-asset-item id="target-obj" src="<?php 
		        	
		        echo '../obj/'.$name.'/target.obj'
		        ?>"></a-asset-item>
				<a-asset-item id="target-mtl" src="<?php 
		        $name=$_GET["name"];	
		        echo '../obj/'.$name.'/target.mtl'
		        ?>"></a-asset-item>
		</a-assets>
				<a-entity obj-model="obj: #target-obj; mtl: #target-mtl" scale="0.01 0.01 0.01"></a-entity>
		<a-marker-camera preset="hiro"></a-marker-camera>
	</a-scene>

	 
</script> 


	</body>	


