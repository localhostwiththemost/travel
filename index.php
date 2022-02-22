<!DOCTYPE html>

<?php
$message_sent = false;

if(isset($_POST['firstname']) && $_POST['firstname'] !='') {
if(isset($_POST['lastname']) && $_POST['lastname'] !='') {
if(isset($_POST['email']) && $_POST['email'] !='') {
if(isset($_POST['phone']) && $_POST['phone'] !='') {
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {

$userFirstname = $_POST['firstname'];
$userLastname = $_POST['lastname'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];
$userJourney = $_POST['journey'];
$userDestination = $_POST['destination'];
$userOtherinfo = $_POST['otherinfo'];
$messageSubject = "New UNTR Customer";

$to = "sales@theuntroubledtraveller.com";
$body = "";

$body .= "From: ".$userFirstname. "\r\n";
$body .= "From: ".$userLastname. "\r\n";
$body .= "Email: ".$userEmail. "\r\n";
$body .= "Phone: ".$userPhone. "\r\n";
$body .= "Journey: ".$userJourney. "\r\n";
$body .= "Destination: ".$userDestination. "\r\n";
$body .= "Other Info: ".$userOtherinfo. "\r\n";

mail($to, $messageSubject, $body);

$message_sent = true;

} else {
  $invalid_class_name = "form-invalid";
}
}
}
}
}
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The Untroubled Traveller offers our personally curated travel services to you. From luxury river and ocean cruises to small group guided tours to personal bucket list vacations, our goal is to provide you a seamless and effortless travel experience." />
    <meta name="theme-color" content="#e7e0dc" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Licorice&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet" />

    <title>The Untroubled Traveller | Travel Agency</title>
  </head>
    
  <body>
        <?php
      if($message_sent):
        ?>
   <body class="thanks-bg">
     <div class="contact-form-thanks u-margin-top-big u-margin-bottom-big u-center-text">
      <h2 class="heading-secondary__thanks u-margin-bottom-small">Thanks, we'll be in touch</h2>
      <div class="u-center-text">
        <a href="index.php" class="btn-text">Return to home page</a>
      </div>
    </div>
      </body>

    <?php
      else:
      ?>  
  <header class="header" id="home">
      <nav>
          <div class="flex-container flex-container__nav">
          <ul class="main-nav">
            <li>
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#mission">Services</a>
            </li>
            <li>
              <a href="#contact">Get Started</a>
            </li>
            <!--
            <li>
              <a href="#testimonials">Testimonials</a>
            </li>
          -->
          </ul>
        </div>
      </nav>

      <div class="header__text-box">
        <h1 class="heading-primary">
          <span class="heading-primary--main">The Untroubled Traveller</span>
          <div class="img-container">
            <img
              src="img/compassrose-min.webp"
              class="img-container__compassimg"
              alt="An image of a compass"
              />
          </div>
          <span class="heading-primary--sub">Go make memories!</span>
        </h1>
        <a href="#contact" class="btn-main btn-main__white btn-main__animated"
          >Start planning now</a
        >
      </div>
    </header>

    <main>
      <section class="section-cards js--section-cards">
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">Our Affiliates</h2>
        </div>
        
        <div class="row">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">&nbsp;</div>
                <h3 class="card__heading">
                  <span class="card__heading-span card__heading-span--1">
                    Cruises
                  </span>
                </h3>
                <div class="card__details">
                  <p>
                    We specialize in Ocean, River and Expedition cruises
                    Worldwide
                  </p>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-1">
                <div class="card__companylist-grey">
                        <ul>
                          <li>Celebrity</li>
                          <li>Viking</li>
                          <li>Holland America</li>
                          <li>Norwegian</li>
                          <li>Royal Caribbean</li>
                          <li>Hurtigruten</li>
                          <li>Princess</li>
                          <li>UnCruise Adventures</li>
                        </ul>
                  <a
                    href="#contact"
                    class="
                      btn-card btn-card__white btn-card__animated
                      card__cta
                    "
                    >Contact Us</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--2">&nbsp;</div>
                <h3 class="card__heading">
                  <span class="card__heading-span card__heading-span--2">
                    Tours
                  </span>
                </h3>
                <div class="card__details">
                  <p>We feature Luxury small group and Private guided tours</p>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-2">
                <div class="card__companylist-grey">
                  <ul>
                    <li>Insight</li>
                    <li>Globus</li>
                    <li>Trafalgar</li>
                    <li>Collette</li>
                    <li>Alexander + Roberts</li>
                    <li>Classic Vacations</li>
                    <li>Abercrombie and Kent</li>
                    <li>Tauck</li>
                    <li>Brendan Vacations</li>
                  </ul>
                <a
                  href="#contact"
                  class="btn-card btn-card__white btn-card__animated card__cta"
                  >Contact Us</a
                >
              </div>
            </div>
          </div>
        </div>

          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--3">&nbsp;</div>
                <h3 class="card__heading">
                  <span class="card__heading-span card__heading-span--3">
                    Vacations
                  </span>
                </h3>
                <div class="card__details">
                  <p>Luxury resorts from Beaches to Mountains to City Center</p>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back-3">
                <div class="card__companylist-grey">
                  <ul>
                    <li>Context Tours</li>
                    <li>Backroads</li>
                    <li>Rocky Mountaineer</li>
                    <li>African Travel</li>
                    <li>Disney</li>
                    <li>Universal Studios</li>
                    <li>Air / Rail / Car</li>
                    <li>All Inclusive Resorts</li>
                    <li>Travel Insurance</li>
                  </ul>
                  <a
                    href="#contact"
                    class="
                      btn-card btn-card__white btn-card__animated
                      card__cta
                    "
                    >Contact Us</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<!--<section class="section-logos"></section>-->

      <section class="section-mission" id="mission">
        <div class="curve-space"></div>
        
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">Travel Untroubled</h2>
        </div>

        <div class="u-center-text u-margin-bottom-medium">
          <p class="section-intro section-intro__mission">
            Personally curated Travel Services. From luxury river and ocean
            cruises to small group guided tours to personal bucket list
            vacations, our goal is to provide a seamless and effortless travel
            experience for you. Just click below to get started.
          </p>
        </div>
      
      <div class="row">
        <div class="col-1-of-2">
          <div class="feature-1">
            <div class="feature-textbox">
            <h3 class="heading-tertiary">International Travel Guidance</h3>
          <p class="p-feature">
            Let us plan your next adventure! Whether you prefer city centers, submerged in the hustle and bustle of the locals or you like to go off the beaten path and delve into the true nature of a place, we will get you there and back again without a hitch. Travel Untroubled.
          </p>
          </div>  
        </div>
        </div>
        <div class="col-1-of-2">
          <div class="feature-2">
            <div class="feature-textbox">
            <h3 class="heading-tertiary">Cruise and Tour Planning</h3>
            <p class="p-feature">We are certified specialists in every luxury river and ocean cruise line and all the most trusted guided tour companies. Travel with confidence. Travel Untroubled.</p>
          </div>
          </div>
        </div>
      </div>
      
      <div class="wave-offwhite">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
    </div>
    </section>

      <section class="section-contact" id="contact">
        <div class="curve-space"></div>
        
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">Join Us</h2>
        </div>
        <div class="u-center-text u-margin-bottom-medium">
          <h3 class="heading-tertiary">Get Started Now</h3>
        </div>
      
        <div class="contact-form-container">
          <form
            method="POST"
            action="index.php"
            class="form"
            name="contact-form"
          >
            <div class="form__group">
              <input
                type="text"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="First Name"
                autocomplete="off"
                id="firstname"
                name="firstname"
                required
              />
              <!--The label and input are connected thru the id and for properties. Both must have the same value(name)-->
              <label for="firstname" class="form__label">First Name</label>
            </div>

            <div class="form__group">
              <input
                type="text"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="Last Name"
                autocomplete="off"
                id="lastname"
                name="lastname"
                required
              />
              <label for="lastname" class="form__label">Last Name</label>
            </div>

            <div class="form__group">
              <input
                type="email"
                inputmode="email"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="Email"
                autocomplete="off"
                id="email"
                name="email"
                required
              />
              <label for="email" class="form__label">Email Address</label>
            </div>
            
            <div class="form__group">
              <input
                type="number"
                inputmode="numeric"
                class="form__input <?= $invalid_class_name ?? "" ?>"
                placeholder="Phone"
                autocomplete="off"
                id="phone"
                name="phone"
                required
              />
              <label for="phone" class="form__label">Phone Number</label>
            </div>

            <div class="form__group flex-container flex-container__form">
              <label for="journey" class="form__textarea-label"
                >Type of Journey</label
              >
              <textarea
                class="form__textarea"
                rows="3"
                cols="50"
                name="journey"
                placeholder="Cruise, Guided Tour, Air and Hotel, Custom Vacation Package"
              ></textarea>
            </div>

            <div class="form__group flex-container flex-container__form">
              <label for="destination" class="form__textarea-label"
                >Destination</label
              >
              <textarea
                class="form__textarea"
                rows="3"
                cols="50"
                name="destination"
                placeholder="Ocean, River, Americas, Europe, Asia, Africa, Antarctica"
              ></textarea>
            </div>

            <div class="form__group flex-container flex-container__form">
              <label for="otherinfo" class="form__textarea-label"
                >Other Helpful Information</label
              >
              <textarea
                class="form__textarea"
                rows="3"
                cols="50"
                name="otherinfo"
                placeholder="Dates of Travel, Who is Going, Duration of Travel, Cruise or Tour Provider, etc."
              ></textarea>
            </div>

            

            <div class="row u-margin-top-medium u-center-text">
              <button
                class="btn-main btn-main__blue btn-main__animated form__btn"
                type="submit"
                name="submit"
              >
                Submit &#x27A2;
              </button>
            </div>
          </form>
          <div class="wave-mocha">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div> 
      </section>
    <!--
      <section class="section-testimonials" id="testimonials">
        <div class="curve-space--big"></div>
        
        <div class="u-center-text u-margin-bottom-medium">
          <h2 class="heading-secondary">What are our Clients saying?</h2>
        </div>
        <div class="u-center-text u-margin-bottom-medium">
          <h3 class="heading-tertiary">We love to hear from you!</h3>
        </div>
          </div>

        <div class="row">
          <div class="col-1-of-3">
          <div class="client">
            <figure>
              <p class="u-margin-bottom-medium">
                "I would have been lost without you all! I could never have planned these 10 days in S.E. Asia myself and been so confident. You all thought of everything from transfers and luggage handling to the wonderful private guided tours of the cultural sites. Thank you for everything!"</p>
              <figcaption>Len M.</figcaption>
            </figure>
          </div>
          </div>
          <div class="col-1-of-3">
            <div class="client">
              <figure>
                <p class="u-margin-bottom-medium">
                  "Best Cruise Ever!! You were so right about the deck and cabin position, I never heard a sound in the hallway and it saved what seemed like miles of walking to get to the restaurants and sundeck. I am ready to go again tomorrow!"</p>
                <figcaption>Jeanie G.</figcaption>
              </figure>
            </div>
          </div>  
          <div class="col-1-of-3">
            <div class="client">
              <figure>
                <p class="u-margin-bottom-medium">
                  "I just wanted to say thank you for giving me the confidence to take my first trip abroad "solo". It took me years to work up the courage and you made every thing so easy! I never felt insecure or uncertain about where I was going or what was going to happen when I got there... Thank you for the gift of self-confidence."</p>
                <figcaption>Marisol S.</figcaption>
              </figure>
            </div>
          </div>
        </div>
      
        <div class="wave-offwhite">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
      </div>
      </section>
    -->

    <section class="section-aboutus">
      <div class="curve-space--big"></div>

      <div class="u-center-text u-margin-bottom-medium">
        <h2 class="heading-secondary heading-secondary__aboutus">About Us</h2>
      </div>

      <div class="flex-container flex-container__aboutus u-margin-bottom-big">
        <img src="img/steve-min.webp" class="aboutus-img" alt="An image of Steve" />
        <div class="aboutus-caption">
          <h3 class="heading-tertiary u-margin-bottom-small">Steve</h3>
          <p>
            Steve started as a full-time agent in the travel industry in 2014, specializing in luxury ocean and river cruises in the Mediterranean, Caribbean, Europe, Asia and Antarctica. He has extensive knowledge of guided tour packages in the US and worldwide for families, couples and solo travellers. If you are looking to book a larger group on a tour or cruise, he has the experience and the connections to get your group the pricing, amenities and perks that you want. This level of experience and service is priceless, but the quotes are free.
          </p>
        </div>
      </div>
    
      <div class="flex-container flex-container__aboutus">
        <img src="img/kim-min.webp" class="aboutus-img" alt="An image of Kim" />
        <div class="aboutus-caption">
          <h3 class="heading-tertiary u-margin-bottom-small">Kimberly</h3>
        <p>Kimberly has always loved travel, books, and learning as much about the world as she can. Family vacations in her youth, along with studying abroad in college, gave her a lust for learning about new places and cultures, and seeing the world. Her time as a wife of 28 years, and the mother of two incredible children, has taught her the value of time spent together, making memories that will last a lifetime. After spending years as an educator, non-profit coordinator, and mom, she has decided to combine her love of cultures and the attention to detail learned in her work, to creating incredible, personalized travel experiences for her clients. She is currently certified with several cruise lines, and continues to throw her love of learning into gaining more travel knowledge and certifications to help you, the traveler plan your excursion and  GO MAKE MEMORIES!</p>
        </div>
      </div>
    <!--
      <div class="wave-aboutus">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
            <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
            <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
        </svg>
    </div>
  -->  
  </section>
    </main>

    <footer class="footer">
      <div class="row social">
        <div class="social__navigation">
          <ul class="social__list">
            <li class="social__item">
              <a
                href="https://www.facebook.com/theuntroubledtraveller"
                target="_blank"
                rel="noopener"
                class="social__link"
                ><ion-icon name="logo-facebook"></ion-icon
              ></a>
            </li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="flex-container flex-container__footer">
          <div class="footer__navigation flex-container__footer--item">
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#home" class="footer__link">Home</a>
              </li>
              <li class="footer__item">
                <a href="#mission" class="footer__link">Services</a>
              </li>
              <li class="footer__item">
                <a href="#contact" class="footer__link">Get Started</a>
              </li>
              <!--
              <li class="footer__item">
                <a href="#testimonials" class="footer__link">Testimonials</a>
              </li>
            -->
            </ul>
          </div>
        

          <p class="footer__copyright">
            Built by <a href="https://developerjoe.io/" class="footer__link">Joseph Powell</a>; &nbsp;
            a Houston-based frontend developer.
          </p>
      </div>
        </div>
    </footer>


    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/script.js"></script>
  
    <?php
    endif;
    ?>
  </body>
</html>
