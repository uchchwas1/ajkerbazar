
	<?php require_once 'includes/header.php'; 
	require_once 'classes/entry.php';

	if (isset($_POST['publishing'])) {

		$entry = new Entry();
		$entry->createNewFromPOST($_POST);

		$entry->SqlInsertEntry();
?>
	<a href="single.php?entry_id=<?php echo $entry->getId(); ?>">View Entry</a>
<?php
	}
	?>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#">FoodBank</a></h2>
										<p>become a partner with us</p>
									</div>
								</header>
								<div id="create_form">
									<form action="create.php" method="POST">

									<label for="">Restaurant name</label>
									<input type="text" name="r_name" id="title" />

									

									<label for="">email</label>
									<textarea name="r_email" id="title" cols="30" rows="10"></textarea>

									<label for="">contract</label>
									<textarea name="r_contract" id="title" cols="30" rows="10"></textarea>
									
									<label for="">location</label>
									<textarea name="r_location" id="title" cols="30" rows="10"></textarea>

									<input type="hidden" name="publishing" />

									<input type="submit" name="submit" id="submit" value="Publish" />
									</form>
								</div>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>
					
	<?php require_once 'includes/footer.php'; ?>