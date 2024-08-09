
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDO KIOSK Homepage</title>
    <link rel="stylesheet" href="<?php echo e(asset('web/css/homepagestyle.css')); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 d-flex align-items-center">
                <img src="/web/images/logo.png" alt="Logo" class="logo main-logo" />
            </div>
            <div class="col-md-3 d-flex flex-column align-items-end justify-content-center">
                <div class="text-right">
                    <p id="time" style="font-size: 35px; color: #FFFFFF;">8:30 AM</p>
                    <p id="date" style="font-size: 20px; color: #FFFFFF;">Monday, July 15, 2024</p>
                </div>
            </div>
            <div class="col-md-1 d-flex align-items-start justify-content-end">
                <a href="<?php echo e(url('/admin')); ?>">
                    <i class="material-icons" style="font-size: 25px; color: #FFFFFF;">settings</i>
                </a>
            </div>
        </div>
       
        <header class="blue-header">
            <h2 class="kiosk-title">SDO KIOSK</h2>
        </header>
        <div class="white-container">
            <br>
            <div class="row">
                <div class="col-md-4 video-container">
                       <video id="videoPlayer" width="121%" height="110%" loop autoplay controls >
                        <source id="videoSource" src="<?php echo e(asset('web/videos/Video1.mp4')); ?>" type="video/mp4">
                        <source id="videoSource" src="<?php echo e(asset('web/videos/Video2.mp4')); ?>" type="video/mp4">
                        <source id="videoSource" src="<?php echo e(asset('web/videos/Video3.mp4')); ?>" type="video/mp4">
                        <source id="videoSource" src="<?php echo e(asset('web/videos/Video4.mp4')); ?>" type="video/mp4">
                        <source id="videoSource" src="<?php echo e(asset('web/videos/Video5.mp4')); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                  
                </div>
                <div class="col-md-4">
                    <div class="scroll-container">
                      <div class="image-button-container">
                        
                        <button data-url="https://www.deped.gov.ph/feedback/" class="image-button queue-and-feedback" style="background-image: url('/web/images/queue and feedback.png');">
                         
                        </button>
                        <button data-url="https://www.deped.gov.ph/central-office-chart/" class="image-button organization-chart" style="background-image: url('/web/images/orgchart.png');">
                          
                        </button>
                        <button data-url="https://www.deped.gov.ph/" class="image-button deped-tayo" style="background-image: url('/web/images/depedtayo.png');">
                         
                        </button>
                        <button data-url= "<?php echo e(url('/citizen-charter')); ?>" class="image-button citizen-charter" style="background-image: url('/web/images/citizen charter.png');" onclick="showCitizenCharter()">
                        </button>

                        <button data-url="https://www.deped.gov.ph/wp-content/uploads/DO_s2024_009.pdf" class="image-button activities" style="background-image: url('/web/images/activities.png');">
                        
                        </button>
                       <button data-url="https://deped-olongapo.com/" class="image-button deped" style="background-image: url('/web/images/depedolongapo.png');">
                        </button>
                      </div>
                    </div>
                  </div>
                <div class="col-md-4">
                    <div class="card mb-4" style="font-size: 12px;">
                        <p class="upcoming-events">UPCOMING EVENTS</p>
                        <div class="card-body">
                            <p class="custom-text"><b>Enrollment Guidelines for School Year 2024–2025</b><br><span>June 25, 2024 DM 032, S. 2024</span></p><br>
                            <p class="custom-text"><b>Administration of the National Career Assessment Examination (NCAE)</b><br><span>June 18, 2024 DM 031, S. 2024</span></p><br>
                            <p class="custom-text"><b>2024 National Literacy Awards</b><br><span>June 18, 2024 DM 030, S. 2024</span></p>
                        </div>
                    </div>
                
                    <div class="card" style="font-size: 12px;">
                        <p class="news-and-articles">NEWS AND ARTICLES</p>
                        <div class="card-body">
                            <a href="https://deped-olongapo.com/schools-division-office-conducts-strategic-planning-workshop/#:~:text=The%20Schools%20Division%20Office%2C%20under,Bay%20Freeport%20Zone%20(SBFZ)"> <p class="custom-text"><b>Schools Division Office Conducts Strategic Planning Workshop</b></a>
                            <p class="custom-text"><b>Olongapo City Division Office Holds Gender and Development Training in Baguio City</b><br><span>By Arlene Dela Rea, July 2, 2024</span></p><br>
                            <a href="https://deped-olongapo.com/dped-neu-2nd-directors-cup-concludes-successfully-in-iba-zambales/#:~:text=The%20DPED%2DNEU%202nd%20Director's,at%20the%20Iba%20Sports%20Complex." class="custom-text" id="dynamic-link">
                                <p class="custom-text"><b>DPED-NEU 2nd Director’s Cup Concludes Successfully in Iba, Zambales</b><br><span>By Arlene Dela Rea, July 2, 2024</span></p>
                            </a>
                              

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Section -->
        <footer>
            <div class="row">
                <div class="col-md-4 align-items-left d-flex ">
                    <img src="/web/images/DepEd Logo.png" alt="DepEd Logo" class="logo deped-logo" />
                </div>
                <center>
                    <div class="col-md-5 align-items-center d-flex justify-content-center">
                        <img src="/web/images/QR Code.png" alt="QR code" class="logo qr-code" />
                        <button data-url="https://www.deped.gov.ph/feedback/" class="feedback-button"><b>Scan the QR <br> code for Feedback</b></button>
                    </div>
                </center>
                
              
                <div class="col-md-12 text-right">
                    <p><b><i>“SDO Olongapo City: Towards a Culture of Excellence and Character”</i></b></p>
                </div>
            </div>
        </footer>
    </div>

    <script>const videoPaths = [(
        "<?php echo e(asset('web/videos/Video1.mp4')); ?>",
        "<?php echo e(asset('web/videos/Video2.mp4')); ?>",
        "<?php echo e(asset('web/videos/Video3.mp4')); ?>",
        "<?php echo e(asset('web/videos/Video4.mp4')); ?>",
        "<?php echo e(asset('web/videos/Video5.mp4')); ?>"
    )];</script>
      <script src="<?php echo e(asset('web/js/video.js')); ?>"></script>
    
   
    <script src="<?php echo e(asset('web/js/timedate.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/button.js')); ?>"></script>
    <script src="<?php echo e(asset('web/js/link.js')); ?>"></script>
    
    
  
</body>

</html>








<?php /**PATH C:\Users\Sharmie\SDO KIOSK OJT SIMBULAN\SDO_KIOSK\resources\views/web/homepage.blade.php ENDPATH**/ ?>