		<!-- START HEADER IMPORT -->
		<?php include 'header.php'; ?>
		<!-- END HEADER IMPORT -->		
		

		<!-- START WELCOME IMPORT -->
		<?php include 'welcome.php'; ?>
		<!-- END WELCOME IMPORT -->
		
		<?php
		include 'dbconfig.php';

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql_anonvoiceless = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://www.anonymousforthevoiceless.org/?ref=veganactivism.org')";
		$result_anonvoiceless = $conn->query($sql_anonvoiceless);
		
		$sql_savemovement = "SELECT clicks FROM link_clicks WHERE (link_url = 'http://thesavemovement.org/?ref=veganactivism.org')";
		$result_savemovement = $conn->query($sql_savemovement);
		
		$sql_directactioneverywhere = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://www.directactioneverywhere.com/get-active-main#find-a-chapter?ref=veganactivism.org')";
		$result_directactioneverywhere = $conn->query($sql_directactioneverywhere);
		
		$sql_vegansociety = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://www.vegansociety.com/get-involved/volunteer-vegan-society?ref=veganactivism.org')";
		$result_vegansociety = $conn->query($sql_vegansociety);
		
		$sql_mercyforanimals = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://mercyforanimals.org/action-center?ref=veganactivism.org')";
		$result_mercyforanimals = $conn->query($sql_mercyforanimals);
		
		$sql_challenge22 = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://db.challenge22.com/mentor-application-form.php?ref=veganactivism.org')";
		$result_challenge22 = $conn->query($sql_challenge22);
		
		$sql_thehumaneleague = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://thehumaneleague.org/fast-action-network/?ref=veganactivism.org')";
		$result_thehumaneleague = $conn->query($sql_thehumaneleague);
		
		$sql_animalethics = "SELECT clicks FROM link_clicks WHERE (link_url = 'http://www.animal-ethics.org/volunteer/?ref=veganactivism.org')";
		$result_animalethics = $conn->query($sql_animalethics);
		
		$sql_henhero = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://mercyforanimals.org/hen-heroes?ref=veganactivism.org')";
		$result_henhero = $conn->query($sql_henhero);
		
		$sql_animalprotectors = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://animalprotectors.us/?ref=veganactivism.org')";
		$result_animalprotectors = $conn->query($sql_animalprotectors);
		
		$sql_peta = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://www.peta.org/about-peta/volunteer/?ref=veganactivism.org')";
		$result_peta = $conn->query($sql_peta);
		
		$sql_veganoutreach = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://veganoutreach.org/take-action/?ref=veganactivism.org')";
		$result_veganoutreach = $conn->query($sql_veganoutreach);
		
		$sql_reddit = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://reddit.com?ref=veganactivism.org')";
		$result_reddit = $conn->query($sql_reddit);
		
		$sql_foodnotbombs = "SELECT clicks FROM link_clicks WHERE (link_url = 'http://foodnotbombs.net/new_site/contacts.php?ref=veganactivism.org')";
		$result_foodnotbombs = $conn->query($sql_foodnotbombs);
		
		$sql_adoptacollege = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://adoptacollege.org?ref=veganactivism.org')";
		$result_adoptacollege = $conn->query($sql_adoptacollege);
		
		$sql_digitalveganactivists = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://www.facebook.com/groups/digitalveganactivists?ref=veganactivism.org')";
		$result_digitalveganactivists = $conn->query($sql_digitalveganactivists);
		
		$sql_vegfund = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://vegfund.org?ref=veganactivism.org')";
		$result_vegfund = $conn->query($sql_vegfund);
		
		$sql_narn = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://narn.org?ref=veganactivism.org')";
		$result_narn = $conn->query($sql_narn);
		
		$sql_vmpoutreach = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://veganoutreach.org/vegan-mentorship-program/?ref=veganactivism.org')";
		$result_vmpoutreach = $conn->query($sql_vmpoutreach);
		
		$sql_5m5v = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://5minutes5vegans.org/?ref=veganactivism.org')";
		$result_5m5v = $conn->query($sql_5m5v);
		
		$sql_veghack = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://veganhacktivists.org/?ref=veganactivism.org')";
		$result_veghack = $conn->query($sql_veghack);
		
		$sql_veganuary = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://veganuary.com/blog/fundraising-for-veganuary/?ref=veganactivism.org')";
		$result_veganuary = $conn->query($sql_veganuary);
		
		$sql_meatthevictims = "SELECT clicks FROM link_clicks WHERE (link_url = 'https://meat-the-victims.org/?ref=veganactivism.org')";
		$result_meatthevictims = $conn->query($sql_meatthevictims);
		
		?>
								
                        <div class="row blog_posts cardPostStyle">
                            <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/anonymous-for-the-voiceless.jpg" alt="Card image cap">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/anonymous-for-the-voiceless">Participate in an Anonymous for the Voiceless "Cube of Truth"!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Anonymous for the Voiceless is an animal rights organisation that specializes in street activism.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/anonymous-for-the-voiceless"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=anonymousforthevoiceless.org"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
																				
																				
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                STREET ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_anonvoiceless->num_rows > 0) {
											while($row = $result_anonvoiceless->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                           
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						   
						     <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/the-save-movement.jpg" alt="Find a The Save Movement event nearby and bear witness!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/the-save-movement">Find a "The Save Movement" event nearby and bear witness!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Groups around the world bear witness to pigs, cows, chickens and other animals en route to slaughter.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/the-save-movement"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=thesavemovement.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                STREET ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_savemovement->num_rows > 0) {
											while($row = $result_savemovement->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
						   
						   
						   
						    <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/meatthevictims.jpg" alt="In just 5 minutes you can help 5 or more people become Vegan right now!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/meat-the-victims">Peacefully enter farms & protest for media exposure and lives.
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Meat The Victims is a new generation of the growing community willing to disobey unjust laws together to abolish animal exploitation.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/meat-the-victims"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=meat-the-victims.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_meatthevictims->num_rows > 0) {
											while($row = $result_meatthevictims->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
						   
						   
						    <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/direct-action-everywhere.jpg" alt="Join DxE, disruptive but peaceful protests, save live animals!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/direct-action-everywhere">Join DxE, disruptive but peaceful protests, save live animals! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Our activists engage in creative nonviolent direct action to confront speciesism for animals in one generation with direct action.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/direct-action-everywhere"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=directactioneverywhere.com" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                LOCAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_directactioneverywhere->num_rows > 0) {
											while($row = $result_directactioneverywhere->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
						   
						   
						   
						   
						   
						   <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/the-vegan-society.jpg" alt="Support The Vegan Society with some global volunteer work!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/the-vegan-society">Support The Vegan Society with some global volunteer work!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>The Vegan Society is an educational charity that provides information and guidance on aspects of veganism.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/the-vegan-society"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=vegansociety.com" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                GLOBAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_vegansociety->num_rows > 0) {
											while($row = $result_vegansociety->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
						   
						   
						   
						   
						   
						   
							
							
						   
						   
					
							
							
							
					 
							
							
							<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/mercy-for-animals.jpg" alt="Volunteer and hand out pamphlets with Mercy for Animals today!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/mercy-for-animals">Make an impact by volunteering with Mercy for Animals!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Join our global movement and organize local events, take online actions, and support our mission!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/mercy-for-animals"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=mercyforanimals.org"" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                LOCAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_mercyforanimals->num_rows > 0) {
											while($row = $result_mercyforanimals->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/challenge-22.jpg" alt="Mentor people looking to become Vegan with Challenge 22!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/challenge-22">Mentor people looking to become Vegan with Challenge 22! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Challenge 22+ offers users a free, supportive online framework for trying veganism for 22 days.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/challenge-22"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=challenge22.com" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_challenge22->num_rows > 0) {
											while($row = $result_challenge22->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							 <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/the-humane-league.jpg" alt="Join The Humane Leagues Fast Action Network!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/the-humane-league">Join The Humane League's Fast Action Network! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>A group of dedicated online activists spending only a few minutes of their time each week to assist.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/the-humane-league"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=thehumaneleague.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_thehumaneleague->num_rows > 0) {
											while($row = $result_thehumaneleague->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							 <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/hen-hero.jpg" alt="Be a Hen Hero for just a few minutes each day!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/hen-hero">Be a Hen Hero for just a few minutes each day!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Join thousands of people taking one-minute daily actions to help millions of animals by becoming a Hen Hero!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/hen-hero"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=mercyforanimals.org/hen-heroes" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_henhero->num_rows > 0) {
											while($row = $result_henhero->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							





							
							
							 <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/animal-protectors.jpg" alt="Join Animal Protectors to stand up for animals online!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/animal-protectors">Join Animal Protectors to stand up for animals online!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Take small, easy, daily online actions that add up to a big difference for millions of animals!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/animal-protectors"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=animalprotectors.us" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_animalprotectors->num_rows > 0) {
											while($row = $result_animalprotectors->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
								<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/animal-ethics.jpg" alt="Volunteer with Animal Ethics to make a difference globally.">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/animal-ethics">Volunteer with Animal Ethics to make a difference globally. 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>If you want to make a difference for animals, or provide resources for animal advocates, you can collaborate with Animal Ethics.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/animal-ethics"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=animal-ethics.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                GLOBAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_animalethics->num_rows > 0) {
											while($row = $result_animalethics->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
					
							
							
								<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/peta-activism.jpg" alt="Peta needs your help around the world, take action with us!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/peta-activism">Peta needs your help around the world, take action with us!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Our volunteers come from diverse backgrounds. No matter what your talents are, if you want to volunteer for animals, we have a place for you!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/peta-activism"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=peta.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                GLOBAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_peta->num_rows > 0) {
											while($row = $result_peta->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/vegan-outreach.jpg" alt="Volunteer in many ways with the organization Vegan Outreach!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/vegan-outreach">Volunteer in many ways with the organization Vegan Outreach!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>The cruelty inflicted on farmed animals is terrible, but you can be a part of the movement that will end that abuse. Here’s how.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/vegan-outreach"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=veganoutreach.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_veganoutreach->num_rows > 0) {
											while($row = $result_veganoutreach->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
									<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/adopt-a-college.png" alt="Hand out pro-veg booklets and show iAnimal virtual reality videos!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/adopt-a-college">Hand out pro-veg booklets and show virtual reality videos!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Adopt a College (AAC) is a program in which activists hand out pro-veg booklets and show iAnimal virtual reality videos.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/adopt-a-college"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=adoptacollege.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                LOCAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_adoptacollege->num_rows > 0) {
											while($row = $result_adoptacollege->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

							<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/digital-activists.jpg" alt="Help save wasted food with Food not Bombs and donate it!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/digital-vegan-activists">Support one pro-vegan comment a day on Facebook! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>We post one pro-vegan comment on non-vegan pages per day, members will click like and have it quickly rise to the top to spread information!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/digital-vegan-activists"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=facebook.com" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_digitalveganactivists->num_rows > 0) {
											while($row = $result_digitalveganactivists->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
							
							
							<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/vegfund.png" alt="Hand out pro-veg booklets and show iAnimal virtual reality videos!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/vegfund-activism">VegFund offers a wide variety of grants for vegan advocacy!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>VegFund empowers vegan activists worldwide by funding and supporting effective outreach activities that inspire a vegan lifestyle.</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/vegfund-activism"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=vegfund.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                LOCAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_vegfund->num_rows > 0) {
											while($row = $result_vegfund->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>

							<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/narn.png" alt="Help save wasted food with Food not Bombs and donate it!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/narn-activism">Supporn NARN in several ways by visiting our website today!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Whether you’re experienced in the world of activism or you’re dipping your toes for the first time, we look forward to working with you!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/narn-activism"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=narn.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                LOCAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_narn->num_rows > 0) {
											while($row = $result_narn->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
					
									<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/reddit-activism.jpg" alt="Respectfully post relevant vegan-friendly reddit content!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/reddit-activism">Respectfully post relevant vegan-friendly reddit content! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Reddit is a social news aggregation, web content, and discussion website with various types of communities. Post relevant content to plant seeds!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/reddit-activism"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=reddit.com" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_reddit->num_rows > 0) {
											while($row = $result_reddit->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
	
							 
							
							
	
							
							
							
										   <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/food-not-bombs.jpg" alt="Help save wasted food with Food not Bombs and donate it!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/food-not-bombs">Help save wasted food with Food not Bombs and donate it! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>We recover mostly vegan food that would have been discarded and then share it as a way of protesting poverty and war. Help us!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/food-not-bombs"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=foodnotbombs.net" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                LOCAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_foodnotbombs->num_rows > 0) {
											while($row = $result_foodnotbombs->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
														
										   <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/vegan-mentorship-program.jpg" alt="Help Vegan Outreach with their Vegan Mentorship Program!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/vegan-mentorship-program">Help Vegan Outreach with their Vegan Mentorship Program! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Are you an experienced vegan who wants to help others adopt this compassionate lifestyle? Well, you’re in the right place too!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/vegan-mentorship-program"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=veganoutreach.org/vegan-mentorship-program" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_vmpoutreach->num_rows > 0) {
											while($row = $result_vmpoutreach->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
														
										   <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/5-minutes-5-vegans.png" alt="In just 5 minutes you can help 5 or more people become Vegan right now!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/5-minutes-5-vegans">In just 5 minutes you can help 5 or more people become Vegan!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Our vegan robots are constantly scanning social media, they retweet people we think are looking for help!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/5-minutes-5-vegans"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=5minutes5vegans.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_5m5v->num_rows > 0) {
											while($row = $result_5m5v->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
							
							
										   <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/veganuary.jpg" alt="Fundraising is a fun way of getting active with Veganuary!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/veganuary">Fundraising is a fun way of getting active with Veganuary!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>Whether you’re a one-person fundraiser or a local group, the possibilities for helping are endless!</p>
                                        </div>
										
										<a href="https://veganactivism.org/pages/veganuary"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=veganuary.com" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                LOCAL ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_veganuary->num_rows > 0) {
											while($row = $result_veganuary->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
										  
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							 <div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/vegan-hacktivists.jpg" alt="Know code or graphic design? The Vegan Hacktivists need you!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://veganactivism.org/pages/vegan-hacktivists">Know code or graphic design? The Vegan Hacktivists need you!
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>The Vegan Hacktivists build online projects like VeganActivism.org; we can really use the code & design help!</p>
                                        </div>
										 
										<a href="https://veganactivism.org/pages/vegan-hacktivists"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#292323;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-info-square"></i>&nbsp;&nbsp;Learn more</button></a>
										<a href="https://veganactivism.org/redirect.php?destination=veganhacktivists.org" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#dc3545;margin-left: 7px;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="far fa-link"></i>&nbsp;&nbsp;Visit site</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                ONLINE ACTIVISM
                                            </span>
                                            <span class="post_meta_date" style="color: #000;"><b>
											<?php 
											if ($result_veghack->num_rows > 0) {
											while($row = $result_veghack->fetch_assoc()) {
												echo $row["clicks"];
											}
											} else {
											echo "null";
											}
											?> </b> &nbsp;Activists clicked on this.</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
							
							
							
							
							
							
							
							<div class="col-md-6 col-lg-6">
                                <article>
                                    <div class="post_img">
                                        <img src="https://veganactivism.org/banners/add-your-organization.jpg" alt="Add your organization here or recommend one for us!">
                                    </div>
                                    <div class="post_text">
                                
                                        <h5 class="post_title">
                                            <a href="https://youaretheirvoice.com/contact?veganactivism">Add your organization here or recommend one for us! 
                                            </a>
                                        </h5>
                                        <div class="post_content">
                                            <p>New organizations are added on a case-by-case basis. Let us know who you'd like to be added!</p>
                                        </div>
										
										<a href="https://youaretheirvoice.com/contact?veganactivism" target="_blank"><button type="submit" class="btn rounded-1 btn-shadow " style="display: inline; box-shadow: 0px 0px 0px 0px rgba(59, 66, 162, 0.23);margin-bottom: 10px;pointer-events: all; cursor: pointer;font-size: 16px;background-color:#bd1fc1;padding: 3px 15px 3px 15px;border-width: 2px;"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add an Organization</button></a>
										
									 <div class="post_meta_top">
                                            <span class="post_meta_category">
                                                <a href="#">CLICK THE BUTTON ABOVE TO CONTACT US</a>
                                            </span>
                                            
                                        </div>
                                    </div>
                                </article>
                            </div>
							
							
							
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
// FOR MOBILE
	echo '
	<font style="margin-bottom: -25px; background-color: #f9f9f9;color: #1e205a;padding: 10px 11px 8px 13px;width: 100%;margin-left: 15px;margin-right: 15px;border-radius: 4px;">
	';
	} else {
// FOR DESKTOP
	echo '
	<font style="background-color: #f9f9f9;color: #1e205a;padding: 10px 11px 8px 13px;width: 100%;margin-left: 15px;margin-right: 15px;border-radius: 4px;">
	';
}
// thank you http://detectmobilebrowsers.com
?>
						   
						   <i><i class="far fa-smile-beam"></i>&nbsp;Special thanks to the organizations partnered with us to keep their pages updated!</i> </font>
						   
                        </div>
						<br>
						<br>
                        <nav class="pagination_holder">
                            
                        </nav>
						
						
                    </div>
                    <!-- Widgets -->
                    
					
								

                        
					
					
					
					
					
		<!-- START SIDEBAR IMPORT -->
		<?php include 'sidebar.php'; ?>
		<!-- END SIDEBAR IMPORT -->
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
            </div>

           
        </div>

    </div>

</body>
</html>