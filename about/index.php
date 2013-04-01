<?php
$navactclass = 'about';
$pgtitle = 'About';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include '../_includes_/head.php'; ?>
    <body>
	<?php include '../_includes_/nav.php'; ?>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
		<div class="span6">
                    <h2>Weekly Meetings</h2>
                    <p>Grey Hat Group hosts a meeting every Tuesday at 12:30 in the IAN Lab when classes are in session (excluding Finals week). Subscribe to the Grey hat <a href="http://mailman2.u.washington.edu/mailman/listinfo/greyhatgroup-announce">Announcement Mailing List</a> for information about upcoming meetings</p>
                    <p>Common areas of discussion and presentation include recent security news &amp; resources, network security, and security related tools.</p>
                    <h2>Other Events / Meetings</h2>
                    <p>Grey Hat members are informed of other security related meetings and opprotunities that are not run by Grey Hat. If you have a strong interest in security, these events will help you with your networking. To receive these announcements, you must subscribe to our <a href="http://mailman2.u.washington.edu/mailman/listinfo/greyhatgroup-announce">announcement mailing list</a>.</p> 
                </div>

                <div class="span6">
                    <h2>Collegiate Cyber Defense<br /> Competition (CCDC)</h2>
                    <p>Every year, the Grey Hat Group organizes a team to compete in the Pacific Rim CCDC (PRCCDC). At this event students from all over the western United States get to put their skills to the test in an attack and defend scenerio alongside industry, military, government, and academic professionals.</p>
                    <p>Teams of nine students from each school try to administer a small business network while under attack from the Red Team. Typical tasks include administering user accounts, setting and enforcing password policies, setting up mail servers and ftp servers, and intrusion detection systems. It is also often necessary to edit web page code to prevent SQL injection and secure a database server.</p>
                    <p><a class="btn" href="http://blogs.uw.edu/ciacsec/prccdc/">PRCCDC Overview&raquo;</a></p>
                </div>

            </div>

            <hr>

	    <?php include '../_includes_/footer.php'; ?>

        </div> <!-- /container -->
    </body>
</html>
