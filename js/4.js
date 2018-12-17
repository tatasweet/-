
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata1",
				success:function(a){
					
					newsdata1=JSON.parse(a)
					
					var str1=""
					newsdata1.forEach(function(item){
			        str1+=`<li><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a><i>${item.date}</i></li>`
				    $("#xuan1").html(str1);
			     })
					$(".a11").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".a11").css("color","").css("border-bottom","")
					$(".box").eq($(this).index()+1).css("display","block").siblings(".box").css("display","none")
				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata11",
				success:function(a){
					newsdata11=JSON.parse(a)
					var str2=""
					newsdata11.forEach(function(item){
			        str2=`<li class="first"><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a></li>`
				    $("#xian1").html(str2);
			     })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata2",
				success:function(a){
					newsdata2=JSON.parse(a)
					var str3=""
					newsdata2.forEach(function(item){
			        str3+=`<li><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a><i>${item.date}</i></li>`
				    $("#xuan2").html(str3);
			     })
					$(".a11").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".a11").css("color","").css("border-bottom","")
					$(".box").eq($(this).index()+1).css("display","block").siblings(".box").css("display","none")
				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata22",
				success:function(a){
					newsdata22=JSON.parse(a)
					var str4=""
					newsdata22.forEach(function(item){
			        str4=`<li class="first"><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a></li>`
				    $("#xian2").html(str4);
			     })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata3",
				success:function(a){
					newsdata3=JSON.parse(a)
					var str5=""
					newsdata3.forEach(function(item){
			        str5+=`<li><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a><i>${item.date}</i></li>`
				    $("#xuan3").html(str5);
			     })
					$(".a11").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".a11").css("color","").css("border-bottom","")
					$(".box").eq($(this).index()+1).css("display","block").siblings(".box").css("display","none")
				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata33",
				success:function(a){
					newsdata33=JSON.parse(a)
					var str6=""
					newsdata33.forEach(function(item){
			        str6=`<li class="first"><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a></li>`
				    $("#xian3").html(str6);
			     })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata4",
				success:function(a){
					newsdata4=JSON.parse(a)
					var str7=""
					newsdata4.forEach(function(item){
			        str7+=`<li><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a><i>${item.date}</i></li>`
				    $("#xuan4").html(str7);
			     })
					$(".a11").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".a11").css("color","").css("border-bottom","")
					$(".box").eq($(this).index()+1).css("display","block").siblings(".box").css("display","none")
				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata44",
				success:function(a){
					newsdata44=JSON.parse(a)
					var str8=""
					newsdata44.forEach(function(item){
			        str8=`<li class="first"><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a></li>`
				    $("#xian4").html(str8);
			     })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata5",
				success:function(a){
					newsdata5=JSON.parse(a)
					var str9=""
					newsdata5.forEach(function(item){
			        str9+=`<li><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a><i>${item.date}</i></li>`
				    $("#xuan5").html(str9);
			     })
					$(".a11").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".a11").css("color","").css("border-bottom","")
					$(".box").eq($(this).index()+1).css("display","block").siblings(".box").css("display","none")
				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=newsdata55",
				success:function(a){
					newsdata55=JSON.parse(a)
					var str10=""
					newsdata55.forEach(function(item){
			        str10=`<li class="first"><a href=${item.url} target="_blank" title=${item.content}>${item.content}</a></li>`
				    $("#xian5").html(str10);
			     })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=videodata1",
				success:function(a){
					videodata1=JSON.parse(a)
					var strv1=""
					videodata1.forEach(function(item){
			        strv1+=`<li><a href=${item.url} target="_blank"><img src=${item.img} alt=""><span class="bo"></span></a><p>${item.content}</p></li>`
				    $("#video1").html(strv1);
			     })
					$(".icons").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons").css("color","").css("border-bottom","")
		
					$(".hezi").eq($(this).index()).css("display","block").siblings(".hezi").css("display","none")
					})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=videodata2",
				success:function(a){
					videodata2=JSON.parse(a)
					var strv2=""
					videodata2.forEach(function(item){
			        strv2+=`<li><a href=${item.url} target="_blank"><img src=${item.img} alt=""><span class="bo"></span></a><p>${item.content}</p></li>`
				    $("#video2").html(strv2);
			     })
					$(".icons").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons").css("color","").css("border-bottom","")
		
					$(".hezi").eq($(this).index()).css("display","block").siblings(".hezi").css("display","none")
					})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=videodata3",
				success:function(a){
					videodata3=JSON.parse(a)
					var strv3=""
					videodata3.forEach(function(item){
			        strv3+=`<li><a href=${item.url} target="_blank"><img src=${item.img} alt=""><span class="bo"></span></a><p>${item.content}</p></li>`
				    $("#video3").html(strv3);
			     })
					$(".icons").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons").css("color","").css("border-bottom","")
		
					$(".hezi").eq($(this).index()).css("display","block").siblings(".hezi").css("display","none")
					})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=videodata4",
				success:function(a){
					videodata4=JSON.parse(a)
					var strv4=""
					videodata4.forEach(function(item){
			        strv4+=`<li><a href=${item.url} target="_blank"><img src=${item.img} alt=""><span class="bo"></span></a><p>${item.content}</p></li>`
				    $("#video4").html(strv4);
			     })
					$(".icons").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons").css("color","").css("border-bottom","")
		
					$(".hezi").eq($(this).index()).css("display","block").siblings(".hezi").css("display","none")
					})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=saishidata1",
				success:function(a){
					saishidata1=JSON.parse(a)
					var strs1=""
					var strs11=""
					var strs111=""
					saishidata1.forEach(function(item){
			        strs1=`<a href=${item.url2} target="_blank"><img src=${item.img} alt=""></a>`
			        strs11=`<h3><a href=${item.url1} target="_blank" title=${item.content1}>${item.content1}</a></h3>`
			        strs111+=`<li><a href=${item.url} target="_blank" title=${item.content}><span>-</span>${item.content}</a><em>${item.date}</em></li>`
				    $("#saitu1").html(strs1);
				    $("#biaoti1").html(strs11);
				    $("#saishi1").html(strs111)
			     })
					 $(".icons1").click(function(){
					 $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons1").css("color","").css("border-bottom","")
		    		 $(".top1").eq($(this).index()).css("display","block").siblings(".top1").css("display","none")
					 })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=saishidata2",
				success:function(a){
					saishidata2=JSON.parse(a)
					var strs2=""
					var strs22=""
					var strs222=""
					saishidata2.forEach(function(item){
			        strs2=`<a href=${item.url2} target="_blank"><img src=${item.img} alt=""></a>`
			        strs22=`<h3><a href=${item.url1} target="_blank" title=${item.content1}>${item.content1}</a></h3>`
			        strs222+=`<li><a href=${item.url} target="_blank" title=${item.content}><span>-</span>${item.content}</a><em>${item.date}</em></li>`
				    $("#saitu2").html(strs2);
				    $("#biaoti2").html(strs22);
				    $("#saishi2").html(strs222)
			     })
					 $(".icons1").click(function(){
					 $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons1").css("color","").css("border-bottom","")
		    		 $(".top1").eq($(this).index()).css("display","block").siblings(".top1").css("display","none")
					 })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=saishidata3",
				success:function(a){
					saishidata3=JSON.parse(a)
					var strs3=""
					var strs33=""
					var strs333=""
					saishidata3.forEach(function(item){
			        strs3=`<a href=${item.url3} target="_blank"><img src=${item.img1} alt=""></a>`
			        strs33=`<h3><a href=${item.url1} target="_blank" title=${item.content1}>${item.content1}</a></h3>`
			        strs333+=`<li><a href=${item.url} target="_blank" title=${item.content}><span>-</span>${item.content}</a><em>${item.date}</em></li>`
				    $("#saitu3").html(strs3);
				    $("#biaoti3").html(strs33);
				    $("#saishi3").html(strs333)
			     })
					 $(".icons1").click(function(){
					 $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons1").css("color","").css("border-bottom","")
		    		 $(".top1").eq($(this).index()).css("display","block").siblings(".top1").css("display","none")
					 })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=saishidata4",
				success:function(a){
					saishidata4=JSON.parse(a)
					var strs4=""
					var strs44=""
					var strs444=""
					saishidata4.forEach(function(item){
			        strs4=`<a href=${item.url3} target="_blank"><img src=${item.img1} alt=""></a>`
			        strs44=`<h3><a href=${item.url3} target="_blank" title=${item.content1}>${item.content1}</a></h3>`
			        strs444+=`<li><a href=${item.url} target="_blank" title=${item.content}><span>-</span>${item.content}</a><em>${item.date}</em></li>`
				    $("#saitu4").html(strs4);
				    $("#biaoti4").html(strs44);
				    $("#saishi4").html(strs444)
			     })
					 $(".icons1").click(function(){
					 $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons1").css("color","").css("border-bottom","")
		    		 $(".top1").eq($(this).index()).css("display","block").siblings(".top1").css("display","none")
					 })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=saishidata5",
				success:function(a){
					saishidata5=JSON.parse(a)
					var strs5=""
					var strs55=""
					var strs555=""
					saishidata5.forEach(function(item){
			        strs5=`<a href=${item.url3} target="_blank"><img src=${item.img1} alt=""></a>`
			        strs55=`<h3><a href=${item.url3} target="_blank" title=${item.content1}>${item.content1}</a></h3>`
			        strs555+=`<li><a href=${item.url} target="_blank" title=${item.content}><span>-</span>${item.content}</a><em>${item.date}</em></li>`
				    $("#saitu5").html(strs5);
				    $("#biaoti5").html(strs55);
				    $("#saishi5").html(strs555)
			     })
					 $(".icons1").click(function(){
					 $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons1").css("color","").css("border-bottom","")
		    		 $(".top1").eq($(this).index()).css("display","block").siblings(".top1").css("display","none")
					 })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=saishidata6",
				success:function(a){
					saishidata6=JSON.parse(a)
					var strs6=""
					saishidata6.forEach(function(item){
			        strs6+=`<li><a href=${item.url} target="_blank"><img src=${item.img} alt=""><span class="bo"></span></a><p>${item.content}</p></li>`
				    $("#saitu6").html(strs6);
			     })
					 $(".icons1").click(function(){
					 $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons1").css("color","").css("border-bottom","")
		    		 $(".top1").eq($(this).index()).css("display","block").siblings(".top1").css("display","none")
					 })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=gongluedata1",
				success:function(a){
					gongluedata1=JSON.parse(a)
					var strg1=""
					var strg11=""
					gongluedata1.forEach(function(item){
			        strg11+=`<li><a href=${item.url} target="_blank"><i>-</i> <span>${item.content}</span><em>${item.date}</em></a></li>`
			        strg1+=`<li><a href=${item.url1} target="_blank"><img src=${item.img1} alt=""></a><p>${item.content1}</p></li><li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#gongluetu1").html(strg1);
				    $("#gonglue1").html(strg11);
			     })
					$(".icons2").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons2").css("color","").css("border-bottom","")
					$(".hezii").eq($(this).index()).css("display","block").siblings(".hezii").css("display","none")
 				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=gongluedata2",
				success:function(a){
					gongluedata2=JSON.parse(a)
					var strg2=""
					var strg22=""
					gongluedata2.forEach(function(item){
			        strg22+=`<li><a href=${item.url} target="_blank"><i>-</i> <span>${item.content}</span><em>${item.date}</em></a></li>`
			        strg2+=`<li><a href=${item.url1} target="_blank"><img src=${item.img1} alt=""></a><p>${item.content1}</p></li><li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#gongluetu2").html(strg2);
				    $("#gonglue2").html(strg22);
			     })
					$(".icons2").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons2").css("color","").css("border-bottom","")
					$(".hezii").eq($(this).index()).css("display","block").siblings(".hezii").css("display","none")
 				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=gongluedata3",
				success:function(a){
					gongluedata3=JSON.parse(a)
					var strg3=""
					var strg33=""
					gongluedata3.forEach(function(item){
			        strg33+=`<li><a href=${item.url} target="_blank"><i>-</i> <span>${item.content}</span><em>${item.date}</em></a></li>`
			        strg3+=`<li><a href=${item.url1} target="_blank"><img src=${item.img1} alt=""></a><p>${item.content1}</p></li><li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#gongluetu3").html(strg3);
				    $("#gonglue3").html(strg33);
			     })
					$(".icons2").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons2").css("color","").css("border-bottom","")
					$(".hezii").eq($(this).index()).css("display","block").siblings(".hezii").css("display","none")
 				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=gongluedata4",
				success:function(a){
					gongluedata4=JSON.parse(a)
					var strg4=""
					var strg44=""
					gongluedata4.forEach(function(item){
			        strg44+=`<li><a href=${item.url} target="_blank"><i>-</i> <span>${item.content}</span><em>${item.date}</em></a></li>`
			        strg4+=`<li><a href=${item.url1} target="_blank"><img src=${item.img1} alt=""></a><p>${item.content1}</p></li><li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#gongluetu4").html(strg4);
				    $("#gonglue4").html(strg44);
			     })
					$(".icons2").click(function(){
					$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons2").css("color","").css("border-bottom","")
					$(".hezii").eq($(this).index()).css("display","block").siblings(".hezii").css("display","none")
 				})
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=ziliaodata1",
				success:function(a){
					ziliaodata1=JSON.parse(a)
					var strz1=""
					var strz11=""
					ziliaodata1.forEach(function(item){
			        strz1=`<a href=${item.url1} target="_blank"><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strz11+=`<li><a href=${item.url2} target="_blank"><img src="${item.img2}" alt=""><p>${item.content2}</p></a></li>`
				    $("#ziliao1").html(strz1);
				    $("#ziliaotu1").html(strz11);
			     })
					$(".icons3").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons3").css("color","").css("border-bottom","")
		            $(".he").eq($(this).index()).css("display","block").siblings(".he").css("display","none")
		         })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=ziliaodata2",
				success:function(a){
					ziliaodata2=JSON.parse(a)
					var strz2=""
					var strz22=""
					ziliaodata2.forEach(function(item){
			        strz2=`<a href=${item.url1} target="_blank"><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strz22+=`<li><a href=${item.url2} target="_blank"><img src="${item.img2}" class="img1" alt=""><p>${item.content2}</p></a></li>`
				    $("#ziliao2").html(strz2);
				    $("#ziliaotu2").html(strz22);
			     })
					$(".icons3").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons3").css("color","").css("border-bottom","")
		            $(".he").eq($(this).index()).css("display","block").siblings(".he").css("display","none")
		         })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=ziliaodata3",
				success:function(a){
					ziliaodata3=JSON.parse(a)
					var strz3=""
					var strz33=""
					ziliaodata3.forEach(function(item){
			        strz3=`<a href=${item.url1} target="_blank"><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strz33+=`<li><a href=${item.url2} target="_blank"><img src="${item.img2}" alt=""><p>${item.content2}</p></a></li>`
				    $("#ziliao3").html(strz3);
				    $("#ziliaotu3").html(strz33);
			     })
					$(".icons3").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons3").css("color","").css("border-bottom","")
		            $(".he").eq($(this).index()).css("display","block").siblings(".he").css("display","none")
		         })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=ziliaodata4",
				success:function(a){
					ziliaodata4=JSON.parse(a)
					var strz4=""
					var strz44=""
					ziliaodata4.forEach(function(item){
			        strz4=`<a href=${item.url1} target="_blank"><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strz44+=`<li><a href=${item.url2} target="_blank"><img src=${item.img2} class="img2" alt=""><p>${item.content2}</p></a></li>`
				    $("#ziliao4").html(strz4);
				    $("#ziliaotu4").html(strz44);
			     })
					$(".icons3").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons3").css("color","").css("border-bottom","")
		            $(".he").eq($(this).index()).css("display","block").siblings(".he").css("display","none")
		         })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=tongrendata1",
				success:function(a){
					tongrendata1=JSON.parse(a)
					var strt1=""
					var strt11=""
					tongrendata1.forEach(function(item){
			        strt1=`<a href=${item.url1} target="_blank" title=${item.content1}><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strt11+=`<li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#tongren1").html(strt1);
				    $("#tongrentu1").html(strt11);
			     })
					$(".icons4").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons4").css("color","").css("border-bottom","")
		            $(".he1").eq($(this).index()).css("display","block").siblings(".he1").css("display","none")
		         })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=tongrendata2",
				success:function(a){
					tongrendata2=JSON.parse(a)
					var strt2=""
					var strt22=""
					tongrendata2.forEach(function(item){
			        strt2=`<a href=${item.url1} target="_blank" title=${item.content1}><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strt22+=`<li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#tongren2").html(strt2);
				    $("#tongrentu2").html(strt22);
			     })
					$(".icons4").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons4").css("color","").css("border-bottom","")
		            $(".he1").eq($(this).index()).css("display","block").siblings(".he1").css("display","none")
		         })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=tongrendata3",
				success:function(a){
					tongrendata3=JSON.parse(a)
					var strt3=""
					var strt33=""
					tongrendata3.forEach(function(item){
			        strt3=`<a href=${item.url1} target="_blank" title=${item.content1}><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strt33+=`<li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#tongren3").html(strt3);
				    $("#tongrentu3").html(strt33);
			     })
					$(".icons4").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons4").css("color","").css("border-bottom","")
		            $(".he1").eq($(this).index()).css("display","block").siblings(".he1").css("display","none")
		         })
				}
	 })
$.ajax({
				type:"get",
				url:"js/1.php",
				data:"fdata=tongrendata4",
				success:function(a){
					tongrendata4=JSON.parse(a)
					var strt4=""
					var strt44=""
					tongrendata4.forEach(function(item){
			        strt4=`<a href=${item.url1} target="_blank" title=${item.content1}><img src=${item.img1} alt=""><p>${item.content1}</p></a>`
			        strt44+=`<li><a href=${item.url2} target="_blank"><img src=${item.img2} alt=""></a><p>${item.content2}</p></li>`
				    $("#tongren4").html(strt4);
				    $("#tongrentu4").html(strt44);
			     })
					$(".icons4").click(function(){
		            $(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons4").css("color","").css("border-bottom","")
		            $(".he1").eq($(this).index()).css("display","block").siblings(".he1").css("display","none")
		         })
				}
	 })
// $(".a11").click(function(){
// 			$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".a11").css("color","").css("border-bottom","")
// 			$(".box").eq($(this).index()+1).css("display","block").siblings(".box").css("display","none")
// 				})



// $(".icons").click(function(){
// 		$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons").css("color","").css("border-bottom","")
		
// 		$(".hezi").eq($(this).index()).css("display","block").siblings(".hezi").css("display","none")
// 		})

// $(".icons1").click(function(){
	
// 		$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons1").css("color","").css("border-bottom","")
// 		$(".top1").eq($(this).index()).css("display","block").siblings(".top1").css("display","none")
// 		})

// $(".icons2").click(function(){
		
// 		$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons2").css("color","").css("border-bottom","")
// 		$(".hezii").eq($(this).index()).css("display","block").siblings(".hezii").css("display","none")
// 		})

// $(".icons3").click(function(){
		
// 		$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons3").css("color","").css("border-bottom","")
// 		$(".he").eq($(this).index()).css("display","block").siblings(".he").css("display","none")
// 		})

$(".icons4").click(function(){
		
		$(this).css("color","#ffb007").css("border-bottom","3px solid #ffb007").siblings(".icons4").css("color","").css("border-bottom","")
		$(".he1").eq($(this).index()).css("display","block").siblings(".he1").css("display","none")
		})

// $(".h2").mouseover(function(){
// 	$(".huatu").css("display","block")
// })
// $(".h2").mouseout(function(){
// 	$(".huatu").css("display","none")
// })

// var a1=document.querySelectorAll('#huaji .pai');
// 	var b1=document.querySelectorAll('#huaji .youxitu');
// 	for(var i=0;i<a1.length;i++){
// 		a1[i].index=i;
// 		b1[i].index=i;
// 		a1[i].onmouseover=function(){
// 			this.style.display="none";
// 			b1[this.index].style.display="block";
// 		}
// 		b1[i].onmouseout=function(){
// 			this.style.display="none";
// 			a1[this.index].style.display="block"
// 		}
// 	}
