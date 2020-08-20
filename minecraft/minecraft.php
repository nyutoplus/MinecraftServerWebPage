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
<script data-ad-client="ca-pub-3990647512729713" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
	<div class="background">
		<div class="content">
			<div class="menu-bar">
				<div class="bar-dec">
					<div class="title">
						<a class="hide-line" href="minecraft.php">
							<h1 class="main-title">まったりマイクラサーバー</h1>
							<h2 class="sub-title">のんびりまったりプレイしよう</h2>
						</a>
					</div>
					<div class="menu">
						<ul id="menu-list">
							<li class="menu-root"><a class="hide-line" href="dynmap">マップ</a></li>
							<li class="menu-root">
								<div class="main-menu">ルール</div>
								<ul class="hide-menu">
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=rules&content=rules"> ルール </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=rules&content=traptower-rules"> トラップタワー、回路のルール </a></li>
								</ul>
							</li>
							<li class="menu-root">
								<div class="main-menu">導入プラグイン</div>
								<ul class="hide-menu">
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=minecraft"> Minecraft </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=lwc"> LWC </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=worldguard"> WorldGuard </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=worldedit"> WorldEdit </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=discordsrv"> DiscordSRV </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=dynmap"> Dynmap </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=mcbans"> MCBans </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=nocheatplus"> No Cheat Plus </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=coreprotect"> CoreProtect </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=multiverse-core"> Multiverse Core </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=multiverse-portals"> Multiverse Portals </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=luckperms"> LuckPerms </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=autosaveworld"> AutoSaveWorld </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=logblock"> LogBlock </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=lunachat"> LunaChat </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=instantdecay"> InstantDecay </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=modifyworld"> ModifyWorld </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=halfsleepserver"> HalfSleepServer </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=hawkeye"> HawkEye </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=simplevotelistener"> SimpleVoteListener </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=plugins&content=viaversion"> ViaVersion </a></li>
								</ul>
							</li>
							<li class="menu-root">
								<div class="main-menu">サーバー情報</div>
								<ul class="hide-menu">
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=status&content=permissions"> 権限 </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=status&content=maintenance"> メンテナンスについて </a></li>
								</ul>
							</li>
							<li class="menu-root">
								<div class="main-menu">その他</div>
								<ul class="hide-menu">
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=others&content=FAQ"> FAQ </a></li>
									<li class="menu-item"><a class="hide-line" href="minecraft.php?category=others&content=contactus"> お問い合わせ </a></li>
								</ul>
							</li>
						</ul>
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