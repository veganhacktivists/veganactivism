<div class="card my-3">
    <div class="card-body">
        <a href="https://veganactivism.org"><img src="https://i.imgur.com/NgQ72ay.png" class="img-full"></a>
    </div>
</div>

<style>
.p-4 {
padding-bottom: 14px !important;
}
</style>



<div class="card p-4 my-3 bg-color-gray">
    <ul class="category-list list-unstyled mb-0">
        <li>

            <a href="https://reddit.com/r/VeganActivism" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-purple">
                    <i class="far fa-comments mr-2"></i>
                    Vegan Activist Community
                </button>
            </a>
			<a href="https://activisthub.org" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link" style="background-color:#f64646;">
                    <i class="fas fa-leaf mr-2"></i>
                    Track your activist impact
                </button>
            </a>

            <a href="https://veganhacktivists.org/grants" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-blue">
                    <i class="fa fa-thumbs-up mr-2"></i>
                    Get $1000 Activism Funding
                </button>
            </a>

            <a href="https://animalrightsmap.org" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link" style="background-color:#3ca539;">
                    <i class="fas fa-bullhorn mr-2"></i>
                    Global Animal Rights Map
                </button>
            </a>


            <a href="https://vegancheatsheet.org" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link bg-color-yellow">
                    <i class="fa fa-download mr-2"></i> Vegan Cheatsheet Resource
                </button>
            </a>

            <a href="https://veganhacktivists.org/newsletter" target="_blank">
                <button type="submit" class="btn rounded-1 btn-shadow button-link" style="background-color:#ff0097;">
                    <i class="fas fa-envelope mr-2"></i> Subscribe to our Newsletter
                </button>
            </a>
        </li>
    </ul>
</div>

<div class="card p-3 my-3 bg-color-gray">
   @livewire('show-microactivsm')
</div>

<div class="card pr-4 pl-4 pt-3 pb-4 my-3 bg-color-gray">
    <h5 class="card-title" style="color:#292929;"><i class="fas fa-hands-helping mr-1"></i> Nearby groups</h5>
<form class="form" type="POST" action="{{ route('redirect.to', 'facebook') }}" target="_blank">
        <table>
            <tr>
                <td>
                    <input type="text" class="form-control" name="location" placeholder="&nbsp;Enter your city ">
                </td>
                <td>
                    <button type="submit" class="btn btn-secondary ml-2">Search</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="card pr-4 pl-4 pt-3 pb-4 my-3 bg-color-gray">
    <h5 class="card-title" style="color:#292929;"><i class="fas fa-calendar-alt mr-1"></i> Nearby events</h5>
    <form class="form" action="{{ route('redirect.to', 'meetup') }}" target="_blank">
        <table>
            <tr>
                <td>
                    <input type="text" class="form-control" name="location" placeholder="&nbsp;Enter your zip">
                </td>
                <td>
                    <button type="submit" class="btn btn-secondary ml-2">Search</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<div class="card p-4 my-3 bg-color-gray">
    <h5 style="color:#292929;"> VeganActivism.org</h5>
    <ul class="list-unstyled mb-0">
    {{--
        Hardcode a base value as the site was not actually logging user visits
        for while, so this artificially get the count to a more accruate number.
        Base value was taken from cloudfares estimated user visits.
    --}}
    We've had <strong>{{ 51756 + Visitor::count() }}</strong> visits with a total of
        <strong>{{ \App\Facades\ClickCount::getAllClicks()}}</strong> unique clicks that went directly to activist websites. <i>Thanks!</i>
        <br><br>
        Feel free to <a href="{{ route('contact.form') }}" target="_blank">contact us</a>, or
        <a href="https://veganhacktivists.org/support" target="_blank">donate if you can</a>,
        it's very appreciated! <i class="fas fa-hand-holding-heart ml-1"></i>

</div>

<div class="card p-3 my-3 bg-color-gray text-center pt-4 pb-4" style="background-color: #292929;">
    <a href="https://veganhacktivists.org" target="_blank"><img src="https://i.imgur.com/4L6Hvgn.png" style="width:200px;padding-bottom: 10px;"></a>
    <span style="color:white;" class="pt-2">Designed with love by</span> <a href="https://veganhacktivists.org" target="_blank">Vegan Hacktivists</a>

</div>
