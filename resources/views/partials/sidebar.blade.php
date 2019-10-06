<div class="card my-3">
    <div class="card-body">
        <a href="https://veganactivism.org"><img src="https://i.imgur.com/NgQ72ay.png" class="img-full"></a>
    </div>
</div>

<div class="card my-3 p-4 bg-color-gray">
    <h5 class="card-title"><i class="fas fa-bell"></i>&nbsp;&nbsp;
        Activism Newsletter
    </h5>
    <ul class="mb-0" style="padding: 0px 15px 0px 6px;">
        <!-- Begin Mailchimp Signup Form -->
        <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup {
                background: #fff;
                clear: left;
                font: 14px Helvetica, Arial, sans-serif;
            }

            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>
        <div id="mc_embed_signup">
            <form style="background-color: #f9f9f9;" action="https://youaretheirvoice.us20.list-manage.com/subscribe/post?u=0baba35be8f6397f7ac1066f1&amp;id=5fd11d4221" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">

                    <input style="width: 100%;" type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter your Email Address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0baba35be8f6397f7ac1066f1_5fd11d4221" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe to Newsletter!" name="subscribe" id="mc-embedded-subscribe" class="button" style="width: 100%;background-color:#ff0097;"></div>
                </div>
            </form>
        </div>
        <!--End mc_embed_signup-->
    </ul>
</div>

<div class="card p-4 my-3 bg-color-gray">
    <ul class="category-list list-unstyled mb-0">
        <li>
            <a href="https://reddit.com/r/VeganActivism" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-purple">
                    <i class="far fa-comments mr-2"></i>
                    Vegan Activist Community
                </button>
            </a>

            <a href="https://discord.gg/MFzRHe5" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-pink">
                    <i class="fa fa-map-signs mr-2"></i>
                    Vegan Activism Discord
                </button>
            </a>

            <a href="https://www.vegan.com/activism/" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-blue">
                    <i class="fa fa-users mr-2"></i>
                    Vegan.com Activism Guide
                </button>
            </a>

            <a href="https://veganhacktivists.org/" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-green">
                    <i class="fas fa-hands-helping mr-2"></i>
                    Visit us: Vegan Hacktivists
                </button>
            </a>


            <a href="https://veganactivism.org/vegan-activist-resource-bundle.zip" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-yellow">
                    <i class="fa fa-download mr-2"></i> Activist Resource Bundle
                </button>
            </a>

            <a href="https://veganhacktivists.org/subscribe" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-red">
                    <i class="fas fa-envelope mr-2"></i> Vegan Hacktivists Newsletter
                </button>
            </a>
        </li>
    </ul>
</div>

<div class="card p-3 my-3 bg-color-gray">
   @livewire('show-microactivsm')
</div>

<div class="card pr-4 pl-4 pt-3 my-3 bg-color-gray">
    <h5 class="card-title"><i class="fas fa-hands-helping mr-1"></i> Find Groups Near You</h5>
    <form class="form" action="https://veganactivism.org/redirect-fb.php" target="_blank">
        <table>
            <tr>
                <td>
                    <input type="text" class="form-control" name="location" placeholder="&nbsp;Enter your City Name">
                </td>
                <td>
                    <button type="submit" class="btn btn-secondary ml-2">Search</button>
                </td>
            </tr>
        </table>
    </form>
    <p class="card-footer-text">powered by facebook.com</p>
</div>

<div class="card pr-4 pl-4 pt-3 my-3 bg-color-gray">
    <h5 class="card-title"><i class="fas fa-calendar-alt mr-1"></i> Find Events Near You</h5>
    <form class="form" action="https://veganactivism.org/redirect-mu.php" target="_blank">
        <table>
            <tr>
                <td>
                    <input type="text" class="form-control" name="location" placeholder="&nbsp;Enter your Zip Code">
                </td>
                <td>
                    <button type="submit" class="btn btn-secondary ml-2">Search</button>
                </td>
            </tr>
        </table>
    </form>
    <p class="card-footer-text">powered by meetup.com</p>
</div>

<div class="card p-4 my-3 bg-color-gray">
    <h5 class="card-title"><i class="fas fa-bell mr-1"></i> VeganActivism.org</h5>
    <ul class="list-unstyled mb-0">
    We've had <strong>{{ Visitor::count() }}</strong> visits with a total of
        <strong>{{ \App\Facades\ClickCount::getAllClicks()}}</strong> unique clicks that went directly to activist websites. <i>Thanks!</i>
        <br><br>
        Feel free to <a href="{{ route('contact.form') }}" target="_blank">contact us</a>, or
        <a href="https://www.patreon.com/veganhacktivists" target="_blank">donate if you can</a>,
        it's very appreciated! <i class="fas fa-hand-holding-heart ml-1"></i>

</div>

<div class="card p-3 my-3 bg-color-gray text-center">
    <a href="https://veganhacktivists.org" target="_blank"><img src="https://i.imgur.com/0Go5mpt.png" style="width:200px;padding-bottom: 10px;"></a>
    This site is designed and hosted by the <a href="https://veganhacktivists.org" target="_blank">Vegan Hacktivists</a>

</div>