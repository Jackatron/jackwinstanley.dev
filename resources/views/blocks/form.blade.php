<section id="contact" class="bg-white site-container py-4 sm:py-8 lg:py-14 flex flex-col lg:flex-row gap-4 lg:gap-14 items-start scroll-mt-8">
    <form data-custom-form id="contact-form" method="POST" action="{{ route('contact.submit') }}" class="-scroll-mt-2 rounded-2xl py-10 px-6 sm:px-10 bg-light-blue">
        @csrf
        <h2 class="text-3xl lg:text-3xl xl:text-4xl font-bold text-white">
            Get in touch
        </h2>

        <p class="text-white mt-2 mb-6">If you've got any questions, or would like to request my services, feel free to get in touch by using the form below.</p>
    
        <div class="space-y-4">
            <div class="field-wrap">
                <label for="name" class="label text-white">Your Name *</label>
                <div class="input-wrap">
                    <input type="text" name="name" id="name" class="input" placeholder="Your Name" required/>
                    <div data-input-error="name" class="text-sm text-white mt-1 font-bold"></div>
                </div>
            </div>

            <div class="field-wrap">
                <label for="email" class="label text-white">Email Address *</label>
                <div class="input-wrap">
                    <input type="text" name="email" id="email" class="input" placeholder="Your Email" required />
                    <div data-input-error="email" class="text-sm text-white mt-1 font-bold"></div>
                </div>
            </div>

            <div class="field-wrap">
                <label for="message" class="label text-white">Message *</label>
                <div class="input-wrap">
                    <textarea name="message" id="message" class="input min-h-[150px]" placeholder="Your Message" required></textarea>
                    <div data-input-error="message" class="text-sm text-white mt-1 font-bold"></div>
                </div>
            </div>

            <div
            class="cf-turnstile max-w-[280px] sm:max-w-none"
            data-sitekey="{{ config('services.cloudflare_turnstile.site_key') }}"
            data-theme="light"
            data-size="normal"
            data-callback="contactFormTurnstileVerified"
            ></div>

            <div data-success class="hidden bg-green-600 text-white px-4 py-4 rounded-lg">
                <p class="font-semibold">Your message has been sent successfully, I'll be in touch as soon as I can.</p>
            </div>

            <div data-validation-error class="hidden bg-orange-600 text-white px-4 py-4 rounded-lg">
                <p class="font-semibold">It looks like you missed something! Please try again.</p>
            </div>

            <div data-error class="hidden bg-red-600 text-white px-4 py-4 rounded-lg">
                <p class="font-semibold">There was an error sending your message, please try again.</p>
            </div>

            <x-button disabled="true" type="submit" class="btn--primary">Send Message</x-button>
        </div>
    </form>

    <div class="relative rounded-2xl py-10 bg-light-blue w-full lg:max-w-md">
        <h3 class="text-white text-xl font-semibold mb-6 mx-10">My Contact Details</h3>

        <div class="flex flex-col gap-2 px-6 sm:px-10 pb-6 border-b border-b-dark-blue/30">
            @include('blocks.partials.contact-icon', [
                'href'      => 'mailto:' . __('common.email'),
                'text'      => __('common.email'),
                'alt'       => 'Email icon',
                'icon'      => Vite::asset('resources/images/icons/email.svg'),
                'bg_colour' => 'bg-primary'
            ])

            @include('blocks.partials.contact-icon', [
                'href'      => 'tel:' . __('common.phone_raw'),
                'text'      => __('common.phone'),
                'alt'       => 'Phone icon',
                'icon'      => Vite::asset('resources/images/icons/phone.svg'),
                'bg_colour' => 'bg-primary'
            ])
        </div>

        <h3 class="text-white text-xl font-semibold mb-6 mx-10 mt-6">My Social Links</h3>

        <div class="flex flex-col gap-2 px-10 pb-6 border-b border-b-dark-blue/30">
            @include('blocks.partials.contact-icon', [
                'href'      => __('common.github'),
                'text'      => 'jackatron',
                'alt'       => 'Github icon',
                'icon'      => Vite::asset('resources/images/icons/github.svg'),
                'bg_colour' => 'bg-github'
            ])

            @include('blocks.partials.contact-icon', [
                'href'      => __('common.linkedin'),
                'text'      => 'jackwinstanley99',
                'alt'       => 'Linkedin icon',
                'icon'      => Vite::asset('resources/images/icons/linkedin.svg'),
                'bg_colour' => 'bg-linkedin'
            ])
        </div>

        <h3 class="text-white text-xl font-semibold mx-10 mt-6">My Resume</h3>
        <x-button target="_blank" href="/documents/jack-winstanley-cv.pdf" class="btn--primary mx-10 mt-4">Download CV</x-button>
    </div>
</section>

@push('footer_scripts')
    <script @cspNonce>
        function contactFormTurnstileVerified() {
            const contactForm = document.getElementById('contact-form');
            const submitBtn = contactForm?.querySelector('button[type="submit"]');
            if(submitBtn) {
                submitBtn.disabled = false;
            }  
        }
    </script>
@endpush