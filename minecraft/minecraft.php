<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<title>まったりマイクラサーバー 公式サイト | のんびりマイクラ生活していこう</title>
<link rel="icon" type="image/png" href="img/logo.png">
<link rel="icon" type="image/png" href="img/logo-32px.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/logo-48px.png" sizes="48x48">
<link rel="icon" type="image/png" href="img/logo-96px.png" sizes="96x96">
<link rel="icon" type="image/png" href="img/logo-144px.png" sizes="144x144">
<meta name="author" content="nyuto">
<meta name="description" content="まったりマイクラサーバーの公式ページです。のんびりまったりマイクラをプレイしていきましょう。">
<meta name="keywords" content="Minecraft, マイクラ, マルチ, バニラ">
<link rel="stylesheet" href="base.css">
</head>
<body>
	<div class="background">
		<div class="content">
			<div class="upper-bar">
				<div class="menu-btn">
					<label for="menubb"> <img id="menuimg" class="open-img" src="img/Right.png">
					</label> <input id="menubb" type="button" />
					<div id="smenu" style="display: none"></div>
					<script>
							menubb.onclick =  function(){
								var menu = document.getElementById("menubase");
								var img = document.getElementById("menuimg");
								if(menu.style.left == "0rem"){
									menu.style.left = "-18rem";
									img.style.transform = "rotate(0deg)";
								}else{
									menu.style.left = "0rem";
									img.style.transform = "rotate(180deg)";

								}
							}
						</script>
				</div>
				<div class="title">
					<a href="minecraft.php"><img class="main-title" src="img/ServerLogo.png" alt="まったりマイクラサーバー"></a>
				</div>
			</div>
			<div id="menubase" class="menu-bar">
				<div class="bar-dec">
					<div class="bar-content">
						<div class="menu">
							<ul id="menu-list">
								<li class="menu-root"><a class="hide-line" href="dynmap">マップ</a></li>
								<li class="menu-root"><label for="rulelb">ルール</label> <input id="rulelb" class="main-menu" type="checkbox" />
									<ul class="hide-menu">
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=rules&content=rules">・ルール </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=rules&content=traptower-rules">・トラップタワーのルール </a></li>
									</ul></li>
								<li class="menu-root"><label for="pluginlb">導入プラグイン</label> <input id="pluginlb" class="main-menu" type="checkbox" />
									<ul class="hide-menu">
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=minecraft">・Minecraft </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=lwc">・LWC</a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=worldguard">・WorldGuard </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=worldedit">・WorldEdit </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=discordsrv">・DiscordSRV </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=dynmap">・Dynmap </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=mcbans">・MCBans </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=nocheatplus">・No Cheat Plus </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=coreprotect">・CoreProtect </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=multiverse-core">・Multiverse Core </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=multiverse-portals">・Multiverse Portals </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=luckperms">・LuckPerms </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=autosaveworld">・AutoSaveWorld </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=logblock">・LogBlock </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=lunachat">・LunaChat </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=instantdecay">・InstantDecay </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=modifyworld">・ModifyWorld </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=halfsleepserver">・HalfSleepServer </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=hawkeye">・HawkEye </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=simplevotelistener">・SimpleVoteListener </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=viaversion">・ViaVersion </a></li>
									</ul></li>
								<li class="menu-root"><label for="statuslb">サーバー情報</label> <input id="statuslb" class="main-menu" type="checkbox" />
									<ul class="hide-menu">
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=status&content=permissions">・権限 </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=status&content=maintenance">・メンテナンスについて </a></li>
									</ul></li>
								<li class="menu-root"><label for="otherslb">その他</label> <input id="otherslb" class="main-menu" type="checkbox" />
									<ul class="hide-menu">
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=others&content=FAQ">・FAQ </a></li>
										<li class="menu-item"><a class="hide-line" href="minecraft.php?category=others&content=contactus">・お問い合わせ </a></li>
									</ul></li>
							</ul>
						</div>
						<div class="disc">
							<div>
								定期メンテナンス：<br>
								<div style="padding-left: 1rem;">毎週木曜午後1時～4時頃</div>
								<br> サーバーの自動再起動：<br>
								<div style="padding-left: 1rem;">毎週月曜午前6時頃</div>
								<Br> 上記時間帯はサーバーに接続できません。<br> 時間は多少前後する場合があります。
							</div>
							<br>
							<div>
								<a class="hide-line" href="https://www.minecraft.net/ja-jp/">Minecraft</a>はMojang ABの登録商標です。<br> 当サーバーはMojang社から承認されておらず、Mojang社とは関係ありません。
							</div>
							<br> <small>Copyright &copy; 2020 nyuto. All rights reserved</small>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="main-content">
				<?php
					    $category = $_GET['category'];
				        $content = $_GET['content'];
				        $tmp;
    				    if($category == '' || $content == ''){
				            $tmp = file_get_contents('./default.php');
				        }else{
    	       			    try{
                                $tmp = file_get_contents('./'.$category.'/'.$content.'.php');
        				    }catch(Exception $e){
                                $tmp = '指定したページを読み込めませんでした。';
    				        }
				        }
				        if($tmp == ''){
				            $tmp = '指定したページは存在しません。';
				        }
				        echo $tmp;
    				?>
				</div>
			</div>
		</div>
</body>
</html>