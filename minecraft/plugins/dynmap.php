<h1 class="content-title">
	<a class="hide-line" href="https://www.spigotmc.org/resources/dynmap.274/">Dynmap</a>の使用可能コマンド
</h1>
<div style="padding-left: 1rem">
	<ul>
		<li>・ブラウザーでマップを見れるよ。</li>
		<li>・マップのMODがなくても迷子にならずに済む(はず・・・)</li>
	</ul>
	<br> <strong>[]</strong>で括ってある部分は省略可能です。<br> <strong>&lt;&gt;</strong>で括ってある部分は省略できないので引数を入力してください。<br> <strong>&lt;A|B|C&gt;</strong>で括ってある場合はA～Cのいずれかを入力してください。
</div>
<hr>
<div>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapwebregister" class="anchor"></a><a href="#dynmapwebregister">/dynmap webregister &lt;プレイヤー名&gt;</a>
			</h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">
			Webログインアカウントの登録プロセスを開始します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmaprender" class="anchor"></a><a href="#dynmaprender">/dynmap render</a>
			</h2>
			<div class="mark-adminlv3">Admin_Lv3</div>
		</div>
		<div class="cmdma">
			自分が立っている場所をレンダリングします。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapradiusrender" class="anchor"></a><a href="#dynmapradiusrender">/dynmap radiusrender [&lt;ワールド名&gt; &lt;x&gt; &lt;z&gt;] &lt;半径&gt; [マップ名]</a>
			</h2>
			<div class="mark-adminlv3">Admin_Lv3</div>
		</div>
		<div class="cmdma">
			指定した半径をレンダリングします。<br>
			座標を指定しない場合は自身を中心にレンダリングします。<br>
			マップ名を指定することでそのマップのみをレンダリングします。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapupdaterender" class="anchor"></a><a href="#dynmapupdaterender">/dynmap updaterender [&lt;ワールド名&gt; &lt;x&gt; &lt;z&gt;] [マップ名]</a>
			</h2>
			<div class="mark-adminlv3">Admin_Lv3</div>
		</div>
		<div class="cmdma">
			現在居るワールドの更新が必要なタイルのみをレンダリングします。<br>
			座標を指定した場合はその座標を基点にレンダリングします。<br>
			マップ名を指定することでそのマップのみをレンダリングします。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapstats" class="anchor"></a><a href="#dynmapstats">/dynmap stats</a>
			</h2>
			<div class="mark-adminlv3">Admin_Lv3</div>
		</div>
		<div class="cmdma">
			レンダリングの統計情報を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmaptriggerstats" class="anchor"></a><a href="#dynmaptriggerstats">/dynmap triggerstats</a>
			</h2>
			<div class="mark-adminlv3">Admin_Lv3</div>
		</div>
		<div class="cmdma">
			レンダリングトリガーの統計情報を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapsendtoweb" class="anchor"></a><a href="#dynmapsendtoweb">/dynmap sendtoweb &lt;メッセージ&gt;</a>
			</h2>
			<div class="mark-adminlv3">Admin_Lv3</div>
		</div>
		<div class="cmdma">
			Web画面にメッセージを送信します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmaphide" class="anchor"></a><a href="#dynmaphide">/dynmap hide [プレイヤー名]</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したプレイヤーをWebマップ上から消します。<br>
			指定しない場合は自身が消えます。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapshow" class="anchor"></a><a href="#dynmapshow">/dynmap show [プレイヤー名]</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したプレイヤーの非表示状態を解除します。<br>
			指定しない場合は自身の非表示状態が解除されます。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapids-for-ip" class="anchor"></a><a href="#dynmapids-for-ip">/dynmap ids-for-ip &lt;IPアドレス&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したIPアドレスのプレイヤーを確認します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapips-for-id" class="anchor"></a><a href="#dynmapips-for-id">/dynmap ips-for-id &lt;プレイヤー名&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したプレイヤーのIPアドレスを確認します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkericons" class="anchor"></a><a href="#dmarkericons">/dmarker icons</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			アイコンの一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkeradd" class="anchor"></a><a href="#dmarkeradd">/dmarker add [id:&lt;ID&gt;] &lt;ラベル&gt; [icon:&lt;アイコン&gt;] [set:&lt;セットID&gt;] [x:&lt;x&gt; y:&lt;y&gt; z:&lt;z&gt; world:&lt;ワールド名&gt;]</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定した場所にマーカーを設置します。<br>
			位置を指定しない場合はプレイヤーが居る場所に設置されます。<br>
			アイコンを指定するとアイコンも変更できます。<br>
			セットを指定しておくと、Webページで指定したセットのアイコンなどが一括して非表示にすることができます。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkermovehere" class="anchor"></a><a href="#dmarkermovehere">/dmarker movehere &lt;ラベル | id:&lt;ID&gt;&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したマーカーを現在地まで移動します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerupdate" class="anchor"></a><a href="#dmarkerupdate">/dmarker update &lt;ラベル | id:&lt;ID&gt;&gt; [icon:&lt;アイコン&gt;] [newlabel:&lt;ラベル&gt;]</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したマーカーを更新します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerdelete" class="anchor"></a><a href="#dmarkerdelete">/dmarker delete &lt;ラベル | id:&lt;ID&gt;&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したマーカーを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerlist" class="anchor"></a><a href="#dmarkerlist">/dmarker list [set:&lt;セットID&gt;]</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			マーカーの一覧を表示します。<br>
			セットを指定した場合はそのセット内のマーカーの一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerlistsets" class="anchor"></a><a href="#dmarkerlistsets">/dmarker listsets</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			セットの一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkeraddcorner" class="anchor"></a><a href="#dmarkeraddcorner">/dmarker addcorner [&lt;x&gt; &lt;z&gt; [ワールド名]]</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			エリア、もしくは線を作成するための頂点を追加します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerclearcorners" class="anchor"></a><a href="#dmarkerclearcorners">/dmarker clearcorners</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			追加した頂点を削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkeraddarea" class="anchor"></a><a href="#dmarkeraddarea">/dmarker addarea [id:&lt;ID&gt;] &lt;エリア名&gt; [set:&lt;ラベル名&gt;]</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			選択した頂点で囲まれたエリアを作成します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerdeletearea" class="anchor"></a><a href="#dmarkerdeletearea">/dmarker deletearea &lt;エリア名 | id:&lt;ID&gt;&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したエリアを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerlistareas" class="anchor"></a><a href="#dmarkerlistareas">/dmarker listareas</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			エリアの一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerupdatearea" class="anchor"></a><a href="#dmarkerupdatearea">/dmarker updatearea &lt;エリア名 |id:&lt;ID&gt;&gt; set:&lt;ラベル&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したエリアを更新します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="areastats" class="anchor"></a><a href="#areastats">エリア作成、更新時に以下を追加で指定するとそれに従って描画されます。</a>
			</h2>
		</div>
		<div class="cmdma">
			<strong>color:&lt;RRGGBB&gt;</strong><br>
			外周の線を指定した色にします。<br>
			<hr>
			<strong>opacity:&lt;0.0～1.0&gt;</strong><br>
			外周の線の不透明度を指定します。<br>
			1.0で不透明<br>
			<hr>
			<strong>weight:&lt;数値&gt;</strong><br>
			外周の線の太さを指定します。<br>
			0が最小<br>
			<hr>
			<strong>fillcolor:&lt;RRGGBB&gt;</strong><br>
			エリア内を指定した色で塗りつぶします。<br>
			<hr>
			<strong>fillopacity:&lt;0.0～1.0&gt;</strong><br>
			エリア内の色の不透明度を指定します。<br>
			1.0で不透明<br>
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkeraddline" class="anchor"></a><a href="#dmarkeraddline">/dmarker addline [id:&lt;ID&gt;] &lt;ラベル&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定した頂点で結ばれたラインを作成します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerdeleteline" class="anchor"></a><a href="#dmarkerdeleteline">/dmarker deleteline &lt;ラベル | id:&lt;ID&gt;&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したラインを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerlistlines" class="anchor"></a><a href="#dmarkerlistlines">/dmarker listlines</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			ラインの一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerupdateline" class="anchor"></a><a href="#dmarkerupdateline">/dmarker updateline &lt;ラベル | id:&lt;ID&gt;&gt;</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			指定したラインを更新します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="linestats" class="anchor"></a><a href="#linestats">ライン作成、更新時に以下を追加で指定するとそれに従って描画されます。</a>
			</h2>
		</div>
		<div class="cmdma">
			<strong>color:&lt;RRGGBB&gt;</strong><br>
			線を指定した色にします。<br>
			<hr>
			<strong>opacity:&lt;0.0～1.0&gt;</strong><br>
			線の不透明度を指定します。<br>
			1.0で不透明<br>
			<hr>
			<strong>weight:&lt;数値&gt;</strong><br>
			線の太さを指定します。<br>
			0が最小<br>
			<hr>
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapfullrender" class="anchor"></a><a href="#dynmapfullrender">/dynmap fullrender [ワールド名]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したワールド全体をレンダリングします。<br>
			指定しない場合は自身が居るワールドをレンダリングします。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapcancelrender" class="anchor"></a><a href="#dynmapcancelrender">/dynmap cancelrender [ワールド名]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したワールドで実行されているレンダリングを停止します。<br>
			指定しない場合は自身が居るワールドのレンダリングを停止します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmappurgequeue" class="anchor"></a><a href="#dynmappurgequeue">/dynmap purgequeue [ワールド名]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したワールドの更新キューを削除します。<br>
			指定しない場合は自身が居るワールドの更新キューを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmappurgemap" class="anchor"></a><a href="#dynmappurgemap">/dynmap purgemap &lt;ワールド名&gt; &lt;マップ名&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したマップの画像データを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmappurgeworld" class="anchor"></a><a href="#dynmappurgeworld">/dynmap purgeworld &lt;ワールド名&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
		指定したワールドの画像データを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapquiet" class="anchor"></a><a href="#dynmapquiet">/dynmap quiet</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			実行中のレンダリング進捗のメッセージを停止します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapadd-id-for-ip" class="anchor"></a><a href="#dynmapadd-id-for-ip">/dynmap add-id-for-ip &lt;プレイヤー名&gt; &lt;IPアドレス&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したプレイヤーとIPアドレスを紐づけします。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapdel-id-for-ip" class="anchor"></a><a href="#dynmapdel-id-for-ip">/dynmap del-id-for-ip &lt;プレイヤー名&gt; &lt;IPアドレス&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したプレイヤーとIPアドレスの紐づけを解除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmappause" class="anchor"></a><a href="#dynmappause">/dynmap pause [all | none | full | update]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			レンダリングをポーズしたり、状態を確認できます。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dynmapresetstats" class="anchor"></a><a href="#dynmapresetstats">/dynmap resetstats</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			レンダリングの統計情報をリセットします。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkeraddset" class="anchor"></a><a href="#dmarkeraddset">/dmarker addset [id:&lt;ID&gt;] &lt;ラベル&gt; [hide:&lt;true | false&gt;] [prio:&lt;優先度&gt;] [minzoom:&lt;最小ズーム&gt;]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			新しいセットを追加します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerupdateset" class="anchor"></a><a href="#dmarkerupdateset">/dmarker updateset &lt;ラベル | id:&lt;ID&gt;&gt; [newlabel:&lt;ラベル&gt;] [hide:&lt;true | false&gt;] [prio:&lt;優先度&gt;] [minzoom:&lt;最小ズーム&gt;]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したセットを更新します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerdeleteset" class="anchor"></a><a href="#dmarkerdeleteset">/dmarker deleteset &lt;ラベル | id:&lt;ID&gt;&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したセットを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkeraddicon" class="anchor"></a><a href="#dmarkeraddicon">/dmarker addicon id:&lt;ID&gt; &lt;ラベル&gt; file:"&lt;ファイル名&gt;"</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			アイコンを追加します。<br>
			ファイル名はサーバーのディレクトリ基準でファイルはコピーされます。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerupdateicon" class="anchor"></a><a href="#dmarkerupdateicon">/dmarker updateicon &lt;ラベル | id:&lt;ID&gt;&gt; newlabel:&lt;ラベル&gt; file:"&lt;ファイル名&gt;"</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			アイコンを更新します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmarkerdeleteicon" class="anchor"></a><a href="#dmarkerdeleteicon">/dmarker deleteicon &lt;ラベル | id:&lt;ID&gt;&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したアイコンを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapworldlist" class="anchor"></a><a href="#dmapworldlist">/dmap worldlist</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			全てのワールド設定一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapworldset" class="anchor"></a><a href="#dmapworldset">/dmap worldset &lt;ワールド名&gt; &lt;args&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したワールドの属性を変更します。<br>
			<hr>
			<div class="cmdtt">
				argsで指定できるもの
			</div>
			<div class="cmdma">
				<strong>enabled:&lt;true | false&gt;</strong><br>
				マップに表示するかどうか<br>
				<hr>
				<strong>center:&lt;&lt;x&gt; &lt;y&gt; &lt;z&gt; | here | default&gt;</strong><br>
				マップの中心位置の設定<br>
				<hr>
				<strong>extrazoomout:&lt;数値&gt;</strong><br>
				ズーム倍率の設定<br>
				<hr>
				<strong>title:&lt;ラベル&gt;</strong><br>
				ワールドのラベルの設定<br>
				<hr>
				<strong>sendposition:&lt;true | false&gt;</strong><br>
				プレイヤーの位置を表示するかどうか<br>
				<hr>
				<strong>sendhealth:&lt;true | false&gt;</strong><br>
				プレイヤーの体力を表示するかどうか<br>
				<hr>
				<strong>order:&lt;数値&gt;</strong><br>
				Web上での並び順<br>
			</div>
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapworldreset" class="anchor"></a><a href="#dmapworldreset">/dmap worldreset &lt;ワールド名&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したワールドの設定を初期設定に戻します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapmaplist" class="anchor"></a><a href="#dmapmaplist">/dmap maplist &lt;ワールド名&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したワールドのマップリストを表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapmapdelete" class="anchor"></a><a href="#dmapmapdelete">/dmap mapdelete &lt;ワールド名&gt;:&lt;マップ名&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したマップを削除します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapmapadd" class="anchor"></a><a href="#dmapmapadd">/dmap mapadd &lt;ワールド名&gt;:&lt;マップ名&gt; [args]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			マップを追加します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapmapset" class="anchor"></a><a href="#dmapmapset">/dmap mapset &lt;ワールド名&gt;:&lt;マップ名&gt; &lt;args&gt;</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			指定したマップの設定を変更します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="maparg" class="anchor"></a><a href="#maparg">argsで指定できるもの</a>
			</h2>
		</div>
		<div class="cmdma">
			<strong>order:&lt;数値&gt;</strong><br>
			Web上での並び順を変更します。
			<hr>
			<strong>prefix:&lt;接頭辞&gt;</strong><br>
			マップの接頭辞を変更します。
			<hr>
			<strong>title:&lt;ラベル&gt;</strong><br>
			マップのラベルを変更します。
			<hr>
			<strong>icon:&lt;アイコン&gt;</strong><br>
			マップのアイコンを変更します。
			<hr>
			<strong>mapzoomin:&lt;数値&gt;</strong><br>
			マップのズームレベルを変更します。
			<hr>
			<strong>perspective:&lt;視点&gt;</strong><br>
			視点を変更します。
			<hr>
			<strong>shader:&lt;影&gt;</strong><br>
			シェーダーを変更します。
			<hr>
			<strong>lighting:&lt;照明&gt;</strong><br>
			照明を設定します。
			<hr>
			<strong>img-format:&lt;フォーマット&gt;</strong><br>
			画像フォーッマットを変更します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapperspectivelist" class="anchor"></a><a href="#dmapperspectivelist">/dmap perspectivelist</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			視点の一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmapshaderlist" class="anchor"></a><a href="#dmapshaderlist">/dmap shaderlist</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			影の一覧を表示します。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="dmaplightinglist" class="anchor"></a><a href="#dmaplightinglist">/dmap lightinglist</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">
			照明の一覧を表示します。
		</div>
	</div>
</div>