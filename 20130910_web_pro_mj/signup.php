<?php $page="signup"; ?>
<?php include 'header.php'; ?>

<div class="content-wrapper">
	<div class="content-container">
			
		<!-- Sign In -->
		<div id="gallery-share-wrapper" class="opacity5">				
			<div id="gallery-share-head"><h1>Sign In</h1></div>
			<div id="gallery-share-form">

				<form action="login.php" method="POST" enctype="multipart/form-data">
					<p class="sign-p">Username</p>
					<input type="text" name="username" class="input1 signIn-input"/>
					<p class="sign-p">Password</p>
					<input type="text" name="password" class="input1 signIn-input"/>
					<input type="submit" id="share-bt" value="Sign In" class="button"/>
				</form>
			</div><!-- end gallery-share-form -->

		</div>
		<!-- end Sign In -->


		<!-- Sign Up -->
		<div id="signup-wrapper" class="content-article-wrapper">
			<div id="gallery-share-head"><h1>Sign Up</h1></div>
			<div id="gallery-share-form" class="signup-box-wrapper">

				<form action="register.php" method="POST" enctype="multipart/form-data">
					<p class="sign-p">Username *</p>
					<input type="text" name="username" class="input1 signUp-input"/>
					<p class="sign-p">Password *</p>
					<input type="password" name="password" class="input1 signUp-input"/>
					<p class="sign-p">E-mail *</p>
					<input type="text" name="mail" class="input1 signUp-input"/>
					<p class="sign-p">Full name</p>
					<input type="text" name="lname" class="input1 signUp-input-lname"/>
					<input type="text" name="fname" class="input1 signUp-input-fname"/>
					<p class="sign-p">Phone</p>
					<input type="text" name="phone" class="input1 signUp-input"/>
					<p class="sign-p">Address</p>
					<input type="text" name="address" class="input1 signUp-input-address"/>	
					<p id="zipcode" class="sign-p">Zip code</p>
					<input type="text" name="zipcode" class="input1 signUp-input"/>				
					<input type="submit" id="signUp-bt" value="Sign Up" class="button"/>

				</form>
			</div><!-- end gallery-share-form -->			
		</div><!-- end Sign In -->	

		<div class="line-h">&nbsp;</div>
	</div><!-- end content-container -->
</div><!-- end content-wrpper -->

<?php include 'footer.php'; ?>