
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
<div style="height: 1rem"></div>
<table style="font-size: 1rem">
	<tr>
		<th>コマンド</th>
		<th>説明</th>
		<th>必要な権限</th>
	</tr>
	<tr>
		<td><del>/;</del><br>/stack</td>
		<td>インベントリを整理してアイテムを自動的にスタックします。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;remove | rem | delete | del&gt; [-w &lt;ワールド名&gt;] [-f] [-u] &lt;リージョンID&gt;</td>
		<td>指定した領域を削除します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg claim &lt;リージョンID&gt;</td>
		<td>指定した領域を保護します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;addmember | addmem | am&gt; [-w &lt;ワールド名&gt;] [-f] [-n] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</td>
		<td>領域にメンバーを追加します。<br>※名前で追加した場合はプレイヤー名が変更されると外されます。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;addowner | ao&gt; [-w &lt;ワールド名&gt;] [-n] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</td>
		<td>領域の所有者を追加します。<br>※名前で追加した場合はプレイヤー名が変更されると外されます。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;removemember | remmember | remmem | rm&gt; [-w &lt;ワールド名&gt;] [-n] [-a] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</td>
		<td>領域からメンバーを削除します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;removeowner | ro&gt; [-w &lt;ワールド名&gt;] [-n] [-a] &lt;リージョンID&gt; &lt;プレイヤー名&gt;</td>
		<td>領域から所有者を削除します。<br>
		<mark>※-aを指定すると全ての所有者が削除されてしまいその領域にアクセスできなくなります。</mark><br>もし、そうなってしまった場合は<a class="hide-line" href="?category=others&content=contactus">こちら</a>より領域の削除依頼をしてください。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;select | sel | s&gt; &lt;リージョンID&gt;</td>
		<td>選択した領域をWorldEditの選択範囲に設定します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;info | i&gt; [-u] [-s] [-w &lt;ワールド名&gt;] [リージョンID]</td>
		<td>指定された領域の情報を表示します。<br>領域が指定されていない場合は現在位置の情報を表示します。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg list [-n] [p &lt;プレイヤー名&gt;] [-w &lt;ワールド名&gt;] [ページ]</td>
		<td>作成されている領域の一覧を表示します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg flag &lt;リージョンID&gt; &lt;フラグ&gt; [-w &lt;ワールド名&gt;] [-g &lt;グループ名&gt;] [-e] [値]</td>
		<td>指定した領域のフラグを設定します。<br>
		<a class="hide-line" href="https://worldguard.enginehub.org/en/latest/regions/flags/">こちら</a>でフラグを確認できます。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;setpriority | priority | pri&gt; [-w &lt;ワールド名&gt;] &lt;リージョンID&gt; &lt;優先度&gt;</td>
		<td>領域の優先度を設定します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;setparent | parent | par&gt; [-w &lt;ワールド名&gt;] &lt;リージョンID&gt; [親リージョンID]</td>
		<td>親領域を設定します。<br>親領域を指定しない場合は親領域を解除します。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/rg &lt;d | create | define&gt; [-n] [-g] &lt;リージョンID&gt; &lt;オーナー&gt; [オーナー]...</td>
		<td>領域を作成して保護します。</td>
		<td class="table-vip">Vip</td>
	</tr>
	<tr>
		<td>/rg &lt;redefine | update | move&gt; [-g] &lt;リージョンID&gt;</td>
		<td>指定した領域を現在の選択範囲に置き換えます。</td>
		<td class="table-vip">Vip</td>
	</tr>
	<tr>
		<td>/god [-s] [プレイヤー名]</td>
		<td>無敵モードにします。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/ungod [-s] [プレイヤー名]</td>
		<td>無敵モードを解除します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/heal [-s] [プレイヤー名]</td>
		<td>プレイヤーを回復します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/slay [-s] [プレイヤー名]</td>
		<td>プレイヤーをキルします。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/wg flushstates</td>
		<td>リージョンフラグを適用する目的で保存されているプレイヤーに関する情報をクリアするためのコマンドです。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/stopfire [ワールド名]</td>
		<td>現在のワールド、又は指定したワールドの火の炎上を停止します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/allowfire [ワールド名]</td>
		<td>現在のワールド、又は指定したワールドの火の炎上を再開します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/stoplag [-s]</td>
		<td>全てのワールドのエンティティを削除し、すべての物理イベントと液体フローイベントが停止するモードに入ります。<br>更にチャンクがロードされるとそのチャンク内のエンティティが削除されます。<br>
		<mark>※削除されたエンティティは戻りません。</mark></td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/stoplag -c [-s]</td>
		<td>ラグの停止モードを無効化します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/stoplag -i</td>
		<td>ラグ停止モードの状態を表示します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/rg teleport [-s] &lt;フラグID&gt;</td>
		<td>スポーン、又はテレポートフラグで指定された場所にテレポートします。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/wg report [-p]</td>
		<td>プラグインフォルダの中にレポートを作成します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/wg profile [-p] [-t &lt;フィルター&gt;] [時間(分)]</td>
		<td>サーバーのCPU使用率のプロファイリングをします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/wg debug &lt;testbreak | testplace | testinteract | testdamage&gt; [-t] &lt;プレイヤー名&gt;</td>
		<td>イベントシュミレーションをします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/wg version</td>
		<td>WorldGuardのバージョンを表示します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/wg reload</td>
		<td>WorldGuardのデータをリロードします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/wg running</td>
		<td>WorldGuardの実行中のタスクを表示します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/rg reload [-w &lt;ワールド名&gt;]</td>
		<td>ファイル、又はデータベースから領域のデータをリロードします。<br>
		<mark>※ゲーム内で領域のデータに変更が加えられている場合、データが失われる可能性があります。</mark></td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/rg &lt;save | write&gt; [-w &lt;ワールド名&gt;]</td>
		<td>領域データを保存します。<br>領域データは変更が行われると自動的に保存されるため、このコマンドを明示的に呼び出す必要はありません。
		</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/rg migratedb &lt;yaml | mysql&gt; &lt;yaml | mysql&gt;</td>
		<td>データベースのタイプを移行します。<br>
		<mark>※移行を実行する前に必ずバックアップをしてください。</mark><br>
		<mark>※このコマンドはバックグラウンドで実行されず、サーバー全体を一時停止します。</mark></td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/rg migrateuuid</td>
		<td>領域データのプレイヤー名をUUIDに変換します。<br>対応するUUIDを持たない名前はコンフィグによって削除されるか残されます。<br>
		<mark>※このコマンドを実行する前に必ずバックアップを取ってください。</mark><br>
		<mark>※このコマンドはバックグラウンドで実行されず、サーバー全体を一時停止します。</mark></td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
</table>