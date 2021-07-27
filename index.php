<?php include("view/header.php"); ?>
    <img id="logo" class="tablink glow" src="img/T.M.png" alt="t.m logo" onclick="openPage('hero')">
    <div id="socialContainer">
        <a class="socialItem glow" href="https://www.linkedin.com/in/Tyrone-M" target="_blank"><i class="fab fa-linkedin"></i></a>
        <a class="socialItem glow" href="https://github.com/tmorse94/Online-Portfolio" target="_blank"><i class="fab fa-github"></i></a>
        <a class="socialItem glow" href="mailto:tm.dev@morsetech.com.au"><i class="fas fa-envelope"></i></a>
    </div>
    <!-- <li> -->
        <a class="tablink" id="defaultOpen" onclick="openPage('hero')"></a>
    <!-- </li> -->
    <div class="main">
        <div id="hero" class="tabcontent">
            <div id="headingTitle" class="headerContent">
                <span class="l1">W</span>
                <span class="l1">e</span>
                <span class="l1">l</span>
                <span class="l1">c</span>
                <span class="l1">o</span>
                <span class="l1">m</span>
                <span class="l1">e</span>
            </div>
            <div id="subTitle" class="headerContent">
                <span class="l2">I  </span>
                <span class="l2">a</span>
                <span class="l2">m </span>
                <span class="l2"> </span>
                <span class="l2">T</span>
                <span class="l2">y</span>
                <span class="l2">r</span>
                <span class="l2">o</span>
                <span class="l2">n</span>
                <span class="l2">e</span>
                <br class="mob-next-line-letters">
                <span class="l2">&</span>
                <br class="mob-next-line-letters">
                <span class="l2">I</span>
                <span class="l2">'</span>
                <span class="l2">m </span>
                <span class="l2">  </span>
                <span class="l2">a </span>
                <span class="l2">  </span>
                <span class="l2"> W</span>
                <span class="l2">e</span>
                <span class="l2">b </span>
                <span class="l2">  </span>
                <span class="l2">D</span>
                <span class="l2">e</span>
                <span class="l2">v</span>
                <span class="l2">e</span>
                <span class="l2">l</span>
                <span class="l2">o</span>
                <span class="l2">p</span>
                <span class="l2">e</span>
                <span class="l2">r</span>
            </div>
            <a class="tablink navDown" onclick="openPage('about')"><i class="fas fa-chevron-down glow"></i></a>
            <div class="navLabelDown">
                <h6 style="font-size: larger;color: rgb(251, 216, 16);font-family: Architects Daughter">About Me</h6>
            </div>
        </div>
        <div id="about" class="tabcontent">
            <a class="tablink navUp" onclick="openPage('hero')"><i class="fas fa-chevron-up glow"></i></a>
            <div class="navLabelUp">
                <h6 style="margin-top: 0.7rem;font-size: larger;color: rgb(251, 216, 16);font-family: Architects Daughter">Home</h6>
            </div>
            <ul class="canvas">
                <li class="comb">
                        <p class="combTitle">Education</p>
                        <p class="combDes">I've passed grade 12 & have my QCE, I also have my certficate 3 in information, digital media & technology. In 2020 i received my diploma in website development.</p>
                    </li>

                    <li class="comb">
                        <p class="combTitle">About Me</p>
                        <p class="combDes">I am a Web Developer from Brisbane, Australia. Also a hardworking individual who enjoys learning new things, also a family person and a father.</p> 
                    </li>
                    
                    <li class="comb">
                        <p class="combTitle">My Interests</p>
                        <p class="combDes">My interests include all outdoor activities such as fishing, camping & four wheel driving. I also enjoy gaming & keeping up to date with technologies.</p> 
                    </li>
            </ul>
            <a class="tablink navDown" onclick="openPage('skills')"><i class="fas fa-chevron-down glow"></i></a>
            <div class="navLabelDown">
                    <h6 style="font-size: larger;color: rgb(251, 216, 16);font-family: Architects Daughter">Skills</h6>
            </div>
        </div>
        <div id="skills" class="tabcontent">
            <a class="tablink navUp" onclick="openPage('about')"><i class="fas fa-chevron-up glow"></i></a>
            <div class="navLabelUp">
                <h6 style="margin-top: 0.7rem;font-size: larger;color: rgb(251, 216, 16);font-family: Architects Daughter">About Me</h6>
            </div>
            <div class="tabTitleCont">
                <span class="l2">M</span>
                <span class="l2">y</span>
                <span class="l2">S</span>
                <span class="l2">k</span>
                <span class="l2">i</span>
                <span class="l2">l</span>
                <span class="l2">l</span>
                <span class="l2">s</span>
            </div>
            <p class="tabDes">
                I am sufficient in front end & backend development, i also can use crud to interact with databases.
                
                My passion is front end development and also creating engaging layouts and designs.
                <!-- <br> -->
                I am also experienced in using Wordpress to create dynamic websites.

                <!-- The main area of focus is front end development ( client side ) but I am also experienced in server-side script ( manipulating data in databases etc ) Experienced in HTML,CSS, Javascript, PHP, Mysql, JSON, AJAX and have experince with the CMS Wordpress. -->
            </p>
            <div class="slider">
                <div class="slide1 w3-container w3-center w3-animate-opacity">
                    <div class="skillTitle">
                        
                        <h5 class="skillTitle">Front-end Design</h5>
                    </div>
                    <p class="skillTech">
                    <i class=" fas fa-paint-brush fa-2x "></i>
                    Designs, Layouts, Templates</p>

                    <div class="sliderCont">
                        <p class="skillDescription">I enjoy creating Clean layouts, simple and engaging user interactions & designing unique experiences.</p>

                        <div id="skillBarContainer">
                                <div class="skillBarRow">
                                    <span>Adobe xd</span>
                                    <div class="skillBar">
                                        <div class="skills adobe"></div>
                                    </div>
                                </div>
                                <div class="skillBarRow">
                                    <span>GIMP</span>
                                    <div class="skillBar">
                                        <div class="skills gimp"></div>
                                    </div>
                                </div>
                                <div class="skillBarRow">
                                    <span>lucidchart</span>
                                    <div class="skillBar">
                                        <div class="skills pp"></div>
                                    </div>
                                </div>
                                <div class="skillBarRow">
                                    <span>Figma</span>
                                    <div class="skillBar">
                                        <div class="skills fig"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="slide1 w3-container w3-center w3-animate-opacity">

                    <div class="skillTitle">

                        <h5 class="skillTitle">Front-end Development</h5>
                    </div>
                    
                    <p class="skillTech">
                        <i class="fas fa-laptop-code fa-2x"></i>
                        Static Websites, Progressive web aps</p>
                    <div class="sliderCont">
                        <p class="skillDescription">I can Create responsive websites & also create progressive web apps, and use ajax to send http requests.</p>
                        <div id="skillBarContainer2">
                            <div class="skillBarRow">
                                <span>HTML</span>
                                <div class="skillBar">
                                    <div class="skills html"></div>
                                </div>
                            </div>
                            <div class="skillBarRow">
                                <span>CSS</span>
                                <div class="skillBar">
                                    <div class="skills css"></div>
                                </div>
                            </div>
                            <div class="skillBarRow">
                                <span>JavaScript</span>
                                <div class="skillBar">
                                    <div class="skills js"></div>
                                </div>
                            </div>
                            <div class="skillBarRow">
                                <span>Ajax</span>
                                <div class="skillBar">
                                    <div class="skills ajax"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide1 w3-container w3-center w3-animate-opacity">
                    <div class="skillTitle">


                        <h5 class="skillTitle">Back-end Development</h5>
                    </div>
                    <p class="skillTech">
                        <i class="fas fa-server fa-2x"></i>
                        Dynamic websites, CRUD, Databases</p>
                    <div class="sliderCont">
                        <p class="skillDescription">Creating Dynamic websites, using CRUD to interact with databases. I also can use Json to handle data and transport it.</p>
                        <div id="skillBarContainer3">
                            <div class="skillBarRow">
                                <span>PHP</span>
                                <div class="skillBar">
                                    <div class="skills php"></div>
                                </div>
                            </div>
                            <div class="skillBarRow">
                                <span>MYSQL</span>
                                <div class="skillBar">
                                    <div class="skills mysql"></div>
                                </div>
                            </div>
                            <!-- <div class="skillBarRow">
                                <span>MYSQL</span>
                                <div class="skillBar">
                                    <div class="skills mysql">50%</div>
                                </div>
                            </div> -->
                            <div class="skillBarRow">
                                <span>JSON</span>
                                <div class="skillBar">
                                    <div class="skills json"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="prev glow" onclick="plusSlides(-1, 0)"><i class="fas fa-chevron-left"></i></a>
                <a class="next glow" onclick="plusSlides(1, 0)"><i class="fas fa-chevron-right"></i></a>               
            </div>
            <a class="tablink navDown" onclick="openPage('portfolio')"><i class="fas fa-chevron-down glow"></i></a>
            <div class="navLabelDown">
                <h6 style="font-size: larger;color: rgb(251, 216, 16);font-family: Architects Daughter">Portfolio</h6>
            </div>
        </div>
        <div id="portfolio" class="tabcontent">
            <a class="tablink navUp" onclick="openPage('skills')"><i class="fas fa-chevron-up glow"></i></a>
            <div class="navLabelUp">
                <h6 style="margin-top: 0.7rem;font-size: larger;color: rgb(251, 216, 16);font-family: Architects Daughter">Skills</h6>
            </div>
            <div class="tabTitleCont2">
                <span class="l2">R</span>
                <span class="l2">e</span>
                <span class="l2">c</span>
                <span class="l2">e</span>
                <span class="l2">n</span>
                <span class="l2">t</span>
                <span class="l2"> </span>
                <span class="l2">  P</span>
                <span class="l2">r</span>
                <span class="l2">o</span>
                <span class="l2">j</span>
                <span class="l2">e</span>
                <span class="l2">c</span>
                <span class="l2">t</span>
                <span class="l2">s</span>
            </div>
            <div id="portfolio-grid">
                <?php include("view/viewProjects.php"); ?>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("defaultOpen").click();

        function mouseOver() {
            document.getElementById("gridOverlay").style.display = "block";
        }
    </script>
    <script src="js/sliders.js"></script>
<?php include("view/footer.php"); ?>