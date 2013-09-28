<?php
// Home Page
?>
<?php 
ob_start();
include("header.php");
$buffer=ob_get_contents();
ob_end_clean();
$buffer=str_replace("Llama","Llama Home",$buffer);
echo $buffer;?>

<body>
    <div class="wrapper static" id="main">
        <div style="height: 100%">
            <div class="cell"></div>
            <div class="cell" id="navigContainer">
        
                <div id="navigBar">
                    <ul>
                        <li class=""><div id="home"></div></li>
                        <li><div id="link_bio" class="menuItem">BIO</div></li>
                        <li><div id="link_powers" class="menuItem">ABILITIES</div></li>
                        <li><div id="link_contact" class="menuItem">CONTACT</div></li>
                    </ul>
                </div>
            </div>
            <div class="cell"></div>
        </div>
    </div>
    <div class="wrapper" id="bioContainer" style="background: url('img/bg_hexgrid.jpg') no-repeat;background-size: cover; background-position: center">
        <div class="contentContainer">
            <div id="fullCell">
                <ul class="twoCol">
                    <li><img class="scalePic" style="box-shadow: 0px 0px 10px #000" src="http://2.bp.blogspot.com/-if1qJmHZuDA/TmQCJKEIPrI/AAAAAAAAE6I/f7u8--2vZAQ/s320/Funny+Llama+pictures2.jpg" alt="LLAMA"></li>
                    <li>
                        <h1><i>LLAMA (lama glama)</i></h1>
                        <ul class="list">
                            <li>Lifespan: 20 Years</li>
                            <li>Type: Mammal</li>
                            <li>Diet: Herbivore</li>
                            <li>Size: 5ft-6ft</li>
                            <li>Weight:~250 lbs</li>
                        </ul>
                        <br/>
                        <h3>Favorite Activities</h3>
                        <ul class="list">
                            <li>Run around the fields all day.</li>
                            <li>Hunt zombies and bats during night.</li>
                            <li>Assist fellow human neighbors.</li>
                            <li>Provide love and warmth to people</li>
                        </ul>
                    </li>
                </ul>
                <br/>
            </div>
        </div>
    </div>
    <div class="wrapper" id="powersContainer" style="background: url('img/bg_abilities.jpg') no-repeat;background-size: cover; background-position: center">
        <div class="contentContainer">
            <div>
            <div>
                <ul class="twoCol">
                    <li><img src="http://spectrumculture.com/wp-content/uploads/2013/03/Pearl-Jam-Vs.jpg" alt="LLAMA" width="300"></li>
                    <li>
                        <div>
                            <h1>Adoreable = Marketable</h1>
                            <br/>
                            <p>Llamas are models in the animal kingdom. Did you know  that Pearl Jam's second studio album cover featured the loveable llama? The album went MASSIVE hit with just a llama!</p>
                        </div>
                    </li>
                </ul>
                <br/>
            </div>
            <div>
                <ul class="twoCol">               
                    <li>
                        <div>
                            <h1>Internet Fame</h1>
                            <br/>
                            <p>Long before YouTube came into existence, llamas became a hit. Burton Earny's The Llama Song is a classic that many people still listen today.</p>
                        </div>
                    </li>
                    <li><iframe class="ytVid" src="//www.youtube.com/embed/KMYN4djSq7o" allowfullscreen></iframe></li>
                </ul>
                <br/>
            </div>
            </div>
        </div>
    </div>
    <div class="wrapper static" id="contactContainer" style="background: url('img/bg_contact.jpg') no-repeat;background-size: cover; background-position: center">
        <div class="cell"></div>
        <div class="contentContainer contactBox">
            <div>
                <h4>CONTACT US</h4>
                <hr/>
                <p>
                    We know how much you want to interact with these adoreable creatures! Don't worry. You can schedule a free trip to Llama World by phone or email.
                </p>
                <p>
                    Phone: 1 (552) 629-6753
                    <br/>
                    Email: <a href="mailto:loe@unlv.nevada.edu">contact@llamaworld.org</a>
                </p>
            </div>
        </div>
        <div class="cell"></div>
    </div>

<script>
    function adjustNavigBar()
    {
        if ($(document).scrollTop() >= $('#bioContainer').offset().top)
        {
            $('#navigContainer').css("position", "fixed");
            $('#navigContainer').css("z-index", "1000");
            $('#navigContainer').css("top", "0");
            $('#navigContainer').css("height", "auto");
        } else
        {
            $('#navigContainer').css("position", "relative");
            $('#navigContainer').css("z-index", "auto");
            if (Response.viewportW() > 768)
                $('#navigContainer').css("height", "20%");
            else
                $('#navigContainer').css("height", "auto");
        }
    }
    function adjustHeight()
    {
        $(".wrapper").css("min-height", Response.viewportH());
        if (Response.viewportW() > 768)
            $(".static").css("height", Response.viewportH());
        else
        {
            $(".static").css("height", "auto");
            $(".wrapper").css("min-height", 0);
        }
    }
    function scrollTo(tag)
    {
        $("html, body").animate({
            scrollTop: $(tag).offset().top
        });
    }
    $(document).ready(function ()
    {
        $(".wrapper").css("min-height", Response.viewportH());
        $(".static").css("height", Response.viewportH());
        $(window).scroll(function (evt)
        {
            adjustNavigBar();
        });
        Response.action(function ()
        {
            if (Response.viewportW() > 768)
            {
                $('#navigContainer').css("height", "20%");
                $('#navigBar > ul > li').css("height", "60px");
                $('.menuItem').fadeIn();
            }
            else
            {
                $('#navigContainer').css("height", "auto");
                $('#navigBar > ul > li').css("height", "auto");
                $('.menuItem').fadeOut();
            }
        });
        $("#home").click((function ()
        {
            scrollTo("html");
        }));
        $("#link_bio").click((function ()
        {
            scrollTo("#bioContainer");
        }));
        $("#link_powers").click((function ()
        {
            scrollTo("#powersContainer");
        }));
        $("#link_contact").click((function ()
        {
            scrollTo("#contactContainer");
        }));
    })
    Response.ready(function ()
    {
        adjustHeight();
        Response.resize(function ()
        {
            adjustNavigBar();
            adjustHeight();
        });
    });


</script>
<?php include "footer.php";?>
