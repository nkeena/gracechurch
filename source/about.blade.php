@extends('_layouts.master')

@section('body')

    @component('components.page_heading', ['background' => '/assets/images/pastor-robert-keena.jpg'])
        @slot('title')
            About <span class="text-blue">Grace Church</span>.
        @endslot
        @slot('subtitle', 'Who We Are')
    @endcomponent

    <section class="flex flex-col justify-center py-24">
        <div class="container p-10 text-center">
            <h2 class="font-bold text-black mb-4 text-3xl">Why We Exist</h2>
            <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
              <rect width="40" height="5" />
            </svg>

            <p class="font-bold text-grey-dark leading-normal text-lg">
                Our vision is to love people into their best life.
            </p>
        </div>
    </section>

    <section class="py-24 bg-blue text-white">
        <div class="flex flex-wrap container p-10">
            <div class="md:w-1/2 w-full">
                
                <img src="/assets/images/keenas.png" alt="Robert & Diane Keena" class="p-5" style="max-width: 350px" />
                
            </div>
            <div class="md:w-1/2 w-full">
                <h3 class="font-bold mb-2 text-2xl">Robert & Diane Keena</h3>
                <h5 class="font-bold mb-4 text-lg">Senior Pastors</h5>
                <p class="leading-loose text-lg">
                    Robert Keena and his wife, Diane, are the Lead Pastor of Grace Church of San Antonio, they are fueled by compassion, love for God’s Word and seeing people living their best life for Jesus. Robert has earned a Doctorate degree in Divinity and a PhD in biblical counseling. Robert and his wife Diane have co-labored for over twenty five years in the ministry. They are the proud parents of two sons, Neil and Jonathan.
                </p>
            </div>
        </div>
    </section>

    <section class="flex flex-col justify-center py-24 bg-grey-lighter border border-b-grey">
        <div class="container p-10">
            <div class="text-center">
                <h2 class="font-bold text-black mb-4 text-3xl">Leadership Team</h2>
                <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
                  <rect width="40" height="5" />
                </svg>
            </div>
            <div class="flex flex-wrap">
                <div class="lg:w-1/4 sm:w-1/2 w-full px-2 text-center">
                    <img src="assets/images/Jason.png" class="p-5" />
                    <h5 class="text-xl mb-2 text-black">Jason Getman</h5>
                    <p class="text-grey-dark">Operations Pastor</p>
                </div>
                <div class="lg:w-1/4 sm:w-1/2 w-full px-2 text-center">
                    <img src="assets/images/Lauren.png" class="p-5" />
                    <h5 class="text-xl mb-2 text-black">Lauren Getman</h5>
                    <p class="text-grey-dark">Worship Leader</p>
                </div>
                <div class="lg:w-1/4 sm:w-1/2 w-full px-2 text-center">
                    <img src="assets/images/Hanslers.png" class="p-5" />
                    <h5 class="text-xl mb-2 text-black">Marc & Lindsey Hansler</h5>
                    <p class="text-grey-dark">Youth Leaders</p>
                </div>
                <div class="lg:w-1/4 sm:w-1/2 w-full px-2 text-center">
                    <img src="assets/images/Ninos.png" class="p-5" />
                    <h5 class="text-xl mb-2 text-black">Augie & Crystal Nino</h5>
                    <p class="text-grey-dark">Childrens’ Pastors</p>
                </div>
            </div>
        </div>
    </section>

    <section class="flex flex-col justify-center py-24">
        <div class="container p-10">

            <div class="text-center mb-8">
                <h2 class="font-bold text-black mb-4 text-3xl">What We Believe</h2>
                <svg width="40" height="5" class="fill-current text-blue-lightest mb-4">
                  <rect width="40" height="5" />
                </svg>
            </div>

            <div class="flex flex-wrap -mx-4">
                <div class="lg:w-1/2 w-full px-4">

                    <collapse title="The Bible">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="One God, Three Persons">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Jesus, Son of God">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Salvation">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Sin">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Gifts of the Holy Spirit">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="The Return of Jesus Christ">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                </div>
                <div class="lg:w-1/2 w-full px-4">

                    <collapse title="Holy Spirit">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="The Church">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Healing">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Baptism">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Marriage">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                    <collapse title="Christian Living">
                        The Holy Bible, and only the Bible, is the authoritative Word of God. It alone is the final authority in determining all doctrinal truths. In its original writing, it is inspired, infallible and inerrant (II Timothy 3:16; II Peter 1:20-21; Proverbs 30:5; Romans 16:25-26).
                    </collapse>

                </div>
            </div>

        </div>
    </section>

@endsection