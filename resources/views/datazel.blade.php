@extends('layouts.home')

@section('content')
<div id="content" class="site-content">
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-12 align-self-center mb-5 mb-xl-0">
                    <div class="top-desc-i10 pr-5">
                        <h2>We build, fix, and manage websites and mobile apps</h2>
                        <p class="pr-lg-5">Have a project you would like to discuss? We're happy to learn more. Enter your email below and schedule a free consultation!</p>
                        <div class="space-20"></div>
                        <form method="get" class="wpcf7-form init" action="{{route('contact')}}" id="mc4wp-form-1">
                            <div class="sub-home-10">
                                <span class="wpcf7-form-control-wrap your-email">
                                    <input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email" aria-required="true" aria-invalid="false" placeholder="Enter your email to begin">
                                </span>
                                <button type="submit" class="octf-btn">Get a Free Quote</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12">
                    <div class="top-img-i10">
                        <img src="images/hero-1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-i10 pt-0" id="partnersBlock">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sapce-20"></div>
                    <p class="client-text-10">⭐⭐⭐⭐⭐ rating from customers across the US & other international markets</p> <br>
                    <div class="row justify-content-md-center">
                        <div class="col-2 mt-3">
                            <img class="partners-slide-image" src="images/EH-logo.svg" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img class="partners-slide-image" src="images/platerate-logo.svg" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img class="partners-slide-image" src="images/DH-logo.gif" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img class="partners-slide-image" src="images/bulkly-logo.png" alt="">
                        </div>
                        <div class="col-2 mt-3">
                            <img class="partners-slide-image" src="images/Toursian-logo.jpeg" alt="">
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="protection-i10 py-0" id="serviceBloak">
        <div class="container">
            <hr>
            <div class="row">
                <div class="offset-lg-2 col-lg-8 text-center">
                    <div class="space-130"></div>
                    <h2 class="px-5">Our Services</h2>
                    <p>Think of us as your technology team. We're here to help you grow and scale quickly</p>
                    <div class="space-35"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="devices-i10 pt-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="space-50"></div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="icon-box-s2 s1 i10">
                                <div class="icon-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M420.498 65.192C371.995 56.5 327.329 30.012 305.021 14.997C290.446 5.186 273.495 0 255.999 0C238.503 0 221.552 5.186 206.978 14.997C184.67 30.012 140.004 56.501 91.5018 65.193C62.7758 70.34 41.9258 95.195 41.9258 124.29V244.999C41.9258 284.876 53.0818 323.749 75.0848 360.538C92.2978 389.319 116.149 416.826 145.973 442.295C196.12 485.12 245.776 507.452 247.865 508.381L255.999 512L264.135 508.381C266.224 507.452 315.88 485.12 366.027 442.295C395.85 416.826 419.701 389.319 436.915 360.538C458.918 323.748 470.074 284.876 470.074 244.999V124.289C470.074 95.194 449.224 70.339 420.498 65.192ZM430.058 244.998C430.058 304.448 400.025 360.373 340.791 411.222C306.359 440.78 271.401 460.046 256 467.865C220.599 449.878 81.9388 371.329 81.9388 244.999V124.289C81.9388 114.594 88.9288 106.304 98.5598 104.578C154.278 94.593 204.403 64.963 229.321 48.191C237.268 42.842 246.494 40.014 255.999 40.014C265.504 40.014 274.729 42.842 282.676 48.192C307.595 64.964 357.719 94.594 413.437 104.58C423.067 106.306 430.058 114.595 430.058 124.291V244.998Z"></path><path d="M225.013 294.431L156.633 230.413L129.285 259.623L227.592 351.659L383.968 176.305L354.104 149.673L225.013 294.431Z"></path></svg>
                                </div>
                                <div class="content-box">
                                    <h5>Web Development</h5>
                                    <p>Custom websites for business, ecommerce, and SaaS</p>
                                </div>
                            </div>
                            <div class="space-30"></div>
                            <div class="icon-box-s2 s1 i10 pr-3">
                                <div class="icon-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><path d="M79.2195 138H158.258C161.842 129.999 167.506 123.105 174.57 118H138V79H171.437C174.261 90.6775 176.053 103.346 176.71 116.544C182.512 112.789 189.145 110.199 196.273 109.101C195.473 98.694 194.013 88.596 191.936 79H224.22C230.304 90.901 234.247 104.071 235.533 118H255.613C253.278 87.579 240.313 59.294 218.51 37.49C194.334 13.3145 162.19 0 128 0C93.81 0 61.6665 13.3145 37.49 37.49C13.3145 61.6665 0 93.81 0 128C0 162.19 13.3145 194.333 37.49 218.51C61.6665 242.686 93.81 256 128 256C129.337 256 130.669 255.973 132 255.932V235.58C130.665 235.854 129.331 236 128 236C116.396 236 104.451 225.418 95.225 206.967C93.6425 203.802 92.17 200.473 90.8065 197H132V177H84.5605C81.63 164.894 79.814 151.722 79.2195 138ZM211.012 59H186.461C184.201 52.2895 181.596 45.9555 178.663 40.0895C176.82 36.403 174.87 32.961 172.831 29.7545C187.661 36.5485 200.694 46.6065 211.012 59ZM138 22.554C146.234 26.725 154.196 35.8765 160.775 49.0335C162.357 52.1975 163.828 55.528 165.191 59H138V22.554ZM95.225 49.0335C101.803 35.8765 109.766 26.725 118 22.554V59H90.808C92.1715 55.528 93.643 52.198 95.225 49.0335ZM118 79V118H79.2195C79.814 104.279 81.631 91.106 84.5605 79H118ZM83.169 29.7545C81.1295 32.961 79.1795 36.403 77.3365 40.0895C74.4035 45.9555 71.7995 52.29 69.5385 59H44.9875C55.306 46.6065 68.339 36.5485 83.169 29.7545ZM31.78 79H64.0625C61.3975 91.3105 59.748 104.447 59.2035 118H20.4675C21.7525 104.071 25.696 90.901 31.78 79ZM31.7705 177C25.6865 165.1 21.752 151.928 20.4675 138H59.204C59.7485 151.553 61.3975 164.69 64.063 177H31.7705ZM44.9815 197H69.5365C71.7975 203.71 74.403 210.044 77.336 215.911C79.1795 219.597 81.129 223.039 83.1685 226.245C68.338 219.451 55.3015 209.396 44.9815 197Z"></path><path d="M233.992 171V157.993C233.992 141.73 220.534 128.5 203.992 128.5C187.45 128.5 173.992 141.73 173.992 157.993V171H152V256H256V171H233.992ZM193.992 157.993C193.992 152.758 198.478 148.5 203.992 148.5C209.506 148.5 213.992 152.759 213.992 157.993V171H193.992V157.993ZM236 236H172V191H236V236Z"></path></svg>
                                </div>
                                <div class="content-box">
                                    <h5>Business Software</h5>
                                    <p>Bespoke software tailored to your business' needs</p>
                                </div>
                            </div>
                            <div class="space-30 d-xl-none"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="icon-box-s2 s1 i10">
                                <div class="icon-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M408.974 142.689C368.114 101.829 313.786 79.326 256.001 79.326H224.284L275.191 28.294L246.827 0L147.681 99.389L245.533 198.877L274.096 170.784L223.545 119.388H256.001C353.199 119.388 432.276 198.464 432.276 295.663C432.276 392.862 353.199 471.938 256.001 471.938C158.803 471.938 79.7261 392.861 79.7261 295.659V275.628L39.6641 275.632V295.663C39.6641 353.449 62.1671 407.776 103.028 448.636C143.888 489.497 198.216 512 256.001 512C313.786 512 368.114 489.497 408.974 448.636C449.835 407.775 472.338 353.448 472.338 295.663C472.338 237.878 449.835 183.55 408.974 142.689Z"></path></svg>
                                </div>
                                <div class="content-box">
                                    <h5>Mobile Development</h5>
                                    <p>Native and cross-platform apps for iOS and Android</p>
                                </div>
                            </div>
                            <div class="space-30"></div>
                            <div class="icon-box-s2 i10 s1">
                                <div class="icon-main">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.00074 512"><path d="m214.921875 324.085938 138.375-.050782c.824219-.003906 1.644531.003906 2.46875.015625v-.003906c40.515625.492187 79.347656 13.214844 112.296875 36.792969l43.9375 31.441406v-49.1875l-20.660156-14.78125c-23.785156-17.023438-50.121094-29.335938-77.910156-36.59375 3.199218-8.105469 4.3125-16.980469 3.0625-25.796875l-24.511719-173.921875h-58.980469v-27c0-35.839844-29.160156-65-65-65s-65 29.160156-65 65v27h-60.105469l-25.347656 173.660156c-.035156.222656-.050781.445313-.082031.667969l-15.4375-15.152344c-11.441406-11.226562-26.570313-17.304687-42.589844-17.175781-16.027344.152344-31.035156 6.535156-42.261719 17.972656-11.226562 11.441406-17.324219 26.566406-17.17187475 42.589844.14843775 16.027344 6.53124975 31.035156 17.97265575 42.261719l148.433594 145.667969c19.386719 19.027343 45.027344 29.507812 72.191406 29.507812h273.398438v-40h-273.398438c-16.621093 0-32.308593-6.410156-44.171874-18.054688l-148.4375-145.671874c-3.8125-3.738282-5.9375-8.742188-5.992188-14.085938-.046875-5.339844 1.984375-10.382812 5.726562-14.195312 3.742188-3.8125 8.746094-5.941407 14.085938-5.992188h.191406c5.273438 0 10.238282 2.03125 14.003906 5.726562l95.984376 94.195313.183593-.1875c3.644531 4.839844 8.074219 9.136719 13.222657 12.644531 5.40625 3.683594 16.09375 10.160156 26.957031 12.15625 6.167969 1.136719 112.546875 12.421875 158 17.222656l4.203125-39.777343c-58.347656-6.160157-147.324219-15.675781-155.097656-16.808594-1.722657-.371094-6.222657-2.226563-11.535157-5.847656-4.390625-2.992188-7.011719-7.9375-7.011719-13.234375 0-8.824219 7.175782-16.003906 16.007813-16.003906zm28.078125-259.085938c0-13.785156 11.214844-25 25-25s25 11.214844 25 25v27h-50zm-85.875 206.453125 20.355469-139.453125h25.519531v41h40v-41h50v41h40v-41h24.222656l19.664063 139.519531c.605469 4.277344-1.347657 7.269531-2.566407 8.675781-1.234374 1.421876-3.964843 3.804688-8.371093 3.804688h-197.898438c-4.421875 0-7.152343-2.398438-8.386719-3.828125-1.21875-1.410156-3.171874-4.417969-2.539062-8.71875zm0 0"></path></svg>
                                </div>
                                <div class="content-box">
                                    <h5>Ongoing Support</h5>
                                    <p>For regular maintenance, code reviews, and debugging</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mt-5 mt-lg-0">
                    <div class="devices-img-i10 text-center text-xl-left">
                        <img src="images/hero-2.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="space-20"></div>
    </section>

    <section class="tech-trend-i10 py-0" id="processBlock">
        <div class="container">
        <hr class="i10">
            <div class="space-60"></div>
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="tech-trend-desc-i10">
                        <h2>Simple 4-Step Process</h2>
                        <p>We work 1-on-1 with you to guarantee maximum satisfaction</p>
                        <div class="space-5"></div>
                        <ul class="list-style-i10">
                            <li><i class="fas fa-circle"></i><span>Schedule a Live Consultation Via Zoom or Phone</span></li>
                            <li><i class="fas fa-circle"></i><span>Review List of Specifications & Accept Quotation</span></li>
                            <li><i class="fas fa-circle"></i><span>Attend Scheduled Feedback Sessions To Review Progress</span></li>
                            <li><i class="fas fa-circle"></i><span>Finalize Project & Go Live</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tech-trend-img">
                        <img src="images/hero-3.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="space-20"></div>
        </div>
    </section>

</div>
@endsection