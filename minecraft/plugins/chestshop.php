
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
<div style="height: 1rem"></div>
<hr>
<div style="padding-left: 1rem">
	<div style="overflow: hidden">
		<h2 class="content-subtitle" style="float: left">チェストショップのつくり方</h2>
		<div class="mark-all">ALL</div>
	</div>
	<div style="padding-left: 1rem">
		<img src="img/Shop.png" style="max-height: 20rem"> 上の画像のように売りたいものを入れたチェストに看板を設置してください。<br> <br> 1行目：自分の名前(入れなくてもいい)<Br> 2行目：1回の取引で動くアイテムの量<br> 3行目：価格の設定<br> 4行目：アイテム名、又はアイテムID<br>
		<table style="font-size: 1rem">
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
<div style="padding-left: 1rem">
	<div style="overflow: hidden">
		<h2 class="content-subtitle" style="float: left">Adminショップのつくり方</h2>
		<div class="mark-adminlv2">Admin_Lv2</div>
	</div>
	<div style="padding-left: 1rem">
		作り方は基本的に通常のチェストショップとほぼ同じです。1列目の名前を「Admin Shop」にして下さい。<br> チェストは必要とせず、看板のみで設置できます。
	</div>
</div>