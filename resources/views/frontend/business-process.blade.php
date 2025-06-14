@extends('frontend.layouts.app')
@section('title', 'Business Process - ')
@section('content')

    <!--page title start-->

    <section class="page-title overflow-hidden text-center parallaxie " data-overlay="7"
        data-bg-img="frontend/images/breadcrumbs/4.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 mx-auto">
                    <h1 class="title mb-0 pb-0">Business <span>Process</span></h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}"><i class="fas fa-home"></i></a>

                    <li class="breadcrumb-item active" aria-current="page">Business Process</li>
                </ol>
            </nav>
        </div>
    </section>

    <!--page title end-->

    <div class="section-title my-5 text-center">
        <h2 class="title">Process Flow   <span>&  Methodology</span></h2>

    </div>
    <!--progress start-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4"> <a class="btn btn-border btn-radius w-100 px-0" href="#inq">Inquiry</a></div>
            <div class="col-lg-4 col-md-6 mb-4"> <a class="btn btn-border btn-radius w-100 px-0" href="#inward">Inward Inquiry</a></div>
            <div class="col-lg-4 col-md-6 mb-4"> <a class="btn btn-border btn-radius w-100 px-0" href="#guide">Guidance, Instructions & Suggestion</a></div>
            <div class="col-lg-4 col-md-6 mb-4"> <a class="btn btn-border btn-radius w-100 px-0" href="#price">Price & Terms</a></div>
            <div class="col-lg-4 col-md-6 mb-4"> <a class="btn btn-border btn-radius w-100 px-0" href="#pre">Pre Finalization Process</a></div>
            <div class="col-lg-4 col-md-6 mb-4"> <a class="btn btn-border btn-radius w-100 px-0" href="#post">Post Finalization</a></div>
        </div>
    </div>

    <section class="dark-bg process position-relative mb-5 mt-3 py-3" id="inq">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/b-process/2.jpeg') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 ms-auto">
                    <div class="section-title mbsm-20">
                        <h2 class="title-2  mt-4">Inquiry</h2>
                        <p class="mb-0">All Inquiry’s Received By WhatsApp, Phone Calls, Website. Google Search,
                            References By Our Existing Clients, Via Participating Through Exhibitions In India &
                            International, Advertisements In News Paper, Magazines, Online Media, Sales Circulars Etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="dark-bg process position-relative my-5 py-3" id="inward">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="{{ asset('frontend/images/b-process/3.png') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 ms-auto order-lg-1 order-2">
                    <div class="section-title mbsm-20">
                        <h2 class="title-2  mt-4">Inward Inquiry</h2>
                        <p class="mb-0">All Inquiries Are Been Verified On The Authenticity Of Each Clients, Based On
                            Their Actual Inquiry Immediate Of Projects, Whether They Can Import With Having Valid GST-lec
                            Codes, Land, Building, Shed To Install Plant Or Machinery’s & Most Importantly Ready Banks
                            Approved Finances Or Internal Finances…</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="dark-bg process position-relative my-5 py-3" id="guide">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/b-process/1.jpeg') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 ms-auto">
                    <div class="section-title mbsm-20">
                        <h2 class="title-2  mt-4">Guidance, Instructions & Suggestion</h2>
                        <p class="mb-0">Once Our Marketing & Sales Staff Gets Feedback From Our Research & Development
                            Departments On Each Client’s History, They Speak To Clients To Get To Real Specifications,
                            Prices They Can Afford To Import, Tech Parameters, Terms Of Payments For Imports, Inspection
                            Plans, Visiting Peoples Invitation Letters, Getting Them Apply For Visas & Guide Them To Visit
                            Overseas Where The Plant Or Machinery’s Are Of Their Interest To Finalize……Help Each Client
                            Whether Owners/Cmd/Directors Or Presidents To Gm Technical On Overseas Hotels, Locations,
                            Transportations, Managing With Our Counter Parts Who Sell These Second-Hand Machinery’s… In
                            Short We Treat Our Clients Like Our Family For Ease Of Doing Business & Feel Comfortable. We Do
                            Suggest Our Clients Not Just One Proposals But With Many Options To Choose Of With Their
                            Matching Price/Specifications Requirements, As We Feel A Client Needs To Have A Transparent
                            International Broker With Not Just Intentions Of Sales But Also Services…</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="dark-bg process position-relative my-5 py-3" id="price">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="{{ asset('frontend/images/b-process/4.png') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 ms-auto order-lg-1 order-2">
                    <div class="section-title mbsm-20">
                        <h2 class="title-2  mt-4">Price & Terms</h2>
                        <p class="mb-0">All Our Proposals/Offers Submitted To Clients After Discussions & Felt Being
                            Genuine Buyer, We Give Technical Specifications, Videos, Photos Of The Machinery’s Of Their
                            Interest & Lowest Rates Possible With Max Scope Of Supply & As Also Sometimes Spare Parts
                            Included Free, We Don’t See As Always Our Profits, Commissions/Fees/Consultations 1st But For
                            Our Company Policy Matters, Client/Customer/Buyer 1st & Then Profits. Terms We Always Try To
                            Submit Flexible Terms To Accommodate Clients Based On Their Financial Availability, With
                            Preferred Letter Of Credit Due To Overseas Imports & Risks Sometimes Client Think Of, Or If They
                            Prefer 100% Wire Transfer From Banks, We Do Workout The Same .. Any Terms Which Gives Client
                            Ease Of Doing Business We Assist Them..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="dark-bg process position-relative my-5 py-3" id="pre">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <img src="{{ asset('frontend/images/b-process/5.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 ms-auto">
                    <div class="section-title mbsm-20">
                        <h2 class="title-2  mt-4">Pre Finalization Process</h2>
                        <p class="mb-0">We After Speaking To Client, Owners & Their Technical Team, Submit A Final Price
                            Based On Terms Of Delivery, Payment & Port/Destinations They Need In Proforma Invoice Format
                            Signed By Oversees Seller & Countered By Buyer From India Or Our Overs Clients/Buyers Too… For
                            Financial Requirements From Banks, We Do Provide Imports Related Documents In Draft Format, Like
                            Chartered Engg Certificates, BL Drafts, Commercial Invoices, Serial Number Photos If Available,
                            Layouts, Dimensions Of Machinery’s/Plants, Power Requirements, Production Parameters, Efficiency
                            Of Overseas Machinery’s When In Production, Quality Configuration, Etc, In Order That Our
                            Clients Get Full Satisfaction To Proceed To Finalize As Next Step…</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dark-bg process position-relative my-5 py-3" id="post">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 order-lg-2 order-1">
                    <img src="{{ asset('frontend/images/b-process/6.jpg') }}" alt="" class="w-100">
                </div>
                <div class="col-lg-6 col-md-12 ms-auto order-lg-1 order-2">
                    <div class="section-title mbsm-20">
                        <h2 class="title-2  mt-4">Post Finalization</h2>
                        <p class="mb-0">Submitting All Draft Documentations Of Shipping, For Clients Import Departments To
                            Approve, As Well As Their Banks & Then Give Them Final Imports Documentations, From Copy Of BL,
                            Commercial Invoices, CEC, Packing List, Photos Of The Machinery’s Pre Loading In Containers &
                            Post With Container Numbers, Liners Indian Agents Contacts For Our Clients Imports Clearness…
                            Any Further Assistance/Help We Are Always There To Support Our Genuine Clients All Over India &
                            Overseas Countries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--progress end-->

@endsection
