<hr />
<div id="footer" style="text-align:center;">
	<p>
		<a href="index.php" class="spaceLinks">Home</a> |
		<a href="addMember.php" class="spaceLinks">Add Member</a> |
		<a href="members.php" class="spaceLinks">View Members</a> |

	</p>

	<b> Date: <?php
				$date = new DateTime('2021-05-19');
				echo $date->format('D, F jS');
				?>
	</b>

	&nbsp;&nbsp;
	<b>Time:
		<?php
		$date = new DateTime('10:37');
		echo $date->format('g:i a');
		?>
	</b> &nbsp;

	&nbsp;<b>|</b>&nbsp; <a href="mailto:healthinfo@healthwise.com" style="border:thin solid white;color:black;text-decoration:underline;">Email Us</a>
</div>