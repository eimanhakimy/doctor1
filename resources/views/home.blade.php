@extends('layouts.app')

<!-- font awesome cdn link -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

@section('content')
<section class="depan1" id="depan1"  style="background-image: url('path/to/your/image.jpg');">
    <div class="image">
        <img src="images\home-img.svg" alt="" class="img-fluid">
    </div>
    <div class="content">
		<h3>Welcome {{Auth()->user()->name}} !</h3>
        <h3>VetMedic Petlover Clinic</h3>
        <p>This is an online platform where you can easily book appointments for your pet with our trusted veterinary clinics, grooming salons, and other pet care providers.</p>
        <p>You want to book an appointment for your pet ? You can click book here button now.</p>
        <a href="http://127.0.0.1:8000/book-here" class="butanghome">Book Here<span class="fas fa-chevron-right"></span></a>
    </div>
</section>

<!-- home section ends -->

<!-- icons section starts -->

<section class="icons-container">
    <div class="iconhome">
        <i class="fas fa-user-md"></i>
        <h3>10+</h3>
        <p>Expect Vet Dctors</p>
    </div>

    <div class="iconhome">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied customer</p>
    </div>

    <div class="iconhome">
        <i class="fas fa-cat"></i>
        <h3>500+</h3>
        <p>Treated animals</p>
    </div>

    <div class="iconhome">
        <i class="fas fa-stethoscope"></i>
        <h3>10+</h3>
        <p>Services</p>
    </div>
</section>

<!-- icons section end here -->

<!-- services section starts -->

<<section class="services">
    <h1 class="headingHome">Our <span>Services</span></h1>

    <div class="box-containerhome">
        <div class="boxHome">
            <div class="box-content">
                <h3>Dog license service</h3>
                <p> To assists dog owners in obtaining the necessary license for their dogs</p>
            </div>
        </div>

        <div class="boxHome">
            <div class="box-content">
                <h3>24/7 Pet Taxi</h3>
                <p>With our pet taxi service, we ensure that your pet arrives at our clinic or any other destination in a stress-free and secure manner.</p>
            </div>
        </div>

        <div class="boxHome">
            <div class="box-content">
                <h3>Grooming</h3>
                <p>Our grooming services include breed-specific trims, nail trims, ear cleaning, dental hygiene, and more to keep your pet looking and feeling great.</p>
            </div>
        </div>

        <div class="boxHome">
            <div class="box-content">
                <h3>Surgery</h3>
                <p>Our vet clinic is equipped with state-of-the-art facilities and a skilled surgical team that performs a wide range of pet surgeries to address various medical conditions.</p>
            </div>
        </div>

        <div class="boxHome">
            <div class="box-content">
                <h3>Consultation</h3>
                <p>Our vet clinic provides comprehensive pet consultation services, where our experienced veterinarians offer expert guidance and advice on various aspects of pet care.</p>
            </div>
        </div>

        <div class="boxHome">
            <div class="box-content">
                <h3>Preventive care</h3>
                <p>Preventive care services offered at our vet clinic include vaccinations, parasite control, dental care, nutrition counseling, weight management, and routine health screenings.</p>
            </div>
        </div>
    </div>
</section>

<!-- services section end here -->
 
<!-- about section start -->
 
<section class="about" id="about">

    <h1 class="headingHome"><span>about</span> us </h1>

    <div class="rowAbout">
        <div class="image">
            <img src="images\about-img.svg" alt="" class="img-fluid">
        </div>
        <div class="content">
            <h3>What is VetMedic PetLover</h3>
            <p>VetMedic PetLover Vet Clinic is a renowned veterinary clinic with locations in Taman Impian Emas, Skudai, Johor. Our clinics are staffed with highly skilled and experienced veterinarians who are dedicated to providing exceptional care for your beloved pets.</p>
			<p>Our team of expert doctors not only possesses extensive knowledge in veterinary medicine but also demonstrates a genuine love for animals. Rest assured that your pet will receive the best possible treatment and care from our compassionate and skilled professionals.</p>
			<p>Visit VetMedic PetLover Vet Clinic in Taman Impian Emas, Skudai, Johor, and experience the highest level of veterinary care from our experienced and dedicated team. We look forward to serving you and your beloved pets with utmost care and professionalism.</p>
            <a href="https://www.facebook.com/vetmedicpetlover/" class="butanghome">Visit Our Facebook Page<span class="fas fa-chevron-right"></span></a>
        </div>
    </div>
        
    
</section>


<!-- about section end -->

<!-- doctors section start -->
<section class="doctors" id="doctors">
	<h1 class="headingHome"> our <span>doctors</span> </h1>
	<div class="box-containerhome">
		<div class="boxHome">
			<img src="images/Dr.Baru1.jpg" alt="" class="img-fluid">
			<h3>Dr.Dhammick Shinde PT</h3>
			<span>Founder</span>
			<div class="share">
				<a href="#" class="fab fa-facebook-f"></a>
				<a href="#" class="fab fa-twitter"></a>
				<a href="#" class="fab fa-instagram"></a>
				<a href="#" class="fab fa-linkedin"></a>
			</div>
		</div>

		<div class="boxHome">
			<img src="images/DrBaru2.jpg" alt="" class="img-fluid">
			<h3>Dr.Yogita Pawar PT</h3>
			<span>Co-Founder</span>
			<div class="share">
				<a href="#" class="fab fa-facebook-f"></a>
				<a href="#" class="fab fa-twitter"></a>
				<a href="#" class="fab fa-instagram"></a>
				<a href="#" class="fab fa-linkedin"></a>
			</div>
		</div>

		<div class="boxHome">
			<img src="images/DrBaru3.jpg" alt="" class="img-fluid">>
			<h3>Dr. Manisha T Vishwa PT</h3>
			<span>Co-Founder</span>
			<div class="share">
				<a href="#" class="fab fa-facebook-f"></a>
				<a href="#" class="fab fa-twitter"></a>
				<a href="#" class="fab fa-instagram"></a>
				<a href="#" class="fab fa-linkedin"></a>
			</div>
		</div>


	</div>
</section>

<!-- doctors section end -->

<!-- Client Review -->
<section class="review" id="review">
	<h1 class="headingHome"> client's <span>review</span> </h1>
	<div class="box-containerHome">
		<div class="boxHome">
			<img src="images/client1_review.jpg" alt="">
			<h3>Anne Nab Shadan</h3>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<p class="text">alhamdulillah.. servis terbaik n staff n doc so friendly.. yg bagus nye doc penerangan so detail.. so mana yg tak tahu pasal kucing tu doc akan terangkn lah ape yg  patut.. tempat pn selesa. 5star</p>
		</div>

		<div class="boxHome">
			<img src="images/client2.jpg" alt="">
			<h3>Shi Lang</h3>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
			</div>
			<p class="text">Brought 6 furkids for their first vaccination today and was served by the friendly Doctor Mazleen. Price point is very competitive and reasonable. Definitely will be a regular customer !</p>
		</div>

		<div class="boxHome">
			<img src="images/client3.jpg" alt="">
			<h3>Shayin Hj Yunos</h3>
			<div class="stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<p class="text">Great service and good consultation from Dr Laili👍👍👍👍👍 friendly staff..would definitely recommend to anyone who looking for vet services..</p>
		</div>

	</div>
</section>
<!-- CLient Review End -->

<!-- blog section start -->
<section class="blogs" id="blogs">
	<h1 class="headingHome"> our <span>blogs</span> </h1>
	<div class="box-containerHome">
		<div class="boxHome">
			<div class="image">
				<img src="images/blog-1.jpg" alt="">
			</div>
			<div class="content">
				<div class="icon">
					<a href="#">
						<i class="fas fa-calendar"></i>
						1st May, 2022
					</a>
					<a href="#">
						<i class="fas fa-user"></i>
						by Dr.Dhammick Shinde</a>
				</div>
				<h3>Top 10 stretches to do in your late 20's for healthy living.</h3>
				<p></p>
				<a href="/blogs" class="butanghome" id="Review1">
					Learn more
					<span class="fas fa-chevron-right"></span>
				</a>
			</div>
		</div>
		<div class="boxHome">
			<div class="image">
				<img src="images/blog-2.jpg" alt="">
			</div>
			<div class="content">
				<div class="icon">
					<a href="#">
						<i class="fas fa-calendar"></i>
						22nd July, 2022
					</a>
					<a href="#">
						<i class="fas fa-user"></i>
						by Dr.Yogita Pawar
					</a>
				</div>
				<h3>Best Excercises for an Indian housewife to stay healthy &amp;
					fit.</h3>
				<p></p>
				<a href="/blogs" class="butanghome" id="Review2">
					Learn more
					<span class="fas fa-chevron-right"></span>
				</a>
			</div>
		</div>
		<div class="boxHome">
			<div class="image">
				<img src="images/blog-3.jpg" alt="">
			</div>
			<div class="content">
				<div class="icon">
					<a href="#">
						<i class="fas fa-calendar"></i>
						13 Aug, 2022
					</a>
					<a href="#">
						<i class="fas fa-user"></i>
						by Dr.Manisha Vishwa
					</a>
				</div>
				<h3>Cardiopulmonary Resuscitation (CPR)</h3>
				<p></p>
				<a href="/blogs" class="butanghome" id="Review3">
					Learn more
					<span class="fas fa-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- blog section end -->

<!-- Link your external CSS file -->
<link href="{{ asset('public\css\app.css') }}" rel="stylesheet">
@endsection
