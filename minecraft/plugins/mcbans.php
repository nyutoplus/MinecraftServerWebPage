<h1 class="content-title">
	<a class="hide-line" href="https://www.mcbans.com/">MCBans</a>の使用可能コマンド
</h1>
<div style="padding-left: 1rem">
	<ul>
		<li>・BAN情報を他サーバーと共有して一定以下の評価になったプレイヤーを入れなくするプラグインです。</li>
		<li>・悪いことしちゃぁダメだぞぉ？</li>
	</ul>
	<br> <strong>[]</strong>で括ってある部分は省略可能です。<br> <strong>&lt;&gt;</strong>で括ってある部分は省略できないので引数を入力してください。<br> <strong>&lt;A|B|C&gt;</strong>で括ってある場合はA～Cのいずれかを入力してください。
</div>
<hr>
<div>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="help" class="anchor"></a><a href="#help">/mcbans</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">コマンド一覧を表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="banlookup" class="anchor"></a><a href="#banlookup">/banlookup &lt;BanID&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">指定したBANIDの詳細を表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="ban" class="anchor"></a><a href="#ban">/ban &lt;プレイヤー名|UUID&gt; [t &lt;数値&gt; &lt;m|h|d&gt;] &lt;理由&gt;</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">指定したプレイヤーをローカルBANします。<br>時間を指定するとその期間の間だけBANします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rban" class="anchor"></a><a href="#rban">/rban  &lt;プレイヤー名|UUID&gt; [t &lt;数値&gt; &lt;m|h|d&gt;] &lt;理由&gt;</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">指定したプレイヤーをローカルBANして、そのプレイヤーがワールドに行った変更をロールバックします。<br>時間を指定するとその期間の間だけBANします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="gban" class="anchor"></a><a href="#gban">/ban &lt;プレイヤー名|UUID&gt; g &lt;理由&gt;</a><br><a href="#gban">/gban &lt;プレイヤー名|UUID&gt; &lt;理由&gt;</a><br><a href="#gban">/rban &lt;プレイヤー名|UUID&gt; g &lt;理由&gt;</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">プレイヤーをグローバルBANします。<br>/rban...の場合はロールバックも行います。<br><mark>※こちらを使用する際は証拠となる映像、スクリーンショット等を保存しておいてください。</mark></div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="banip" class="anchor"></a><a href="#banip">/banip &lt;IPアドレス&gt; [理由]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">指定したIPアドレスをBANします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="lookup" class="anchor"></a><a href="#lookup">/lookup &lt;プレイヤー名|UUID&gt;</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">指定したプレイヤーのBAN履歴を検索します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="kick" class="anchor"></a><a href="#kick">/kick &lt;プレイヤー名|UUID&gt; [理由]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">指定したプレイヤーをキックします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="unban" class="anchor"></a><a href="#unban">/unban &lt;プレイヤー名|UUID|IPアドレス&gt;</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">BANを解除します。</div>
	</div>
	<hr>
	<h1 class="content-title">BAN理由</h1>
	<div style="padding-left:1rem;">
		BANをする時の理由はこちらを参考にしてください。
		<div style="margin-top:1rem;">
			<strong>Griefing</strong><br>
			<div style="padding-left:1rem">破壊等<br><mark>※複数のブロックを破壊している必要があります。複数でない場合はローカルBANにしてください。</mark></div>
			<div style="height:1rem"></div>
			<strong>Stealing</strong>
			<div style="padding-left:1rem">窃盗等</div>
			<div style="height:1rem"></div>
			<strong>Causing server downtime by DDoS etc</strong>
			<div style="padding-left:1rem">DDoS攻撃などでサーバーをダウンさせる行為</div>
			<div style="height:1rem"></div>
			<strong>spambot</strong>
			<div style="padding-left:1rem">スパムボットの使用<br><mark>※プログラムによって自動化されている必要があります。</mark></div>
			<div style="height:1rem"></div>
			<strong>Client side mods</strong>
			<div style="padding-left:1rem">不正なクライアントの使用<br><mark>※具体的な理由(FlyHack、WaterWalkなど)が必要です。</mark></div>
			<div style="height:1rem"></div>
			<strong>X-Ray Mod</strong>
			<div style="padding-left:1rem">鉱石検出系MODの使用<br><mark>※X-Rayテクスチャも含まれます。</mark></div>
			<div style="height:1rem"></div>
			<strong>Racism / Homophobia</strong>
			<div style="padding-left:1rem">人種差別発言、同性愛嫌悪発言</div>
			<div style="height:1rem"></div>
			<strong>Posting direct link to pornographic or "shock" websites</strong>
			<div style="padding-left:1rem">性的、又は衝撃的なコンテンツへのダイレクトリンクを含む発言</div>
			<div style="height:1rem"></div>
			<strong>Nati symbols or skins</strong>
			<div style="padding-left:1rem">ナチスのシンボル、スキンの使用</div>
			<div style="height:1rem"></div>
			<div>ここで取り上げてあるものは代表的なものの一部です。<br>詳しくは<a href="https://forums.mcbans.com/wiki/global-ban-rules/">こちら</a>をご覧ください。</div>
		</div>
	</div>
</div>