<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Portfolio Website</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: "poppins", sans-serif;
}

:root {
    --bg-color: #080808;
    --second-bg-color: #131313;
    --text-color: white;
    --main-color: #00ffee;
}

html {
    font-size: 60%;
    overflow-x: hidden;
}

body {
    background: var(--bg-color);
    color: var(--text-color);
}

.header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 4rem 12% 4rem;
    background: rgba(0, 0, 0, 0.3);
    backdrop-filter: blur(10px);
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 5;
}

.logo {
    font-size: 3rem;
    color: var(--text-color);
    font-weight: 800;
    cursor: pointer;
    transition: 0.3s ease;    
}

.logo:hover {
    transform: scale(1.1);
}

.logo span {
    text-shadow: 0 0 25px var(--main-color);
}

.navbar a{
    font-size: 1.8rem;
    color: var(--text-color);
    margin-left: 4rem;
    font-weight: 500;
    transition: 0.3s ease;
    border-bottom: 3px solid transparent;

}

.navbar a:hover,
.navbar a:active {
    color: var(--main-color);
    border-bottom: 3px solid var(--main-color);
}

#menu-icon {
    font-size: 3.6;
    color: var(--main-color);
    display: none;
}

section {
    min-height: 100vh;
    padding: 10rem 12% 10rem;
}

.home {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 15rem;
}

.home-content {
    display: flex;
    flex-direction: column;
    align-items: baseline;
    text-align: left;
    justify-content: center;
    margin-top: 3rem;
}

span {
    color: var(--main-color);

}

.logo span {
    color: var(--main-color);

}

.home-content h3 {
    margin-bottom: 2rem;
    margin-top: 1rem;
    font-size: 3.5rem;
}

.home-content h1 {
    font-size: 7rem;
    font-weight: 700;
    margin-top: 1.5rem;
    line-height: 1;
}

.home-img {
    border-radius: 50%;
}

.home-img img {
    position: relative;
    top: 3rem;
    width: 32vw;
    border-radius: 50%;
    box-shadow: 0 0 25px var(--main-color);
    cursor: pointer;
    transition: 0.4s ease-in-out;
}
.home-img img:hover {
    box-shadow: 0 0 25px var(--main-color),
                0 0 50px var(--main-color)
                0 0 100px var(--main-color);
}

.home-content p {
    font-size: 1.5rem;
    font-weight: 500;
    line-height: 1.8;
    max-width: 1000px;
}

.social-icons a{
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 4.5rem;
    height: 4.5rem;
    background: transparent;
    border: 2px solid var(--main-color);
    font-size: 2.5rem;
    border-radius: 50%;
    color: var(--main-color);
    margin: 3rem 1.5rem 3rem 0;
    transition: 0.3s ease-in-out;
}

.social-icons a:hover {
    color: var(--text-color);
    transform: scale(1.3)translateY(-5px);
    box-shadow: 0 0 25px var(--main-color);
    background-color: var(--main-color);
}

.btn {
    display: inline;
    padding: 1rem 2.8rem;
    background: var(--main-color);
    box-shadow: 0 0 25px --main-color;
    border-radius: 4rem;
    font-size: 1.6rem;
    color: black;
    border: 2px solid transparent;
    letter-spacing: 0.1rem;
    font-weight: 600;
    transition: 0.3s ease-in-out;
    cursor: pointer;
}

.btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 50px var(--main-color);

}

.btn-group {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.btn-group a:nth-of-type(2){
    background-color: black;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    box-shadow: 0 0 25px transparent;
}

.btn-group a:nth-of-type(2):hover {
    box-shadow: 0 0 25px var(--main-color);
    background-color: var(--main-color);
    color: black;
}

.text-animation {
    font-size: 34px;
    font-weight: 600;
    min-width: 280px;
}

.text-animation span {
    position: relative;
}

.text-animation span::before {
    content: "web Developer";
    color: var(--main-color);
    animation: words 20s infinite;
}

.text-animation span::after {
    content: "";
    background-color: var(--bg-color);
    position: absolute;
    width: calc(100% + 8px);
    height: 100%;
    border-left: 3px solid var(--bg-color);
    right: -8px;
    animation: cursor 0.6s infinite, typing 20s steps(14) infinite;
}

@keyframes cursor {
    to{
        border-left: 2px solid var(--main-color);
    }
}

@keyframes words {
    0%,
    20%{
        content: "Reeler";
    }
    21%,
    40%{
        content: "Web Designer";
    }
    41%,
    60%{
        content: " An Artist";
    }
    61%,
    80%{
        content: "Content Creater";
    }
    81%,
    100%{
        content: "Memer";
    }
}

@keyframes typing {
    10%,
    15%,
    30%,
    35%,
    55%,
    70%,
    75%,
    90%,
    95%{
        width: 0;
    }
    5%,
    20%,
    25%,
    40%,
    45%,
    60%,
    65%,
    80%,
    85%{
        width: calc(100% + 8px);
    }
}

.heading {
    font-size: 8rem;
    text-align: center;
    margin: 5rem 0;
}

.education {
    padding: 100px 15px;
    background: var(--second-bg-color);
}

.education h2 {
    margin-bottom: 5rem;
}

.timeline-items{
    max-width: 1200px;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    position: relative;
}

.timeline-items::before {
    content: "";
    position: absolute;
    width: 5px;
    height: 100%;
    background-color: var(--main-color);
    left: calc(50% - 1px);
}

.timeline-item {
    margin-bottom: 40px;
    width: 100%;
    position: relative;
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-item:nth-child(odd) {
    padding-right: calc(50% + 30px);
    text-align: right;
}

.timeline-item:nth-child(even) {
    padding-left: calc(50% + 30px);
}

.timeline-dot {
    height: 21px;
    width: 21px;
    background-color: var(--main-color);
    box-shadow: 0 0 25px var(--main-color),
                0 0 50px var(--main-color);
    position: absolute;
    left: calc(50% - 8px);
    border-radius: 50%;
    top: 10px;
}

.timeline-date {
    font-size: 20px;
    font-weight: 800;
    color: white;
    margin: 6px 0 15px;
}

.timeline-content {
    background-color: var(--bg-color);
    border: 3px solid var(--main-color);
    padding: 30px 50px;
    border-radius: 4rem;
    box-shadow: 0 0 10px var(--main-color);
    cursor: pointer;
    transition: 0.3s ease-in-out;
}

.timeline-content:hover {
    transform: scale(1.05);
    box-shadow: 0 0 25px var(--main-color);
}

.timeline-content h3 {
    font-size: 20px;
    color: white;
    margin: 0 0 10px;
    font-weight: 500;
}

.timeline-content p {
    color: white;
    font-size: 16px;
    font-weight: 300;
    line-height: 22px;
    text-align: justify;
}

::-webkit-scrollbar {
    width: 15px;
}

::-webkit-scrollbar-thumb {
    background-color: var(--main-color);
}

::-webkit-scrollbar-track {
    background-color: var(--bg-color);
    width: 50px;
}

.creativework {
    background: var(--bg-color);
    color: black;
}

.creativework h2 {
    margin-bottom: 5rem;
    color: white;
}

.creativework-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    gap: 2.5rem;
}

.creativework-box {
    background-color: var(--main-color);
    height: 300px;
    border-radius: 3rem;
    border: 5px solid transparent;
    cursor: pointer;
    transition: 0.4s ease-in-out;
}

.creativework-box:hover {
    background: white;
    color: black;
    border: 5px solid var(--main-color);
    transform: scale(1.03);
}

.creativework-box .creativework-info {
    display: flex;
    flex-direction: column;
    text-align: left;
    max-height: 200px;
    justify-content: left;
    align-items: baseline;
    padding: 5rem 5rem;
}

.creativework-info h4 {
    font-size: 3rem;
    font-weight: 800;
    line-height: 2;
}

.creativework-info p {
    font-size: 1.35rem;
    font-weight: 600;
    max-width: 1000px;
    line-height: 1.7;
    margin: auto;
}

.skills {
    background: var(--second-bg-color);
}

.skills-box {
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.skills .heading {
    margin-bottom: 5rem;
}

.skills-box img {
    width: 15rem;
    border-radius: 50%;
    border: 3px solid var(--main-color);
    box-shadow: 0 0 25px var(--main-color)
}

.wrapper {
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 3rem;
}

.skills-item {
    min-height: 350px;
    max-width: 450px;
    background: rgba(0, 0, 0, 0.7);
    border: 3px solid rgba(238, 238, 238, 0.2);
    border-radius: 2rem;
    margin: 0 2rem;
    padding: 30px 60px;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    gap: 1.5rem;
    color: white;
    transition: 0.4s ease-in-out;
}

.skills-item:hover {
    border: 3px solid var(--main-color);
    transform: translateY(-10px)scale(1.03);
    box-shadow: 0 0 50px var(--main-color);
}

.skills-items h2 {
    font-size: 2.8rem;
}

.skills-items p {
    font-size: 1.3rem;
}

#star {
    color: gold;
    font-size: 2rem;
}

.contact {
    background-color: var(--bg-color);
}

.contact h2 {
    margin-bottom: 3rem;
    color: white;
}

.contact form {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 3rem;
    margin: 5rem auto;
    text-align: center;
}

.contact form .input-box {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.contact form .input-box input ,
.contact form textarea {
    width: 100%;
    padding: 2.5rem;
    font-size: 1.8rem;
    color: var(--text-color);
    background: var(--bg-color);
    border-radius: 2rem;
    border: 2px solid var(--main-color);
    margin: 1.5rem 0;
    resize: none;
}

.contact form .btn {
    margin-top: 2rem;
}

.footer {
    position: relative;
    bottom: 0;
    width: 100%;
    padding: 40px 0;
    background-color: var(--second-bg-color);
}

.footer .social {
    text-align: center;
    padding-bottom: 25px;
    color: var(--main-color);
}

.footer .social a {
    font-size: 25px;
    color: var(--main-color);
    border: 2px solid var(--main-color);
    width: 42px;
    height: 42px;
    line-height: 42px;
    display: inline-block;
    text-align: center;
   border-radius: 30%;
    margin: 0 10px;
    transition: 0.3s ease-in-out
}

.footer .social a:hover {
    transform: scale(1.2)translateY(-10px);
    background-color: var(--main-color);
    color: black;
    box-shadow: 0 0 25px var(--main-color);
}

.footer .copywrite {
    margin-top: 50px;
    text-align: center;
    font-size: 16px;
    color: white;
}

#heart {
    color: red;
    font-size: 1.5rem;

}
/* Responsive Design for Tablets and Phones */
@media (max-width: 1024px) {
    html {
        font-size: 55%;
    }

    .home {
        flex-direction: column;
        text-align: center;
        gap: 5rem;
    }

    .home-content {
        align-items: center;
    }

    .home-img img {
        width: 50vw;
    }

    .wrapper {
        grid-template-columns: repeat(2, 1fr);
    }

    .creativework-container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    html {
        font-size: 50%;
    }

    .header {
        padding: 3rem 5%;
    }

    .navbar {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.9);
        padding: 2rem;
    }

    .navbar.active {
        display: flex;
    }

    #menu-icon {
        display: block;
        cursor: pointer;
    }

    .home {
        flex-direction: column;
        gap: 3rem;
    }

    .timeline-items::before {
        left: 8px;
    }

    .timeline-item {
        padding-left: 30px !important;
        text-align: left !important;
    }

    .timeline-item:nth-child(odd),
    .timeline-item:nth-child(even) {
        padding-left: 30px;
        padding-right: 0;
    }

    .timeline-dot {
        left: 0;
    }

    .wrapper {
        grid-template-columns: 1fr;
    }

    .skills-item {
        margin: 2rem 0;
    }
}

@media (max-width: 480px) {
    .home-content h1 {
        font-size: 4.5rem;
    }

    .home-content h3 {
        font-size: 2.5rem;
    }

    .text-animation {
        font-size: 2.2rem;
    }

    .heading {
        font-size: 5rem;
    }

    .home-img img {
        width: 70vw;
    }

    .creativework-info h4 {
        font-size: 2rem;
    }

    .creativework-info p {
        font-size: 1.1rem;
    }

    .contact form {
        flex-direction: column;
    }

    .btn-group {
        flex-direction: column;
        gap: 1rem;
    }
}


    </style>
</head>
<body>
    <header class="header">
        <a href="#home" class="logo">Vikas <span>Gunagi</span></a>
        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#education">Education</a>
            <a href="#creativework">Creative Work</a>
            <a href="#skills">Skills</a>
            <a href="#contacts">Contacts</a>
            
        </nav>

    </header>

    <section class="home" id="home">
        <div class="home-content">
            <h1>Hi, It's <span>Vikas</span> </h1>
            <h3 class="text-animation">I'm a <span></span></h3>
            <p>Hello, my name is Vikas Gunagi. I am currently a student at Canara Engineering College, pursuing Information scirnce and enginerring Branch. 
                I have a strong interest in software development, such as Coding, web developing and designing etc. and I am actively working 
                on building my skills in this area. In addition to academics, I enjoy playing Volleyball, coding, Drawings and making reels on instagram 
                of my own content, to become a content creator is also one of my dream. I look forward to learning and contributing
                 through collaborative opportunities.</p>
                <div class="social-icons">
                    <a href="https://www.linkedin.com/in/vikas-gunagi-33ba48298?utm_source=share&utm_campaign=share_via&utm_
                    content=profile&utm_medium=android_app "><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="https://www.instagram.com/vikas_gunagi/"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="https://youtube.com/@vikasgunagi12?si=b9J_tB2gzX7RECA-"><i class='bx bxl-youtube'></i></a>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn">Hire</a>
                    <a href="#contact" class="btn">Contact</a>
                </div>
            </div>

                <div class="home-img">
                    <img src="vikasgunagi1.jpg" alt="" height="500px" width="500px">
                </div>
        
    </section>

    <section class="education" id="education">
        <h2 class="heading">Education</h2>

        <div class="timeline-items">

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                    <div class="timeline-date">2012-2019</div>
                    <div class="timeline-content">
                        <h3>Primary School</h3>
                        <p>I completed my primary education at Balmandir High School, located in Karwar. It was a foundation phase that greatly 
                            shaped my academic journey and instilled in me values of discipline and curiosity. The school provided a nurturing 
                            environment that encouraged me to excel both in academics and extracurricular activities.</p>
                    </div>
                
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                    <div class="timeline-date">2020-2022</div>
                    <div class="timeline-content">
                        <h3>High School</h3>
                        <p>I completed my primary and high school education at Balmandir High School, Karwar. The school played a significant role in 
                            shaping my academic foundation and personal growth. During my time there, I developed a strong interest in science, mathematics, 
                            and actively participated in various extracurricular activities, which helped build my confidence and skills. The 
                            experiences and lessons learned during these formative years have greatly influenced my journey so far.</p>
                    </div>
                
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"></div>
                    <div class="timeline-date">2023-2024</div>
                    <div class="timeline-content">
                        <h3>Pre University College</h3>
                        <p>I pursued my pre-university education at Government PU College, Karwar. My time there helped me deepen my knowledge in
                             science and prepared me for higher education. The supportive teachers and learning 
                             environment played a key role in shaping my academic goals.</p>
                    </div>
                
            </div>

            <div class="timeline-item">
                <div class="timeline-dot"> </div>
                    <div class="timeline-date">2024</div>
                    <div class="timeline-content">
                        <h3>Engineering College</h3>
                        <p>After the completion of my Pu college at karwar. I joined enginerring of Information science and Technology course
                            at manglore, Canara engineering college manglore. I am enjoying this degree.</p>
                    </div>
               
            </div>
        </div>
    </section>

    <section class="creativework" id="creativework">
        <h2 class="heading">Creative Work</h2>

        <div class="creativework-container">
            <div class="creativework-box">
                <div class="creativework-info">
                    <h4>Reels</h4>
                    <p>Content Creation and Reel Making As a creative content creator, I specialize in producing engaging and original reels.
                         My skills include conceptualizing ideas, scripting, filming, and editing to deliver visually appealing and impactful 
                         content tailored for social media platforms. My work showcases creativity, storytelling, and a strong understanding 
                         of trends to connect with audiences effectively.</p>
                </div>
            </div>

            <div class="creativework-box">
                <div class="creativework-info">
                    <h4>Drawing</h4>
                    <p>I specialize in creating detailed and expressive portrait drawings. My work focuses on capturing the personality, emotion, 
                        and unique features of each subject, whether drawn from life, photographs, or imagination. Using techniques such as shading,
                         hatching, and blending, I bring depth and realism to my art. </p>
                </div>
            </div>

            <div class="creativework-box">
                <div class="creativework-info">
                    <h4>sports</h4>
                    <p>I have a deep passion for sports, which have played a significant role in shaping my discipline, teamwork, and leadership 
                        abilities. Through active participation in volleyball and other athletic pursuits, I have gained valuable skills like 
                        strategic thinking, resilience, and collaboration. </p>
                </div>
            </div>

            <div class="creativework-box">
                <div class="creativework-info">
                    <h4>web designer</h4>
                    <p>As a web designer, I specialize in creating user-friendly, visually appealing, and functional websites. My design process 
                        focuses on understanding user needs and crafting intuitive interfaces that enhance the overall experience. With skills 
                        as mentioned below, I bring ideas to life while ensuring responsiveness and cross-platform compatibility. 
                        </p>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <div class="skills-box">
            <h2 class="heading">Skills</h2>

            <div class="wrapper">
                <div class="skills-item">
                    <img src="html1.jpg" alt="">
                    <h2>HTML</h2>
                    <div class="ratings">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bx-star' id="star"></i>

                    </div>
                </div>

                <div class="skills-item">
                    <img src="CSS1.png" alt="" height="150px" width="200px">
                    <h2>CSS</h2>
                    <div class="ratings">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star-half' id="star"></i>
                        <i class='bx bx-star' id="star"></i>
                    </div>
                </div>

                <div class="skills-item">
                    <img src="js1.jpg" alt="">
                    <h2>JS</h2>
                    <div class="ratings">
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star' id="star"></i>
                        <i class='bx bxs-star-half' id="star"></i>
                        <i class='bx bx-star' id="star"></i>
                        <i class='bx bx-star' id="star"></i>
                                
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="contact" id="contacts">
        <h2 class="heading">Contact <span>Me</span></h2>

        <form action="contact.php" method="POST">
<div class="input-group">
  <div class="input-box">

  <input type="text" name="name" placeholder="Full Name" required>
  <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">

  <input type="number" name="phone" placeholder="Phone Number" required>
  <input type="text" name="subject" placeholder="Subject" required>
                </div>
            </div>
  <div class="input-group-2">

  <textarea name="message" placeholder="Your Message" required></textarea>
  <input type="submit" value="Send Message">
            </div>
        </form>


    </section>
<!-- from here the correctiomn is to be done-->
    <footer class="footer">
        <div class="social">
            <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="https://www.instagram.com/vikas_gunagi/"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <button class="theme-btn" data-theme="yellow">Yellow Theme</button>
<button class="theme-btn" data-theme="original">Original</button>
<button class="theme-btn" data-theme="green">Pastel Theme</button>

        <p class="copywrite">
            <i class='bx bx-copyright'></i> 2024 vikas gunagi. All rights Reserved 
        </p>
        <p>Designated with <i class='bx bxs-heart' id="heart"></i> by vikas gunagi</p>
        </div>
    </footer>

   
    <script src="portfolio.js"></script>
    
</body>
</html>