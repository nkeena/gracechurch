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
                    <img src="/assets/images/jason.png" class="p-5" />
                    <h5 class="text-xl mb-2 text-black">Jason Getman</h5>
                    <p class="text-grey-dark">Operations Pastor</p>
                </div>
                <div class="lg:w-1/4 sm:w-1/2 w-full px-2 text-center">
                    <img src="/assets/images/lauren.png" class="p-5" />
                    <h5 class="text-xl mb-2 text-black">Lauren Getman</h5>
                    <p class="text-grey-dark">Worship Leader</p>
                </div>
                <div class="lg:w-1/4 sm:w-1/2 w-full px-2 text-center">
                    <img src="/assets/images/hanslers.png" class="p-5" />
                    <h5 class="text-xl mb-2 text-black">Marc & Lindsey Hansler</h5>
                    <p class="text-grey-dark">Youth Leaders</p>
                </div>
                <div class="lg:w-1/4 sm:w-1/2 w-full px-2 text-center">
                    <img src="/assets/images/ninos.png" class="p-5" />
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
                        There is one God, eternally existent in three persons: Father, Son and Holy Spirit. These three are coequal and coeternal (I John 5:7; Genesis 1:26; Matthew 3:16-17, 28:19; Luke 1:35; Isaiah 9:6; Hebrews 3:7-11).
                    </collapse>

                    <collapse title="Jesus, Son of God">
                        Jesus Christ is God the Son, the second person of the Trinity. On earth, Jesus was 100% God and 100% man. He is the only man ever to have lived a sinless life. He was born of a virgin, lived a sinless life, performed miracles, died on the cross for mankind and thus, atoned for our sins through the shedding of His blood. He rose from the dead on the third day according to the Scriptures, ascended to the right hand of the Father, and will return again in power and glory. (John 1:1,14, 20:28; I Timothy 3:16; Isaiah 9:6; Philippians 2:5-6; I Timothy 2:5).
                    </collapse>

                    <collapse title="Salvation">
                        We are saved by grace through faith in Jesus Christ; His death, burial, and resurrection. Salvation is a gift from God, not a result of our good works or of any human efforts (Ephesians 2:8-9; Galatians 2:16, 3:8; Titus 3:5; Romans 10:9-10; Acts 16:31; Hebrews 9:22).
                    </collapse>

                    <collapse title="Sin">
                        Man was created good and upright, but by voluntary transgression he fell; his only hope of redemption is in Jesus Christ, the Son of God (Gen. 1:26-31, 3:1-7; Romans 5:12-21). Repentance is the commitment to turn away from sin in every area of our lives and to follow Christ, which allows us to receive His redemption and to be regenerated by the Holy Spirit. Thus, through repentance we receive forgiveness of sins and appropriate salvation (Acts 2:21, 3:19; I John 1:9).
                    </collapse>

                    <collapse title="Gifts of the Holy Spirit">
                        The Holy Spirit is manifested through a variety of spiritual gifts to build and sanctify the church, demonstrate the validity of the resurrection, and confirm the power of the Gospel. The Bible lists of these gifts are not necessarily exhaustive, and the gifts may occur in various combinations. All believers are commanded to earnestly desire the manifestation of the gifts in their lives. These gifts always operate in harmony with the Scriptures and should never be used in violation of Biblical parameters. (Hebrews 2:4; Romans 1:11, 12 :4-8; Ephesians 4:16; I Timothy 4:14; II Timothy 1:6-7; I Corinthians 12:1-31, 14:1-40; I Peter 4:10).
                    </collapse>

                    <collapse title="The Return of Jesus Christ">
                        Jesus Christ will physically and visibly return to earth for the second time to establish His Kingdom. This will occur at a date undisclosed by the Scriptures (Matthew 24:30, 26:63-64; Acts 1:9-11; I Thessalonians 4:15-17; II Thessalonians 1:7-8; Revelation 1:7)
                    </collapse>

                </div>
                <div class="lg:w-1/2 w-full px-4">

                    <collapse title="Holy Spirit">
                        The Holy Spirit is the third person of the trinity. He was given at Pentecost, as promised by the Father, and sent by Jesus after His Ascension, to empower the Church to preach the Gospel throughout the whole earth (Joel 2:28-29; Matthew 3:11; Mark 16:17; Acts 1:5,2:1-4, 17, 38-39, 8:14-17, 10:38, 44-47, 11:15-17, 19:1-6).
                    </collapse>

                    <collapse title="The Church">
                        The church is the Body of Christ, the habitation of God through the Spirit, with divine appointments for the fulfillment of Jesus’ Great Commission. Every person who is born of the Spirit is an integral part of the church as a member of the body of believers. There is a spiritual unity of all believers in our Lord Jesus Christ. (Ephesians 1:22, 2:19-22; Hebrews 12:23; John 17:11, 20-23).
                    </collapse>

                    <collapse title="Healing">
                        Healing of the sick is illustrated in the life and ministry of Jesus, and included in the commission of Jesus to His disciples. It is given as a sign, which is to follow believers. It is also a part of Jesus’ work on the Cross and one of the gifts of the Spirit. (Psalm 103:2-3; Isaiah 53:5; Matthew 8:16-17; Mark 16:17-18; Acts 8:6-7; James 5:14-16; I Corinthians 12:9, 28; Romans 11:29).
                    </collapse>

                    <collapse title="Baptism">
                        Water Baptism: Following faith in the Lord Jesus Christ, the new convert is commanded by the Word of God to be baptized in water in the Name of the Father and of the Son and of the Holy Spirit (Matthew 28:19; Acts 2:38; Mark 16:16; Acts 8:12, 36-38; 10:47-48).
                    </collapse>

                    <collapse title="Marriage">
                        We believe the term “marriage” has only one meaning: the uniting of one man and one woman in a single, exclusive union, as delineated in Scripture (Genesis 2:18-25). We believe that God intends sexual intimacy to occur only between a man and a woman who are married to each other (1 Corinthians 6:18; 7:2-5; Hebrew 13:4).
                    </collapse>

                    <collapse title="Christian Living">
                        Sanctification is the ongoing process of yielding to God’s Word and His Spirit in order to complete the development of Christ’s character in us. It is through the present ministry of the Holy Spirit and the Word of God that the Christian is enabled to live a Godly life (I Thessalonians 4:3, 5:23; II Corinthians 3:18, 6:14-18, II Thessalonians 2:1-3, Romans 8:29, 12:1-2, Hebrews 2:11).
                    </collapse>

                </div>
            </div>

        </div>
    </section>

@endsection