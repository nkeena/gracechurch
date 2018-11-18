@extends('_layouts.master')

@section('body')

    <section class="bg-black p-10 pb-32">
        <div class="container max-w-md">
            <h1 class="text-white text-5xl mb-2">Give</h1>
        </div>
    </section>

    <section class="flex flex-col justify-center -mt-24 pb-24">
        <div class="container max-w-md p-10 bg-white shadow-md rounded mb-4">
            <h2 class="text-2xl mb-4 text-grey-darker">PayPal</h2>
            <p class="text-grey-darker text-sm mb-8">Give securely online.</p>

            <div class="flex flex-wrap -mx-2">

                <div class="md:w-1/2 w-full px-2 md:mb-0 mb-2">
                    <a href="https://www.paypal.com/donate/?token=iiDd--ZU4WynNF-wIO5jqfSMkBTzkAkVZUjPkZB1pmmTB5bmWNDLSQFKyt8N_re6liOGkW&country.x=US&locale.x=US" class="block w-full btn btn-black px-8 py-4 text-center" target="_blank">General Donation</a>
                </div>
                
                <div class="md:w-1/2 w-full px-2">
                    <a href="https://www.paypal.com/donate/?token=GXwKYHKB4CKa8Xn_IbfkvwhcgelKO4ZM3_zD8MdAOH5XYSsz8jlGIUVJpSfjzQfuQGRvtm&country.x=US&locale.x=US" class="block w-full btn btn-blue px-8 py-4 text-center" target="_blank">Give to Missions</a>
                </div>

            </div>
        </div>
        
        <div class="container max-w-md p-10 bg-white shadow-md rounded">
            
            <h2 class="text-2xl text-grey-darker mb-4">Give by Check</h2>
            <p class="text-grey-darker text-sm mb-8">Please make checks payable to <strong class="font-bold">Grace Church San Antonio.</strong></p>
            <address class="text-grey-dark text-center text-xl">
                Post Office Box 760848<br />
                San Antonio, TX 78245
            </address>
        </div>
    </section>

@endsection