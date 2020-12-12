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
<hr>
<div>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cinfo" class="anchor"></a><a href="#cinfo">/cinfo</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">保護の状態が確認できます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cprivate" class="anchor"></a><a href="#cprivate">/cprivate [プレイヤー名]...</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">自分と指定したプレイヤーのみがアクセス可能となります。<br>指定しない場合は自分のみがアクセス可能となります。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cmodify" class="anchor"></a><a href="#cmodify">/cmodify [プレイヤー名]</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">指定したプレイヤーがアクセスできるようになります。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="-cmodify" class="anchor"></a><a href="#-cmodify">/cmodify -[プレイヤー名]</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">指定したプレイヤーがアクセスできないようになります。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cpublic" class="anchor"></a><a href="#cpublic">/cpublic</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">全てのプレイヤーがアクセスできるようになります。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cdonation" class="anchor"></a><a href="#cdonation">/cdonation</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">誰でもアクセスができますが取り出すことができるのは保護をかけた本人のみです。<br>郵便箱等を作る際に便利です。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cpassword" class="anchor"></a><a href="#cpassword">/cpassword &lt;パスワード&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">パスワードでチェストなどが開けれるようになります。<br>※パスワードを知っていると開けれるので複数人で共有するチェストを作る場合は<a href="#cmodify">/cmodify</a>を使用することをお勧めします。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="climits" class="anchor"></a><a href="#climits">/climits</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">保護しているものの数や保護できる上限を確認します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cremove" class="anchor"></a><a href="#cremove">/cremove</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">指定した対象の保護を解除します。<br>設定を変更する際はこのコマンドを使用してください。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cremoveall" class="anchor"></a><a href="#cremoveall">/cremoveall</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">入力した後に適用(<a href="#lwc_confirm">/lwc confirm</a>)すると自分がが保護したものが<mark>全て解除</mark>されます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cmagnet" class="anchor"></a><a href="#cmagnet">/cmagnet &lt;on | off&gt;</a><br><a href="#cmagnet">/lwc flag magnet &lt;on | off&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">チェストなどのインベントリを持つものをマグネット化します。<br>指定したブロックの周囲に落ちたアイテムを吸引してくれます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="credstone" class="anchor"></a><a href="#credstone">/credstone &lt;on | off&gt;</a><br><a href="#credstone">/lwc flag redstone &lt;on | off&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">対象物がレッドストーン入力を受け付けるかどうかを指定します。<br>onにすると対象物がレッドストーン入力を受け付けなくなります。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cautoclose" class="anchor"></a><a href="#cautoclose">/cautoclose &lt;on | off&gt;</a><br><a href="#cautoclose">/lwc flag autoclose &lt;on | off&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">扉やトラップドアが3秒後に自動的に閉じるようになります。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="callowexplosions" class="anchor"></a><a href="#callowexplosions">/callowexplosions &lt;on | off&gt;</a><br><a href="#callowexplosions">/lwc flag allowexplosions &lt;on | off&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">対象物が爆発によって破壊されるかを指定できます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="chopper" class="anchor"></a><a href="#chopper">/chopper &lt;on | off&gt;</a><br><a href="#chopper">/lwc flag hopper &lt;on | off&gt;</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">チェストなどからホッパーでアイテムを取り出せるかを指定します。<br>デフォルトでは盗難を防ぐためオフになっています。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cpersist" class="anchor"></a><a href="#cpersist">/cpersist</a><br><a href="#cpersist">/lwc mode persist</a></h2>
			<div class="mark-all">ALL</div>
		</div>
		<div class="cmdma">このコマンドは打つたびにオンとオフが切り替わります。<br>デフォルトではオフですが、このコマンドを入力すると保護などが1度のコマンドで複数の対象に使用することができます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cdroptransfer" class="anchor"></a><a href="#cdroptransfer">/cdroptransfer &lt;select | on | off | status&gt;</a><br><a href="#cdroptransfer">/lwc mode droptransfer &lt;select | on | off | status&gt;</a></h2>
			<div class="mark-vip">Vip</div>
		</div>
		<div class="cmdma">インベントリからアイテムをドロップすると指定したチェストにアイテムが転送されます。<br>チェストが一杯の場合はプレイヤーに通知され入りきらなかったアイテムは自身に帰ってきます。<br>一度オンにするとオフにするかログアウトするまでオンの状態です。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="lwc" class="anchor"></a><a href="#lwc">/lwc</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">ヘルプを表示</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cleanup" class="anchor"></a><a href="#cleanup">/lwc admin cleanup</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">LWCでは座標で保護を行うため存在していないブロックに対して保護を行っているものもあります。<br>このコマンドはそれを確認して削除するものです。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="expire" class="anchor"></a><a href="#expire">/lwc admin expire &lt;時間&gt;</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">指定した期間アクセスがない保護を削除します。<br>例)/lwc admin expire 1 month</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="find" class="anchor"></a><a href="#find">/lwc admin find &lt;プレイヤー&gt; [ページ]</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">指定したプレイヤーが作成した保護一覧を表示します。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="forceowner" class="anchor"></a><a href="#forceowner">/lwc admin forceowner &lt;プレイヤー&gt; [ProtectionID]</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">指定したプレイヤーに保護の所有権が移ります。<br>IDを指定した場合はそのIDに対応する保護の所有権が移ります。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="remove" class="anchor"></a><a href="#remove">/lwc admin remove &lt;ProtectionID&gt;</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">指定したIDの保護が解除されます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="purge" class="anchor"></a><a href="#purge">/lwc admin purge &lt;プレイヤー&gt;</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">指定したプレイヤーが保護したものが全て解除されます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="cleanup" class="anchor"></a><a href="#cleanup">/lwc admin cleanup</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">データベースがクリーンアップされます。</div>
	</div>
	<hr>
	<div class="cmdof">
		<div class="cmdtt">
			<h2 class="cmd"><a id="report" class="anchor"></a><a href="#report">/lwc admin report</a></h2>
			<div class="mark-adminlv1">Admin_Lv1</div>
		</div>
		<div class="cmdma">LWCのパフォーマンスレポートを表示します。</div>
	</div>
</div>