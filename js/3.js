	var jiao1=document.getElementById('jiao1')
	var jiao2=document.getElementById('jiao2')
	var m=0;
	var time2=null
	
		lunbo2()
		jiao2.onclick=function(){

			clearInterval(time2)
			m++;
			if(m>=12){m=0;}
			
			zhubo.style.left=-98*m+"px";
			jiao2.onmouseout=function(){
			
			lunbo2()
			// clearInterval(time)
			
		}
		}
		
		jiao1.onclick=function(){
			clearInterval(time2)
			m--;
			if(m<=0){m=12;}
		
			zhubo.style.left=-98*m+"px";
			
			
			jiao1.onmouseout=function(){

			lunbo2() 
			// clearInterval(time)
			}
		}
		
		for(var p=0;p<page.length;p++){
		page[p].onclick=function(){
			clearInterval(time2)
		m=parseInt(this.innerHTML)-1;
		
		zhubo.style.left=-98*m+"px";
		lunbo2()
		
		}
		
	}
	

		

		function lunbo2(){
			time2=setInterval(function(){
			m++;
			if(m===13){m=0;}
			fn11(zhubo,-98*m)
		},2500)
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
	function fn11(a,b){
		clearInterval(a.timer)
		a.timer=setInterval(function(){
			a.style.left=a.offsetLeft-10+"px"
			if (a.offsetLeft<=b){
				a.style.left=b+"px";
				clearInterval(a.timer)
			}
		},30)
	}