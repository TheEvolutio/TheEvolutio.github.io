var x,x1,y,y1 = 0;


function go_block(pos){
	var block = document.getElementById("MapE");
	//alert (block.offsetLeft);
	if (block.offsetLeft == 88) {
		x1 = 1;
	};
	if (block.offsetTop == 215) {
		y1 = -2;
	};
	if (!((pos > 0 && (x1==-4 && y1==2)) 
	||(pos > 0 && (x1==-4 && y1==1)) 
	||(pos > 0 && (x1==-4 && y1==0)) 
	||(pos > 0 && (x1==-4 && y1==-1)) 
	||(pos > 0 && (x1==-4 && y1==-2)) 
	||(pos > 0 && (x1==-3 && y1==-3)) 
	||(pos > 0 && (x1==3 && y1==-3)) 
	||(pos > 0 && (x1==-2 && y1==-1))
	||(pos > 0 && (x1==-1 && y1==0)) 
	||(pos > 0 && (x1==-1 && y1==1)) 
	||(pos > 0 && (x1==-2 && y1==2))
	||(pos > 0 && (x1==2 && y1==3))
	||(pos < 0 && (x1==-4 && y1==2)) 
	||(pos < 0 && (x1==-3 && y1==1)) 
	||(pos < 0 && (x1==-3 && y1==0)) 
	||(pos < 0 && (x1==-4 && y1==-1)) 
	||(pos < 0 && (x1==1 && y1==-3)) 
	||(pos < 0 && (x1==3 && y1==-3)) 
	||(pos < 0 && (x1==4 && y1==2)) 
	||(pos < 0 && (x1==3 && y1==-1))
	||(pos < 0 && (x1==4 && y1==0)) 
	||(pos < 0 && (x1==4 && y1==1)) 
	||(pos < 0 && (x1==4 && y1==2))
	||(pos < 0 && (x1==4 && y1==3))
	||(pos < 0 && (x1==4 && y1==-2))))
	{block.style.marginLeft = (block.offsetLeft+pos)+"px";
		x=x+pos;
		if (pos<0){
			x1=x1+1;
		} else {
			x1=x1-1;
		}
	}
	
	//alert ('x1='+x1);
	//alert ('y1='+y1);
	var p = document.getElementById('coord');
	p.innerHTML = '['+x1+'/'+y1+']';
};

function coord() {
	var block = document.getElementById("MapE");
	if (block.offsetLeft == 88) {
		x1 = 1;
	};
	if (block.offsetTop == 215) {
		y1 = -2;
	};
	var p = document.getElementById('coord');
	p.innerHTML = '['+x1+'/'+y1+']';
}

function go_blockw(pos1){
	var blockw = document.getElementById("MapE");
	if (blockw.offsetLeft == 88) {
		x1 = 1;
	};
	if (blockw.offsetTop == 215) {
		y1 = -2;
	};
	if (!((pos1 > 0 && (x1==-4 && y1==2)) 
	||(pos1 > 0 && (x1==-3 && y1==1)) 
	||(pos1 > 0 && (x1==-3 && y1==-2)) 
	||(pos1 > 0 && (x1==-2 && y1==-1)) 
	||(pos1 > 0 && (x1==-2 && y1==2)) 
	||(pos1 > 0 && (x1==-1 && y1==2)) 
	||(pos1 > 0 && (x1==0 && y1==2)) 
	||(pos1 > 0 && (x1==1 && y1==2))
	||(pos1 > 0 && (x1==2 && y1==3)) 
	||(pos1 > 0 && (x1==3 && y1==3)) 
	||(pos1 > 0 && (x1==4 && y1==3))
	||(pos1 > 0 && (x1==4 && y1==-2))
	||(pos1 < 0 && (x1==-4 && y1==-2)) 
	||(pos1 < 0 && (x1==-3 && y1==-3)) 
	||(pos1 < 0 && (x1==-2 && y1==-3)) 
	||(pos1 < 0 && (x1==-1 && y1==-3)) 
	||(pos1 < 0 && (x1==0 && y1==-3)) 
	||(pos1 < 0 && (x1==1 && y1==-3)) 
	||(pos1 < 0 && (x1==2 && y1==-2)) 
	||(pos1 < 0 && (x1==3 && y1==-3))
	||(pos1 < 0 && (x1==4 && y1==-2)) 
	||(pos1 < 0 && (x1==-3 && y1==0)) 
	||(pos1 < 0 && (x1==-2 && y1==2))
	||(pos1 < 0 && (x1==4 && y1==0))))
	{blockw.style.marginTop = (blockw.offsetTop+pos1)+"px";
		y=y+pos1;
		if (pos1>0){
			y1=y1+1;
		} else {
			y1=y1-1;
		}
	}
	
	
	
	
	//alert ('x1='+x1);
	//alert ('y1='+y1);
	var p = document.getElementById('coord');
	p.innerHTML = '['+x1+'/'+y1+']';
};

/*function getCoords(elem){ 
  var box = elem.getBoundingClientRect();

  return {
    top: box.top + pageYOffset,
    left: box.left + pageXOffset
  };






if else ((pos1 < 0 && (x1==-4 && y1==-2)) 
	||(pos1 < 0 && (x1==-3 && y1==-3)) 
	||(pos1 < 0 && (x1==-2 && y1==-3)) 
	||(pos1 < 0 && (x1==-1 && y1==-3)) 
	||(pos1 < 0 && (x1==0 || y1==-3)) 
	||(pos1 < 0 && (x1==1 && y1==-3)) 
	||(pos1 < 0 && (x1==2 && y1==-2)) 
	||(pos1 < 0 && (x1==3 && y1==-3))
	||(pos1 < 0 && (x1==4 && y1==-2)) 
	||(pos1 < 0 && (x1==-3 && y1==0)) 
	||(pos1 < 0 && (x1==-2 && y1==2))
	||(pos1 < 0 && (x1==4 && y1==0))
	){}if 
}*/