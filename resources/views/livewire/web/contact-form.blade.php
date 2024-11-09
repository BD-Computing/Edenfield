<div>
    <div class="text-green-500">
        @if ($success)
            <p class="" role="alert">
                Your message was sent successfully.
            </p>
        @endif
    </div>
    <form class="ml-auto space-y-4" action="#">
        <input type='text' placeholder='Name' required wire:model="name" name="name"
            class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-[var(--primary)] focus:bg-transparent" />
        <input type='email' placeholder='Email' required wire:model="email" name="email"
            class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-[var(--primary)] focus:bg-transparent" />
        <input type='tel' placeholder='Phone Number' required wire:model='phone' name="phone"
            class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-[var(--primary)] focus:bg-transparent" />
        <input type='text' placeholder='Subject' required wire:model="subject" name="subject"
            class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-[var(--primary)] focus:bg-transparent" />
        <textarea placeholder='Message' rows="6" required wire:model="message" id="message" name="message"
            class="w-full rounded-md px-4 bg-gray-100 text-gray-800 text-sm pt-3 outline-[var(--primary)] focus:bg-transparent"></textarea>
        <button type='submit' wire:click.prevent='submit()'
            class="text-white bg-[var(--primary)] hover:bg-[var(--secondary)] tracking-wide rounded-md text-sm px-4 py-3 w-full !mt-6">Send</button>
    </form>
    @if (false)
        <form method="post" class="contact__form" action="#">
            <!-- form message -->
            <div class="row">
                <div class="col-12">
                    @if ($success)
                        <div class="alert alert-success contact__msg" role="alert"> Your
                            message was sent successfully. </div>
                    @endif
                </div>
            </div>
            <!-- form elements -->
            <div class="row">
                <div class="col-md-6 form-group">
                    <input name="name" type="text" placeholder="Your Name *" required wire:model="name">
                </div>
                <div class="col-md-6 form-group">
                    <input name="email" type="email" placeholder="Your Email *" required wire:model="email">
                </div>
                <div class="col-md-6 form-group">
                    <input name="phone" type="text" placeholder="Your Number *" required wire:model='phone'>
                </div>
                <div class="col-md-6 form-group">
                    <input name="subject" type="text" placeholder="Subject *" required wire:model="subject">
                </div>
                <div class="col-md-12 form-group">
                    <textarea name="message" id="message" cols="30" rows="4" placeholder="Message *" required
                        wire:model="message"></textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="butn-dark2" wire:click.prevent='submit()'><span>Send
                            Message</span></button>
                </div>
            </div>
        </form>
    @endif

</div>
