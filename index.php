
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>E-Commerce</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" 
integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" type="text/css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
</head>
<body>
    <nav class="nav nav_top">
    <div class ="logo">
       <a href="index.html"><img src="Vishwakarma_Institute_of_Technology.png" width="90"hight="auto"></a>
    </div>
    <div class="vit" >
       <center> <b><h1>The_Book_Cycle</h1></b></center>

    </div>
    <div class="nav_side">
    <a href="about.html">About Us</a>
    <a href="service.html">Service</a>
    <a href="contact.html">contact</a>
    <a href="login1.php">Library Admin</a>

    </div>
  </nav>
   <div class="main">
        <div class="main_content" >
                <a href =" https://www.vit.edu/" >
                   <!-- <h2>Vishwakarma Institute of Technology<br> -->
                  </h2></a>
                        <!-- <div class="hello">
                        <a href="rent.html">Rent a Book</a>
                       <a href="buy.html">Buy a Book</a>
                       <a href="library.html">VIT Library</a>
                        </div> -->

                        <div class="hello">
                           <a href="rent.html">Rent a Book</a>
                            </div>
                        
                        <div class="hello">
                        <a href="buy.html">Buy a Book</a>
                        </div>

                        <div class="hello">
                            <a href="library.php">Vit Library</a>
                            </div>
                            
                        
                        <div class="hello">
                        <a href="ONLINE.HTML">Online WebSite</a>
                        </div>
        </div>
   </div>

   <div class="products">
       <h2>THE BOOK CYCLE</h2>
             <div class="product_container">
                 <div class="item">
                     <div class="item_image">
                        <img src="How to Stop .jpg"width="100%" height="100%">
                 </div>
                 <div class="item_container">
                     <h2>How to stop Worring and Start Living </h2>
                     <p>Get Flat 40% Off On 100 Bestsellers. 
                         Zero Cost EMI With Re. 1 Down Payment On Furniture. 
                         Visit Your Nearest Store To Explore More Offers.
                          Hurry, Limited Period Offer. Homeware Sale At Stores. 
                          Visit Your Nearest Store. Easy EMI On All Furniture.</p>
                          <a href="">BUY NOW</a>
                     </div>

                 </div>
                 <div class="item">
                    <div class="item_image">
                        <img src="Brain Hcaks.jpeg"width="100%" height="100%">
                    </div>
                    <div class="item_container">
                        <h2>Brain Hacks</h2>
                        <p>Get Flat 40% Off On 100 Bestsellers. 
                           Brain Hacks will help you transform the way you work, live, 
                           and feel by tapping into the power of your executive 
                           functioning skills. Modern life requires a lot of our brains.</p>
                             <a href="">BUY NOW</a>
                    </div>

                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="Atomic Habits.png"width="100%" height="100%">
                    </div>
                    <div class="item_container">
                        <h2>Atomic Habits</h2
                            >
                       <h5><p>Get Flat 40% Off On 100 Bestsellers.<br> </h5> 
                          An atomic habit is a regular practice or routine that
                           is not only small and easy to do but is also the source
                            of incredible power; a component of the system of 
                            compound growth</p>
                             <a href="">BUY NOW</a>
                    </div>


                </div>
                
            </div>
            <div class="product_btn">
                <a href="Service.html">Explore Our Products</a> 
            </div>
   </div>
   <hr>
    <div class="keypoints">
       <h2> OUR   Key Highlight   </h2>
       <div class="key_con">
           <div class="key_content">
              <li>The word “bestselling” on the cover page.</li>
              <li>Award-winning book.</li>
              <li>Recommended by friend/family/blogger.</li>
              <li>A review of the book by a noted author.</li>
              <li>Medium length book</li>
              
    
           </div>
           <div class="key_img">
               <img src="books.jpeg"width="100%">
           </div>

       </div>
       </div>
    <div class="testi">

          <h2>OUR DEVELOPERS</h2>
<div class="testi_container">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
              <div class="item_img">
                <img src="" alt="...">
              </div>
              <div class="item_content">
                  <h2>MAYURESH M KODAPE</h2>
                  <p>ELECTRONIC AND TELE-COMMUNICATION</p>
              </div>

            
          </div>
          <div class="item">
            <div class="item_img">
                <img src="AMEYA .jpeg" alt="...">
              </div>
              <div class="item_content">
                  <h2>AMEYA KULKARNI.</h2>
                  <p>ELECTRONIC AND TELE-COMMUNICATION</p>
              </div>
          </div>

          <div class="item">
            <div class="item_img">
                <img src="" alt="...">
              </div>
              <div class="item_content">
                  <h2>ROHAN KSHIRSAGAR.</h2>
                  <p>ELECTRONIC AND TELE-COMMUNICATION</p>
              </div>
          </div>

          <div class="item">
            <div class="item_img">
                <img src="ADITYA.jpeg" alt="...">
              </div>
              <div class="item_content">
                  <h2>ADITYA KESKAR.</h2>
                  <p>ELECTRONIC AND TELE-COMMUNICATION</p>
              </div>
          </div>

          <div class="item">
            <div class="item_img">
                <img src="" alt="...">
              </div>
              <div class="item_content">
                  <h2>ABHIJEET KAMBLE.</h2>
                  <p>ELECTRONIC AND TELE-COMMUNICATION</p>
              </div>
          ...
        </div>

    
      
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</div>

       </div>
       </div>
<hr>

       <div class="team">
           <h2>OUR Team</h2>
           <div class="team_container">
               <div class="team_video">
               <!--   <video controls>
                       <source src="video1.mp4" type="video/mp4" >
                   </video>-->
               </div>
               <div class="team_content">
                    <p>A paragraph is a series of related sentences developing a 
                        central idea, called the topic. Try to think about paragraphs in terms of
                         thematic unity: a paragraph is a sentence or a group of sentences that 
                         supports one central, unified idea. 
                        Paragraphs add one idea at a time to your broader argument.</p>
                        <p>Probably the most effective way to achieve paragraph unity is to express the central idea of the paragraph in a topic sentence.

                            Topic sentences are similar to mini thesis statements. Like a thesis statement, a topic sentence has a specific main point. Whereas the thesis is the main point of the essay, the topic sentence is the main point of the paragraph. Like the thesis statement, a topic sentence has a unifying function. But a thesis statement or topic sentence alone doesn’t guarantee unity. An essay is unified if all the paragraphs relate to the thesis, whereas a paragraph is unified if all the sentences relate to the topic sentence. Note: Not all paragraphs need topic sentences. In particular, opening and closing paragraphs, which serve different functions from body paragraphs, generally don’t have topic sentences.
                            
                            In academic writing, the topic sentence nearly always works best at the beginning of a paragraph so that the reader knows what to expect:</p>
               </div>
           </div>
       </div>
       <div class="feed">
           <h2>Write a review</h2>
           <div class="feed_form">
               <form name="The_book_cycle_feedback"method="post" > 
                   <input type="text" name="FULL_NAME" placeholder="Name" ><br>
                   <input type="email" name="EMAIL_ID" placeholder="Email ID" ><br>
                   <input type="number" name="CONTACT_NUMBER" placeholder="Contact Number" ><br>
                   <textarea rows="5" cols="7"  name="REVIEW" placeholder="ReviewWrite your review"></textarea><br>
                   <button type="submit" >Submit</button>
                </form>
           </div>

       </div>



       <footer>
        <div class=" footer_logo">
        <a href="#" ><img src="Vishwakarma_Institute_of_Technology.png" width="150"></a>
        </div>
        <div class="pages">
            <h2>pages</h2>
            <a href="">About Us</a>|
            <a href="">Service</a>|
            <a href="">Blog</a>|
            <a href="">LogIn</a>|
            <a href="">Sign Up</a>
        </div>    
        <div class="doc">
            <h2>documents</h2>
            <a href="">Privacy Policy</a>|
            <a href="">Terms Of Use</a>|
            <a href="">Refund Policy</a>
        </div>
        <div class="social">
            <h2>Follow us</h2>
        <a href="https://www.facebook.com/pages/category/Education-website/1Stopai-102490171820303/ " target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://twitter.com/uomstop1?lang=en" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://in.linkedin.com/company/1stop-ai"target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/1stop.co.in/?hl=en" ><i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        </div>
        <div class="contact">
            <h2>Contact Us</h2>
            <a href="https://api.WhatsApp.com/send?phone=+918390775578" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>
            </a>|
            <a href="tel: +918390775578"><i class="fa fa-phone" aria-hidden="true"></i></a>|
            <a href="mailto: mayuresh.kodape20@vit.edu"><i class="fa fa-envelope-open" aria-hidden="true"></i></a>|
           
        </div>
        <hr>
        <p>Copyright &copy;2021 1stope.All rights reserved.</p>
       
       
       
       </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
       <!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" 
integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" 
crossorigin="anonymous"></script>
<script type="text/javascript">
    const scriptURL = 'https://script.google.com/macros/s/AKfycbz66Mwhhcen8ZMqjuWGCswuE0L9ha6P9UqEJVnemZBmfkJc5BHSx_iagawJoda_zzwcTg/exec'
            const form = document.forms['The_book_cycle_feedback']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
</script>
</body>
</html>