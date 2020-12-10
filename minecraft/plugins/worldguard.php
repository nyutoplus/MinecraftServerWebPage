<h1 class="content-title">
	<a class="hide-line" href="https://dev.bukkit.org/projects/worldguard">WorldGuard</a>の使用可能コマンド
</h1>
<div style="padding-left: 1rem">
	<ul>
		<li>・建築物の保護などができます。</li>
		<li>・荒らし対策としては多分これが一番優秀です。</li>
	</ul>
	<br> <strong>[]</strong>で括ってある部分は省略可能です。<br> <strong>&lt;&gt;</strong>で括ってある部分は省略できないので引数を入力してください。<br> <strong>&lt;A|B|C&gt;</strong>で括ってある場合はA～Cのいずれかを入力してください。
</div>
<hr>
<div>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="stack" class="anchor"></a><a href="#stack"><del>/;</del></a><br><a href="#stack">/stack</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>インベントリを整理してアイテムを自動的にスタックします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgremove" class="anchor"></a><a href="#rgremove">/rg &lt;remove | rem | delete | del&gt; [-w &lt;ワールド名&gt;] [-f] [-u] &lt;リージョンID&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>指定した領域を削除します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgclaim" class="anchor"></a><a href="#rgclaim">/rg claim &lt;リージョンID&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>指定した領域を保護します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgaddmember" class="anchor"></a><a href="#rgaddmember">/rg &lt;addmember | addmem | am&gt; [-w &lt;ワールド名&gt;] [-f] [-n] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>領域にメンバーを追加します。<br>※名前で追加した場合はプレイヤー名が変更されると外されます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgaddowner" class="anchor"></a><a href="#rgaddowner">/rg &lt;addowner | ao&gt; [-w &lt;ワールド名&gt;] [-n] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>領域の所有者を追加します。<br>※名前で追加した場合はプレイヤー名が変更されると外されます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgremovemember" class="anchor"></a><a href="#rgremovemember">/rg &lt;removemember | remmember | remmem | rm&gt; [-w &lt;ワールド名&gt;] [-n] [-a] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>領域からメンバーを削除します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgremoveowner" class="anchor"></a><a href="#rgremoveowner">/rg &lt;removeowner | ro&gt; [-w &lt;ワールド名&gt;] [-n] [-a] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>領域から所有者を削除します。<br>
		<mark>※-aを指定すると全ての所有者が削除されてしまいその領域にアクセスできなくなります。</mark><br>もし、そうなってしまった場合は<a class="hide-line" href="?category=others&content=contactus">こちら</a>より領域の削除依頼をしてください。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgselect" class="anchor"></a><a href="#rgselect">/rg &lt;select | sel | s&gt; &lt;リージョンID&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>選択した領域をWorldEditの選択範囲に設定します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rginfo" class="anchor"></a><a href="#rginfo">/rg &lt;info | i&gt; [-u] [-s] [-w &lt;ワールド名&gt;] [リージョンID]</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>指定された領域の情報を表示します。<br>領域が指定されていない場合は現在位置の情報を表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rglist" class="anchor"></a><a href="#rglist">/rg list [-n] [p &lt;プレイヤー名&gt;] [-w &lt;ワールド名&gt;] [ページ]</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>作成されている領域の一覧を表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgflag" class="anchor"></a><a href="#rgflag">/rg flag &lt;リージョンID&gt; &lt;フラグ&gt; [-w &lt;ワールド名&gt;] [-g &lt;グループ名&gt;] [-e] [値]</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>指定した領域のフラグを設定します。<br>
		<a class="hide-line" href="https://worldguard.enginehub.org/en/latest/regions/flags/">こちら</a>でフラグを確認できます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgsetpriority" class="anchor"></a><a href="#rgsetpriority">/rg &lt;setpriority | priority | pri&gt; [-w &lt;ワールド名&gt;] &lt;リージョンID&gt; &lt;優先度&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>領域の優先度を設定します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgsetparent" class="anchor"></a><a href="#rgsetparent">/rg &lt;setparent | parent | par&gt; [-w &lt;ワールド名&gt;] &lt;リージョンID&gt; [親リージョンID]</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div>親領域を設定します。<br>親領域を指定しない場合は親領域を解除します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgdefine" class="anchor"></a><a href="#rgdefine">/rg &lt;d | create | define&gt; [-n] [-g] &lt;リージョンID&gt; &lt;オーナー&gt; [オーナー]...</a></h2>
			<div class="mark-vip">Vip</div>
		</div>
		<div>領域を作成して保護します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgupdate" class="anchor"></a><a href="#rgupdate">/rg &lt;redefine | update | move&gt; [-g] &lt;リージョンID&gt;</a></h2>
			<div class="mark-vip">Vip</div>
		</div>
		<div>指定した領域を現在の選択範囲に置き換えます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="god" class="anchor"></a><a href="#god">/god [-s] [プレイヤー名]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>無敵モードにします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="ungod" class="anchor"></a><a href="#ungod">/ungod [-s] [プレイヤー名]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>無敵モードを解除します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="heal" class="anchor"></a><a href="#heal">/heal [-s] [プレイヤー名]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>プレイヤーを回復します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="slay" class="anchor"></a><a href="#slay">/slay [-s] [プレイヤー名]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>プレイヤーをキルします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="wgflushstates" class="anchor"></a><a href="#wgflushstates">/wg flushstates</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>リージョンフラグを適用する目的で保存されているプレイヤーに関する情報をクリアするためのコマンドです。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="stopfire" class="anchor"></a><a href="#stopfire">/stopfire [ワールド名]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>現在のワールド、又は指定したワールドの火の炎上を停止します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="allowfire" class="anchor"></a><a href="#allowfire">/allowfire [ワールド名]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>現在のワールド、又は指定したワールドの火の炎上を再開します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="stoplag" class="anchor"></a><a href="#stoplag">/stoplag [-s]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>全てのワールドのエンティティを削除し、すべての物理イベントと液体フローイベントが停止するモードに入ります。<br>更にチャンクがロードされるとそのチャンク内のエンティティが削除されます。<br>
		<mark>※削除されたエンティティは戻りません。</mark></div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="stoplagcancel" class="anchor"></a><a href="#stoplagcancel">/stoplag -c [-s]</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>ラグの停止モードを無効化します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="stoplaginfo" class="anchor"></a><a href="#stoplaginfo">/stoplag -i</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>ラグ停止モードの状態を表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgteleport" class="anchor"></a><a href="#rgteleport">/rg teleport [-s] &lt;フラグID&gt;</a></h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div>スポーン、又はテレポートフラグで指定された場所にテレポートします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="wgreport" class="anchor"></a><a href="#wgreport">/wg report [-p]</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>プラグインフォルダの中にレポートを作成します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="wgprofile" class="anchor"></a><a href="#wgprofile">/wg profile [-p] [-t &lt;フィルター&gt;] [時間(分)]</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>サーバーのCPU使用率のプロファイリングをします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="wgdebug" class="anchor"></a><a href="#wgdebug">/wg debug &lt;testbreak | testplace | testinteract | testdamage&gt; [-t] &lt;プレイヤー名&gt;</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>イベントシュミレーションをします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="wgversion" class="anchor"></a><a href="#wgversion">/wg version</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>WorldGuardのバージョンを表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="wgreload" class="anchor"></a><a href="#wgreload">/wg reload</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>WorldGuardのデータをリロードします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="wgrunning" class="anchor"></a><a href="#wgrunning">/wg running</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>WorldGuardの実行中のタスクを表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgreload" class="anchor"></a><a href="#rgreload">/rg reload [-w &lt;ワールド名&gt;]</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>ファイル、又はデータベースから領域のデータをリロードします。<br>
		<mark>※ゲーム内で領域のデータに変更が加えられている場合、データが失われる可能性があります。</mark></div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgsave" class="anchor"></a><a href="#rgsave">/rg &lt;save | write&gt; [-w &lt;ワールド名&gt;]</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>領域データを保存します。<br>領域データは変更が行われると自動的に保存されるため、このコマンドを明示的に呼び出す必要はありません。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgmigratedb" class="anchor"></a><a href="#rgmigratedb">/rg migratedb &lt;yaml | mysql&gt; &lt;yaml | mysql&gt;</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>データベースのタイプを移行します。<br>
		<mark>※移行を実行する前に必ずバックアップをしてください。</mark><br>
		<mark>※このコマンドはバックグラウンドで実行されず、サーバー全体を一時停止します。</mark></div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="rgmigrateuuid" class="anchor"></a><a href="#rgmigrateuuid">/rg migrateuuid</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div>領域データのプレイヤー名をUUIDに変換します。<br>対応するUUIDを持たない名前はコンフィグによって削除されるか残されます。<br>
		<mark>※このコマンドを実行する前に必ずバックアップを取ってください。</mark><br>
		<mark>※このコマンドはバックグラウンドで実行されず、サーバー全体を一時停止します。</mark></div>
	</div>
</div>