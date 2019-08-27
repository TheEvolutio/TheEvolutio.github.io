(function () {
    'use strict';

    var boxElem = document.getElementById('box1');
    var pointerElem = document.getElementById('pointer1');

    function onMouseMove(event) {
        var mouseX = event.pageX;
        var mouseY = event.pageY;
        var crd = boxElem.getBoundingClientRect();
        var activePointer = crd.left <= mouseX && mouseX <= crd.right && crd.top <= mouseY && mouseY <= crd.bottom;
       
        requestAnimationFrame(function movePointer() {
            if (activePointer) {        
                pointerElem.style.left = Math.floor(mouseX) + 'px';
                pointerElem.style.top = Math.floor(mouseY) + 'px';
            }
        });
    
    
    }

    boxElem.addEventListener('click', onMouseMove, false);
    
})();