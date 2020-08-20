<h1 class="content-title">
	<a class="hide-line" href="https://www.minecraft.net/ja-jp/">Minecraft</a>本体の使用可能コマンド
</h1>
<div style="padding-left: 1rem">
	<strong>[]</strong>で括ってある部分は省略可能です。<br> <strong>&lt;&gt;</strong>で括ってある部分は省略できないので引数を入力してください。<br> <strong>&lt;A|B|C&gt;</strong>で括ってある場合はA～Cのいずれかを入力してください。
</div>
<div style="height: 1rem"></div>
<table style="font-size: 1rem">
	<tr>
		<th>コマンド</th>
		<th>説明</th>
		<th>必要な権限</th>
	</tr>
	<tr>
		<td>/msg &lt;プレイヤー名&gt; &lt;メッセージ&gt;<br>/tell &lt;プレイヤー名&gt; &lt;メッセージ&gt;<br>/w &lt;プレイヤー名&gt; &lt;メッセージ&gt;
		</td>
		<td>指定したプレイヤーにプライベートメッセージを送ります。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/help [ページ]</td>
		<td>使用できるコマンドの一覧を表示します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/list</td>
		<td>サーバーにログインしているプレイヤー一覧を表示します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/tellraw &lt;プレイヤー名&gt; &lt;メッセージ&gt;</td>
		<td>指定したプレイヤーにJSON形式のメッセージを送ります。</td>
		<td class="table-vip">Vip</td>
	</tr>
	<tr>
		<td>/effect &lt;プレイヤー名&gt; &lt;clear|&lt;エフェクト名&gt; [持続時間] [強さ] [パーティクルの表示]&gt;</td>
		<td>指定したプレイヤーにエフェクトを付与したり解除したりします。</td>
		<td class="table-adminlv3">Admin_Lv3</td>
	</tr>
	<tr>
		<td>/gamemode &lt;ゲームモード&gt; [プレイヤー名]</td>
		<td>プレイヤーのゲームモードを変更します。</td>
		<td class="table-adminlv3">Admin_Lv3</td>
	</tr>
	<tr>
		<td>/tp &lt;エンティティ名1&gt; &lt;&lt;x&gt; &lt;y&gt; &lt;z&gt;|&lt;エンティティ名2&gt;&gt; [&lt;y軸回転&gt; &lt;x軸回転&gt;]<br>/teleport &lt;エンティティ名1&gt; &lt;&lt;x&gt; &lt;y&gt; &lt;z&gt;|&lt;エンティティ名2&gt;&gt; [&lt;y軸回転&gt; &lt;x軸回転&gt;]
		</td>
		<td>指定したエンティティをテレポートします。</td>
		<td class="table-adminlv3">Admin_Lv3</td>
	</tr>
	<tr>
		<td>/clear</td>
		<td>インベントリの中身を削除します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/clone &lt;x1&gt; &lt;y1&gt; &lt;z1&gt; &lt;x2&gt; &lt;y2&gt; &lt;z2&gt; &lt;x&gt; &lt;y&gt; &lt;z&gt; [マスクモード] [複製モード]</td>
		<td>指定した範囲のブロックをコピーします。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/enchant &lt;プレイヤー名&gt; &lt;エンチャントID&gt; [レベル]</td>
		<td>指定したプレイヤーのアイテムにエンチャントを付与します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/fill &lt;x1&gt; &lt;y1&gt; &lt;z1&gt; &lt;x2&gt; &lt;y2&gt; &lt;z2&gt; &lt;ブロック&gt; [データ値] [元のブロックの処理] [データタグ]</td>
		<td>指定した範囲を指定したブロックで満たします。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/give &lt;プレイヤー名&gt; &lt;アイテム&gt;[個数] [データ] [データタグ]</td>
		<td>指定したプレイヤーにアイテムを与えます。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/kill [エンティティ名]</td>
		<td>指定したエンティティをキルします。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/locate &lt;生成物&gt;</td>
		<td>最も近くにある指定した構造物のある場所を表示します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/me &lt;アクション&gt;</td>
		<td>コマンド実行者に関するメッセージを表示します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/perticle &lt;パーティクルID&gt; &lt;x&gt; &lt;y&gt; &lt;z&gt; &lt;xd&gt; &lt;yd&gt; &lt;zd&gt; &lt;速さ&gt; [回数] [モード] [プレイヤー名] [パラメーター]</td>
		<td>指定した場所にパーティクルを発生させます。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/playsound &lt;サウンド名&gt; &lt;ソース&gt; &lt;プレイヤー名&gt; [x] [y] [z] [音量] [ピッチ] [最小音量]</td>
		<td>サウンドを再生する</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/replaceitem &lt;block &lt;x&gt; &lt;y&gt; &lt;z&gt;|entity &lt;エンティティ&gt;&gt; &lt;スロット&gt; &lt;アイテムID&gt; [個数] [データ] [データタグ]</td>
		<td>指定したプレイヤーor指定した座標にあるインベントリのあるブロックの指定したスロットにあるアイテムを置き換えます。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/scoreboard &lt;objectives | players | teams&gt;...</td>
		<td>スコアボードの対象、プレイヤー、チーム、タグを管理します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/setblock &lt;x&gt; &lt;y&gt; &lt;z&gt; &lt;ブロック&gt; [データ値 | 状態] [元のブロックの処理] [データタグ]</td>
		<td>ブロックを設置します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/summon &lt;エンティティ名&gt; [x] [y] [z] [データタグ]]</td>
		<td>エンティティを召喚します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/time &lt;set | add | query&gt; &lt;値&gt;</td>
		<td>ワールドの時間を変更、確認します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/title &lt;プレイヤー名&gt; &lt;変更するタイトル名&gt; &lt;JSON形式のタイトル&gt;</td>
		<td>画面に表示するタイトルを変更します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/trigger &lt;オブジェクト名&gt; &lt;add | set&gt; &lt;値&gt;</td>
		<td>トリガー型オブジェクトを使用します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/weather &lt;clear | rain | thunder&gt; [時間]</td>
		<td>天候を設定します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/blickdata &lt;x&gt; &lt;y&gt; &lt;z&gt; &lt;データタグ&gt;</td>
		<td>ブロックのデータタグを編集します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/entitydata &lt;エンティティ&gt; &lt;データタグ&gt;</td>
		<td>エンティティのデータタグを編集します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/stats &lt;entity | block&gt;...</td>
		<td>コマンドの結果でスコアボードを更新します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/toggledownfall</td>
		<td>天候を切り替えます。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/seed</td>
		<td>シード値を表示します。</td>
		<td class="table-adminlv2">Admin_Lv2</td>
	</tr>
	<tr>
		<td>/banlist</td>
		<td>BANリストを表示します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/execute &lt;エンティティ&gt; &lt;x&gt; &lt;y&gt; &lt;z&gt; &lt;コマンド&gt;<br>/execute &lt;エンティティ&gt; &lt;x&gt; &lt;y&gt; &lt;z&gt; detect &lt;x&gt; &lt;y&gt; &lt;z&gt; &lt;ブロック&gt; &lt;データ値&gt; &lt;コマンド&gt;
		</td>
		<td>指定したエンティティを対象にしてコマンドを実行します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/gamerule &lt;ゲームルール&gt; [値]</td>
		<td>ゲームルールを変更します。<br>値を入力しない場合は現在の値を確認します。
		</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td><del>/kick &lt;プレイヤー名&gt;</del></td>
		<td>指定したプレイヤーをキックします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/say &lt;メッセージ&gt;</td>
		<td>メッセージを送信します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/advancement &lt;grant | temove | test&gt; &lt;プレイヤー名&gt; &lt;only | until | from | through | everything&gt;</td>
		<td>プレイヤーに進捗を付与、削除、又は確認をします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/debug</td>
		<td>デバッグを開始します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/defaultgamemode &lt;ゲームモード&gt;</td>
		<td>サーバーのデフォルトゲームモードを変更します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/deop &lt;プレイヤー名&gt;</td>
		<td>指定したプレイヤーのOP権限を削除します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/difficulty &lt;難易度&gt;</td>
		<td>サーバーの難易度を変更します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/function &lt;ファイル名&gt; [if &lt;対象&gt; | unless &lt;対象&gt;]</td>
		<td>関数を実行します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/op &lt;プレイヤー名&gt;</td>
		<td>指定したプレイヤーにOP権限を付与します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/pardon &lt;プレイヤー名&gt;</td>
		<td>指定したプレイヤーのBANを解除します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/recipe &lt;give | take&gt; [プレイヤー名] &lt;レシピ名 | *&gt;</td>
		<td>レシピを削除したりロックしたりします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/save-all</td>
		<td>サーバーのワールドデータを保存します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/save-on</td>
		<td>ワールドの自動保存を有効にします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/save-off</td>
		<td>ワールドの自動保存を無効にします。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/setidletimeout &lt;時間&gt;</td>
		<td>アイドル状態のプレイヤーがキックされるまでの時間を設定します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/setworldspawn</td>
		<td>ワールドのスポーン位置を設定します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/spreadplayers &lt;x&gt; &lt;z&gt; &lt;間隔&gt; &lt;最大範囲&gt; &lt;(チームで集合するか) true | false&gt; &lt;プレイヤー&gt;</td>
		<td>エンティティをランダムな場所に配置します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/stop</td>
		<td>サーバーを停止します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/stopsound &lt;プレイヤー名&gt; [ソース] [サウンド]</td>
		<td>サウンドを停止します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/whitelist &lt;on | off | list | add &lt;プレイヤー名&gt; | remove &lt;プレイヤー名&gt; | reload&gt;</td>
		<td>サーバーのホワイトリストを管理します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/worldborder &lt;set | center | damage | warning | get | add&gt;...</td>
		<td>ワールドの境界を管理します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/xp &lt;量&gt; [プレイヤー名]<br>/xp &lt;量&gt;L [プレイヤー名]
		</td>
		<td>プレイヤーの経験値を追加、削除します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
</table>