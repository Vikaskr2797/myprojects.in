<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>

<head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Dreamers - Job Portal</title>
     <meta name="description" content="Online Job Management / Job Portal" />
     <meta name="keywords"
          content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
     <meta name="author" content="BwireSoft">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
     <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
     <meta property="og:image:type" content="image/jpeg" />
     <meta property="og:image:width" content="500" />
     <meta property="og:image:height" content="300" />
     <meta property="og:image:alt" content="Nightingale Jobs" />
     <meta property="og:description" content="Online Job Management / Job Portal" />

     <link rel="shortcut icon" href="images/ico/dreamers-logo.png">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">
     <link href="css/animate.css" rel="stylesheet">
     <link href="css/main.css" rel="stylesheet">
     <link href="css/component.css" rel="stylesheet">

     <link rel="stylesheet" href="icons/linearicons/style.css">
     <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
     <link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
     <link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
     <link rel="stylesheet" href="icons/rivolicons/style.css">
     <link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
     <link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
     <link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
     <link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

     <link href="css/style.css" rel="stylesheet">

     <!-- <script type='text/javascript' src='//pl24279267.cpmrevenuegate.com/69/14/b2/6914b2cb14965bfb4b18357c58eec4ac.js'>
    </script> -->
</head>

<style>
.autofit2 {
     height: 70px;
     width: 400px;
     object-fit: cover;
}

.autofit3 {
     height: 80px;
     width: 100px;
     object-fit: cover;
}
</style>
<style>
/* Basic styling for the navbar */
body {
     font-family: Arial, sans-serif;
     margin: 0;
     padding: 0;
}

.navbar-nav-wrapper {
     /* background-color: #282828; */
     padding: 10px 0;
}

.navbar-nav {
     list-style-type: none;
     margin: 0;
     padding: 0;
     display: flex;
     justify-content: space-around;
}

.navbar-nav li {
     position: relative;
     display: inline-block;
}

.navbar-nav a {
     color: white;
     text-decoration: none;
     padding: 10px 20px;
     display: block;
}

.navbar-nav a:hover {
     background-color: #444;
     border-radius: 5px;
}

/* Dropdown menu styling */
.dropdown {
     display: none;
     position: absolute;
     background-color: #fff;
     box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
     top: 100%;
     left: 0;
     min-width: 200px;
     z-index: 1;
}

.dropdown a {
     color: black;
     padding: 10px 15px;
     display: block;
     text-align: left;
}

.dropdown a:hover {
     background-color: #f1f1f1;
}

/* Show the dropdown when hovering or clicking on the parent */
li:hover .dropdown {
     display: block;

}
</style>

<body class="home">


     <div id="introLoader" class="introLoading"></div>

     <div class="container-wrapper">

          <header id="header">

               <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

                    <div class="container-fluid">

                         <div class="logo-wrapper">
                              <div class="logo">
                                   <a href="./"><img src="images/dreamers-logo-02.png" width="240" height="60"
                                             alt="Logo" /></a>
                              </div>
                         </div>

                         <div id="navbar" class="navbar-nav-wrapper navbar-arrow">

                              <ul class="nav navbar-nav" id="responsive-menu">
                                   <li>
                                        <a href="./">Home</a>
                                   </li>
                                   <li>
                                        <a href="#">Categories</a>
                                        <!-- Dropdown for Categories -->
                                        <ul class="dropdown">
                                             <li><a href="job-list.php?cat=bpo">BPO</a>
                                                  <ul>
                                                       <li><a href="BPO.php">Voice & Sales Executive</a></li>
                                                       <li><a href="">Non-Voice (Chat Support)</a></li>
                                                       <li><a href="">SME (Subject Matter Expert)</a></li>
                                                       <li><a href="">Technical Support</a></li>
                                                       <li><a href="">Backend Support</a></li>
                                                       <li><a href="">Email Support</a></li>
                                                       <li><a href="">Blended</a></li>
                                                       <li><a href="">Team Lead</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=dev">Development</a>
                                                  <ul style="max-height: 300px; overflow-y: auto;">
                                                       <li><a href="">Front end Developer</a></li>
                                                       <li><a href="">Back End Development</a></li>
                                                       <li><a href="">Full Stack Development</a></li>
                                                       <li><a href="">Python Development</a></li>
                                                       <li><a href="">Java Development</a></li>
                                                       <li><a href="">C & C++ Development</a></li>
                                                       <li><a href="">Graphic Designer/UI UX</a></li>
                                                       <li><a href="">Android Development</a></li>
                                                       <li><a href="">Flutter Development</a></li>
                                                       <li><a href="">Salesforce Development</a></li>
                                                       <li><a href="">Software Testing </a></li>
                                                       <li><a href="">React Js Development</a></li>
                                                       <li><a href="">Node Js Development</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=tech">Technology</a>
                                                  <ul>
                                                       <li><a href="">MERN</a></li>
                                                       <li><a href="">MEAN</a></li>
                                                       <li><a href="">PERN</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=Acct">Accounting</a>
                                                  <ul>
                                                       <li><a href="">Tally ERP</a></li>
                                                       <li><a href="">Data Entry Operator</a></li>
                                                       <li><a href="">Cashier</a></li>
                                                       <li><a href="">Sales Executive for Malls</a></li>
                                                       <li><a href="">Support Staff for Malls</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=Medical">Medical</a>
                                                  <ul>
                                                       <li><a href="">Nurse</a></li>
                                                       <li><a href="">Compander</a></li>
                                                       <li><a href="">Support Staff / Ward Boy</a></li>
                                                  </ul>
                                             </li>
                                             <li><a href="job-list.php?cat=Media_News">Media & News</a>
                                                  <ul>
                                                       <li><a href="">Blog Writer</a></li>
                                                       <li><a href="">Influencer</a></li>
                                                       <li><a href="">Content Writer</a></li>
                                                       <li><a href="">Digital Content Creators</a></li>
                                                  </ul>
                                             </li>
                                        </ul>
                                   </li>
                                   <li>
                                        <a href="employers.php">Employers</a>
                                   </li>
                                   <li>
                                        <a href="employees.php">Employees</a>
                                   </li>
                                   <li>
                                        <a href="contact.php">Contact Us</a>
                                   </li>
                              </ul>

                         </div>

                         <div class="nav-mini-wrapper">
                              <ul class="nav-mini sign-in">
                                   <?php
    if ($user_online == true) {
    print '
        <li><a href="logout.php">logout</a></li>
        <li><a href="'.$myrole.'">Profile</a></li>';
    }else{
    print '
        <li><a href="login.php">login</a></li>
        <li><a data-toggle="modal" href="#registerModal">register</a></li>';						
    }
    
    ?>

                              </ul>
                         </div>

                    </div>

                    <div id="slicknav-mobile"></div>

               </nav>


               <div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;"
                    data-backdrop="static" data-keyboard="false" data-replace="true">

                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h4 class="modal-title text-center">Create your account for free</h4>
                    </div>

                    <div class="modal-body">

                         <div class="row gap-20">

                              <div class="col-sm-6 col-md-6">
                                   <a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register
                                        as
                                        Employer</a>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                   <a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register
                                        as
                                        Employee</a>
                              </div>

                         </div>

                    </div>

                    <div class="modal-footer text-center">
                         <button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
                    </div>

               </div>



          </header>

          <div class="main-wrapper">

               <div class="hero" style="background-image:url('images/hero-header/hero-header.jpg');">
                    <div class="container">

                         <h1>Your bright future starts here now</h1>
                         <p>Finding your next job or career on Dreamers Jobs</p>



                    </div>

               </div>
               <!-- <script type="text/javascript">
               atOptions = {
                    'key': 'ac94c65af3a6d0913cf824a3dd1a0e11',
                    'format': 'iframe',
                    'height': 300,
                    'width': 160,
                    'params': {}
               };
               </script> -->
               <!-- <script type="text/javascript"
                    src="//www.topcreativeformat.com/ac94c65af3a6d0913cf824a3dd1a0e11/invoke.js">
               </script> -->


               <div class="post-hero bg-light">

                    <div class="container">

                         <div class="process-item-wrapper mt-20">

                              <div class="row">

                                   <div class="col-sm-4">

                                        <div class="process-item clearfix">

                                             <div class="icon">
                                                  <i class="flaticon-line-icon-set-magnification-lens"></i>
                                             </div>

                                             <div class="content">
                                                  <h5> Prepare for jobs</h5>
                                             </div>

                                        </div>

                                   </div>

                                   <div class="col-sm-4">

                                        <div class="process-item clearfix">

                                             <div class="icon">
                                                  <i class="flaticon-line-icon-set-pencil"></i>
                                             </div>

                                             <div class="content">
                                                  <h5> Apply a Job</h5>
                                             </div>

                                        </div>

                                   </div>

                                   <div class="col-sm-4">

                                        <div class="process-item clearfix">

                                             <div class="icon">
                                                  <i class="flaticon-line-icon-set-calendar"></i>
                                             </div>

                                             <div class="content">
                                                  <h5> Start Working</h5>
                                             </div>

                                        </div>

                                   </div>

                              </div>

                         </div>

                    </div>

               </div>
               <style>
               //--------- Start features Area -------------//


               .features-area {
                    margin-top: -65px;
               }

               h4 {
                    text-align: center;
               }

               p,
               li {
                    padding: 0 20px;
               }

               .single-feature {
                    text-align: left;
                    border-radius: 5px;
                    background-color: #f2f2f2;
                    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
                    padding: 25px 0;
                    height: 370px;
                    margin-bottom: 30px;

                    h4 {

                         p {
                              margin-bottom: 0;
                         }

                         h4 {
                              padding-bottom: 15px;
                         }

                         @media(max-width:960px) {
                              margin-bottom: 30px;
                         }
                    }

                    //--------- End features Area -------------//
               </style>

               <body>
                    <div class="container" style="display:flex; height:100vh; width:auto;">
                         <div class="sidebar" style="width: 250px; background-color: #00528a; padding-top: 20px;">
                              <ul style="list-style-type: none; padding: 0; margin: 0;">
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content1" class="active"
                                             style="color:white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s; background-color: #26262a;">Voice
                                             & Sales Executive</a>
                                   </li>
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content2"
                                             style="color: white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s;">Non-Voice
                                             (Chat Support)</a>
                                   </li>
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content3"
                                             style="color: white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s;">SME
                                             (Subject Matter Expert)</a>
                                   </li>
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content4"
                                             style="color: white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s;">Technical
                                             Support</a>
                                   </li>
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content5"
                                             style="color:white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s; background-color: #26262a;">Backend
                                             Support</a>
                                   </li>
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content6"
                                             style="color: white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s;">Email
                                             Support</a>
                                   </li>
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content7"
                                             style="color: white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s;">Blended</a>
                                   </li>
                                   <li style="margin: 10px 0;">
                                        <a href="#" data-content="content8"
                                             style="color: white; text-decoration: none; padding: 10px 15px; display: block; transition: background 0.3s;">Team
                                             Lead</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="content" style="flex: 1; padding: 20px; background-color: #f4f4f4;">
                              <div id="content1" class="content-item active" style="display: block;">
                                   <h1>Voice and sales executive</h1>


                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the
                                                       Role</summary>
                                                  <p><strong>Job Description:</strong> Familiarize yourself with the
                                                       specific responsibilities of a voice and sales executive, such as
                                                       making sales calls, handling customer inquiries, and managing
                                                       client relationships.</p>
                                                  <p><strong>Key Skills:</strong> Focus on essential skills such as
                                                       communication, persuasion, active listening, problem-solving, and
                                                       customer service.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Know Your Product/Service</summary>
                                                  <p><strong>Product Knowledge:</strong> Understand the products or
                                                       services you will be selling. Know the features, benefits, and
                                                       potential objections customers might have.</p>
                                                  <p><strong>Market Understanding:</strong> Research the industry
                                                       trends, competitors, and target market to effectively position
                                                       your offerings.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Communication Skills</summary>
                                                  <p><strong>Practice Speaking Clearly:</strong> Work on your
                                                       pronunciation,
                                                       tone, and pace to ensure you can articulate your message
                                                       effectively.
                                                  </p>
                                                  <p><strong>Active Listening:</strong> Practice techniques for active
                                                       listening to understand customer needs better.</p>
                                                  <p><strong>Mock Calls:</strong> Conduct role-playing scenarios to
                                                       simulate
                                                       sales calls, focusing on overcoming objections and closing deals.
                                                  </p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Sales Techniques and Strategies</summary>
                                                  <p><strong>Sales Process:</strong> Familiarize yourself with the sales
                                                       process stages: prospecting, qualifying leads, presenting,
                                                       handling
                                                       objections, closing, and follow-up.</p>
                                                  <p><strong>Closing Techniques:</strong> Learn various closing
                                                       techniques
                                                       and practice them to gain confidence.</p>
                                                  <p><strong>Handling Objections:</strong> Prepare responses to common
                                                       objections and practice turning them into opportunities.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Build Confidence</summary>
                                                  <p><strong>Positive Mindset:</strong> Cultivate a positive attitude
                                                       and
                                                       belief in your ability to succeed.</p>
                                                  <p><strong>Body Language:</strong> Be aware of your body language
                                                       during
                                                       interactions, as it can convey confidence and engagement.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Customer Relationship Management</summary>
                                                  <p><strong>CRM Software:</strong> Familiarize yourself with common
                                                       Customer
                                                       Relationship Management (CRM) software that may be used in the
                                                       role,
                                                       such as Salesforce or HubSpot.</p>
                                                  <p><strong>Follow-Up:</strong> Understand the importance of follow-up
                                                       communication and developing long-term relationships with
                                                       clients.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to common
                                                       interview
                                                       questions, such as:</p>
                                                  <ul>
                                                       <li>Tell me about yourself.</li>
                                                       <li>Why do you want to work in sales?</li>
                                                       <li>Describe a time you overcame a challenge in a sales
                                                            situation.
                                                       </li>
                                                  </ul>
                                                  <p><strong>Behavioral Questions:</strong> Use the STAR method
                                                       (Situation,
                                                       Task, Action, Result) to structure responses to behavioral
                                                       questions.
                                                  </p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Continuous Learning</summary>
                                                  <p><strong>Sales Courses:</strong> Consider enrolling in sales
                                                       training
                                                       courses or workshops to improve your skills.</p>
                                                  <p><strong>Books and Resources:</strong> Read books on sales
                                                       techniques,
                                                       negotiation, and effective communication. Some recommended titles
                                                       include:</p>
                                                  <ul>
                                                       <li>"The Challenger Sale" by Matthew Dixon and Brent Adamson</li>
                                                       <li>"How to Win Friends and Influence People" by Dale Carnegie
                                                       </li>
                                                       <li>"Sell with a Story" by Paul Smith</li>
                                                  </ul>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Networking</summary>
                                                  <p><strong>Connect with Professionals:</strong> Join sales groups on
                                                       LinkedIn, attend industry events, or participate in webinars to
                                                       network with other sales professionals and gain insights.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Practice and Feedback</summary>
                                                  <p><strong>Seek Feedback:</strong> Practice sales calls with friends
                                                       or
                                                       colleagues and ask for constructive feedback.</p>
                                                  <p><strong>Record Yourself:</strong> Consider recording mock sales
                                                       calls to
                                                       analyze your performance and identify areas for improvement.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                              <div id="content2" class="content-item" style="display: none;">
                                   <h1>Non-Voice(Chat Support)</h1>
                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the Role</summary>
                                                  <p><strong>Job Description:</strong> Familiarize yourself with the
                                                       specific responsibilities of a non-voice chat support
                                                       representative, such as responding to customer inquiries via
                                                       chat, resolving issues, and maintaining customer satisfaction.
                                                  </p>
                                                  <p><strong>Key Skills:</strong> Focus on essential skills such as
                                                       typing speed, attention to detail, problem-solving, empathy, and
                                                       product knowledge.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Key Skills</summary>
                                                  <p><strong>Typing Proficiency:</strong> Aim for a typing speed of at
                                                       least 40-60 words per minute with high accuracy.</p>
                                                  <p><strong>Written Communication:</strong> Practice clear and concise
                                                       writing to effectively communicate without tone or body language.
                                                  </p>
                                                  <p><strong>Multitasking Abilities:</strong> Learn to manage multiple
                                                       chats or tasks simultaneously while maintaining quality
                                                       responses.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Familiarize Yourself with Tools</summary>
                                                  <p><strong>Chat Software:</strong> Get to know popular customer
                                                       support tools (e.g., Zendesk, LiveChat, Freshdesk).</p>
                                                  <p><strong>Knowledge Bases:</strong> Understand how to navigate and
                                                       utilize internal knowledge bases or FAQs for quick access to
                                                       information.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Customer Service Skills</summary>
                                                  <p><strong>Empathy and Patience:</strong> Develop your ability to
                                                       empathize with customers and handle inquiries with patience.</p>
                                                  <p><strong>Conflict Resolution:</strong> Practice techniques for
                                                       diffusing tense situations and turning negative experiences into
                                                       positive ones.</p>
                                                  <p><strong>Problem-Solving:</strong> Improve your ability to quickly
                                                       identify issues and provide effective solutions.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to common
                                                       interview questions, such as:</p>
                                                  <ul>
                                                       <li>How would you handle a difficult customer?</li>
                                                       <li>Can you describe a time you went above and beyond for a
                                                            customer?</li>
                                                       <li>How do you prioritize your workload during busy periods?</li>
                                                  </ul>
                                                  <p><strong>Scenario-Based Questions:</strong> Practice responding to
                                                       hypothetical scenarios related to customer support, demonstrating
                                                       your thought process and decision-making.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Practice Typing and Writing</summary>
                                                  <p><strong>Typing Tests:</strong> Take online typing tests to improve
                                                       speed and accuracy.</p>
                                                  <p><strong>Chat Simulations:</strong> Engage in mock chat scenarios to
                                                       practice responding to customer inquiries in real-time.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Stay Up-to-Date</summary>
                                                  <p><strong>Industry Trends:</strong> Keep informed about trends in
                                                       customer service and support, including emerging technologies in
                                                       chat support (e.g., chatbots, AI).</p>
                                                  <p><strong>Continuous Learning:</strong> Consider taking online
                                                       courses in customer service or communication to enhance your
                                                       skills further.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Post-Interview Follow-Up</summary>
                                                  <p><strong>Thank You Email:</strong> Send a thank-you email to the
                                                       interviewer, reiterating your interest in the position and
                                                       reflecting on any key points discussed during the interview.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                              <div id="content3" class="content-item" style="display: none;">
                                   <h1>SME(Subject Matter Exper)</h1>
                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the Role</summary>
                                                  <p><strong>Job Description:</strong> Familiarize yourself with the
                                                       specific responsibilities of an SME, including providing expert
                                                       guidance, troubleshooting complex issues, and mentoring team
                                                       members.</p>
                                                  <p><strong>Key Skills:</strong> Focus on essential skills such as deep
                                                       knowledge in a specific domain, effective communication,
                                                       analytical thinking, and problem-solving.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Key Skills</summary>
                                                  <p><strong>Domain Expertise:</strong> Ensure you have a comprehensive
                                                       understanding of the subject matter you will be advising on,
                                                       including current trends, best practices, and emerging
                                                       technologies.</p>
                                                  <p><strong>Analytical Skills:</strong> Develop your ability to analyze
                                                       complex problems and provide clear, actionable solutions.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Familiarize Yourself with Tools</summary>
                                                  <p><strong>Industry Tools:</strong> Get to know the tools and software
                                                       commonly used in your field, which may include data analysis
                                                       tools, project management software, or technical documentation
                                                       platforms.</p>
                                                  <p><strong>Knowledge Management Systems:</strong> Understand how to
                                                       effectively use knowledge management systems to share insights
                                                       and resources with your team.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Communication Skills</summary>
                                                  <p><strong>Clear Communication:</strong> Practice articulating complex
                                                       concepts in a clear and understandable manner, both verbally and
                                                       in writing.</p>
                                                  <p><strong>Presentation Skills:</strong> Develop your ability to
                                                       present information confidently in front of an audience, whether
                                                       it be in meetings or training sessions.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to common
                                                       interview questions, such as:</p>
                                                  <ul>
                                                       <li>What is your area of expertise, and how did you become an SME
                                                            in this field?</li>
                                                       <li>How do you stay updated with the latest developments in your
                                                            industry?</li>
                                                       <li>Can you describe a time when you had to resolve a complex
                                                            problem?</li>
                                                  </ul>
                                                  <p><strong>Scenario-Based Questions:</strong> Practice responding to
                                                       hypothetical scenarios that assess your problem-solving and
                                                       decision-making abilities as an SME.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Continuous Learning</summary>
                                                  <p><strong>Professional Development:</strong> Engage in continuous
                                                       learning by taking courses, attending workshops, or earning
                                                       certifications relevant to your area of expertise.</p>
                                                  <p><strong>Networking:</strong> Connect with other SMEs in your field
                                                       through professional organizations or social media to share
                                                       knowledge and best practices.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Build Relationships</summary>
                                                  <p><strong>Collaboration:</strong> Foster relationships with
                                                       colleagues and stakeholders to enhance teamwork and promote
                                                       knowledge sharing.</p>
                                                  <p><strong>Mentorship:</strong> Be open to mentoring others and
                                                       sharing your expertise to develop the skills of your team
                                                       members.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Post-Interview Follow-Up</summary>
                                                  <p><strong>Thank You Email:</strong> Send a thank-you email to the
                                                       interviewer, reiterating your interest in the position and
                                                       reflecting on key points discussed during the interview.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                              <div id="content4" class="content-item" style="display: none;">
                                   <h1>Technical Support</h1>
                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the Role</summary>
                                                  <p><strong>Job Description:</strong> Familiarize yourself with the
                                                       specific responsibilities of a Technical Support Specialist, such
                                                       as troubleshooting technical issues, assisting customers via
                                                       various channels, and providing timely solutions.</p>
                                                  <p><strong>Key Skills:</strong> Focus on essential skills such as
                                                       problem-solving, effective communication, customer service, and
                                                       technical knowledge relevant to the products or services you will
                                                       support.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Technical Knowledge</summary>
                                                  <p><strong>Product Knowledge:</strong> Understand the products or
                                                       services you will be supporting, including their features, common
                                                       issues, and troubleshooting steps.</p>
                                                  <p><strong>System Knowledge:</strong> Gain familiarity with the
                                                       operating systems, software applications, and hardware commonly
                                                       used by your customers.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Improve Communication Skills</summary>
                                                  <p><strong>Clear Communication:</strong> Practice explaining technical
                                                       concepts in simple terms to ensure customers can understand the
                                                       solutions provided.</p>
                                                  <p><strong>Active Listening:</strong> Develop active listening skills
                                                       to accurately understand customer issues and provide effective
                                                       solutions.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Master Troubleshooting Techniques</summary>
                                                  <p><strong>Troubleshooting Process:</strong> Familiarize yourself with
                                                       systematic troubleshooting methods to identify and resolve
                                                       technical issues efficiently.</p>
                                                  <p><strong>Documentation:</strong> Learn to document issues and
                                                       solutions effectively, ensuring accurate record-keeping for
                                                       future reference.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to common
                                                       interview questions, such as:</p>
                                                  <ul>
                                                       <li>How do you handle difficult customers?</li>
                                                       <li>Can you describe a time you resolved a challenging technical
                                                            issue?</li>
                                                       <li>What steps do you take when troubleshooting an unknown
                                                            problem?</li>
                                                  </ul>
                                                  <p><strong>Scenario-Based Questions:</strong> Practice responding to
                                                       hypothetical scenarios that assess your problem-solving skills
                                                       and customer service approach.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Continuous Learning</summary>
                                                  <p><strong>Training and Certifications:</strong> Consider obtaining
                                                       certifications relevant to technical support, such as CompTIA A+,
                                                       ITIL, or vendor-specific certifications.</p>
                                                  <p><strong>Stay Updated:</strong> Keep up with the latest technology
                                                       trends and updates related to the products or services you
                                                       support.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Customer Relationship Management</summary>
                                                  <p><strong>CRM Software:</strong> Familiarize yourself with Customer
                                                       Relationship Management (CRM) tools that may be used in the role
                                                       to manage customer interactions and track support tickets.</p>
                                                  <p><strong>Follow-Up:</strong> Understand the importance of follow-up
                                                       communication to ensure customer satisfaction and resolve
                                                       outstanding issues.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Post-Interview Follow-Up</summary>
                                                  <p><strong>Thank You Email:</strong> Send a thank-you email to the
                                                       interviewer, reiterating your interest in the position and
                                                       reflecting on key points discussed during the interview.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                              <div id="content5" class="content-item" style="display: none;">
                                   <h1>Backend Support</h1>
                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the Role</summary>
                                                  <p><strong>Job Description:</strong> Familiarize yourself with the
                                                       specific responsibilities of a Backend Support Specialist, such
                                                       as managing server-side applications, ensuring database
                                                       integrity, and providing technical support for backend services.
                                                  </p>
                                                  <p><strong>Key Skills:</strong> Focus on essential skills such as
                                                       problem-solving, programming knowledge, database management, and
                                                       effective communication.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Technical Knowledge</summary>
                                                  <p><strong>Programming Languages:</strong> Gain proficiency in
                                                       relevant programming languages commonly used in backend
                                                       development, such as Python, Java, Ruby, or Node.js.</p>
                                                  <p><strong>Database Management:</strong> Understand database
                                                       management systems (DBMS) like MySQL, PostgreSQL, or MongoDB,
                                                       including how to write queries and manage data effectively.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Improve Communication Skills</summary>
                                                  <p><strong>Clear Communication:</strong> Practice articulating
                                                       technical concepts and issues clearly to non-technical
                                                       stakeholders to facilitate effective collaboration.</p>
                                                  <p><strong>Active Listening:</strong> Develop active listening skills
                                                       to understand customer issues and provide tailored solutions
                                                       efficiently.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Master Troubleshooting Techniques</summary>
                                                  <p><strong>Troubleshooting Process:</strong> Familiarize yourself with
                                                       common troubleshooting techniques for server-side issues,
                                                       including log analysis and debugging methodologies.</p>
                                                  <p><strong>Documentation:</strong> Learn to document processes and
                                                       solutions effectively, ensuring clarity and consistency for
                                                       future reference.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to common
                                                       interview questions, such as:</p>
                                                  <ul>
                                                       <li>How do you approach debugging a server-side application?</li>
                                                       <li>Can you describe a challenging technical problem you solved?
                                                       </li>
                                                       <li>What experience do you have with database management?</li>
                                                  </ul>
                                                  <p><strong>Scenario-Based Questions:</strong> Practice responding to
                                                       hypothetical scenarios that assess your problem-solving skills
                                                       and your ability to communicate technical information.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Continuous Learning</summary>
                                                  <p><strong>Training and Certifications:</strong> Consider pursuing
                                                       relevant certifications, such as AWS Certified Solutions
                                                       Architect or Microsoft Azure certifications, to enhance your
                                                       technical skills.</p>
                                                  <p><strong>Stay Updated:</strong> Keep abreast of the latest
                                                       technologies and trends in backend development to remain
                                                       competitive in the job market.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Customer Relationship Management</summary>
                                                  <p><strong>CRM Software:</strong> Familiarize yourself with Customer
                                                       Relationship Management (CRM) tools that may be used in the role
                                                       to manage customer interactions and support requests.</p>
                                                  <p><strong>Follow-Up:</strong> Understand the importance of timely
                                                       follow-up communication to ensure customer satisfaction and
                                                       address outstanding technical issues.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Post-Interview Follow-Up</summary>
                                                  <p><strong>Thank You Email:</strong> Send a thank-you email to the
                                                       interviewer, reiterating your interest in the position and
                                                       reflecting on key points discussed during the interview.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                              <div id="content6" class="content-item" style="display: none;">
                                   <h1>Email Support</h1>
                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the Role</summary>
                                                  <p><strong>Job Description:</strong> Familiarize yourself with the
                                                       specific responsibilities of an Email Support Specialist, such as
                                                       responding to customer inquiries via email, providing technical
                                                       assistance, and resolving issues in a timely manner.</p>
                                                  <p><strong>Key Skills:</strong> Focus on essential skills such as
                                                       written communication, problem-solving, attention to detail, and
                                                       customer service.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Enhance Written Communication Skills</summary>
                                                  <p><strong>Professional Writing:</strong> Practice writing clear,
                                                       concise, and professional emails that address customer inquiries
                                                       effectively.</p>
                                                  <p><strong>Tone and Clarity:</strong> Ensure your writing tone is
                                                       friendly yet professional, and avoid jargon to ensure
                                                       understanding.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Product/Service Knowledge</summary>
                                                  <p><strong>Product Knowledge:</strong> Gain in-depth knowledge of the
                                                       products or services you will be supporting to provide accurate
                                                       and helpful responses.</p>
                                                  <p><strong>Common Issues:</strong> Familiarize yourself with common
                                                       customer issues and frequently asked questions to improve
                                                       response time.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Master Email Management Tools</summary>
                                                  <p><strong>CRM and Helpdesk Software:</strong> Get comfortable using
                                                       customer relationship management (CRM) systems and helpdesk
                                                       software to track emails, manage inquiries, and maintain customer
                                                       records.</p>
                                                  <p><strong>Templates and Macros:</strong> Learn how to create and
                                                       utilize email templates and macros for repetitive inquiries to
                                                       improve efficiency.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to common
                                                       interview questions, such as:</p>
                                                  <ul>
                                                       <li>How do you handle difficult customers via email?</li>
                                                       <li>Can you give an example of a time you resolved an issue
                                                            through email support?</li>
                                                       <li>How do you prioritize multiple customer inquiries?</li>
                                                  </ul>
                                                  <p><strong>Scenario-Based Questions:</strong> Practice responding to
                                                       hypothetical email scenarios that assess your problem-solving
                                                       skills and customer service approach.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Continuous Learning</summary>
                                                  <p><strong>Training and Resources:</strong> Consider enrolling in
                                                       online courses focused on customer service skills, effective
                                                       email communication, and conflict resolution.</p>
                                                  <p><strong>Stay Updated:</strong> Keep up with industry trends and
                                                       best practices for email support to enhance your skills
                                                       continually.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Customer Relationship Management</summary>
                                                  <p><strong>Follow-Up Procedures:</strong> Understand the importance of
                                                       following up on unresolved inquiries and maintaining customer
                                                       satisfaction.</p>
                                                  <p><strong>Building Relationships:</strong> Learn how to build rapport
                                                       with customers through consistent and friendly email
                                                       interactions.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Post-Interview Follow-Up</summary>
                                                  <p><strong>Thank You Email:</strong> Send a thank-you email to the
                                                       interviewer, reiterating your interest in the position and
                                                       reflecting on key points discussed during the interview.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                              <div id="content7" class="content-item" style="display: none;">
                                   <h1>Blended</h1>
                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the Role</summary>
                                                  <p><strong>Job Description:</strong> Familiarize yourself with the
                                                       specific responsibilities of a Blended Support Specialist, which
                                                       include handling customer inquiries through both voice and
                                                       non-voice channels (like chat and email), providing technical
                                                       support, and resolving issues efficiently.</p>
                                                  <p><strong>Key Skills:</strong> Focus on essential skills such as
                                                       excellent communication, adaptability, multitasking,
                                                       problem-solving, and customer service.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Enhance Communication Skills</summary>
                                                  <p><strong>Verbal Communication:</strong> Work on clear and effective
                                                       verbal communication skills to handle voice interactions,
                                                       ensuring a friendly and professional tone.</p>
                                                  <p><strong>Written Communication:</strong> Improve your written
                                                       communication skills for non-voice interactions, focusing on
                                                       clarity, tone, and professionalism.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Product/Service Knowledge</summary>
                                                  <p><strong>In-Depth Understanding:</strong> Gain thorough knowledge of
                                                       the products or services you will be supporting to provide
                                                       accurate information across all channels.</p>
                                                  <p><strong>Common Issues:</strong> Familiarize yourself with common
                                                       customer issues to enhance your ability to troubleshoot
                                                       effectively in both voice and non-voice formats.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Master Multichannel Support Tools</summary>
                                                  <p><strong>CRM and Helpdesk Software:</strong> Get comfortable with
                                                       CRM systems and helpdesk software that enable you to manage
                                                       inquiries from multiple channels.</p>
                                                  <p><strong>Call and Chat Management:</strong> Learn to use tools for
                                                       handling calls and chats simultaneously, ensuring efficient
                                                       responses to customer inquiries.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to common
                                                       interview questions, such as:</p>
                                                  <ul>
                                                       <li>How do you prioritize tasks when handling both calls and
                                                            chats?</li>
                                                       <li>Can you describe a time you successfully managed a difficult
                                                            customer interaction?</li>
                                                       <li>How do you adapt your communication style for different
                                                            channels?</li>
                                                  </ul>
                                                  <p><strong>Scenario-Based Questions:</strong> Practice responses to
                                                       hypothetical scenarios that assess your ability to multitask and
                                                       provide excellent service across channels.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Continuous Learning</summary>
                                                  <p><strong>Training and Resources:</strong> Consider enrolling in
                                                       courses focused on customer service skills, effective
                                                       communication, and conflict resolution across different channels.
                                                  </p>
                                                  <p><strong>Stay Updated:</strong> Keep abreast of industry trends and
                                                       best practices for blended support to continually enhance your
                                                       skills.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Customer Relationship Management</summary>
                                                  <p><strong>Follow-Up Procedures:</strong> Understand the importance of
                                                       following up on inquiries made through any channel to ensure
                                                       customer satisfaction.</p>
                                                  <p><strong>Building Relationships:</strong> Learn strategies to build
                                                       rapport with customers, fostering long-term relationships through
                                                       both voice and non-voice interactions.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Post-Interview Follow-Up</summary>
                                                  <p><strong>Thank You Email:</strong> Send a thank-you email to the
                                                       interviewer, reiterating your interest in the position and
                                                       highlighting key points discussed during the interview.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                              <div id="content8" class="content-item" style="display: none;">
                                   <h1>Team Lead</h1>
                                   <ol>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Understand the Role</summary>
                                                  <p><strong>Job Description:</strong> A Team Lead is responsible for
                                                       guiding a team towards achieving goals, managing team dynamics,
                                                       and ensuring project success.</p>
                                                  <p><strong>Key Skills:</strong> Focus on leadership, communication,
                                                       conflict resolution, and project management skills.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Enhance Leadership Skills</summary>
                                                  <p><strong>Inspire and Motivate:</strong> Learn how to inspire team
                                                       members to achieve their best and foster a positive team culture.
                                                  </p>
                                                  <p><strong>Delegation:</strong> Develop the ability to delegate tasks
                                                       effectively based on team members' strengths and weaknesses.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Develop Communication Skills</summary>
                                                  <p><strong>Clear Communication:</strong> Practice articulating goals,
                                                       expectations, and feedback clearly to team members.</p>
                                                  <p><strong>Active Listening:</strong> Enhance your active listening
                                                       skills to understand team members’ concerns and suggestions
                                                       better.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Foster Team Collaboration</summary>
                                                  <p><strong>Team Dynamics:</strong> Understand the dynamics of your
                                                       team and how to promote collaboration among members.</p>
                                                  <p><strong>Conflict Resolution:</strong> Develop strategies for
                                                       resolving conflicts within the team constructively.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Prepare for Interviews</summary>
                                                  <p><strong>Common Questions:</strong> Prepare answers to questions
                                                       such as:</p>
                                                  <ul>
                                                       <li>How do you handle team conflicts?</li>
                                                       <li>Can you provide an example of how you've motivated a team to
                                                            achieve a goal?</li>
                                                  </ul>
                                                  <p><strong>Behavioral Questions:</strong> Use the STAR method
                                                       (Situation, Task, Action, Result) to structure your responses.
                                                  </p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Continuous Improvement</summary>
                                                  <p><strong>Feedback Loops:</strong> Implement regular feedback
                                                       sessions to promote continuous improvement within the team.</p>
                                                  <p><strong>Training and Development:</strong> Encourage team members
                                                       to pursue training and development opportunities to enhance their
                                                       skills.</p>
                                             </details>
                                        </li>
                                        <li>
                                             <details>
                                                  <summary style="color:#33b6cb; font-weight:bolder; font-size:20px">
                                                       👉🏻Post-Interview Follow-Up</summary>
                                                  <p><strong>Thank You Email:</strong> Send a thank-you email
                                                       highlighting your leadership vision and eagerness to contribute
                                                       to the team.</p>
                                             </details>
                                        </li>
                                   </ol>

                              </div>
                         </div>
                    </div>
                    <script>
                    document.addEventListener("DOMContentLoaded", function() {
                         const links = document.querySelectorAll(".sidebar ul li a");
                         const contentItems = document.querySelectorAll(".content-item");

                         links.forEach(link => {
                              link.addEventListener("click", function(e) {
                                   e.preventDefault();

                                   // Remove active class from all links
                                   links.forEach(link => {
                                        link.classList.remove("active");
                                        link.style.backgroundColor =
                                             ""; // Reset background color
                                   });

                                   // Add active class to the clicked link
                                   this.classList.add("active");
                                   this.style.backgroundColor = "#26262a";

                                   // Get the target content ID
                                   const targetContent = this.getAttribute(
                                        "data-content");

                                   // Hide all content items
                                   contentItems.forEach(item => {
                                        item.style.display =
                                             "none"; // Hide content using inline styles

                                        // Close all details elements in the currently hidden content
                                        const details = item.querySelectorAll(
                                             "details");
                                        details.forEach(detail => {
                                             detail.removeAttribute(
                                                  "open"
                                             ); // Close the detail element
                                        });
                                   });

                                   // Show the selected content
                                   const selectedContent = document.getElementById(
                                        targetContent);
                                   selectedContent.style.display =
                                        "block"; // Show content using inline styles

                                   // Close all details elements in the currently shown content
                                   const selectedDetails = selectedContent
                                        .querySelectorAll("details");
                                   selectedDetails.forEach(detail => {
                                        detail.removeAttribute(
                                             "open"
                                        ); // Close the detail element
                                   });
                              });
                         });
                    });
                    </script>


               </body>


          </div>

     </div>

     <div class="bg-light pt-80 pb-80">

          <div class="container">

               <div class="row">

                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">

                         <div class="section-title">

                              <h2 style="text-transform: capitalize;">Latest Updates 💼</h2>

                         </div>

                    </div>

               </div>

               <div class="row">

                    <div class="col-md-12">

                         <div class="recent-job-wrapper alt-stripe mr-0">
                              <?php
							require 'constants/db_config.php';
							try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $stmt = $conn->prepare("SELECT * FROM tbl_jobs ORDER BY enc_id DESC LIMIT 8");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
  

                            foreach($result as $row) {
							$jobcity = $row['city'];
							$jobcountry = $row['country'];
							$type = $row['type'];
							$title = $row['title'];
							$closingdate = $row['closing_date'];
							$company_id = $row['company'];
							$post_date = date_format(date_create_from_format('d/m/Y', $closingdate), 'd');
                            $post_month = date_format(date_create_from_format('d/m/Y', $closingdate), 'F');
                            $post_year = date_format(date_create_from_format('d/m/Y', $closingdate), 'Y');
										   
							$stmtb = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$company_id' and role = 'employer'");
                            $stmtb->execute();
                            $resultb = $stmtb->fetchAll();
							foreach($resultb as $rowb) {
							$complogo = $rowb['avatar'];
							$thecompname = $rowb['first_name'];	
								
							}
							
							if ($type == "Freelance") {
							$sta = '<div class="job-label label label-success">
									Freelance
									</div>';
											  
							}
							if ($type == "Part-time") {
							$sta = '<div class="job-label label label-danger">
									Part-time
									</div>';
											  
							}
							if ($type == "Full-time") {
							$sta = '<div class="job-label label label-warning">
									Full-time
									</div>';
											  
							}
							?>
                              <marquee behavior="scroll" direction="up" height="100px" scrollamount="5" class="marquee"
                                   onmouseover="this.stop();" onmouseout="this.start();">
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                                   <a class="recent-job-item clearfix" target="_blank"
                                        href="explore-job.php?jobid=<?php echo $row['job_id']; ?>">
                                        <div class="GridLex-grid-middle">
                                             <div class="GridLex-col-5_xs-12">
                                                  <div class="job-position">
                                                       <div class="image">
                                                            <?php 
							if ($complogo == null) {
							print '<center><img alt="image"  src="images/blank.png"/></center>';
							}else{
							echo '<center><img alt="image" title="'.$thecompname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($complogo).'"/></center>';	
							}
							?>
                                                       </div>
                                                       <div class="content">
                                                            <h4><?php echo "$title"; ?></h4>
                                                            <p><?php echo "$thecompname"; ?></p>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-5_xs-8_xss-12 mt-10-xss">
                                                  <div class="job-location">
                                                       <i class="fa fa-map-marker text-primary"></i>
                                                       <?php echo "$jobcountry" ?></strong> -
                                                       <?php echo "$jobcity" ?>
                                                  </div>
                                             </div>
                                             <div class="GridLex-col-2_xs-4_xss-12">
                                                  <?php echo "$sta"; ?>
                                                  <span class="font12 block spacing1 font400 text-center">Due
                                                       -
                                                       <?php echo "$post_month"; ?>
                                                       <?php echo "$post_date"; ?>,
                                                       <?php echo "$post_year"; ?></span>
                                             </div>
                                        </div>
                                   </a>
                              </marquee>
                              <?php

                            }
	                        }catch(PDOException $e)
                            { 
                   
                             }
                             ?>





                         </div>

                    </div>

               </div>

          </div>

     </div>




     <footer class="footer-wrapper">

          <div class="main-footer">

               <div class="container">

                    <div class="row">

                         <div class="col-sm-12 col-md-9">

                              <div class="row">

                                   <div class="col-sm-6 col-md-4">

                                        <div class="footer-about-us">
                                             <h5 class="footer-title">About Dreamers </h5>
                                             <p>Dreamers Jobs is an online job portal and job management system designed
                                                  to
                                                  help people find employment more easily.</p>

                                        </div>

                                   </div>

                                   <div class="col-sm-6 col-md-5 mt-30-xs">
                                        <h5 class="footer-title">Quick Links</h5>
                                        <ul class="footer-menu clearfix">
                                             <li style="text-transform: capitalize;"><a href="./">Home</a></li>
                                             <li style="text-transform: capitalize;"><a href="job-list.php">Job List</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a
                                                       href="employers.php">Employers</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a
                                                       href="employees.php">Employees</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a href="contact.php">Contact
                                                       Us</a>
                                             </li>
                                             <li style="text-transform: capitalize;"><a href="#">Go to top</a></li>

                                        </ul>

                                   </div>

                              </div>

                         </div>

                         <div class="col-sm-12 col-md-3 mt-30-sm">

                              <h5 class="footer-title">Dreamers Jobs Contact</h5>

                              <p><i class="fas fa-map-marker-alt"></i> New Delhi, India 201301</p>
                              <p><i class="fas fa-envelope"></i> <a
                                        href="mailto:connectwithus@dreamers.co.in">connectwithus@dreamers.co.in</a></p>
                              <p><i class="fas fa-phone"></i> <a href="tel:+917347851575">+91 7347851575</a></p>


                         </div>


                    </div>

               </div>

          </div>

          <div class="bottom-footer" style="height:120px">

               <div class="container">

                    <div class="row">

                         <div class="col-sm-4 col-md-4">

                              <p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> Dreamers
                                   Vision
                                   Software</p>

                         </div>

                         <div class="col-sm-4 col-md-4">

                              <ul class="bottom-footer-menu">
                                   <li><a>Developed by Mini ❤️</a></li>
                              </ul>

                         </div>

                         <div class="col-sm-4 col-md-4">
                              <ul class="bottom-footer-menu for-social">
                                   <li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip"
                                                  data-placement="top" title="twitter"></i></a></li>
                                   <li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip"
                                                  data-placement="top" title="facebook"></i></a></li>
                                   <li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip"
                                                  data-placement="top" title="instagram"></i></a></li>
                              </ul>
                         </div>

                    </div>

               </div>

          </div>

     </footer>

     </div>


     </div>

     <div id="back-to-top">
          <a href="#"><i class="ion-ios-arrow-up"></i></a>
     </div>


     <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
     <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
     <script type="text/javascript" src="js/bootstrap-modal.js"></script>
     <script type="text/javascript" src="js/smoothscroll.js"></script>
     <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
     <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
     <script type="text/javascript" src="js/wow.min.js"></script>
     <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
     <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
     <script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
     <script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
     <script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
     <script type="text/javascript" src="js/bootstrap-select.js"></script>
     <script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
     <script type="text/javascript" src="js/handlebars.min.js"></script>
     <script type="text/javascript" src="js/jquery.countimator.js"></script>
     <script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
     <script type="text/javascript" src="js/slick.min.js"></script>
     <script type="text/javascript" src="js/easy-ticker.js"></script>
     <script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
     <script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
     <script type="text/javascript" src="js/customs.js"></script>

</body>


</html>