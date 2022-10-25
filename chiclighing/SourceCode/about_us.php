<?php
require "header.php";

require_once('db/dbhelper.php');
      
?>

<!DOCTYPE html>
<html>

<head>
    <title>Team Section</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style_head_vs_last/about_us.css">
</head>

<body>

    <section class="team-section">
        <div class = "bulkhead">

        </div>
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Our Team</h1>
                    <p>Do you want your house to be the brightest tonight? Then we will bring you the best lamps</p>
                </div>
            </div>
            <div class="row">
                <div class="team-items">
                    <div class="item">
                        <img src="style_head_vs_last/background/logo/about_us/DTS.jpg" alt="team" />
                        <div class="inner">
                            <div class="info">
                                <h5>Duong Tan Sang</h5>
                                <p>Designer</p>
                                <ul>
                                    <li>Creating website designs</li>
                                    <li>producing sample sites</li>
                                    <li>demonstrating and receiving feedback about draft sites</li>
                                    <li>keeping up to date with recent technological and software developments</li>
                                </ul>
                                <div class="social-links">
                                    <a href=""><span class="fa fa-facebook"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="style_head_vs_last/background/logo/about_us/VMH.jpg" alt="team" />
                        <div class="inner">
                            <div class="info">
                                <h5>Vo Minh Hoang</h5>
                                <p>Web Developer</p>
                                <ul>
                                    <li>Researching, designing, implementing, and managing software programs</li>
                                    <li>Testing and evaluating new programs</li>
                                    <li>Writing and implementing efficient code</li>
                                </ul>
                                <div class="social-links">
                                    <a href=""><span class="fa fa-facebook"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="style_head_vs_last/background/logo/about_us/NTT.jpg" alt="team" />
                        <div class="inner">
                            <div class="info">
                                <h5>Nguyễn Trọng Thăng</h5>
                                <p>Web Developer</p>
                                <ul>
                                    <li>Determining operational practicality</li>
                                    <li>Developing quality assurance procedures</li>
                                    <li>Deploying software tools, processes, and metrics</li>
                                    <li>Maintaining and upgrading existing systems</li>
                                </ul>
                                <div class="social-links">
                                    <a href=""><span class="fa fa-facebook"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="style_head_vs_last/background/logo/about_us/PVS.jpg" alt="team" />
                        <div class="inner">
                            <div class="info">
                                <h5>Phan Văn Sơn</h5>
                                <p>Designer</p>
                                <ul>
                                    <li>creating products that are user-friendly, effective and appealing</li>
                                    <li>digital retouching and image editing</li>
                                    <li>working as part of a multidisciplinary team</li>
                                    <li>producing sample sites</li>
                                </ul>
                                <div class="social-links">
                                    <a href=""><span class="fa fa-facebook"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="style_head_vs_last/background/logo/about_us/THD.jpg" alt="team" />
                        <div class="inner">
                            <div class="info">
                                <h5>Trịnh Hữu Dương</h5>
                                <p>Leader</p>
                                <ul>
                                    <li>Developing a project plan</li>
                                    <li>Leading and managing the project team</li>
                                    <li>Determining the methodology used on the project</li>
                                    <li>Establishing a project schedule and determining each phase</li>
                                    <li>Assigning tasks to project team members</li>
                                </ul>
                                <div class="social-links">
                                    <a href=""><span class="fa fa-facebook"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-youtube"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class = "bulkhead">
        </div>
    </section>
    <?php
        require "footer.php";

      ?>

</body>

</html>