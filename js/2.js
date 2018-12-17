$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=lunbodata",
				success:function(a){
					lunbodata=JSON.parse(a)
					var stro1=""
					lunbodata.forEach(function(item){
			        stro1+=`<li><a href=${item.url}  target="_blank"><img src=${item.img} alt=""></a></li>`
				    $("#box3").html(stro1);
			     })
					var n=0;
	var time1=null
	var page1=document.querySelectorAll("#page1 li")
		lunbo1()
		for(var q=0;q<page1.length;q++){
		page1[q].onclick=function(){
			console.log(444)
			clearInterval(time1)
		n=parseInt(this.innerHTML)-1;
		pageBg1();
		box3.style.left=-540*n+"px";
		lunbo1()
		
		}
		
	}
	function pageBg1(){
			for(var k=0;k<page1.length;k++){
			page1[k].style.background="";
			page1[k].style.width="";
		}
			page1[n===5?0:n].style.background="orange"; 
			page1[n===5?0:n].style.width="60px";
		}
		
		function lunbo1(){
			time1=setInterval(function(){
			n++;
			if(n===6){n=0;}
			fn1(box3,-540*n)
			
			for(var k=0;k<page1.length;k++){
				page1[k].style.background="";
				page1[k].style.width="";
			}
			page1[n===5?0:n].style.background="orange";
			page1[n===5?0:n].style.width="60px";
			
		},4000)
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
				}
	 })

// 	var n=0;
// 	var time1=null
// 	var page1=document.querySelectorAll("#page1 li")
// 		lunbo1()
// 		for(var q=0;q<page1.length;q++){
// 		page1[q].onclick=function(){
// 			console.log(444)
// 			clearInterval(time1)
// 		n=parseInt(this.innerHTML)-1;
// 		pageBg1();
// 		box3.style.left=-540*n+"px";
// 		lunbo1()
		
// 		}
		
// 	}
// 	function pageBg1(){
// 			for(var k=0;k<page1.length;k++){
// 			page1[k].style.background="";
// 			page1[k].style.width="";
// 		}
// 			page1[n===5?0:n].style.background="orange"; 
// 			page1[n===5?0:n].style.width="60px";
// 		}
		
// 		function lunbo1(){
// 			time1=setInterval(function(){
// 			n++;
// 			if(n===6){n=0;}
// 			fn1(box3,-540*n)
			
// 			for(var k=0;k<page1.length;k++){
// 				page1[k].style.background="";
// 				page1[k].style.width="";
// 			}
// 			page1[n===5?0:n].style.background="orange";
// 			page1[n===5?0:n].style.width="60px";
			
// 		},4000)
// 		}
// function fn(a,b){
// 		clearInterval(a.timer)
// 		a.timer=setInterval(function(){
// 			a.style.left=a.offsetLeft+10+"px"
// 			if (a.offsetLeft>=b){
// 				a.style.left=b+"px";
// 				clearInterval(a.timer)
// 			}

// 		},30)

// 	}
// 	function fn1(a,b){
// 		clearInterval(a.timer)
// 		a.timer=setInterval(function(){
// 			a.style.left=a.offsetLeft-100+"px"
// 			if (a.offsetLeft<=b){
// 				a.style.left=b+"px";
// 				clearInterval(a.timer)
// 			}
// 		},30)
// 	}