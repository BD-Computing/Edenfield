<div>
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
</div>
