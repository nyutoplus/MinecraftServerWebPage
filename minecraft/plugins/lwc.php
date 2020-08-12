
<h1 class="content-title">
	<a class="hide-line" href="https://www.spigotmc.org/resources/modern-lwc-continuation-of-lwc.2162/">LWC</a>の使用可能コマンド
</h1>
<div style="padding-left: 1rem">
	<ul>
		<li>・チェスト、かまど、ディスペンサー、ドア、トラップドア、看板を保護できるようになります。</li>
		<li>・チェスト、かまど、看板は設置時に自動的に保護(<a href="#cprivate">/cprivate</a>)が適用されます。
		</li>
		<li>・コマンド入力後に対象物を右クリックすると反映されます。</li>
		<li>・設定を変更したい場合は一旦設定を削除する(<a href="#cremove">/cremove</a>)必要があります。
		</li>
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
		<td>/cinfo</td>
		<td>保護の状態が確認できます。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td><a id="cprivate"></a>/cprivate [プレイヤー名]...</td>
		<td>自分と指定したプレイヤーのみがアクセス可能となります。<br>指定しない場合は自分のみがアクセス可能となります。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cmodify [プレイヤー名]</td>
		<td>指定したプレイヤーがアクセスできるようになります。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cmodify -[プレイヤー名]</td>
		<td>指定したプレイヤーがアクセスできないようになります。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cpublic</td>
		<td>全てのプレイヤーがアクセスできるようになります。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cdonation</td>
		<td>誰でもアクセスができますが取り出すことができるのは保護をかけた本人のみです。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cpassword &lt;パスワード&gt;</td>
		<td>パスワードでチェストなどが開けれるようになります。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/climits</td>
		<td>保護しているものの数や保護できる上限を確認します。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td><a id="cremove"></a>/cremove</td>
		<td>指定した対象の保護を解除します。<br>設定を変更する際はこのコマンドを使用してください。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cremoveall</td>
		<td>入力した後に適用(<a href="#lwc_confirm">/lwc confirm</a>)すると自分がが保護したものが<mark>全て解除</mark>されます。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cmagnet &lt;on | off&gt;<br>/lwc flag magnet &lt;on | off&gt;
		</td>
		<td>チェストなどのインベントリを持つものをマグネット化します。<br>指定したブロックの周囲に落ちたアイテムを吸引してくれます。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/credstone &lt;on | off&gt;<br>/lwc flag redstone &lt;on | off&gt;
		</td>
		<td>対象物がレッドストーン入力を受け付けるかどうかを指定します。<br>onにすると対象物がレッドストーン入力を受け付けなくなります。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cautoclose &lt;on | off&gt;<br>/lwc flag autoclose &lt;on | off&gt;
		</td>
		<td>扉やトラップドアが3秒後に自動的に閉じるようになります。</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/callowexplosions &lt;on | off&gt;<br>/lwc flag allowexplosions &lt;on | off&gt;
		</td>
		<td>対象物が爆発によって破壊されるかを指定できます。<br>※このサーバーでは他プラグインによって爆発によってブロックが破壊されないようになっているため設定しても意味がないです。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/chopper &lt;on | off&gt;<br>/lwc flag hopper &lt;on | off&gt;
		</td>
		<td>チェストなどからホッパーでアイテムを取り出せるかを指定します。<br>デフォルトでは盗難を防ぐためオフになっています。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cpersist<br>/lwc mode persist
		</td>
		<td>このコマンドは打つたびにオンとオフが切り替わります。<br>デフォルトではオフですが、このコマンドを入力すると保護などが1度のコマンドで複数の対象に使用することができます。
		</td>
		<td class="table-all">ALL</td>
	</tr>
	<tr>
		<td>/cdroptransfer &lt;select | on | off | status&gt;<br>/lwc mode droptransfer &lt;select | on | off | status&gt;
		</td>
		<td>インベントリからアイテムをドロップすると指定したチェストにアイテムが転送されます。<br>チェストが一杯の場合はプレイヤーに通知され入りきらなかったアイテムは自身に帰ってきます。<br>一度オンにするとオフにするかログアウトするまでオンの状態です。
		</td>
		<td class="table-vip">Vip</td>
	</tr>
	<tr>
		<td>/lwc</td>
		<td>ヘルプを表示</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin cleanup</td>
		<td>LWCでは座標で保護を行うため存在していないブロックに対して保護を行っているものもあります。<br>このコマンドはそれを確認して削除するものです。
		</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin expire &lt;時間&gt;</td>
		<td>指定した期間アクセスがない保護を削除します。<br>例)/lwc admin expire 1 month
		</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin find &lt;プレイヤー&gt; [ページ]</td>
		<td>指定したプレイヤーが作成した保護一覧を表示します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin forceowner &lt;プレイヤー&gt; [ProtectionID]</td>
		<td>指定したプレイヤーに保護の所有権が移ります。<br>IDを指定した場合はそのIDに対応する保護の所有権が移ります。
		</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin remove &lt;ProtectionID&gt;</td>
		<td>指定したIDの保護が解除されます。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin purge &lt;プレイヤー&gt;</td>
		<td>指定したプレイヤーが保護したものが全て解除されます。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin cleanup</td>
		<td>データベースがクリーンアップされます。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
	<tr>
		<td>/lwc admin report</td>
		<td>LWCのパフォーマンスレポートを表示します。</td>
		<td class="table-adminlv1">Admin_Lv1</td>
	</tr>
</table>
</div>