<?php $page="information"; ?>
<?php include 'header.php'; ?>

<div class="content-wrapper">
	<div class="content-container">

		<!-- icon-page -->
		<div id="content-icon-wrapper">			
			<a href="information.php"><div id="content-icon" class="icon-page-active">
				<p>i</p>
			</div></a>
			<a href="trips.php"><div id="content-icon" class="icon-page">
				<p>t</p>
			</div></a>
			<a href="product.php"><div id="content-icon" class="icon-page">
				<p>p</p>
			</div></a>
			<a href="gallery.php"><div id="content-icon" class="icon-page">
				<p>g</p>
			</div></a>
		</div><!-- end content-icon-wrapper -->		

		<!-- content -->
		<div class="content-article-wrapper">
			<article id="information-information" class="content2 hr">
				<?= $tab="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?>
				<h1>Information</h1>
				<br>
				<p><?= $tab ?><b>ระยอง</b> เป็นจังหวัดขนาดเล็กแห่งหนึ่งในภาคตะวันออกของประเทศไทย  ที่เป็นที่รู้จักในปัจจุบันว่าเป็นแหล่งท่องเที่ยว   มีผลไม้ชั้นยอด เป็นแหล่งอุตสาหกรรมหลักของประเทศ   มีสภาพเศรษฐกิจดี  มีรายได้ต่อหัวประชากรสูง เป็นอันดับหนึ่งของประเทศ <p>
				<p><?= $tab ?> เมื่อก่อนจังหวัดระยองจะเป็นที่รู้จักในฐานะเมืองแห่งผลไม้ดีของภาคตะวันออก  ไม่ว่าจะเป็นมังคุด ทุเรียน เงาะ รวมทั้ง อาหารทะเลสด แปรรูป กะปิ น้ำปลา เนื่องจากความเหมาะสมของสภาพดินฟ้าอากาศที่เอื้ออำนวยและสภาพภูมิประเทศที่เหมาะสม  นอกจากนั้น ยังได้ชื่อว่าเป็นเมืองท่องเที่ยวที่สวยงาม เนื่องจากมีชายหาดยาวสวยเลียบขนานไปกับอ่าวไทย และเกาะสวยงามระดับโลก เช่น เกาะเสม็ดก็เป็นที่รู้จักแพร่หลายท่ามกลางนักท่องเที่ยวชาวไทยและชาวต่างประเทศ ฐานเศรษฐกิจที่สำคัญของจังหวัดคือเกษตรกรรม การท่องเที่ยว และอุตสาหกรรม</p>
			</article>
			<article id="information-emblem" class="content2">
				<h1>Emblem</h1>
				<br>
				<p>	<?= $tab ?> <img src="img/information/logo.png"><br>
					<?= $tab ?> <b>ตราจังหวัดระยอง</b> จะเป็นภาพเกาะเสม็ด เป็นเกาะที่มีมะพร้าวมาก หาดทรายขาวสะอาดเหมือนน้ำตาลทราย พลับพลาในภาพ หมายถึง พลับพลาที่พระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว โปรดเกล้าฯให้สร้างไว้เป็นที่ประทับระหว่างเสด็จประพาสเกาะนี้</p>
				<p>	<?= $tab ?> <b>คำขวัญจังหวัดระยอง</b> "ผลไม่รสล้ำ อุตสาหกรรมก้าวหน้า น้ำปลารสเด็ด เกาะเสม็ดสวยหรู สุนทรภู่กวีเอก"</p>
				<p>	<?= $tab ?> <b>สีประจำจังหวัดระยอง</b><br>
					<?= $tab ?><?= $tab ?> <i>สีแดง</i> หมายถึง สีนักสู้ ที่พระเจ้าตากได้กอบกู้ประเทศชาติ พักกองทัพที่ใต้ต้นสะดือ วัดลุ่ม จ.ระยอง<br>
					<?= $tab ?><?= $tab ?> <i>สีเหลือง</i> หมายถึง สีรักชาติ<br>
					<?= $tab ?><?= $tab ?> <i>สีน้ำเงิน</i> หมายถึง สีแห่งความสดใส สีแห่งความเย็น และสีของน้ำทะเล ซึ่งจังหวัดระยอง มีทางติดทะเลยาวไกลถึง 100 กิโลเมตร</p>
				<p>	<?= $tab ?> <b>ต้นไม้ประจำจังหวัด</b> ต้นประดู่<br>
					<?= $tab ?> <img src="img/information/tree.jpg"></p>
				<p>	<?= $tab ?> <b>ดอกไม้ประจำจังหวัด</b> ดอกประดู่<br>
					<?= $tab ?> <img src="img/information/dok.jpg"></p>
				<p>	<?= $tab ?> <b>ต้นไม้พระราชทาน</b> ต้นสารภีทะเล<br>
					<?= $tab ?> <img src="img/information/tree2.jpg">
				</p>
			</article>
		</div><!-- end content-content -->	

		<div class="line-h">&nbsp;</div>
	</div><!-- end content-container -->
</div><!-- end content-wrpper -->

<?php include 'footer.php'; ?>