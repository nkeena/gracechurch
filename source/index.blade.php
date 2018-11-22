@extends('_layouts.master')

@section('body')

    @component('components.page_heading', ['background' => '/assets/images/grace-family.jpg'])
        @slot('title')
            Life is better <span class="text-blue">together</span>.
        @endslot
        @slot('subtitle', 'Join us Sundays 10AM')
    @endcomponent

    @component('components.hero')
        @slot('leftColumn')
            <h2 class="font-bold text-2xl mb-4">Enjoyable. Powerful. Real.</h2>
            <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
              <rect width="40" height="5" />
            </svg>
            <p class="leading-loose mb-4">We all need friends, family and a place to call home. We are that kind of church. We’re a family made of people from all different backgrounds who love one another and are growing together as we learn God’s Word.</p>
            <a href="/about" class="btn btn-white py-3 px-8">Learn More</a>
        @endslot
        @slot('rightColumn')
            <img src="/assets/images/family.jpg" class="lg:rounded-r-lg md:rounded-lg sm:rounded-t-none sm:rounded-b-lg" style="margin-bottom: -3px;">
        @endslot
    @endcomponent

    <section class="flex flex-col justify-center py-24 text-blue">
        <div class="container p-10">
            
            <carousel :per-page="1" :autoplay="true" :loop="true" :autoplay-timeout="5000">
              
                <slide>
                    <blockquote class="container mx-auto max-w-md text-center font-bold mb-4 leading-normal text-xl">
                        “Awesome church! Love the worship! So thankful to have a church like this to be a part of!”
                    </blockquote>
                    <p class="text-center font-bold text-lg">− Debbie</p>
                </slide>

                <slide>
                    <blockquote class="container mx-auto max-w-md text-center font-bold mb-4 leading-normal text-xl">
                    "This place has been home to us since we moved here almost 6 years ago. We are a loving church, a leading church and most of all we are all about Jesus! I can't imagine life without my grace family!!!"
                    </blockquote>
                    <p class="text-center font-bold text-lg">− Lauren</p>
                </slide>
                
                <slide>
                    <blockquote class="container mx-auto max-w-md text-center font-bold mb-4 leading-normal text-xl">
                        "It is true that Church should be like a hospital where the hurt and wounded come to be healed (as well as joyfulness in celebrations of breakthroughs!) I'm grateful for our Pastors, who truly walk in love and direct us to God through Biblical Truths."
                    </blockquote>
                    <p class="text-center font-bold text-lg">− Sandra</p>
                </slide>

                <slide>
                    <blockquote class="container mx-auto max-w-md text-center font-bold mb-4 leading-normal text-xl">
                        "The leadership here really believes and acts out the word of God. No pressure to give, no guilt trips, no judgement. Practical teachings with modern applications. Love this place. Jesus is here!!!"
                    </blockquote>
                    <p class="text-center font-bold text-lg">− Jason</p>
                </slide>
            </carousel>

        </div>
    </section>

<section class="sm:pb-20" style="background-image: linear-gradient(rgba(255,0,0,0), #f8fafc);">
    <div class="container">
        <div class="flex flex-wrap lg:justify-between justify-center -mx-4">
            
            <div class="lg:w-1/3 md:w-1/2 sm:mb-4 w-full px-4 flex">
                <div class="bg-white sm:rounded-lg sm:shadow-lg w-full">
                    <img src="assets/images/auditorium.jpg" class="w-full sm:rounded-t-lg"/>
                    <div class="p-10 text-center">
                        <h3 class="text-black mb-4 text-2xl">
                            Community Groups
                        </h3>
                        <a href="/visit" class="btn btn-blue text-sm py-3 px-8">Find a Group</a>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-1/2 sm:mb-4 w-full px-4 flex">
                <div class="bg-white sm:rounded-lg sm:shadow-lg w-full text-center">
                    <img src="/assets/images/audio-mixer.jpg" class="w-full sm:rounded-t-lg"/>
                    <div class="p-10 text-center">
                        <h3 class="text-black mb-4 text-2xl">
                            Sunday Experience
                        </h3>
                        <a href="/visit" class="btn btn-blue text-sm py-3 px-8">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-1/2 sm:mb-4 w-full px-4 flex">
                <div class="bg-white sm:rounded-lg sm:shadow-lg w-full text-center">
                    <img src="/assets/images/grace-church.jpg" class="w-full sm:rounded-t-lg"/>
                    <div class="p-10 text-center">
                        <h3 class="text-black mb-4 text-2xl">
                            Upcoming Events
                        </h3>
                        <a href="https://www.facebook.com/pg/GraceSanAntonioChurch/events/" target="_blank" class="btn btn-blue text-sm py-3 px-8">See What's Next</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="border-t border-b border-grey-light p-10 bg-white">
    <div class="container lg:flex justify-center items-center text-center">
        <p class="font-bold text-blue text-xl lg:mr-10 lg:text-left mb-4 lg:mb-0">Subscribe and listen to our podcast anytime, anywhere.</p>
        <a href="#" class="btn py-3 px-8 border border-blue text-blue text-sm hover:bg-blue hover:text-white">
            Listen on <span class="lowercase">i</span>Tunes
        </a>
    </div>
</section>

<section class="bg-white">
    <div class="container">
        <div class="px-10 flex items-center">
            <div class="w-2/3 pt-20 hidden md:block">
                <img src="/assets/images/grace-app.png" style="max-height: 400px; margin-bottom: -3px">
            </div>
            <div class="md:w-1/3 w-full md:text-left text-center py-10 md:py-0 leading-normal">
                <h4 class="text-black text-2xl font-bold">Download the App</h4>
                <p class="text-grey-dark mb-4">Engage while on the go.</p>

                <a href="https://subsplash.com/gracesanantonio/app" target="_blank" class="btn btn-black py-3 px-8">Download</a>
            </div>
        </div>
    </div>
</section>

@endsection
