<?php
$fdata=$_GET["fdata"];
$newsdata1='[
				{"content":"海澜之家装备帅气上线，燃爆刺激战场","url":"http://pg.qq.com/gicp/news/102/6508798.html","date":"10-05"},
				{"content":"刺激战场，有Jeep放胆去闯~","url":"http://pg.qq.com/gicp/news/102/6508987.html","date":"10-03"},
				{"content":"赛季回顾 | 赛季最终评分出炉，你和无敌战神差了多少分?","url":"http://pg.qq.com/gicp/news/102/6508987.html","date":"09-30"},
				{"content":"Jeep指南者跨界刺激战场，定制T恤降落伞助力吃鸡","url":"http://pg.qq.com/gicp/news/102/6505571.html","date":"09-30"},
				{"content":"《绝地求生：刺激战场》联动天王表 开启跨界合作新维度","url":"http://pg.qq.com/gicp/news/102/6504824.html","date":"09-22"}
			]';
$newsdata11='[
				{"content":"抢不到吉利服？没关系，还有一件潮T等着你","url":"http://pg.qq.com/gicp/news/102/6508833.html"}
			]';
$newsdata2='[
				{"content":"海澜之家装备帅气上线，燃爆刺激战场","url":"http://pg.qq.com/gicp/news/102/6508798.html","date":"10-05"},
				{"content":"刺激战场，有Jeep放胆去闯~","url":"http://pg.qq.com/gicp/news/102/6508987.html","date":"10-03"},
				{"content":"Jeep指南者跨界刺激战场，定制T恤降落伞助力吃鸡","url":"http://pg.qq.com/gicp/news/102/6505571.html","date":"09-30"},
				{"content":"《绝地求生：刺激战场》联动天王表 开启跨界合作新维度","url":"http://pg.qq.com/gicp/news/102/6504824.html","date":"09-28"},
				{"content":"外挂零容忍！警方联合腾讯捣毁“吸星大法外挂”团伙","url":"http://pg.qq.com/gicp/news/102/6494987.html","date":"09-22"}
			]';
$newsdata22='[
				{"content":"抢不到吉利服？没关系，还有一件潮T等着你","url":"http://pg.qq.com/gicp/news/102/6508833.html"}
			]';
$newsdata3='[
				{"content":"《绝地求生：刺激战场》S3赛季结束预告","url":"http://pg.qq.com/gicp/news/102/6503052.html","date":"09-18"},
				{"content":"《军团对决》版本更新公告","url":"http://pg.qq.com/gicp/news/102/6499447.html","date":"09-10"},
				{"content":"《军团对决》FAQ | 新版本答疑解惑！","url":"http://pg.qq.com/gicp/news/102/6499450.html","date":"09-10"},
				{"content":"新版本爆料 | 多云天气强势来袭，你的八倍镜还好使吗？","url":"http://pg.qq.com/gicp/news/102/6498599.html","date":"09-08"},
				{"content":"《绝地求生：刺激战场》体验服第二期开启","url":"http://pg.qq.com/gicp/news/102/6425075.html","date":"09-05"}
			]';
$newsdata33='[
				{"content":"赛季更迭FAQ S4赛季切换常见问题解答！","url":"http://pg.qq.com/gicp/news/102/6503083.html"}
			]';
$newsdata4='[
				{"content":"赛季任务攻略丨救队友还是让他成诱饵？一招教你救人坑敌两不误！","url":"http://pg.qq.com/gicp/news/102/6497621.html","date":"09-06"},
				{"content":"震撼福利来袭！登录即刻领取上万金币+永久时装！","url":"http://pg.qq.com/gicp/news/102/6497450.html","date":"09-05"},
				{"content":"《绝地求生：刺激战场》携手全家、德克士推出“吃鸡兄弟连”引爆潮流","url":"http://pg.qq.com/gicp/news/102/6495745.html","date":"08-31"},
				{"content":"高能预警：应用宝“刺激计划”神秘彩蛋现已加入空投！","url":"http://pg.qq.com/gicp/news/102/6495679.html","date":"08-31"},
				{"content":"居然这么帅！！永久特工套装等你来拿！紧急任务敢不敢接？","url":"http://pg.qq.com/gicp/news/102/6495449.html","date":"08-30"}
			]';
$newsdata44='[
				{"content":"赛季回顾 | 赛季最终评分出炉，你和无敌战神差了多少分？","url":"http://pg.qq.com/gicp/news/102/6508987.html"}
			]';
$newsdata5='[
				{"content":"刺激战场：沙漠中的最佳狙击点，找到这个地方，你就是王者！","url":"http://pg.qq.com/gicp/news/104/6514408.html","date":"10-09"},
				{"content":"刺激战场：高手进阶技巧教学下篇，你看过吗？","url":"http://pg.qq.com/gicp/news/104/6514412.html","date":"10-09"},
				{"content":"刺激战场：菜鸟和大神的区别是什么？光看这几个细节就清楚了","url":"http://pg.qq.com/gicp/news/104/6514418.html","date":"10-09"},
				{"content":"刺激战场人气最高的枪械 第一用AWM也不换！第四被削也是玩家最爱","url":"http://pg.qq.com/gicp/news/104/6514419.html","date":"10-09"},
				{"content":"刺激战场：M416的配件选择就能看出你的水平，王牌以下的都不懂","url":"http://pg.qq.com/gicp/news/104/6513635.html","date":"10-08"}
			]';
$newsdata55='[
				{"content":"刺激战场：用这些灵敏度攻略上王牌不是问题！","url":"http://pg.qq.com/gicp/news/104/6514401.html"}
			]';
$videodata1='[
			  {"img":"images/a1.jpg","content":"吃鸡切克闹：女主播一波打鸟操作，落地成盒","url":"http://v.qq.com/x/page/k073674u1pb.html"},
		      {"img":"images/b1.jpg","content":"吃鸡切克闹：攻楼四杀，实力眼瞎","url":"http://v.qq.com/x/page/f0725x541hu.html"},
		      {"img":"images/c1.jpg","content":"舔包妹妹出击：今日妹妹秀出了大神操作？等你来揭秘！","url":"http://v.qq.com/x/page/b07417zytz8.html"},
			  {"img":"images/d1.jpg","content":"舔包姐吃鸡日常：这回不是天降正义了，是天降雷神了！","url":"http://v.qq.com/x/page/g0741w5bkb4.html"},
		      {"img":"images/e1.jpg","content":"舔包姐吃鸡日常：这里哪里？这样的坑货，你们遇到过吗！","url":"http://v.qq.com/x/page/g0741w5bkb4.html"},
		      {"img":"images/f1.jpg","content":"傻妞有傻福：落得如此下场，只因为在草地中多看了你一眼","url":"http://v.qq.com/x/page/j0741oakhgp.html"}
		      ]';
$videodata2='[
			  {"img":"images/a2.jpg","content":"舔包妹妹出击：今天妹妹凭实力吃鸡，怎么说？","url":"http://v.qq.com/x/page/n0742bq0ysz.html"},
		      {"img":"images/b2.jpg","content":"刺激战场：打药的时候，一定不要这么做！","url":"http://v.qq.com/x/page/k0741g5q2ko.html"},
		      {"img":"images/c2.jpg","content":"刺激战场：学会这1招，100％不再落地成盒！","url":"http://v.qq.com/x/page/t0740qgxnzf.html"},
			  {"img":"images/d2.jpg","content":"K仙人刺激战场：舔包大神的养成攻略，跟我抢物资不存在的！","url":"http://v.qq.com/x/page/m0742a830vy.html"},
		      {"img":"images/e2.jpg","content":"K仙人刺激战场：前脚刚吹完牛，后脚就栽了跟头的老K","url":"http://v.qq.com/x/page/t0742kbbb8m.html"},
		      {"img":"images/f2.jpg","content":"K仙人刺激战场：以后谁在跟我说要去捡空投，对不起我们不熟！","url":"http://v.qq.com/x/page/x0742aazalc.html"}
		      ]'; 
$videodata3='[
			  {"img":"images/a3.jpg","content":"小妹的战场日记：盲搜一城不如桥堵一人！要的就是刺激！","url":"http://v.qq.com/x/page/y0742c6km6n.html"},
		      {"img":"images/b3.jpg","content":"K仙人刺激战场：雨林地图攻略总纲，找到适合自己发育点！","url":"http://v.qq.com/x/page/l0742oqzd4r.html"},
		      {"img":"images/c3.jpg","content":"K仙人刺激战场：沙漠和雨林地图资源分布你了解几个？","url":"http://v.qq.com/x/page/j0739oyhut0.html"},
			  {"img":"images/d3.jpg","content":"刺激战场中开启3d thouch功能后，偏头开镜射击一个动作即可完成","url":"http://v.qq.com/x/page/z0739r83h52.html"},
		      {"img":"images/e3.jpg","content":"战场小灶：略略略！就是不让你轻松上楼！气不气！","url":"http://v.qq.com/x/page/b0741ggqu66.html"},
		      {"img":"images/f3.jpg","content":"战场小灶：除了金蝉脱壳，姐还会偷梁换柱！","url":"http://v.qq.com/x/page/r07413xqg1v.html"}
		      ]'; 	
$videodata4='[
			  {"img":"images/a4.jpg","content":"舔包妹妹出击：今天妹妹凭实力吃鸡，怎么说？","url":"http://v.qq.com/x/page/p0742kgndso.html"},
		      {"img":"images/b4.jpg","content":"刺激战场：打药的时候，一定不要这么做！","url":"http://v.qq.com/x/page/f0742mzyebe.html"},
		      {"img":"images/c4.jpg","content":"刺激战场：学会这1招，100％不再落地成盒！","url":"http://v.qq.com/x/page/s074280bykd.html"},
			  {"img":"images/d4.jpg","content":"K仙人刺激战场：舔包大神的养成攻略，跟我抢物资不存在的！","url":"http://v.qq.com/x/page/f0742de8d79.html"},
		      {"img":"images/e4.jpg","content":"K仙人刺激战场：前脚刚吹完牛，后脚就栽了跟头的老K","url":"http://v.qq.com/x/page/t0738b8up72.html"},
		      {"img":"images/f4.jpg","content":"K仙人刺激战场：以后谁在跟我说要去捡空投，对不起我们不熟！","url":"http://v.qq.com/x/page/u0739tlg98e.html"}
		      ]';
$saishidata1='[
				{"content":"8月27日战局速看，SC战队实力夺冠","url":"http://pg.qq.com/gicp/news/155/6496651.html","date":"09-03","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"关于赛事中心刺激币相关服务升级说明","url":"http://pg.qq.com/gicp/news/155/6496152.html","date":"08-31","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【特训营】卧龙觉醒，恭喜SC战队霸气夺得总冠军","url":"http://pg.qq.com/gicp/news/155/6494939.html","date":"08-29","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"特训营预测:夺冠热门战队","url":"http://pg.qq.com/gicp/news/155/6494311.html","date":"08-27","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【特训营TOP5】8月27日最终对决即将上演，精彩瞬间热身秀","url":"http://pg.qq.com/gicp/news/155/6494314.html","date":"08-27","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"}
			]';
$saishidata2='[
				{"content":"8月27日战局速看，SC战队实力夺冠","url":"http://pg.qq.com/gicp/news/155/6496651.html","date":"09-03","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"关于赛事中心刺激币相关服务升级说明","url":"http://pg.qq.com/gicp/news/155/6496152.html","date":"08-31","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【特训营】卧龙觉醒，恭喜SC战队霸气夺得总冠军","url":"http://pg.qq.com/gicp/news/155/6494939.html","date":"08-29","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"特训营预测:夺冠热门战队","url":"http://pg.qq.com/gicp/news/155/6494311.html","date":"08-27","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【特训营TOP5】8月27日最终对决即将上演，精彩瞬间热身秀","url":"http://pg.qq.com/gicp/news/155/6494314.html","date":"08-27","img":"images/sai.jpg","content1":"SC战队豪强中脱颖而出问鼎总冠军","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"}
			]';	
$saishidata3='[
				{"content":"刺激战场TGA总决赛观赛指南","url":"http://pg.qq.com/gicp/news/155/6437341.html","date":"07-05","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6483637.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【豆豆带你看比赛】TGA5月月赛落幕 AG成最终赢家","url":"http://pg.qq.com/gicp/news/155/6431660.html","date":"05-29","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6483637.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【战报】绝地求生刺激战场5月月赛：先发致胜 AG稳健“吃鸡”","url":"http://pg.qq.com/gicp/news/155/6431645.html","date":"05-27","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6483637.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【豆豆带你看比赛】JS战术合理成功吃鸡 AG赢得最终胜利","url":"http://pg.qq.com/gicp/news/155/6431583.html","date":"05-26","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6483637.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"【豆豆带你看比赛】WE力克SC 成功吃鸡","url":"http://pg.qq.com/gicp/news/155/6431579.html","date":"05-26","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"}
			]';	
$saishidata4='[
				{"content":"京东电器QGC刺激战场总决赛 冠军归属AGFOX","url":"http://pg.qq.com/gicp/news/155/6434844.html","date":"06-19","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"巅峰时刻！2018京东电器QGC刺激战场公开赛总决赛开战！","url":"http://pg.qq.com/gicp/news/155/6434569.html","date":"06-15","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"2018京东电器QGC刺激战场复活赛火热来袭！","url":"http://pg.qq.com/gicp/news/155/6433386.html","date":"06-08","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"企鹅电竞QGC刺激战场公开赛：安全区变尬舞战场","url":"http://pg.qq.com/gicp/news/155/6432948.html","date":"06-05","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"2018京东电器QGC刺激战场第二期复赛即将打响！","url":"http://pg.qq.com/gicp/news/155/6432512.html","date":"06-01","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"}
			]';	
$saishidata5='[
				{"content":"2018WGC微信游戏精英赛·春季赛《绝地求生：刺激战场》总决赛完美收官","url":"http://pg.qq.com/gicp/news/155/6436815.html","date":"07-02","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"WGC微信精英赛刺激战场总决赛即将热血开战","url":"http://pg.qq.com/gicp/news/155/6435716.html","date":"06-26","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"WGC精英赛五月月赛 OurGlor战队夺冠","url":"http://pg.qq.com/gicp/news/155/6430861.html","date":"05-22","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"WGC微信游戏精英赛《绝地求生：刺激战场》五月月赛即将精彩来袭","url":"http://pg.qq.com/gicp/news/155/6430588.html","date":"05-19","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"},
				{"content":"《刺激战场》WGC五月报名火热开启 释放夏日激情","url":"http://pg.qq.com/gicp/news/155/6426469.html","date":"05-03","img":"images/sai.jpg","content1":"刺激战场赛事助手上线了！鸡友，今天起你的人生再也没有错过！","url1":"http://pg.qq.com/gicp/news/155/6496652.html","img1":"images/sai1.jpg","url2":"http://pg.qq.com/gicp/news/155/6496652.html","url3":"http://pg.qq.com/gicp/news/155/6483637.html"}
			]';		
$saishidata6='[
			  {"img":"images/z1.jpg","content":"【刺激战场特训营】 8.18比赛日第1场比赛","url":"http://v.qq.com/x/page/i0764w9erti.html"},
		      {"img":"images/z2.jpg","content":"【刺激战场特训营】8.18比赛日第2场比赛","url":"http://v.qq.com/x/page/u0764pgtrn7.html"},
		      {"img":"images/z3.jpg","content":"【刺激战场特训营】8.18比赛日第3场比赛","url":"http://v.qq.com/x/page/c07641nkbf9.html"}
		      ]'; 
$gongluedata1='[
			  {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：用这些灵敏度攻略上王牌不是问题！","url":"http://pg.qq.com/gicp/news/104/6514401.html","date":"10-09"},
		      {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：沙漠中的最佳狙击点，找到这个地方，你就是王者！","url":"http://pg.qq.com/gicp/news/104/6514408.html","date":"10-09"},
		      {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：高手进阶技巧教学下篇，你看过吗？","url":"http://pg.qq.com/gicp/news/104/6514412.html","date":"10-09"},
		      {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：菜鸟和大神的区别是什么？光看这几个细节就清楚了","url":"http://pg.qq.com/gicp/news/104/6514418.html","date":"10-09"},
		      {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场人气最高的枪械 第一用AWM也不换！第四被削也是玩家最爱","url":"http://pg.qq.com/gicp/news/104/6514419.html","date":"10-09"},
		      {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：M416的配件选择就能看出你的水平，王牌以下的都不懂","url":"http://pg.qq.com/gicp/news/104/6513635.html","date":"10-09"},
		      {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：敌人如果有了这些装备，完全可以把你安排的明明白白！","url":"http://pg.qq.com/gicp/news/104/6513603.html","date":"10-08"},
		      {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：压枪最强操作是追尾弹？网友：秀恩爱才是！","url":"http://pg.qq.com/gicp/news/104/6513594.html","date":"10-08"},
		       {"img1":"images/j1.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j2.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：第一人称和第三人称优劣势综合分析，你习惯用哪个？","url":"http://pg.qq.com/gicp/news/104/6513605.html","date":"10-08"}
		      ]'; 
$gongluedata2='[
			  {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"刺激战场：第一人称和第三人称优劣势综合分析，你习惯用哪个？","url":"http://pg.qq.com/gicp/news/104/6513605.html","date":"10-08"},
		      {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"萨诺地图萌品新载具，开着小摩托浪漫吃鸡！","url":"http://pg.qq.com/gicp/news/104/6499341.html","date":"09-10"},
		      {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"萨诺地图多云天气系统登场，雨里雾里只为等你！","url":"http://pg.qq.com/gicp/news/104/6499339.html","date":"09-10"},
		      {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"【娱乐】由劝架引发的深思，诡异思路完爆一切","url":"http://pg.qq.com/gicp/news/104/6495743.html","date":"08-31"},
		      {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"躺鸡秘籍：想要一击即中，你必须学会这一个","url":"http://pg.qq.com/gicp/news/104/6488829.html","date":"10-09"},
		      {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"战术演化，带你走进高手的世界","url":"http://pg.qq.com/gicp/news/104/6488573.html","date":"10-09"},
		      {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"【娱乐】乘上疯狂的大巴车，本司机一定将小朋友安全送到","url":"http://pg.qq.com/gicp/news/104/6488544.html","date":"10-08"},
		      {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"躺鸡秘籍：海岛地图打野地点分享，让你轻松获得M24","url":"http://pg.qq.com/gicp/news/104/6487942.html","date":"10-08"},
		       {"img1":"images/j11.jpg","content1":"躺鸡秘籍：想要一击即中，你必须学会这一个","url1":"http://pg.qq.com/gicp/news/104/6488829.html","img2":"images/j22.jpg","content2":"战术演化，带你走进高手的世界","url2":"http://pg.qq.com/gicp/news/104/6488573.html","content":"交互动作优化，这才是真正的完美还原","url":"http://pg.qq.com/gicp/news/104/6487168.html","date":"10-08"}
		      ]'; 
$gongluedata3='[
			  {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：敌人如果有了这些装备，完全可以把你安排的明明白白！","url":"http://pg.qq.com/gicp/news/104/6513603.html","date":"10-09"},
		      {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刺激战场：堪称完美的一把枪，就算惨遭暗改，依旧是玩家的最爱","url":"http://pg.qq.com/gicp/news/104/6513620.html","date":"10-09"},
		      {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"躺鸡秘籍：学会这几招，麻麻再也不担心我被伏地魔阴了","url":"http://pg.qq.com/gicp/news/104/6497406.html","date":"10-09"},
		      {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"躺鸡秘籍：这才是空投的正确打开方式","url":"http://pg.qq.com/gicp/news/104/6495756.html","date":"10-09"},
		      {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"躺鸡秘籍：谁说吃鸡全靠运气？没有战术还是吃不了鸡","url":"http://pg.qq.com/gicp/news/104/6494951.html","date":"10-09"},
		      {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"双排小套路，专治卡圈边","url":"http://pg.qq.com/gicp/news/104/6494236.html","date":"10-09"},
		      {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url":"http://pg.qq.com/gicp/news/104/6493992.html","date":"10-08"},
		      {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"躺鸡秘籍：总是被敌人偷袭送走？掌握这些技巧让你成为存活达人","url":"http://pg.qq.com/gicp/news/104/6493167.html","date":"10-08"},
		       {"img1":"images/j111.jpg","content1":"双排小套路，专治卡圈边","url1":"http://pg.qq.com/gicp/news/104/6494236.html","img2":"images/j222.jpg","content2":"躺鸡秘籍：盘点那些看起来很好很稀有，却不建议使用的道具","url2":"http://pg.qq.com/gicp/news/104/6493992.html","content":"刚枪模拟器，娱乐模式的启发","url":"http://pg.qq.com/gicp/news/104/6513605.html","date":"10-08"}
		      ]'; 	
$gongluedata4='[
			  {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"刺激战场：M416的配件选择就能看出你的水平，王牌以下的都不懂","url":"http://pg.qq.com/gicp/news/104/6513635.html","date":"10-09"},
		      {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"逆风决战，独狼决赛圈生存法则","url":"http://pg.qq.com/gicp/news/104/6491958.html","date":"10-09"},
		      {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"【娱乐】仅仅只是挡住子弹？防弹衣里还暗藏玄机！","url":"http://pg.qq.com/gicp/news/104/6489577.html","date":"10-09"},
		      {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"第一人称还是第三人称?总有一个适合你","url":"http://pg.qq.com/gicp/news/104/6488876.html","date":"10-09"},
		      {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"【娱乐】乘上疯狂的大巴车，本司机一定将小朋友安全送到","url":"http://pg.qq.com/gicp/news/104/6488544.html","date":"10-09"},
		      {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"狙击手进阶战术指南","url":"http://pg.qq.com/gicp/news/104/6487921.html","date":"10-09"},
		      {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"【娱乐】又双叒出新枪械了！QBU你不知道的小秘密","url":"http://pg.qq.com/gicp/news/104/6487461.html","date":"10-08"},
		      {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"突击手的基本功及攻楼战术指南","url":"http://pg.qq.com/gicp/news/104/6486424.html","date":"10-08"},
		       {"img1":"images/j1111.jpg","content1":"逆风决战，独狼决赛圈生存法则","url1":"http://pg.qq.com/gicp/news/104/6491958.html","img2":"images/j2222.jpg","content2":"第一人称还是第三人称?总有一个适合你","url2":"http://pg.qq.com/gicp/news/104/6488876.html","content":"躺鸡秘籍：趣闻，最新竞技模式不来了解一下吗？","url":"http://pg.qq.com/gicp/news/104/6486421.html","date":"10-08"}
		      ]'; 	
$ziliaodata1='[
			  {"img1":"images/qiang1.png","content1":"AKM","url1":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101001","img2":"images/qiang2.png","content2":"M16A4","url2":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101002"},
			  {"img1":"images/qiang1.png","content1":"AKM","url1":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101001","img2":"images/qiang3.png","content2":"M416","url2":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101004"},
			  {"img1":"images/qiang1.png","content1":"AKM","url1":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101001","img2":"images/qiang4.png","content2":"SCAR-L","url2":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101003"},
			  {"img1":"images/qiang1.png","content1":"AKM","url1":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101001","img2":"images/qiang5.png","content2":"Groza","url2":"http://pg.qq.com/web201801/ziliao_detail.shtml?id=101005"}
		      ]';	
$ziliaodata2='[
			  {"img1":"images/qiang11.png","content1":"直角前握把（自动步枪，冲锋枪，狙击枪）","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202001","img2":"images/qiang22.png","content2":"垂直握把（自动步枪，冲锋枪，狙击枪）","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202002"},
			  {"img1":"images/qiang11.png","content1":"直角前握把（自动步枪，冲锋枪，狙击枪）","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202001","img2":"images/qiang33.png","content2":"拇指握把（步枪，冲锋枪）","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202006"},
			  {"img1":"images/qiang11.png","content1":"直角前握把（自动步枪，冲锋枪，狙击枪）","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202001","img2":"images/qiang44.png","content2":"半截式握把（步枪，冲锋枪）","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202005"},
			  {"img1":"images/qiang11.png","content1":"直角前握把（自动步枪，冲锋枪，狙击枪）","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202001","img2":"images/qiang55.png","content2":"轻型握把（步枪，冲锋枪）","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=202004"}
		      ]';
$ziliaodata3='[
			  {"img1":"images/qiang111.png","content1":"蹦蹦","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601001","img2":"images/qiang222.png","content2":"轿车","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601002"},
			  {"img1":"images/qiang111.png","content1":"蹦蹦","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601001","img2":"images/qiang333.png","content2":"三轮摩托","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601003"},
			  {"img1":"images/qiang111.png","content1":"蹦蹦","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601001","img2":"images/qiang444.png","content2":"两轮摩托","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601004"},
			  {"img1":"images/qiang111.png","content1":"蹦蹦","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601001","img2":"images/qiang555.png","content2":"船","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=601005"}
		      ]';	
$ziliaodata4='[
			  {"img1":"images/qiang1111.png","content1":"军用头盔 (丛林迷彩)","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502021","img2":"images/qiang2222.png","content2":"军用头盔 (沙漠迷彩)","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502020"},
			  {"img1":"images/qiang1111.png","content1":"军用头盔 (丛林迷彩)","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502021","img2":"images/qiang3333.png","content2":"摩托车头盔（灰色）","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502010"},
			  {"img1":"images/qiang1111.png","content1":"军用头盔 (丛林迷彩)","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502021","img2":"images/qiang4444.png","content2":"摩托车头盔（绿色）","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502012"},
			  {"img1":"images/qiang1111.png","content1":"军用头盔 (丛林迷彩)","url1":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502021","img2":"images/qiang5555.png","content2":"特种部队头盔","url2":"http://pg.qq.com/web201801/ziliao_detail1.shtml?id=502030"}
		      ]';			 			 				 			 								 			
$tongrendata1='[
			  {"img1":"images/ji1.jpg","content1":"刺激小剧场-春节快乐","url1":"http://pg.qq.com/gicp/news/123/6417821.html","img2":"images/ji2.jpg","content2":"刺激小剧场特别篇七#6-激情夏日","url2":"http://pg.qq.com/gicp/news/123/6495312.html"},
			  {"img1":"images/ji1.jpg","content1":"刺激小剧场-春节快乐","url1":"http://pg.qq.com/gicp/news/123/6417821.html","img2":"images/ji3.jpg","content2":"刺激小剧场特别篇七#5-雨林召唤","url2":"http://pg.qq.com/gicp/news/123/6495309.html"},
			  {"img1":"images/ji1.jpg","content1":"刺激小剧场-春节快乐","url1":"http://pg.qq.com/gicp/news/123/6417821.html","img2":"images/ji4.jpg","content2":"刺激小剧场特别篇七#4-绝地小镇","url2":"http://pg.qq.com/gicp/news/123/6495308.html"},
			  {"img1":"images/ji1.jpg","content1":"刺激小剧场-春节快乐","url1":"http://pg.qq.com/gicp/news/123/6417821.html","img2":"images/ji5.jpg","content2":"刺激小剧场特别篇七#3-军团名称","url2":"http://pg.qq.com/gicp/news/123/6495304.html"},
			  {"img1":"images/ji1.jpg","content1":"刺激小剧场-春节快乐","url1":"http://pg.qq.com/gicp/news/123/6417821.html","img2":"images/ji6.jpg","content2":"刺激小剧场特别篇七#2-雨林邀请","url2":"http://pg.qq.com/gicp/news/123/6495303.html"},
			  {"img1":"images/ji1.jpg","content1":"刺激小剧场-春节快乐","url1":"http://pg.qq.com/gicp/news/123/6417821.html","img2":"images/ji7.jpg","content2":"刺激小剧场特别篇七#1-吉利大厅","url2":"http://pg.qq.com/gicp/news/123/6495301.html"}
		      ]';			 							 							      						
$tongrendata2='[
			  {"img1":"images/ji11.jpg","content1":"让你快速找到队友的最佳暗语！","url1":"http://pg.qq.com/gicp/news/123/143533.html","img2":"images/ji22.jpg","content2":"光子鸡传奇：自动锁定杀气，平民枪王值得拥有！","url2":"http://pg.qq.com/gicp/news/123/6508658.html"},
			  {"img1":"images/ji11.jpg","content1":"让你快速找到队友的最佳暗语！","url1":"http://pg.qq.com/gicp/news/123/143533.html","img2":"images/ji33.jpg","content2":"光子鸡传奇：P城已被攻陷，每周挑战强行背锅","url2":"http://pg.qq.com/gicp/news/123/6507897.html"},
			  {"img1":"images/ji11.jpg","content1":"让你快速找到队友的最佳暗语！","url1":"http://pg.qq.com/gicp/news/123/143533.html","img2":"images/ji44.jpg","content2":"光子鸡传奇：年度大戏，“国庆节游记”提前上映","url2":"http://pg.qq.com/gicp/news/123/6506471.html"},
			  {"img1":"images/ji11.jpg","content1":"让你快速找到队友的最佳暗语！","url1":"http://pg.qq.com/gicp/news/123/143533.html","img2":"images/ji55.jpg","content2":"光子鸡传奇：手无寸铁还打不赢？裸奔战神了解一下！","url2":"http://pg.qq.com/gicp/news/123/6505547.html"},
			  {"img1":"images/ji11.jpg","content1":"让你快速找到队友的最佳暗语！","url1":"http://pg.qq.com/gicp/news/123/143533.html","img2":"images/ji66.jpg","content2":"光子鸡传奇：下雨天背锅，听力大神秒变聋的传人","url2":"http://pg.qq.com/gicp/news/123/6505548.html"},
			  {"img1":"images/ji11.jpg","content1":"让你快速找到队友的最佳暗语！","url1":"http://pg.qq.com/gicp/news/123/143533.html","img2":"images/ji77.jpg","content2":"光子鸡传奇：组队吃鸡注意了，下雨天有些话不能说","url2":"http://pg.qq.com/gicp/news/123/6505022.html"}
		      ]';	
$tongrendata3='[
			  {"img1":"images/ji111.jpg","content1":"盒子精传奇-进退两难","url1":"http://pg.qq.com/gicp/news/123/143512.html","img2":"images/ji222.jpg","content2":"舔包妹妹出击：看我水汪汪的真挚大眼睛，你忍心么？","url2":"http://pg.qq.com/gicp/news/123/6516744.html"},
			  {"img1":"images/ji111.jpg","content1":"盒子精传奇-进退两难","url1":"http://pg.qq.com/gicp/news/123/143512.html","img2":"images/ji333.jpg","content2":"舔包姐吃鸡日常：小老弟，你这人工轰炸区有两下子啊！","url2":"http://pg.qq.com/gicp/news/123/6516138.html"},
			  {"img1":"images/ji111.jpg","content1":"盒子精传奇-进退两难","url1":"http://pg.qq.com/gicp/news/123/143512.html","img2":"images/ji444.jpg","content2":"舔包姐吃鸡日常：绿色的树！都是绿色的树！绿得姐心慌","url2":"http://pg.qq.com/gicp/news/123/6515567.html"},
			  {"img1":"images/ji111.jpg","content1":"盒子精传奇-进退两难","url1":"http://pg.qq.com/gicp/news/123/143512.html","img2":"images/ji555.jpg","content2":"舔包姐吃鸡日常：姐一招金蝉脱壳，就能把敌人耍得团团转","url2":"http://pg.qq.com/gicp/news/123/6514917.html"},
			  {"img1":"images/ji111.jpg","content1":"盒子精传奇-进退两难","url1":"http://pg.qq.com/gicp/news/123/143512.html","img2":"images/ji666.jpg","content2":"舔包姐吃鸡日常：它只是不小心撞树上而已！不是姐的锅","url2":"http://pg.qq.com/gicp/news/123/6514440.html"},
			  {"img1":"images/ji111.jpg","content1":"盒子精传奇-进退两难","url1":"http://pg.qq.com/gicp/news/123/143512.html","img2":"images/ji777.jpg","content2":"舔包姐吃鸡日常：没错！姐就是那个让你成盒的意外!","url2":"http://pg.qq.com/gicp/news/123/6508040.html"}
		      ]';
$tongrendata4='[
			  {"img1":"images/ji1111.jpg","content1":"别担心，有了它你就不会菜了！","url1":"http://pg.qq.com/gicp/news/123/143534.html","img2":"images/ji2222.jpg","content2":"一言不合就秀操作，高手都是喜欢这样","url2":"http://pg.qq.com/gicp/news/123/144150.html"},
			  {"img1":"images/ji1111.jpg","content1":"别担心，有了它你就不会菜了！","url1":"http://pg.qq.com/gicp/news/123/143534.html","img2":"images/ji3333.jpg","content2":"舔包姐吃鸡日常：没有人可以阻止姐吃鸡！除了？","url2":"http://pg.qq.com/gicp/news/123/6488164.html"},
			  {"img1":"images/ji1111.jpg","content1":"别担心，有了它你就不会菜了！","url1":"http://pg.qq.com/gicp/news/123/143534.html","img2":"images/ji4444.jpg","content2":"追求完美？可是计划赶不上变化","url2":"http://pg.qq.com/gicp/news/123/147363.html"},
			  {"img1":"images/ji1111.jpg","content1":"别担心，有了它你就不会菜了！","url1":"http://pg.qq.com/gicp/news/123/143534.html","img2":"images/ji5555.jpg","content2":"进退两难的选择，是时候迈出那一步了！","url2":"http://pg.qq.com/gicp/news/123/144333.html"},
			  {"img1":"images/ji1111.jpg","content1":"别担心，有了它你就不会菜了！","url1":"http://pg.qq.com/gicp/news/123/143534.html","img2":"images/ji6666.jpg","content2":"为师日关观天象，此路必有血光之灾","url2":"http://pg.qq.com/gicp/news/123/144151.html"},
			  {"img1":"images/ji1111.jpg","content1":"别担心，有了它你就不会菜了！","url1":"http://pg.qq.com/gicp/news/123/143534.html","img2":"images/ji7777.jpg","content2":"听声辩位精准预测背后的故事","url2":"http://pg.qq.com/gicp/news/123/144142.html"}
		      ]';	
$lunbodata='[
			  {"img":"images/aaa.jpg","url":"https://pg.qq.com/cp/a20180920zqmobile/index.shtml?atm_cl=ad&atm_pos=20807&e_code=441308"},
		      {"img":"images/bbb.jpg","url":"http://pg.qq.com/cp/a20180918s3sjzt/index.shtml?atm_cl=ad&atm_pos=20808&e_code=441309"},
		      {"img":"images/ccc.jpg","url":"http://pg.qq.com/gicp/news/102/6508833.html?atm_cl=ad&atm_pos=20809&e_code=442590"},
		      {"img":"images/ddd.jpg","url":"http://pg.qq.com/gicp/news/102/6504824.html?atm_cl=ad&atm_pos=20810&e_code=441311"},
		      {"img":"images/eee.jpg","url":"http://pg.qq.com/zlkdatasys/pc20180910/index.shtml?atm_cl=ad&atm_pos=20834&e_code=441312"},
		      {"img":"images/aaa.jpg","url":"https://pg.qq.com/cp/a20180920zqmobile/index.shtml?atm_cl=ad&atm_po=20807&e_code=441308"}
		      ]';	 						 					 						      				
if($fdata=="newsdata1"){
	echo $newsdata1;
}elseif ($fdata=="newsdata11"){
	echo $newsdata11;
}elseif ($fdata=="newsdata2"){
	echo $newsdata2;
}elseif ($fdata=="newsdata22"){
	echo $newsdata22;
}elseif ($fdata=="newsdata3"){
	echo $newsdata3;
}elseif ($fdata=="newsdata33"){
	echo $newsdata33;
}elseif ($fdata=="newsdata4"){
	echo $newsdata4;
}elseif ($fdata=="newsdata44"){
	echo $newsdata44;
}elseif ($fdata=="newsdata5"){
	echo $newsdata5;
}elseif ($fdata=="newsdata55"){
	echo $newsdata55;
}elseif ($fdata=="videodata1"){
	echo $videodata1;
}elseif ($fdata=="videodata2"){
	echo $videodata2;
}elseif ($fdata=="videodata3"){
	echo $videodata3;
}elseif ($fdata=="videodata4"){
	echo $videodata4;
}elseif ($fdata=="saishidata1"){
	echo $saishidata1;
}elseif ($fdata=="saishidata2"){
	echo $saishidata2;
}elseif ($fdata=="saishidata3"){
	echo $saishidata3;
}elseif ($fdata=="saishidata4"){
	echo $saishidata4;
}elseif ($fdata=="saishidata5"){
	echo $saishidata5;
}elseif ($fdata=="saishidata6"){
	echo $saishidata6;
}elseif ($fdata=="gongluedata1"){
	echo $gongluedata1;
}elseif ($fdata=="gongluedata2"){
	echo $gongluedata2;
}elseif ($fdata=="gongluedata3"){
	echo $gongluedata3;
}elseif ($fdata=="gongluedata4"){
	echo $gongluedata4;
}elseif ($fdata=="ziliaodata1"){
	echo $ziliaodata1;
}elseif ($fdata=="ziliaodata2"){
	echo $ziliaodata2;
}elseif ($fdata=="ziliaodata3"){
	echo $ziliaodata3;
}elseif ($fdata=="ziliaodata4"){
	echo $ziliaodata4;
}elseif ($fdata=="tongrendata1"){
	echo $tongrendata1;
}elseif ($fdata=="tongrendata2"){
	echo $tongrendata2;
}elseif ($fdata=="tongrendata3"){
	echo $tongrendata3;
}elseif ($fdata=="tongrendata4"){
	echo $tongrendata4;
}elseif ($fdata=="lunbodata"){
	echo $lunbodata;
}
?>