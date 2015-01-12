<?php $page="home"; ?>
<?php include 'header.php'; ?>

<div id="index-wrapper">
	<div id="index-container">

		<!-- content -->
		<?php
			$tab = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
			$icon = array( 'i', 't', 'p', 'g' );
			$toppic = array( 'information', 'trips', 'product', 'gallery' );
			$desc = array( $tab."<b class=\"span-color\">ระยอง</b> เป็นจังหวัดขนาดเล็กแห่งหนึ่งในภาคตะวันออกของประเทศไทย ที่เป็นที่รู้จักในปัจจุบันว่าเป็นแหล่งท่องเที่ยว มีผลไม้ชั้นยอด เป็นแหล่งอุตสาหกรรมหลักของประเทศ มีสภาพเศรษฐกิจดี มีรายได้ต่อหัวประชากรสูง เป็นอันดับหนึ่งของประเทศ"
				, $tab."<b class=\"span-color\">แหล่งท่องเที่ยว</b>ของจังหวัดระยองนั้นมีหลายแหล่งที่น่าสนใจเลยทีเดียว อาทิเช่น เกาะเสม็ด เป็นเกาะที่มีน้ำใสสะอาด เหมาะแก่การทำกิจกรรมเล่นน้ำเป็นอย่างยิ่ง หรือจะเป็นน้ำตกเขาชะเมา เป็นสถานที่ท่องเที่ยวเชี่ยวเชิงนิเวศที่มีความงามของธรรมชาติติดอันดับเลยทีเดียว"
				, $tab."ถ้าพูดถึง<b class=\"span-color\">ทุเรียนทอด</b> คงต้องนึกถึงจังหวัดระยองอย่างแน่นอน เนื่องจากของฝากจังหวัดระยองที่ขึ้นชื่อที่สุดคือทุเรียนทอด ใครที่ได้ผ่านมายังจังหวัดระยอง คงจะต้องซื้อทุเรียนทอดติดไม้ติดไปกันไปอย่างน้อยคนละถุงหนึ่งอย่างแน่นอน"
				, $tab."เรามาร่วม<b class=\"span-color\">แชร์ความทรงจำ</b>ที่ได้ไปเที่ยวในจังหวัดระยองกันดีกว่า ไม่ว่าท่านจะได้ไปเที่ยวเกาะเสม็ด น้ำตกเขาชะเมา เกาะมัน หรือสถานที่อื่นๆในจังหวัดระยอง ทุกท่านในนี้กำลังรอให้ท่านร่วมแชร์ประสบการณ์ด้วยกันอยู่");

		for($i=0;$i<4;$i++)
		{	
			/* visible sign up button */
			if($i!=3){ $visible = 'block'; } else { $visible = ''; }
		?>	
			<artile class="index-content">
				<a href="<?= $toppic[$i] ?>.php">
					<div id="icon-page" class="icon-page">
						<p><?= $icon[$i] ?></p>
					</div>
				</a>
				<h2 class="index-content-toppic"><?= $toppic[$i] ?></h2>
				<p class="index-content-description"><?= $desc[$i] ?></p>
				<a href="signup.php"><input id="index-signup-bt" class="button <?= $visible ?>" type="submit" value="Sign Up"/></a>
			</artile>
		<?php			
		}
		?>
		<div class="line-h">&nbsp;</div>
	</div><!-- end index-container -->
</div><!-- end container -->

<?php include 'footer.php'; ?>