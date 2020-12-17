<h1 class="content-title">
	<a class="hide-line" href="https://www.spigotmc.org/resources/chestshop.51856/">ChestShop</a>の使用可能コマンド
</h1>
<div style="padding-left: 1rem">
	<ul>
		<li>・チェストと看板でショップを作ることができます。</li>
		<li>・値段の設定は間違えないようにね</li>
	</ul>
	<br> <strong>[]</strong>で括ってある部分は省略可能です。<br> <strong>&lt;&gt;</strong>で括ってある部分は省略できないので引数を入力してください。<br> <strong>&lt;A|B|C&gt;</strong>で括ってある場合はA～Cのいずれかを入力してください。
</div>
<hr>
<div>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="howtomade" class="anchor"></a><a href="#howtomade">チェストショップのつくり方</a>
			</h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">
			<img src="img/Shop.png" style="max-height: 20rem"><br> 上の画像のように売りたいものを入れたチェストに看板を設置してください<br>
			<mark>※作成には1000$必要です。</mark><br>
			1行目：自分の名前(入れなくてもいい)<Br>
			2行目：1回の取引で動くアイテムの量<br>
			3行目：価格の設定<br>
			4行目：アイテム名、又はアイテムID<br>
			<table>
				<tr>
					<th colspan="3">3行目の記述例</th>
				</tr>
				<tr>
					<th>コマンド</th>
					<th>記述例</th>
					<th>意味</th>
				</tr>
				<tr>
					<td>B &lt;価格&gt;</td>
					<td>B 100</td>
					<td>指定した価格で売る<br>(例だと100$で売る)
					</td>
				</tr>
				<tr>
					<td>S &lt;価格&gt;</td>
					<td>S 100</td>
					<td>指定した価格で買い取る<br>(例だと100$で買い取る)
					</td>
				</tr>
				<tr>
					<td>B &lt;価格&gt;:&lt;価格&gt; S</td>
					<td>B 100:50 S</td>
					<td>左側の価格で売って右側の価格で買い取る<br>(例だと100$で売って50$で買い取る)
					</td>
				</tr>
				<tr>
					<td>&lt;価格&gt;:&lt;価格&gt;</td>
					<td>100:50</td>
					<td>左側の価格で売って右側の価格で買い取る<br>(例だと100$で売って50$で買い取る)
					</td>
				</tr>
			</table>
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class=cmd>
				<a id="howtoadminmade" class="anchor"></a><a href="#howtoadminmade">Adminショップのつくり方</a>
			</h2>
			<div class="mark-adminlv2">Admin_Lv2</div>
		</div>
		<div class="cmdma">
			作り方は基本的に通常のチェストショップとほぼ同じです。1列目の名前を「Admin Shop」にして下さい。<br> チェストは必要とせず、看板のみで設置できます。
		</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="iteminfo" class="anchor"></a><a href="#iteminfo">/iinfo [アイテムID | アイテム名]</a><br> <a href="#iteminfo">/iteminfo [アイテムID | アイテム名]</a><br> <a href="#iteminfo">/chestshop:iinfo [アイテムID | アイテム名]</a><br> <a href="#iteminfo">/chestshop:iteminfo [アイテムID | アイテム名]</a><br>
			</h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">手に持っているアイテム、又は指定したアイテムの情報を表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="cstoggle" class="anchor"></a><a href="#cstoggle">/cstoggle</a><br> <a href="#cstoggle">/chestshop:cstoggle</a>
			</h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">売り及び買いのメッセージを切り替える</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="chestshop" class="anchor"></a><a href="#chestshop">/chestshop</a><br> <a href="#chestshop">/chestshop:chestshop</a><br> <a href="#chestshop">/csversion</a><br> <a href="#chestshop">/chestshop:csversion</a> <a href="#chestshop">/chestshop version</a><br>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">チェストショップのバージョンを表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="chestshopreload" class="anchor"></a><a href="#chestshopreload">/chestshop relaod</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">チェストショップをリロードします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="csgive" class="anchor"></a><a href="#csgive">/csgive &lt;アイテム名&gt; [数量] [プレイヤー名]</a><br> <a href="#csgive">/chestshop:csgive &lt;アイテム名&gt; [数量] [プレイヤー名]</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">プレイヤーにユニークなチェストショップコードを持つアイテムを与えます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="csaccess" class="anchor"></a><a href="#csaccess">/csaccess</a><br> <a href="#csaccess">/chestshop:csaccess</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">管理者orアクセス権限を持ち、通常は無視されている間、ショップの売買機能を切り替えます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd">
				<a id="csmetrics" class="anchor"></a><a href="#csmetrics">/csmetrics</a><br> <a href="#csmetrics">/chestshop:csmetrics</a>
			</h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">ショップアカウントと平均トランザクションを表示します。</div>
	</div>
</div>