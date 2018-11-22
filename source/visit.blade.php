@extends('_layouts.master')

@section('body')

    @component('components.page_heading', ['background' => '/assets/images/grace-church-worship.jpg'])
        @slot('title')
            We can't wait to meet <span class="text-blue">you</span>.
        @endslot
        @slot('subtitle', 'Plan your visit')
    @endcomponent

    <section class="flex flex-col justify-center -mt-24">
        <div class="container max-w-md p-10 bg-white shadow-md rounded mb-4 text-center">
            <h2 class="font-bold text-2xl mb-4">Join us Sundays 10AM</h2>
            <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
              <rect width="40" height="5" />
            </svg>
            <h3 class="font-bold mb-2">Location</h3>
            <address class="leading-loose mb-4">
                8666 Huebner Road<br />
                San Antonio, TX 78240
            </address>
            <a href="https://www.google.com/maps/place/8666+Huebner+Rd,+San+Antonio,+TX+78240/@29.5206745,-98.6033505,17z/data=!3m1!4b1!4m5!3m4!1s0x865c67659411034d:0xe71b3ef18b4f6f2!8m2!3d29.5206745!4d-98.6011618" target="_blank" class="btn btn-blue py-3 px-8">Get Directions</a>
        </div>
    </section>

    <section class="flex flex-col justify-center py-24">
        <div class="container p-10 text-center">
            <h2 class="font-bold text-black mb-4 text-3xl">The Sunday Experience</h2>
            <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
              <rect width="40" height="5" />
            </svg>
            <p class="text-grey-dark leading-normal text-lg">
                Dress casual, enjoy a cup of coffee and make a friend. Sunday’s are designed to create an experience of engaging worship followed by an inspirational message; all while enjoying community together.
            </p>
        </div>
    </section>

    <section class="py-24 text-black" style="background-image: url('/assets/images/childrens-drawings.jpg'); background-size: cover; background-position: center;">
        <div class="flex flex-wrap container p-10">
            <div class="md:w-1/2 w-full">
                <h3 class="font-bold mb-4 text-2xl">Grace Kids</h3>
                <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
                  <rect width="40" height="5" />
                </svg>
                <p class="leading-normal mb-2">
                    Our children’s services are fully staffed with adults who are committed to teaching and ministering to children.
                </p>
                <p class="leading-normal mb-2">
                    You can be confident that your child is well-cared for and having a great time learning about God while you enjoy service. Our children’s church offers a place where children can discover and develop a passion for God.
                </p>
                <p class="leading-normal mb-2">
                    We believe in teaching through worship, The Word of God, and a variety of fun activities. Your Children will love church and will be challenged to grow in their relationship with God.
                </p>
            </div>
            <div class="md:w-1/2 w-full text-right">
                <img src="/assets/images/child-coloring.jpg" class="rounded shadow-lg border-white border-8" style="max-width: 400px" />
            </div>
        </div>
    </section>

    <section class="py-24 bg-blue text-white">
        <div class="flex flex-wrap container p-10">
            <div class="md:w-1/2 w-full">
                <img src="/assets/images/womens-group.jpg" class="rounded shadow-lg border-white border-8" style="max-width: 400px" />
            </div>
            <div class="md:w-1/2 w-full">
                <h3 class="font-bold mb-4 text-2xl">Sister C.H.A.T.</h3>
                <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
                  <rect width="40" height="5" />
                </svg>
                <p class="leading-loose">
                    Sister C.H.A.T. (comfort healing and togetherness) is a place where every woman can connect, train and be empowered to impact her world. Our mission is to provide a safe place to go deeper with God and cultivate Christian friendships. We strive to honor one another, disciple those in our care and empower every woman to influence her world for the glory of God.
                    <br /><br />
                    This women’s group meets once a week.
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white text-black">
        <div class="flex flex-wrap container p-10">
            <div class="md:w-1/2 w-full">
                <h3 class="font-bold mb-4 text-2xl">Men with Purpose</h3>
                <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
                  <rect width="40" height="5" />
                </svg>
                <p class="leading-loose">
                Men with Purpose is intended to help men discover and live out their purpose. It's important for men to connect with one another and to connect with God in a deeper relationship. Men with Purpose empowers men to be real men and live out their God given destiny. 
                <br /><br />
                This men's group meets once a week.
                </p>
            </div>
            <div class="md:w-1/2 w-full text-right">
                
                <img src="/assets/images/men-with-purpose.jpg" class="rounded shadow-lg border-white border-8" style="max-width: 400px" />

            </div>
        </div>
    </section>

    <iframe src="https://snazzymaps.com/embed/96996" width="100%" height="500px" style="border:none;"></iframe>

@endsection