	var jian1=document.getElementById('jian1')
	var jian2=document.getElementById('jian2')
	var i=0;
	var time=null
	var page=document.querySelectorAll("#page li")
		lunbo()
		jian2.onclick=function(){
			clearInterval(time)
			i++;
			if(i>=5){i=0;}
			pageBg();
			box1.style.left=-1200*i+"px";
			jian2.onmouseout=function(){
			
			lunbo()
			
			
		}
		}
		
		jian1.onclick=function(){
			clearInterval(time)
			i--;
			if(i<=0){i=5;}
			pageBg();
			box1.style.left=-1200*i+"px";
			
			
			jian1.onmouseout=function(){

			lunbo() 
			
			}
		}
		
		for(var t=0;t<page.length;t++){
		page[t].onmouseover=function(){
			console.log(222);
		clearInterval(time)
		i=parseInt(this.innerHTML)-1;
		pageBg();
		box1.style.left=-1200*i+"px";
		lunbo();
		
		}
		
	}

		function pageBg(){
			for(var k=0;k<page.length;k++){
			page[k].style.background="";
		}
			page[i===5?0:i].style.background="orange"; 
		}


		function lunbo(){
			time=setInterval(function(){
			i++;
			if(i===6){i=0;}
			fn1(box1,-1200*i)
			
			for(var k=0;k<page.length;k++){
				page[k].style.background="";
			}
			page[i===5?0:i].style.background="orange";
			
		},3000)
		}


function fn(a,b){
		clearInterval(a.timer)
		a.timer=setInterval(function(){
			a.style.left=a.offsetLeft+10+"px"
			if (a.offsetLeft>=b){
				a.style.left=b+"px";
				clearInterval(a.timer)
			}

		},30)

	}
	function fn1(a,b){
		clearInterval(a.timer)
		a.timer=setInterval(function(){
			a.style.left=a.offsetLeft-100+"px"
			if (a.offsetLeft<=b){
				a.style.left=b+"px";
				clearInterval(a.timer)
			}
		},30)
	}