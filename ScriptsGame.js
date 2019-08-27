(function () {
    'use strict';

    var boxElem = document.getElementById('box1');
    var pointerElem = document.getElementById('pointer1');
		
				var triangle = document.getElementById('pointer1');
				var Game = document.getElementById('Game');
					function getTriangleCenter() {
						var x = Game.offsetLeft/2.455;
						var y = Game.offsetTop/11;
						x = x+triangle.offsetLeft + 35; // (50 + 50) / 2
						y = y+triangle.offsetTop + 35; // 130 / 2
						return {
							x: x,
							y: y
						};
					}
					boxElem.addEventListener('mousemove', function(e) {
						var triangleCenter = getTriangleCenter();
						var angle = Math.atan2(e.clientX - triangleCenter.x, -(e.clientY - triangleCenter.y)) * (180 / Math.PI) + 45;
						
						triangle.style.transform = 'rotate(' + angle + 'deg)';
						var centerS = document.getElementById('centerS');
						centerS.style.left = triangleCenter.x + 'px';
						centerS.style.top = triangleCenter.y + 'px';
						
					});
	

		function onMouseMove(event) {
        var mouseX = event.pageX;
        var mouseY = event.pageY;
		var centerS1 = document.getElementById('centerS1');
		centerS1.style.left = mouseX + 'px';
		centerS1.style.top = mouseY + 'px';
        var crd = boxElem.getBoundingClientRect();
        var activePointer = crd.left <= mouseX && mouseX <= crd.right && crd.top <= mouseY && mouseY <= crd.bottom;
		
			
        requestAnimationFrame(function movePointer() {
            if (activePointer) {        
				pointerElem.style.left = Math.floor(mouseX) -35+ 'px';
                pointerElem.style.top = Math.floor(mouseY) -35+ 'px';
				
					//--------------------------------------------------------
					
					
					  
					
					
					
					
            }
        });
    
    
    }

    boxElem.addEventListener('click', onMouseMove, false);
    
})();