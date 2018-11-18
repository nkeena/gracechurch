@extends('_layouts.master')

@section('body')

    <section class="bg-black p-10 pb-32">
        <div class="container max-w-md">
            <h1 class="text-white text-5xl mb-2">Contact Us</h1>
        </div>
    </section>

    <section class="flex flex-col justify-center -mt-24 pb-24">
        <div class="container max-w-md p-10 bg-white shadow-md rounded mb-4">
            <form name="contact" method="POST" netlify>
                <label class="form-label">Name</label>
                <input class="form-control mb-4" required>

                <label class="form-label">Email Address</label>
                <input class="form-control mb-4" required type="email">

                <label class="form-label">Phone Number</label>
                <input class="form-control">
                <p class="text-grey-dark text-sm mb-4 pt-2">If you'd like someone to give you a call, please included a phone number.</p>

                <label class="form-label">Questions/Comments</label>
                <textarea class="form-control mb-4" rows="10" required></textarea>

                <button type="submit" class="btn btn-black px-8 py-4">Send</button>
            </form>
        </div>

        <div class="container max-w-md p-10 bg-white shadow-md rounded">
            <div class="flex flex-wrap -mx-2">

                <div class="md:w-1/2 w-full px-2 md:mb-0 mb-4">
                    <h2 class="text-2xl text-grey-darker mb-4">Mailing Address</h2>
                    <address class="text-grey-dark text-xl">
                        Post Office Box 760848<br />
                        San Antonio, TX 78245
                    </address>
                </div>

                <div class="md:w-1/2 w-full px-2 md:mb-0 mb-4">
                    <h2 class="text-2xl text-grey-darker mb-4">Phone Number</h2>
                    <p class="text-grey-dark text-xl">(210) 920-5433</p>
                </div>

            </div>
        </div>
    </section>

@endsection