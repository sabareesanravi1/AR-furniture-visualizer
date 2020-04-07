<?php 
	$name=$_GET["name"];	
	?> 
	<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script>
	<!-- include ar.js for A-Frame -->
	<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
	<body style='margin : 0px; overflow: hidden;'>
	<a-scene embedded arjs="debugUIEnabled: false;">
		<a-assets>
		    <a-asset-item id="scene" src="<?php 
		        	
		        echo 'news/'.$name.'.glb'
		        ?>"></a-asset-item>
  		</a-assets>

		<a-entity gltf-model="#scene" scale="5 5 5" position="-0.9 0.1 0.5"></a-entity>
		<a-marker-camera preset="hiro"></a-marker-camera>
	</a-scene>
	</body>	


