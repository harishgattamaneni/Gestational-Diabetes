<!DOCTYPE html>
<html  lang="en">
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>HealthiHer</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https:fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <style>

        .nav {
            opacity: 1; /* Ensure the navigation bar is initially visible */
            transition: opacity 0.5s ease;
        }

        /* Add a CSS class to hide the navigation bar */
        .hidden-nav {
            opacity: 0;
            pointer-events: none; /* To prevent interactions with hidden navigation */
        }
    </style>
</head>
<body>
	<div class="wrapper">
		<div class="nav" id="navbar">
			<div class="logo">
				<h4>HealthiHer.</h4>
			</div>
			<div class="links">
				<a href="#landing" class="mainlink"> About</a>
				<a href="#about">Why take care</a>
				<a href="#infoSection-1">Low Risk</a>
                <a href="#infoSection-2">Medium Risk</a>
                <a href="#infoSection-3">High Risk</a>
				<a href="#banner">App</a>
                <a href="http://localhost:8501">Form</a>
                <a href="colorlib-regform-7/signin.php">Log in</a>
			</div>
		</div>
		<!--Landing Page-->
		<section id=landing>
		<div class="landing">
			<div class="landingText" data-aos="fade-up" data-aos-duration="1000">
				<h1>Welcome<span style="color:#e0501b;"> <?php include 'user.php'; ?></span> </h1>
				<h3><?php include 'display_results.php'; ?></h3>
                <h3><?php include 'get_user_id.php'; ?></h3>
				<div class="btn">
					<a href= "#about"> Learn More</a>
				</div>
			</div>
			<div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
				<img src="HealthiHer/img/landingimg.png" alt="">
			</div>
		</div>
		</section>
		<section id="about">
		<div class="about">	
			<div class="aboutText" data-aos="fade-left" data-aos-duration="1000">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Why is it Important that <br> <span style="color:#2f8be0;font-size:3vw">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You take care?</span></h1>
				<img src="HealthiHer/img/index_image_2.webp" alt="">
			</div>
			<div class="aboutList" data-aos="fade-left" data-aos-duration="1000">
                <ol>
                    <li> 
                        <span>01</span>
                         <p>Gestational diabetes is a type of diabetes that develops during pregnancy when the body can't produce enough insulin to regulate blood sugar effectively.</p>
                    </li>
                    <li>
						<span>02</span>
						<p>It typically occurs in the second or third trimester and usually resolves after the baby is born. </p>

					</li>
					<li>
						<span>03</span>
						<p>Risk factors include obesity, a family history of diabetes, and being over 25 years old.</p>
					</li>
					<li>
						<span>04</span>
						<p>Managing gestational diabetes involves a healthy diet, regular physical activity, blood sugar monitoring, and sometimes insulin injections to ensure both mother and baby remain healthy.</p>
					</li>
				</ol>
			</div>
		</div>
	</section>

	
    <!--  INFO SECTION -->
	<section id="infoSection-1">
        <div class="infoSection">
            <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
                <h1>Food and Exercises<br> <span style="color:#e0501b">If you're in low risk class</span> </h1>
            </div>
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/image1_0 (1).jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Non-Starchy Vegetables (e.g., broccoli, cauliflower, spinach)</h2>
                        <ul>
                            <li>Low in calories and carbohydrates</li>
                            <li>High in fiber and essential nutrients</li>
                            <li>Help maintain stable blood sugar levels</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/output.jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Lean Proteins (e.g., chicken breast, fish, tofu)</h2>
                        <ul>
                            <li>Provide essential amino acids</li>
                            <li>Help in muscle maintenance and repair</li>
                            <li>Support satiety and blood sugar control</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/greek yogurt.jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Greek Yogurt</h2>
                        <ul>
                            <li>High in protein and calcium</li>
                            <li>Contains probiotics for gut health</li>
                            <li>Low glycemic index food</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-1">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/lentils.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Lentils</h2>
                        <ul>
                            <li>Rich in plant-based protein and fiber</li>
                            <li>Help regulate blood sugar levels</li>
                            <li>Versatile in cooking (soups, salads, stews)</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/output\ \(2\).jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Berries (e.g., strawberries, blueberries, raspberries)</h2>
                        <ul>
                            <li>Low in natural sugars</li>
                            <li>Packed with antioxidants and vitamins</li>
                            <li>Support overall health and blood sugar balance</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/chia_seeds.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Chia Seeds</h2>
                        <ul>
                            <li>High in omega-3 fatty acids and fiber</li>
                            <li>Help stabilize blood sugar</li>
                            <li>Promote satiety</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-1">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/quinoa.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Quinoa</h2>
                        <ul>
                            <li>Complete protein with all essential amino acids</li>
                            <li>Low glycemic index</li>
                            <li>High in fiber and minerals</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/avacado.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Avocado</h2>
                        <ul>
                            <li>Rich in healthy monounsaturated fats</li>
                            <li>Supports heart health and blood sugar regulation</li>
                            <li>Provides essential vitamins and minerals</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/nuts and seeds.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Nuts and Seeds (e.g., almonds, walnuts, flaxseeds)</h2>
                        <ul>
                            <li>High in healthy fats and protein</li>
                            <li>Provide fiber and essential nutrients</li>
                            <li>Support long-lasting energy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-1">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e11.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Walking</h2>
                        <ul>
                            <li>Easy and accessible</li>
                            <li>Helps regulate blood sugar levels</li>
                            <li>Improves cardiovascular health</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e12.jpg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Prenatal Yoga</h2>
                        <ul>
                            <li>Enhances flexibility and relaxation</li>
                            <li>Supports mental well-being</li>
                            <li>Prepares the body for childbirth</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e13.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Swimming</h2>
                        <ul>
                            <li>Full-body, low-impact workout</li>
                            <li>Reduces stress on joints</li>
                            <li>Improves cardiovascular fitness</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-1">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e14.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Pelvic Floor Exercises (Kegels)</h2>
                        <ul>
                            <li>Strengthen pelvic floor muscles</li>
                            <li>Support urinary and reproductive health</li>
                            <li>Beneficial for labor and delivery</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e15.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Light Strength Training (with guidance)</h2>
                        <ul>
                            <li>Builds muscle strength</li>
                            <li>Improves insulin sensitivity</li>
                            <li>Supports healthy weight management</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e16.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Pilates</h2>
                        <ul>
                            <li>Strengthens core muscles</li>
                            <li>Enhances posture and flexibility</li>
                            <li>Low-impact and safe for pregnancy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-1">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e17.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Stationary Cycling</h2>
                        <ul>
                            <li>Low-impact cardiovascular exercise</li>
                            <li>Can be adjusted for intensity</li>
                            <li>Supports overall fitness</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e18.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Tai Chi</h2>
                        <ul>
                            <li>Gentle, flowing movements</li>
                            <li>Reduces stress and improves balance</li>
                            <li>Enhances mental clarity</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e19.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Water Aerobics</h2>
                        <ul>
                            <li>Low-impact, full-body exercise</li>
                            <li>Reduces joint stress</li>
                            <li>Improves cardiovascular health</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    

    <!--  INFO SECTION -->
	<section id="infoSection-2">
        <div class="infoSection">
            <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
                <h1>Food and Exercises<br> <span style="color:#e0501b">If you're in medium risk class</span> </h1>
            </div>
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f21.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Whole Grain Foods (e.g., whole wheat bread, brown rice, oats)</h2>
                        <ul>
                            <li>Provide sustained energy</li>
                            <li>High in fiber and nutrients</li>
                            <li>Help maintain stable blood sugar levels</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f22.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Apples</h2>
                        <ul>
                            <li>High in fiber and vitamins</li>
                            <li>Low to moderate glycemic index</li>
                            <li>Promote satiety and digestive health</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f23.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Carrots</h2>
                        <ul>
                            <li>Rich in beta-carotene and fiber</li>
                            <li>Low glycemic index</li>
                            <li>Support eye and skin health</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!--  INFO SECTION -->
	<section id="infoSection-2">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f24.avif'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Cottage Cheese</h2>
                        <ul>
                            <li>High in protein and calcium</li>
                            <li>Low in carbohydrates</li>
                            <li>Helps maintain muscle mass</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f25.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Sweet Potatoes</h2>
                        <ul>
                            <li>Rich in vitamins A and C, and fiber</li>
                            <li>Moderate glycemic index</li>
                            <li>Provide sustained energy</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f26.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Edamame</h2>
                        <ul>
                            <li>High in plant-based protein and fiber</li>
                            <li>Low glycemic index</li>
                            <li>Supports overall health</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-2">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f27.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Bell Peppers</h2>
                        <ul>
                            <li>Rich in vitamins A and C</li>
                            <li>Low in calories and carbohydrates</li>
                            <li>Support immune health</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f28.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Whole Grain Pasta</h2>
                        <ul>
                            <li>High in fiber and nutrients</li>
                            <li>Provides sustained energy</li>
                            <li>Helps regulate blood sugar levels</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f29.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Hummus</h2>
                        <ul>
                            <li>Made from chickpeas, rich in protein and fiber</li>
                            <li>Healthy fat content from olive oil</li>
                            <li>Versatile and nutritious dip or spread</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-2">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e21.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Interval Training (with caution and supervision)</h2>
                        <ul>
                            <li>Alternates between high and low intensity</li>
                            <li>Boosts cardiovascular fitness</li>
                            <li>Improves insulin sensitivity</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e22.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Moderate Intensity Aerobic Exercise (e.g., brisk walking, cycling)</h2>
                        <ul>
                            <li>Enhances cardiovascular health</li>
                            <li>Helps manage weight</li>
                            <li>Improves mood and energy levels</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e23.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Circuit Training</h2>
                        <ul>
                            <li>Combines strength and aerobic exercises</li>
                            <li>Efficient full-body workout</li>
                            <li>Enhances muscle tone and cardiovascular health</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-2">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e24.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Low Impact Aerobics</h2>
                        <ul>
                            <li>Gentle on the joints</li>
                            <li>Improves cardiovascular fitness</li>
                            <li>Enhances coordination and balance</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e25.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Elliptical Training</h2>
                        <ul>
                            <li>Low-impact cardiovascular exercise</li>
                            <li>Can adjust resistance and intensity</li>
                            <li>Full-body workout</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e26.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Stability Ball Exercises</h2>
                        <ul>
                            <li>Improves core strength and balance</li>
                            <li>Supports flexibility</li>
                            <li>Low-impact and safe for pregnancy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-2">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e27.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Resistance Band Workouts</h2>
                        <ul>
                            <li>Strengthens muscles without heavy weights</li>
                            <li>Portable and versatile</li>
                            <li>Improves muscle tone</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e28.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Chair Yoga</h2>
                        <ul>
                            <li>Accessible for all fitness levels</li>
                            <li>Improves flexibility and relaxation</li>
                            <li>Supports mental well-being</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e29.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Stair Climbing</h2>
                        <ul>
                            <li>Enhances cardiovascular fitness</li>
                            <li>Strengthens lower body muscles</li>
                            <li>Can be done anywhere with stairs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    <!--  INFO SECTION -->
	<section id="infoSection-3">
        <div class="infoSection">
            <div class="infoHeader" data-aos="fade-up" data-aos-duration="1000">
                <h1>Food and Exercises<br> <span style="color:#e0501b">If you're in High risk class</span> </h1>
            </div>
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f31.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Portion-Controlled Fruit (e.g., small portions of berries, apples, citrus fruits)</h2>
                        <ul>
                            <li>Provides vitamins and fiber</li>
                            <li>Satisfies sweet cravings in a controlled manner</li>
                            <li>Helps maintain blood sugar levels</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f32.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Limited Portions of Whole Grains</h2>
                        <ul>
                            <li>Provides essential nutrients and fiber</li>
                            <li>Helps manage blood sugar with portion control</li>
                            <li>Supports sustained energy release</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f33.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Low Glycemic Index Foods</h2>
                        <ul>
                            <li>Prevents rapid blood sugar spikes</li>
                            <li>Provides long-lasting energy</li>
                            <li>Supports overall health</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--  INFO SECTION -->
	<section id="infoSection-3">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f34.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Green Tea</h2>
                        <ul>
                            <li>Contains antioxidants</li>
                            <li>Supports metabolism</li>
                            <li>May help regulate blood sugar levels</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f35.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Lean Cuts of Meat (e.g., skinless chicken, turkey)</h2>
                        <ul>
                            <li>High in protein, low in fat</li>
                            <li>Supports muscle maintenance</li>
                            <li>Helps keep blood sugar stable</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f36.avif'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Broccoli Sprouts</h2>
                        <ul>
                            <li>Rich in vitamins and antioxidants</li>
                            <li>Low in carbohydrates</li>
                            <li>Supports detoxification</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!--  INFO SECTION -->
	<section id="infoSection-3">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f37.webp'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Cauliflower Rice</h2>
                        <ul>
                            <li>Low in carbohydrates and calories</li>
                            <li>High in fiber and vitamins</li>
                            <li>Versatile substitute for regular rice</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f38.avif'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Zucchini</h2>
                        <ul>
                            <li>Low in calories and carbohydrates</li>
                            <li>High in vitamins and fiber</li>
                            <li>Supports digestive health</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/f39.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Cucumber</h2>
                        <ul>
                            <li>Very low in calories and carbohydrates</li>
                            <li>High in water content</li>
                            <li>Hydrating and refreshing/li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-3">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e31.avif'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Supervised Exercise Programs</h2>
                        <ul>
                            <li>Tailored to individual needs</li>
                            <li>Ensures safety and effectiveness</li>
                            <li>Provides professional guidance</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e32.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Gentle Stretching</h2>
                        <ul>
                            <li>Improves flexibility and reduces tension</li>
                            <li>Safe and low-impact</li>
                            <li>Enhances relaxation</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e33.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Chair Exercises</h2>
                        <ul>
                            <li>Accessible for limited mobility</li>
                            <li>Improves strength and flexibility</li>
                            <li>Low impact on joints</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-3">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e34.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Deep Breathing Exercises</h2>
                        <ul>
                            <li>Reduces stress and anxiety</li>
                            <li>Promotes relaxation</li>
                            <li>Supports mental well-being</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e35.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Balance Exercises</h2>
                        <ul>
                            <li>Enhances stability and prevents falls</li>
                            <li>Strengthens core muscles</li>
                            <li>Improves coordination</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e36.png'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Mindfulness-Based Stress Reduction (MBSR) Techniques</h2>
                        <ul>
                            <li>Combines mindfulness meditation and yoga</li>
                            <li>Reduces stress and improves mood</li>
                            <li>Enhances overall health</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--  INFO SECTION -->
	<section id="infoSection-3">
        <div class="infoSection">
            <div class="infoCards">
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e37.avif'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Water Walking</h2>
                        <ul>
                            <li>Low-impact, full-body exercise</li>
                            <li>Reduces joint stress</li>
                            <li>Enhances cardiovascular health</li>
                        </ul>
                    </div>
                </div>
                
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e38.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Meditation</h2>
                        <ul>
                            <li>Reduces stress and improves mental clarity</li>
                            <li>Promotes relaxation and mindfulness</li>
                            <li>Supports overall well-being</li>
                        </ul>
                    </div>
                </div>
                <div class="card one" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cardbgone" style="background-image: url('HealthiHer/img/e39.jpeg'); background-size: cover; background-position: center;" data-aos="fade-up" data-aos-duration="1100"></div>
                    <div class="cardContent">
                        <h2>Seated Resistance Band Exercises</h2>
                        <ul>
                            <li>Strengthens muscles without heavy weights</li>
                            <li>Low-impact and safe</li>
                            <li>Improves muscle tone and flexibility</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    
        <section id="banner">
        <div class="banner">
            <div class="bannerText" data-aos="fade-right" data-aos-duration="1000">
                <h1>How can you look after your Breathing practice?<br> <span style="font-size:1.6vw;font-weight:normal"  class="bannerInnerText">
                    Practicing meditation or breathing exercises can help a gestational diabetes patient reduce stress, which in turn can help manage blood sugar levels more effectively! Enjoy a <b>meditation session</b> on our <b> meditation app.</b><br>

                    <a class="js-scroll-trigger" href="app.html"> Get Started here! →</a>
                </span> </h1>
                
            </div>
            <div class="bannerImg" data-aos="fade-up" data-aos-duration="1000">
                <img src="HealthiHer/img/appimg.png" alt="">
            </div>
        </div>
        </section>

        <div class="footer">
            <h2>HealthCare.</h2>
            <div class="footerlinks">
                <a href="#landing" class="mainlink"> About</a>
                <a href="#about">Why take care</a>
                <a href="#infoSection-1">Low Risk</a>
                <a href="#infoSection-2">Medium Risk</a>
                <a href="#infoSection-3">High Risk</a>
                <a href="#banner">App</a>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        // Get the navigation bar
        var navbar = document.getElementById("navbar");

        // Get the initial offset position of the navbar
        var sticky = navbar.offsetTop;

        var lastScrollTop = 0;

        // Function to hide or show the navbar based on scrolling direction
        function toggleNavbar() {
            var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (currentScrollTop > lastScrollTop) {
                // Scrolling down
                navbar.classList.add("hidden-nav");
            } else {
                // Scrolling up
                navbar.classList.remove("hidden-nav");
            }

            lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
        }

        // Event listener to call the toggleNavbar function when the page is scrolled
        window.onscroll = function() {
            toggleNavbar();
        };
    </script>

</body>
</html>
