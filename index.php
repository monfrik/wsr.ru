<?php
    // var_dump($_SESSION['id']);
    // var_dump($_SESSION);
    // unset($_SESSION['id']);
// unset($_SESSION['login']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <title>Switch</title>
</head>
<body>
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form">
                            <form method="post" class="signin">
                                <label for="login">login or mail</label>
                                <input type="text" name="login" placeholder="" >
                                <label for="password">password</label>
                                <input type="password" name="password" placeholder="">
                                <input type="submit" value="sign in">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form">
                            <form method="post" class="register">
                                <label for="login">login</label>
                                <input type="text" name="login" placeholder="">
                                <label for="password">password</label>
                                <input type="password" name="password" placeholder="">
                                <label for="mail">mail</label>
                                <input type="email" name="mail" placeholder="">
                                <label for="show">Подробнее</label>
                                <input type="checkbox" id="show"  name="show">
                                <label for="avatar">Ваш аватар</label>
                                <input type="file" name="avatar" accept="image/*">
                                
                                <!-- Разварачивание-->
                                <label for="sex" class="showMore">М</label>
                                <input type="radio" name="gender" value="men" class="showMore">
                                <label for="sex" class="showMore">Ж</label>
                                <input type="radio" name="gender" value="woomen" class="showMore">
                                <input type="text" name="age" placeholder="Age" class="showMore">
                                <label for="news" class="showMore">news</label>
                                <input type="checkbox" name="news" value="1" class="showMore">
                                <label for="games" class="showMore">games</label>
                                <input type="checkbox" name="games" value="1" class="showMore">
                                <label for="events" class="showMore">events</label>
                                <input type="checkbox" name="events" value="1" class="showMore">
                                <select name="business" class="showMore">
                                    <option value="none">не выбрано</option>
                                    <option value="student">student</option>
                                    <option value="worker">worker</option>
                                    <option value="schoolboy">schoolboy</option>
                                </select>
                                <input type="submit" value="зарегистрироваться">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <header id="header">
        <nav>
            <ul>
                <div class="nav">
                    <li><a href="#header" class="anchor link headerLink">Home</a></li>
                    <li><a href="#whatWeDo" class="anchor link headerLink">What we do?</a></li>
                    <li><a href="#testimonials" class="anchor link headerLink">Testimonial</a></li>
                    <li><a href="#contactUs" class="anchor link headerLink">Contact Us</a></li>
                    <li><a href="#header" class="anchor headerLink">Switch</a></li>
                </div>
                <div class="sign">
                    <?php if (empty($_SESSION["id"])): ?> <!--Если в сессии нет id-->
                        <li>
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter2'>register</button>
                        </li>
                        <li>
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter1'>sign in</button>
                        </li>
                    <?php else: ?> <!--Если в сессии есть id-->
                            <li>
                                <a class="name"><?= $_SESSION["login"] ?></a>
                            </li>
                            <li><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter1'>sign out</button></li>
                    <?php endif; ?>
                </div>
            </ul>
        </nav>
        <section>
            <h1>Art is Eternal Happiness</h1>
            <a href="#">work with us</a>
        </section>
        <a href="#whatWeDo" class="anchor">scroll down<i class="fas fa-arrow-down"></i></a>
    </header>
    <main>
        <section id="whatWeDo" class="whatWeDo">
            <div class="wrapper">
                <h2 class="title gray">what we do</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni id voluptatibus delectus.</p>
                <ul>
                    <li>
                        <figure>
                            <object data="svg/camera-retro-solid.svg" type=""></object>
                            <figcaption>
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit facilis cumque sit praesentium. Corporis possimus excepturi ipsa labore libero assumenda.</p>
                                <a href="#">Learn more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <object data="svg/tachometer-alt-solid.svg" type=""></object>
                            <figcaption>
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit facilis cumque sit praesentium. Corporis possimus excepturi ipsa labore libero assumenda.</p>
                                <a href="#">Learn more</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            <object data="svg/briefcase-solid.svg" type=""></object>
                            <figcaption>
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit facilis cumque sit praesentium. Corporis possimus excepturi ipsa labore libero assumenda.</p>
                                <a href="#">Learn more</a>
                            </figcaption>
                        </figure>
                    </li>           
                </ul>
            </div>
        </section>
        <section class="ourLatestWork">
            <div class="wrapper">
                <h2 class="title green">our latest work</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni id voluptatibus delectus.</p>
                <div class="buttonsContainer">
                    <input type="radio" id="button1" name="button" checked>
                    <label for="button1">Photography</label>
                    <input type="radio" id="button2" name="button">
                    <label for="button2">Design</label>
                    <input type="radio" id="button3" name="button">
                    <label for="button3">Print</label>
                </div>
                <ul class="imagesContainer">
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                </ul>
                <button class="showMore">
                    View more work <i class="fas fa-arrow-right"></i>
                </button> 
            </div>
        </section>
        <section>
            <div class="testimonials" id="testimonials">
                <div class="wrapper">
                    <h2 class="title gray">testimonials</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni id voluptatibus delectus.</p>  
                    <ul>
                        <li>
                            <blockquote>
                                “Awalnya saya tidak menderita penyakit apapun,<br>
                                namun setelah saya tidak berobat ke klinik tongfang, saya dinyatakan<br>
                                tidak menderita penyakit apapun!”
                            </blockquote> 
                            <span>
                                <a href="#"></a>
                                <p>
                                    Mr. Herp <br>
                                    <mark>
                                        CEO of meme, Inc.
                                    </mark>
                                </p>
                            </span>
                        </li>
                        <a href="#" class="carousel-control-prev" data-slide="prev"></a>
                        <a href="#" class="carousel-control-next" data-slide="next"></a>
                    </ul>
                </div>
            </div>
        </section>
        <section class="ourHappyClient">
            <div class="wrapper">
                <h2 class="title gray">our Happy Client</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni id voluptatibus delectus.</p>
                <ul class="imagesContainer">
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                    <li class="img"></li>
                </ul>
                <button class="showMore">
                    See all client <i class="fas fa-arrow-right"></i>
                </button> 
            </div>
        </section>
        <section class="meetTheTeam">
            <div class="wrapper">
                <h2 class="title green">meet the team</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni id voluptatibus delectus.</p>
                <ul class="participantCont">
                    <li>
                        <a href="#" class="participant"></a>
                        <p>Krisna Wijaya</p>
                        <ul class="iconsCont">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>   
                    <li>
                        <a href="#" class="participant"></a>
                        <p>Gabriel Yoshua</p>
                        <ul class="iconsCont">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>   
                    <li>
                        <a href="#" class="participant"></a>
                        <p>Adik N.K.L</p>
                        <ul class="iconsCont">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>   
                    <li>
                        <a href="#" class="participant"></a>
                        <p>Zan D.J</p>
                        <ul class="iconsCont">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>   
                    <li>
                        <a href="#" class="participant"></a>
                        <p>Faizal Febri</p>
                        <ul class="iconsCont">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>   
                </ul>
            </div>
            <div class="btnCont">
                <button class="showMore">
                    WORK WITH US
                </button> 
            </div>
        </section>
    </main>
    <footer>
        <section class="contactUs" id="contactUs">
            <div class="wrapper">
                <ul class="infoCont">
                    <li>
                        <h2 class="title">about us</h2>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing 
                            elit. Placeat odio dolore rem nemo dolorem at repellat 
                            veniam quibusdam vel corporis quod, quaerat nisi sequi 
                            a consectetur dicta, ullam blanditiis quas eveniet 
                            minima ipsam quisquam natus molestias! Fuga ipsam soluta
                            facere saepe quidem assumenda perferendis voluptates dicta, 
                            at nostrum, praesentium in.
                            Lorem ipsum, dolor sit amet consectetur adipisicing 
                            elit. Placeat odio dolore rem nemo dolorem at repellat 
                            veniam quibusdam vel corporis quod, quaerat nisi sequi 
                            a consectetur dicta, ullam blanditiis quas eveniet 
                            minima ipsam quisquam natus molestias! Fuga ipsam soluta
                            facere saepe quidem assumenda perferendis voluptates dicta, 
                            at nostrum, praesentium in.
                        </p>
                        <ul class="iconsCont">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </li>
                    <li>
                        <h2 class="title">recent posts</h2>
                        <ul class="recentPosts">
                            <li>
                                <a href="#"></a>
                                <p> 
                                    Lorem ipsum dolor sit amet.
                                    <br>
                                    <mark>MAGAZINE</mark>
                                </p>
                            </li>
                            <li>
                                <a href="#"></a>
                                <p> 
                                    Lorem ipsum dolor sit amet.
                                    <br>
                                    <mark>UI DESIGN</mark>
                                </p>
                            </li>
                            <li>
                                <a href="#"></a>
                                <p> 
                                    Lorem ipsum dolor sit amet.
                                    <br>
                                    <mark>PHOTOGRAPHY</mark>
                                </p>
                            </li>
                            <li>
                                <a href="#"></a>
                                <p> 
                                    Lorem ipsum dolor sit amet.
                                    <br>
                                    <mark>BOOK</mark>
                                </p>
                            </li>
                            <li>
                                <a href="#"></a>
                                <p> 
                                    Lorem ipsum dolor sit amet.
                                    <br>
                                    <mark>UI DESIGN</mark>
                                </p>
                            </li>
                        </ul>
                    </li>
                    <li class="formCont">
                        <h2 class="title">contact us</h2>
                        <p>10044 West 23th Street, Suite 721
                            New York NY 10010
                            Email: Username@email.com
                            Phone: +1 (0) 123 4567 890
                            Fax: +1 (0) 321 4567 890
                        </p>
                        <form action="" method="post">
                            <input type="text" name="name" placeholder="Your Name.." required>
                            <input type="email" name="email" placeholder="Your Email.." required>
                            <textarea name="mesage" id="" cols="30" rows="10" placeholder="Your Mesage.." required></textarea>
                            <input type="submit" name="" value="SEND">
                        </form>
                    </li>
                </ul>
            </div>
        </section>
        <section class="asSeenOn">
            <div class="wrapper">
                <h2 class="title">As seen on</h2>
                <ul>
                    <li>
                        <img src="img/asSeenOn/Cnn.png" alt="">
                    </li>
                    <li>
                        <img src="img/asSeenOn/TechCrunch_Logo_2013.png" alt="">
                    </li>
                    <li>
                        <img src="img/asSeenOn/300px-BBC.png" alt="">
                    </li>
                    <li>
                        <img src="img/asSeenOn/The_New_York_Times.png" alt="">
                    </li>
                </ul>
            </div>
        </section>
        <p>Made with love by MonFriK :Ъ</p>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/jquery.js"></script>
<script src="js/my.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       $(".anchor").on("click", function (event) {
           event.preventDefault();
           let id  = $(this).attr('href'),
               top = $(id).offset().top;
           $('body,html').animate({scrollTop: top}, 750);
       });
   });
   </script>
</html>